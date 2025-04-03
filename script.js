let currentMonth = 3;
let currentYear = 2025;

let startDate = null;
let endDate = null;
let selectionCleared = false;
let ignoreClick = false;

document.getElementById("calendar-toggle").addEventListener("click", () => {
  const container = document.getElementById("calendar-container");
  container.style.display = container.style.display === "none" ? "block" : "none";
});

function updateMonthLabel() {
  const monthNames = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin",
    "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
  document.getElementById("monthLabel").textContent = monthNames[currentMonth] + " " + currentYear;
}

function clearSelection() {
  startDate = null;
  endDate = null;
  selectionCleared = true;
}

function isBetween(dateObj, start, end) {
  return dateObj >= start && dateObj <= end;
}

function createCalendar(year, month) {
  const calendar = document.getElementById("calendar");
  calendar.innerHTML = "";

  const daysInMonth = new Date(year, month + 1, 0).getDate();
  const firstDay = new Date(year, month, 1);
  const firstWeekday = (firstDay.getDay() + 6) % 7;

  for (var i = 0; i < firstWeekday; i++) {
    const emptyCell = document.createElement("div");
    emptyCell.className = "day empty";
    calendar.appendChild(emptyCell);
  }

  for (var day = 1; day <= daysInMonth; day++) {
    const dateObj = new Date(year, month, day);
    const cell = document.createElement("div");
    cell.className = "day";
    cell.textContent = day;

    if (startDate && endDate && isBetween(dateObj, startDate, endDate)) {
      cell.classList.add("selected");
    }

    cell.addEventListener("click", (e) => {
      e.stopPropagation();
      if (startDate && endDate && !selectionCleared) {
        clearSelection();
        createCalendar(currentYear, currentMonth);
        return;
      }

      if (!startDate) {
        clearSelection();
        startDate = dateObj;
        selectionCleared = false;
        createCalendar(currentYear, currentMonth);
      } else if (!endDate) {
        endDate = dateObj;

        if (endDate < startDate) {
          const temp = startDate;
          startDate = endDate;
          endDate = temp;
        }

        selectionCleared = false;
        createCalendar(currentYear, currentMonth);
      }
    });

    calendar.appendChild(cell);
  }

  updateMonthLabel();
}

document.addEventListener("click", function (e) {
  const calendarBox = document.querySelector("#calendar-container");
  const toggle = document.getElementById("calendar-toggle");
  if (!calendarBox.contains(e.target) && !toggle.contains(e.target) && !ignoreClick) {
    clearSelection();
    createCalendar(currentYear, currentMonth);
  }
});

document.getElementById("prevMonth").addEventListener("click", function () {
  ignoreClick = true;
  currentMonth--;
  if (currentMonth < 0) {
    currentMonth = 11;
    currentYear--;
  }
  createCalendar(currentYear, currentMonth);
  setTimeout(() => ignoreClick = false, 100);
});

document.getElementById("nextMonth").addEventListener("click", function () {
  ignoreClick = true;
  currentMonth++;
  if (currentMonth > 11) {
    currentMonth = 0;
    currentYear++;
  }
  createCalendar(currentYear, currentMonth);
  setTimeout(() => ignoreClick = false, 100);
});

createCalendar(currentYear, currentMonth);
