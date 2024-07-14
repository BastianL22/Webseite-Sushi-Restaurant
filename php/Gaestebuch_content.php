<!DOCTYPE html>

<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Bastian Lux">
    <meta name="keywords" content="Impressum">
    <title>Gaestebuch</title>
    <link rel="stylesheet" type="text/css" href="../Stylesheets/StyleSheet_Header_Footer.css">
    <link rel="stylesheet" media="screen" href="../Stylesheets/Stylesheet_Gaestebuch.css">
    <script defer src="../javascript/Script_Back2TopBtn_Formular.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <!--Back to Top Button-->
    <button id="back2top" type="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 24 24"><g fill='#FFFFFF'><path d="M5.5 12.7c.4 0 .7-.1.9-.4l4.3-4.6c.5-.5 1.4-.5 1.9 0l4.3 4.6c.2.3.6.4.9.4 1.1 0 1.7-1.3.9-2.1l-6.2-6.8c-.5-.6-1.4-.6-1.9 0l-6.2 6.8c-.5.8 0 2.1 1.1 2.1zM5.5 20.7c.4 0 .7-.1.9-.4l4.3-4.6c.5-.5 1.4-.5 1.9 0l4.3 4.6c.2.3.6.4.9.4 1.1 0 1.7-1.3.9-2.1l-6.2-6.8c-.5-.6-1.4-.6-1.9 0l-6.2 6.8c-.5.8 0 2.1 1.1 2.1z"></path></g></svg>
    </button>

    <header>
        <a href="Gaestebuch_content_e.php">
            <img id="engl" src="../Images/us_uk_flag.svg" width="90" height="40" title="Englisch-Button">
        </a>
        <div>
            <a href="../Index.html">
                <img id="logo" src="../Images/Logo.png" width="160" height="160" title="Logo">
            </a>
        </div>
        <nav>
            <input type="checkbox" id="check" name="check">
            <label for="check" id="checkbtn">&#9776;</label>
            <ul>
                <li><a id="home" title="Home" href="../Index.html">HOME</a></li>
                <li><a id="speisekarte" title="Speisekarte" href="../speisekarte.html">SPEISEKARTE</a></li>
                <li><a id="service" title="Service" href="../Öffnungszeiten_Serviceoptionen_Zahlungsmethoden.html">SERVICE</a></li>
                <li><a id="kontakt" class="kontaktseite" title=Kontakt href="../Kontakt.html">KONTAKT</a></li>
                <li><a id="galerie" title=Galerie href="../Galerie.html">GALERIE</a></li>
                <li><a id="rezensionen" title=Rezensionen href="Kundenrezensionen.php">REZENSIONEN</a></li>
            </ul>
        </nav>
    </header>

		<div id="guestbook-entries">
	<h1>Unsere Gästebuch Einträge:</h1>
	<?php
		include ("Gaestebuch_eintraege.html")
	?>
	</div>


<footer>
        <div id="footer1">
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" viewBox="0 0 24 24"><g fill='white'><path d="M15 17c-2 0-8-6-8-8 0-1 2-2 2-3S6 0 5 0 0 3 0 4c0 8 12 20 20 20 1 0 4-4 4-5s-5-4-6-4-2 2-3 2z"></path></g></svg><br>
                <b>Kontakt:</b><br>
                Tel.: 0656 1669 9779
            </p>
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" viewBox="0 0 24 24"><g fill='white'><path d="M12 1C7.6 1 4 4.6 4 9s8 14 8 14 8-9.6 8-14-3.6-8-8-8zm0 12c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"></path></g></svg><br>
                <b>Anschrift:</b><br>
                Sushi Go<br>
                Hauptstraße 31<br>
                5634 Bitburg<br>
            </p>
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" viewBox="0 0 24 24"><g fill='white'><path d="M12 3c-5 0-9 4-9 9s4 9 9 9 9-4 9-9-4-9-9-9zm6 11h-7c-.6 0-1-.4-1-1V8c0-.6.4-1 1-1s1 .4 1 1v4h6c.6 0 1 .4 1 1s-.4 1-1 1z"></path></g></svg><br>
                <b>Öffnungszeiten:</b><br>
                Mo-Do 11:00 - 15:00 / 17:00 - 21:00
            </p>
        </div>
        <div id="footer2">
            <p>
                <a id="datenschutz" href=../Datenschutzerklärung.html>Datenschutz</a>
            </p>
            <p id="copyright">&#169; Sushi Go 2021</p>
            <p>
                <a id="impressum" href=../Impressum.html>Impressum</a>
            </p>
        </div>
    </footer>
        <button id="back2top" type="button" >
            <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 24 24"><g fill='#FFFFFF'><path d="M5.5 12.7c.4 0 .7-.1.9-.4l4.3-4.6c.5-.5 1.4-.5 1.9 0l4.3 4.6c.2.3.6.4.9.4 1.1 0 1.7-1.3.9-2.1l-6.2-6.8c-.5-.6-1.4-.6-1.9 0l-6.2 6.8c-.5.8 0 2.1 1.1 2.1zM5.5 20.7c.4 0 .7-.1.9-.4l4.3-4.6c.5-.5 1.4-.5 1.9 0l4.3 4.6c.2.3.6.4.9.4 1.1 0 1.7-1.3.9-2.1l-6.2-6.8c-.5-.6-1.4-.6-1.9 0l-6.2 6.8c-.5.8 0 2.1 1.1 2.1z"></path></g></svg>
        </button>
</body>
</html>