<!DOCTYPE html>

<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Franziska Kaschek">
    <meta name="Rezensionen" content="Kundenrezensionen">
    <title>Rezensionen</title>
    <link rel="stylesheet" type="text/css" href="../Stylesheets/StyleSheet_Kundenrezensionen.css">
    <link rel="stylesheet" type="text/css" href="../Stylesheets/StyleSheet_Header_Footer.css">
	<link rel="stylesheet" type="text/css" href="../Stylesheets/StyleSheet_Gaestebuch.css">
    <script defer src="../javascript/Script_Back2TopBtn.js"></script>
	<script defer src="../javascript/Gaestebuch.js"></script>
</head>

<body id="kundenrezensionen">
    <!--Back to Top Button-->
    <button id="back2top" type="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 24 24"><g fill='#FFFFFF'><path d="M5.5 12.7c.4 0 .7-.1.9-.4l4.3-4.6c.5-.5 1.4-.5 1.9 0l4.3 4.6c.2.3.6.4.9.4 1.1 0 1.7-1.3.9-2.1l-6.2-6.8c-.5-.6-1.4-.6-1.9 0l-6.2 6.8c-.5.8 0 2.1 1.1 2.1zM5.5 20.7c.4 0 .7-.1.9-.4l4.3-4.6c.5-.5 1.4-.5 1.9 0l4.3 4.6c.2.3.6.4.9.4 1.1 0 1.7-1.3.9-2.1l-6.2-6.8c-.5-.6-1.4-.6-1.9 0l-6.2 6.8c-.5.8 0 2.1 1.1 2.1z"></path></g></svg>
    </button>

    <header>
        <a href="reviews.php" tabindex="1">
            <img id="engl" src="../Images/us_uk_flag.svg" width="96" height="46" title="Englisch Button">
        </a>
        <a href="../index.html" tabindex="2">
            <img id="logo" src="../Images/Logo.png" width="160" height="160" title="Logo">
        </a>

        <!--Navigationsleiste-->
        <nav>
            <input type="checkbox" id="check" name="check">
            <label for="check" id="checkbtn">&#9776;</label>
            <ul>
                <li><a id="home" title="Home" href="../index.html">HOME</a></li>
                <li><a id="speisekarte" title="Speisekarte" href="../Speisekarte.html">SPEISEKARTE</a></li>
                <li><a id="service" title="Service" href="../Öffnungszeiten_Serviceoptionen_Zahlungsmethoden.html">SERVICE</a></li>
                <li><a id="kontakt" class="kontaktseite" title=Kontakt href="../Kontakt.html">KONTAKT</a></li>
                <li><a id="galerie" title=Galerie href="../Galerie.html">GALERIE</a></li>
                <li><a id="rezensionen" class="kundenrezensionen" title=Rezensionen href="Kundenrezensionen.php">REZENSIONEN</a></li>
                </nav>
    </header>

    <img id="sushibox4" src="../images/Sushi4.png" title="Sushi-Box" alt="Dieses Foto zeigt eine unserer Sushi-Boxen.">
    <img id="sushibox5" src="../images/Sushi5.png" title="Sushi-Box" alt="Dieses Foto zeigt eine unserer Sushi-Boxen.">

    <div id="container">
        <!--Rezensionen-->
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"><g fill='#FFFFFF'><path d="M12 4C5.37 4 0 7.13 0 11c0 1.77 1.14 3.39 3 4.62V21l5.51-3.3c1.1.19 2.27.3 3.49.3 6.63 0 12-3.13 12-7s-5.37-7-12-7z"></path></g></svg>
        <h1>REZENSIONEN</h1>
        <p id="kundeDE">
            Das sagen unsere Kunden:
        </p>
        <div id="widget">
            <!--Google Reviews widget-->
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-381237d8-3fe8-4cb2-9a41-761eb71e25fc"></div>
            <!--Quellenangabe-->
            <p id="quelle">
                Quelle: <a href="https://www.google.com/search?q=Google-Rezensionen+Sushi+Go+Bitburg&client=firefox-b-d&ei=E32vYeOrKcH87_UPrN2M4AU&ved=0ahUKEwijgZby_9H0AhVB_rsIHawuA1wQ4dUDCA4&oq=Google-Rezensionen+Sushi+Go+Bitburg&gs_lcp=Cgdnd3Mtd2l6EAxKBAhBGABQAFgAYABoAHACeACAAQCIAQCSAQCYAQA&sclient=gws-wiz" tabindex="8" title="Link zu Google-Rezensionen"> Google-Rezensionen</a>
            </p>
        </div>

        <!--Kundenbewertung-Button-->
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><g fill='#FFFFFF'><path d="M2 17l-2 7 7-2zM3 16L16 3l5 5L8 21zM22 7l1-1c2-2-3-7-5-5l-1 1 5 5z"></path></g></svg>
        <h1>IHRE BEWERTUNG</h1>
        <p id="bewertung">
            Lassen auch <b>Sie</b> uns wissen, wie Ihnen unser Sushi geschmeckt hat! So helfen Sie neuen Kunden, von unserem kulinarischen Angebot zu erfahren, und geben uns gleichzeitig die Möglichkeit, die Qualität unserer Produkte zu steigern:
        </p>
        <a id="button1" href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fsearch.google.com%2Flocal%2Fwritereview%3Fplaceid%3DChIJ91UH26_dv0cRoCjZNDff2pU&flowName=GlifWebSignIn&flowEntry=ServiceLogin" tabindex="9" title="Klicken Sie hier, um zu unseren Google-Bewertungen zu gelangen.">Google-Bewertung schreiben</a>
        <a id="button2" href="https://de-de.facebook.com/SushiGoBitburg/reviews/?ref=page_internal" tabindex="10" title="Klicken Sie hier, um zu unseren Facebook-Bewertungen zu gelangen.">Facebook-Bewertung schreiben</a>

        <!--Gästebuch-->
        <div id="gästebuch">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><g fill='#FFFFFF'><path d="M19 4v15.6c0 .8-.6 1.4-1.4 1.4H7l-2-2h11c.6 0 1-.4 1-1V2H5.5C4.7 2 4 2.7 4 3.5V19l3 3h11.4c.9 0 1.6-.7 1.6-1.6V5l-1-1z"></path></g></svg>
			<h1>GÄSTEBUCH</h1>
            <p>
                <b>Sie</b> haben keinen Account bei Facebook oder Google? Kein Problem! Hinterlassen <b>Sie</b> doch einfach eine  kurze Bewertung in unserem Gästebuch.
            </p>
            <?php

            $name = $nachricht = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $nachricht = test_input($_POST["nachricht"]);
            }

            function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;

            }
            ?>

            <div class="box">
                <p>Verewigen Sie sich doch in unserem Gästebuch!</p>
                <form method="post" action="make_gaestebuch.php" id="for_guests">
                    <fieldset>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" value="" maxlength="40">
                        <label for="nachricht">Ein paar nette Worte:</label>
                        <textarea id="nachricht" name="nachricht" rows="5" cols="40"></textarea>
                        <input type="submit" name="submit" value="Absenden">
                    </fieldset>
                </form>
                <h2><a href="Gaestebuch_content.php">Gästebuch Einträge</a></h1>
            </div>

        </div>

    </div>

    <footer>
        <div id="footer1">
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24"><g fill='white'><path d="M15 17c-2 0-8-6-8-8 0-1 2-2 2-3S6 0 5 0 0 3 0 4c0 8 12 20 20 20 1 0 4-4 4-5s-5-4-6-4-2 2-3 2z"></path></g></svg><br>
                <b>Kontakt:</b><br>
                Tel.: 0656 1669 9779
            </p>
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24"><g fill='white'><path d="M12 1C7.6 1 4 4.6 4 9s8 14 8 14 8-9.6 8-14-3.6-8-8-8zm0 12c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"></path></g></svg><br>
                <b>Anschrift:</b><br>
                Sushi Go<br>
                Hauptstraße 31<br>
                5634 Bitburg<br>
            </p>
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24"><g fill='white'><path d="M12 3c-5 0-9 4-9 9s4 9 9 9 9-4 9-9-4-9-9-9zm6 11h-7c-.6 0-1-.4-1-1V8c0-.6.4-1 1-1s1 .4 1 1v4h6c.6 0 1 .4 1 1s-.4 1-1 1z"></path></g></svg><br>
                <b>Öffnungszeiten:</b><br>
                Mo-Do 11:00 - 15:00 / 17:00 - 21:00
            </p>
        </div>
        <div id="footer2">
            <p>
                <a id="datenschutz" href="../Datenschutzerklärung.html" tabindex="9">Datenschutz</a>
            </p>
            <p id="copyright">&#169; Sushi Go 2022</p>
            <p>
                <a id="impressum" href="../Impressum.html" tabindex="10">Impressum</a>
            </p>
        </div>
    </footer>
</body>
</html>