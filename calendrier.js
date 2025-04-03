// JavaScript pour la gestion des dates
let currentMonth = 3;
let currentYear = 2025;
let startDate = null;
let endDate = null;

document.getElementById("dates").addEventListener("click", () => {
  const container = document.getElementById("calendar-container");
  container.style.display = container.style.display === "none" ? "block" : "none";
  createCalendar(currentYear, currentMonth);
});

function updateMonthLabel() {
  const monthNames = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
  document.getElementById("monthLabel").textContent = monthNames[currentMonth] + " " + currentYear;
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

    if (startDate && endDate && dateObj >= startDate && dateObj <= endDate) {
      cell.classList.add("selected");
    }

    cell.addEventListener("click", (e) => {
      if (!startDate) {
        startDate = dateObj;
      } else if (!endDate) {
        endDate = dateObj;
        if (endDate < startDate) {
          [startDate, endDate] = [endDate, startDate];
        }
      }

      document.getElementById("dates").value = `${startDate.toLocaleDateString()} → ${endDate.toLocaleDateString()}`;
      createCalendar(currentYear, currentMonth);
    });

    calendar.appendChild(cell);
  }

  updateMonthLabel();
}

document.getElementById("prevMonth").addEventListener("click", function () {
  currentMonth--;
  if (currentMonth < 0) {
    currentMonth = 11;
    currentYear--;
  }
  createCalendar(currentYear, currentMonth);
});

document.getElementById("nextMonth").addEventListener("click", function () {
  currentMonth++;
  if (currentMonth > 11) {
    currentMonth = 0;
    currentYear++;
  }
  createCalendar(currentYear, currentMonth);
});

// Gestion des invités
let adultsCount = 1;
let kidsCount = 0;

document.getElementById("increase-adults").addEventListener("click", () => {
  adultsCount++;
  document.getElementById("adults").value = adultsCount;
});

document.getElementById("decrease-adults").addEventListener("click", () => {
  if (adultsCount > 1) {
    adultsCount--;
    document.getElementById("adults").value = adultsCount;
  }
});

document.getElementById("increase-kids").addEventListener("click", () => {
  kidsCount++;
  document.getElementById("kids").value = kidsCount;
});

document.getElementById("decrease-kids").addEventListener("click", () => {
  if (kidsCount > 0) {
    kidsCount--;
    document.getElementById("kids").value = kidsCount;
  }
});
