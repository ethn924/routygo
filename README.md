# RoutyGo

Site web de voyage en PHP/MySQL : destinations, recherche de vols, espace utilisateur et formulaire de contact.

![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white) ![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white) ![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white) ![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white) ![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?logo=javascript&logoColor=black)

## Fonctionnalités

- Page d'accueil avec des destinations (Cappadoce, Chiang Mai, Okinawa, Siem Reap, Tozeur, la Calabre)
- Bandeau de recherche de vols : aller-retour, aller simple, multi-destinations, calendrier
- Espace utilisateur (`monespace.php`), accessible une fois connecté
- Formulaire de contact enregistré en base (`contact.php`)

## Lancer le projet

1. Installer un serveur local PHP/MySQL (WAMP, MAMP, XAMPP…).
2. Placer le dossier dans le répertoire web.
3. Créer une base `hotel` ; les identifiants de connexion sont en haut de `contact.php` et `monespace.php` (`root`/`root` en local).
4. Ouvrir `accueil.php` dans le navigateur.

## Structure

```text
accueil.php / accueil.css / accueil.js   page d'accueil
index.html / style.css / script.js       bandeau de recherche de vols
monespace.php / monespace.css            espace utilisateur
contact.php / contact.css                formulaire de contact
*.jpg                                    images des destinations
```
---

Réalisé par **Ethan Lalienne** · [GitHub](https://github.com/ethn924) · [Portfolio](https://ethn924.github.io/Portfolio/)
