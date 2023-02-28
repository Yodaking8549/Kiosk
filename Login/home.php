<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!-- Definiert den Typ des Dokuments als HTML -->
<!DOCTYPE html>

<!-- Definiert die Sprache der Webseite als Deutsch -->
<html lang="de">
    
    <head>
        <!-- Definiert das Zeichenkodierungsschema als UTF-8 -->
        <meta charset="UTF-8">

        <!-- Definiert die Anzeigeeinstellungen auf mobilen Geräten -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Definiert den Titel der Webseite -->
        <title>Kiosk</title>

        <!-- Verknüpft das Stylesheet der Webseite -->
        <link rel="stylesheet" href="style1.css">
    </head>

    <body>
        <!-- Definiert ein Div-Element für das Hintergrundbild -->
        <div class="background-image"></div>

        <!-- Definiert ein Div-Element für den Hauptinhalt der Webseite -->
        <div class="container">
            <!-- Definiert den Header-Bereich der Webseite -->
            <header>
                <!-- Definiert die Navigation als Top-Navigation -->
                <nav class="topnav">
                    <!-- Definiert einen ausgewählten Link für die Über-Uns-Seite -->
                    <a class="active" href="#über-uns">Über uns</a>

                    <!-- Definiert einen Link für die Angebot-Seite -->
                    <a href="#angebot">Angebot</a>

                    <!-- Definiert einen Link für die Öffnungszeiten-Seite -->
                    <a href="#Öffnungszeiten">Öffnungszeiten</a>
                </nav>
            </header>

            <main>
                <h1>Willkommen beim Kiosk</h1>
                <section id="über-uns">
                    <h2>Über uns</h2>
                    <div class="text">
                        <p>Willkommen beim Kiosk des Aloisiuskollegs! Wir sind stolz darauf, den Schülern 
                        unserer Schule eine breite Auswahl an gesunden und leckeren Snacks, Getränken 
                        und anderen Produkten anbieten zu können. Unser Kiosk steht auf dem oberen 
                        Schulhof und ist in beiden großen Pausen geöffnet.</p>
                        <div class="img"><img src="./images/Kiosk2.jpeg" alt="Bild des Kiosks"></div>
                        <p>Unsere Produkte sind sorgfältig ausgewählt und bieten eine gesunde Alternative zu 
                        traditionellen Snacks und Fast Food. Wir bieten eine Vielzahl von Snacks an, die 
                        ideal für den schnellen Hunger zwischen den Schulstunden oder während einer
                        Pause sind. Von Müsliriegeln über Nüsse und Trockenfrüchte bis hin zu Joghurts 
                        und frischen Obst- und Gemüsebechern haben wir für jeden Geschmack etwas 
                        dabei.</p>
                    <p>Unsere Getränkeauswahl umfasst eine Vielzahl von Optionen, einschließlich Wasser, 
                        Säfte, Smoothies, Milchprodukte und Erfrischungsgetränke. Wir bieten auch 
                        verschiedene Arten von Kaffee und Tee an, um die Schüler zu unterstützen, die 
                        eine Tasse Koffein benötigen, um durch den Schultag zu kommen.</p>
                    <p>Unser Kiosk basiert auf einem Kartensystem, das heißt, dass unsere Schüler 
                        ihre Ako-Karte verwenden können, um Produkte zu kaufen. Die Ako-Karte kann 
                        (per Überweisung) mit Geld aufgeladen werden und das Guthaben kann ausschließlich 
                        in der Mensa oder am Kiosk ausgegeben werden. Wir akzeptieren kein Bargeld, 
                        um unseren Schülern mehr Sicherheit und Komfort zu bieten.</p>
                        <div class="img"><img src="./images/Akokarte4.jpeg" alt="Bild der Ako-Karte"></div>
                        <p>Wir sind stolz darauf, eine positive Umgebung für unsere Schüler zu schaffen, 
                        indem wir ihnen gesunde und nahrhafte Lebensmittel anbieten. Besuchen Sie uns 
                        und erleben Sie den Geschmack und die Qualität unserer Produkte!</p>
                    </div>
                </section>

                <!-- Definiert eine Sektion für das Angebot -->
<section id="angebot">
  <!-- Fügt eine Zeilenumbruch ein -->
  <br><br><br>

  <!-- Definiert eine Überschrift für das Angebot -->
  <h2>Unser Angebot</h2>

  <!-- Definiert einen Absatz zur Beschreibung des Angebots -->
  <p>Unser Schulkiosk bietet eine große Auswahl an leckeren Snacks und Getränken für die Pause 
  oder den Hunger zwischendurch. Hier sind unsere Produkte:</p>

  <!-- Definiert eine Liste von Produkten innerhalb einer Tabelle -->
  <div class="listing">    
      <table>
          <!-- Definiert die Tabellenüberschrift -->
          <thead>
              <tr>
                  <th>Produkt</th>
                  <th>Preis</th>
              </tr>
          </thead>
          <!-- Definiert den Tabellenkörper -->
          <tbody>
              <!-- Definiert eine Zeile für die Getränkeauswahl -->
              <tr>
                  <td>
                      <!-- Definiert eine Überschrift für die Getränkeauswahl -->
                      <h3>Getränkeauswahl</h3>
                  </td>
                  <td></td>
              </tr>
              <!-- Definiert eine Zeile für Coca Cola -->
              <tr>
                  <td>Coca cola (light, zero, classic)</td>
                  <td>2,50 €</td>
              </tr>
              <!-- Dies Gilt auch für den Rest der Tabelle -->
                      <tr>
                        <td>Fanta</td>
                        <td>2,50 €</td>
                      </tr>
                      <tr>
                        <td>Sprite</td>
                        <td>2,50 €</td>
                      </tr>
                      <tr>
                        <td>Eistee Pfirsich</td>
                        <td>1,85 €</td>
                      </tr>
                      <tr>
                        <td>Apfelschorle</td>
                        <td>1,60 €</td>
                      </tr>
                      <tr>
                        <td>Wasser</td>
                        <td>1,10 €</td>
                      </tr>
                      <tr>
                        <td>Kakao H</td>
                        <td>1,50 €</td>
                      </tr>
                      <tr>
                        <td>
                          <h3>Snacks</h3>
                        </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Haribo Roulette</td>
                        <td>0,50 €</td>
                      </tr>
                      <tr>
                        <td>Nic Nacs</td>
                        <td>1,60 €</td>
                      </tr>
                      <tr>
                        <td>Milky Way</td>
                        <td>1,30 €</td>
                      </tr>
                      <tr>
                        <td>Pick Up</td>
                        <td>1,00 €</td>
                      </tr>
                      <tr>
                        <td>Kinder Country</td>
                        <td>0,80 €</td>
                      </tr>
                      <tr>
                        <td>Smartys</td>
                        <td>1,30 €</td>
                      </tr>
                      <tr>
                        <td>Fritt Kaustreifen</td>
                        <td>1,30 €</td>
                      </tr>
                      <tr>
                        <td>Snickers</td>
                        <td>1,60 €</td>
                      </tr>
                      <tr>
                        <td>Twix</td>
                        <td>1,30 €</td>
                      </tr>
                      <tr>
                        <td>Kitkat</td>
                        <td>1,20 €</td>
                      </tr>
                      <tr>
                        <td>Corny Big Schoko</td>
                        <td>1,20 €</td>
                      </tr>
                      <tr>
                        <td>Mentos Mini</td>
                        <td>0,35 €</td>
                      </tr>
                      <tr>
                        <td>Mentos Rolle</td>
                        <td>1,20 €</td>
                      </tr>
                      <tr>
                        <td>M&Ms</td>
                        <td>1,60 €</td>
                      </tr>
                      <tr>
                        <td>Kinderriegel</td>
                        <td>0,60 €</td>
                      </tr>
                      <tr>
                        <td>Skittles</td>
                        <td>1,35 €</td>
                      </tr>
                      <tr>
                        <td>Mr. Tom</td>
                        <td>1,00 €</td>
                      </tr>
                      <tr>
                        <td>Riesenkaramell</td>
                        <td>0,35 €</td>
                      </tr>
                      <tr>
                        <td>Donut</td>
                        <td>1,50 €</td>
                      </tr>
                      <tr>
                        <td>Muffin</td>
                        <td>2,35 €</td>
                      </tr>
                      <tr>
                        <td>Cookie</td>
                        <td>2,10 €</td>
                      </tr>
                      <tr>
                        <td>
                          <h3>Schnellimbis</h3>
                        </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Schinkenbrötchen</td>
                        <td>1,75 €</td>
                      </tr>
                      <tr>
                        <td>Salamibrötchen</td>
                        <td>1,75 €</td>
                      </tr>
                      <tr>
                        <td>Käsebrötchen</td>
                        <td>1,75 €</td>
                      </tr>
                      <tr>
                        <td>Schnitzelbrötchen</td>
                        <td>2,70 €</td>
                      </tr>
                      <tr>
                        <td>Bockwurstbrötchen</td>
                        <td>3,00 €</td>
                      </tr>
                      <tr>
                        <td>Chicken Nuggets 6er</td>
                        <td>2,80 €</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                </section>
<!-- Definiert eine Sektion für die Öffnungszeiten -->
<section id="Öffnungszeiten">
  <!-- Definiert einen Container für die Öffnungszeiten -->
  <div class="Öffnungszeiten">
      <!-- Fügt einige Zeilenumbrüche hinzu -->
      <br><br><br>

      <!-- Definiert eine Überschrift für die Öffnungszeiten -->
      <h2>Öffnungszeiten</h2>

      <!-- Definiert eine ungeordnete Liste von Öffnungszeiten -->
      <ul>
          <li>Montag - Freitag</li>
          <li>1. Pause: 09:35 - 09:50 Uhr</li>
          <li>2. Pause: 11:30 - 11:45 Uhr</li>
      </ul>

      <!-- Definiert eine Box mit einem Klickereignis -->
      <div class="box" onclick="revealAnswer()">Hat der Kiosk heute offen? Klick hier, 
      um es herauszufinden!</div>

      <!-- Definiert eine Antwort-Box, die standardmäßig ausgeblendet ist -->
      <div class="answer" id="answer">Nein, der Kiosk ist heute geschlossen!</div>
  </div>
  <a href="logout.php">Abmelden</a>
  <a href="profile.php">Profil</a>
</section>

<!-- Definiert den Abschluss des Hauptbereichs -->
</main>

<!-- Definiert einen Fußbereich für die Website -->
<footer>
  <p>&copy; 2023 Schulkiosk</p>

  <!-- Fügt einige Zeilenumbrüche hinzu -->
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</footer>
<!-- Definiert das Ende des HTML-Dokuments -->
</div>
</body>


  <script>
// Wähle das Element mit der Klasse "topnav" aus und speichere es in der Variablen "navbar"
var navbar = document.querySelector(".topnav");

// Wähle alle Anchor-Tags innerhalb der "navbar" aus und speichere sie in der Variablen "links"
var links = navbar.getElementsByTagName("a");

// Schleife durch jedes Anchor-Tag in der "links"-Variable und füge einen Event-Listener hinzu
for (var i = 0; i < links.length; i++) {
  links[i].addEventListener("click", function() {

    // Entferne die Klasse "active" von allen Elementen mit dieser Klasse
    var current = document.getElementsByClassName("active");
    current[0].classList.remove("active");

    // Füge die Klasse "active" zum geklickten Element hinzu
    this.classList.add("active");
  });
}

// Füge einen Event-Listener hinzu, um auf das Scroll-Event der Seite zu reagieren
window.onscroll = function() {myFunction()};

// Speichere die vertikale Position der "navbar" in der Variablen "sticky"
var navbar = document.querySelector(".topnav");
var sticky = navbar.offsetTop;

// Definiere die "myFunction", die ausgeführt wird, wenn die Seite gescrollt wird
function myFunction() {
  if (window.pageYOffset >= sticky) {

    // Füge die Klasse "sticky" zur "navbar" hinzu, wenn sie die vertikale Position "sticky" erreicht hat
    navbar.classList.add("sticky")
  } else {

    // Entferne die Klasse "sticky" von der "navbar", wenn sie unterhalb der vertikalen Position "sticky" liegt
    navbar.classList.remove("sticky");
  }
}

    // Erhalten aller Links in der Top-Navigationsleiste
var navLinks = document.querySelectorAll(".topnav a");

// Erstellen eines Arrays mit den Abschnitts-IDs, zu denen jeder Link gehört
var sectionIds = [];
navLinks.forEach(function(link) {
  var sectionId = link.getAttribute("href").slice(1);
  sectionIds.push(sectionId);
});

// Event-Handler für das Scroll-Ereignis des Fensters
window.addEventListener("scroll", function() {
  // Aktuelle Position des Benutzers auf der Seite
  var currentPosition = window.pageYOffset;

  // Für jeden Abschnitt auf der Seite
  sectionIds.forEach(function(sectionId, index) {
    // Element des aktuellen Abschnitts abrufen
    var section = document.getElementById(sectionId);

    // Überprüfen, ob das Element auf dem Bildschirm sichtbar ist
    if (
      section.offsetTop <= currentPosition + 50 &&
      section.offsetTop + section.offsetHeight > currentPosition + 50
    ) {
      // Wenn das Element sichtbar ist, das entsprechende Element in der Top-Navigationsleiste auswählen
      navLinks.forEach(function(link) {
        link.classList.remove("active");
      });
      navLinks[index].classList.add("active");
    }
  });
});
// Erstellen eines Arrays mit allen Abschnitts-Elementen auf der Seite
var sections = document.querySelectorAll("section");

// Iteriere durch jedes Element im "navLinks"-Array und füge einen Klick-Event-Listener hinzu
navLinks.forEach(function(link) {
  link.addEventListener("click", function(event) {
    event.preventDefault(); // Verhindern der Standard-Scroll-Funktionalität
    var targetId = this.getAttribute("href"); // Abrufen der Ziel-ID aus dem Link-Attribut
    var targetSection = document.querySelector(targetId); // Abrufen des Abschnitts-Elements mit der Ziel-ID
    var targetOffset = targetSection.offsetTop; // Abrufen der vertikalen Position des Ziel-Elements auf der Seite

    // Animiere das Scrollen zur Zielposition über 500ms
    window.scrollTo({
      top: targetOffset,
      behavior: "smooth"
    });
  });
});
// Diese Funktion zeigt eine Antwort an, indem sie die Anzeigeeigenschaft eines Elements mit der ID "answer" auf "block" ändert.
// Sie löst auch eine Animation aus, die die Anzeigeeigenschaft eines Elements mit der Klasse "box" auf "none" ändert.
function revealAnswer() {
document.getElementById("answer").style.display = "block"; // Antwort-Element anzeigen
document.querySelector(".box").style.animationName = "disappear"; // Verschwinden-Animation für Box-Element auslösen
document.querySelector(".box").style.animationDuration = "1s"; // Dauer der Animation auf 1 Sekunde setzen
document.querySelector(".box").style.animationFillMode = "forwards"; // Fill-Modus der Animation auf "forwards" setzen
}

// Dieser Event-Listener hört auf das Ende der "disappear" Animation und setzt die Anzeigeeigenschaft des "box" Elements auf "none".
document.addEventListener("animationend", function(event) {
if (event.animationName === "disappear") {
document.querySelector(".box").style.display = "none"; // Anzeigeeigenschaft des Box-Elements auf "none" setzen
}
});
  </script>
</body>
</html>