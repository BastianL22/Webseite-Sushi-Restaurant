 
 <?php

 $geschlecht = $vorname = $nachname = $email = $nachricht = "";
 $required = array();
 $hints = array();


 if($_SERVER["REQUEST_METHOD"] == "POST") {
 $geschlecht = test_input($_POST['geschlecht']);
 $vorname = test_input($_POST['vorname']);
 $nachname = test_input($_POST['nachname']);
 $email = test_input($_POST['email']);
 $nachricht = test_input($_POST['nachricht']);


 if (empty($vorname)) {
	 $required[] = "Vorname";
	 }

	 if (empty($email)) {
	 $required[] = "E-Mail";
	 }
	 else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	 $hints[] = "Bitte tragen Sie eine gültige E-Mail-Adresse ein.)";
	 }

	 if (empty($nachricht)) {
	 $required[] = "Nachricht";
	 }
	 else if (strlen($nachricht) < 10) {
	 $hints[] = "Ihre Nachricht sollte mindesten 10 Zeichen umfassen. (Sie verwenden aktuell " . strlen($nachricht) . " Zeichen.)";
	 }


	 if ((count($required) == 0) && (count($hints) == 0)) {
	 $filename = "nachrichten.txt";
	 $file = fopen ($filename, 'a');

	 if ($file) {
		 $timestamp = time();
		 $todayDate = date ("j.n.Y", $timestamp);
		 $todayTime = date ("G:i:s", $timestamp);

		 print "Neue Nachricht von ";
	 		 if (!empty($geschlecht)) {
		 print "$geschlecht" . " ";
		 }
		 if (!empty($vorname)) {
 			 print "$vorname" . " ";
		 }
		  if (!empty($nachname)) {
		  print $nachname;
		 }
		 print "<br>Datum: $todayDate";
		 print "<br>Uhrzeit: $todayTime";
		 print "<br>E-Mail: " . $email;
		 print "<p>$nachricht</p>";
	 }
	 fclose ($file);
	 }

 }


 function test_input($data) {
	 $data = trim($data);
	 $data = stripslashes($data);
	 $data = htmlspecialchars($data);
	 return $data;
 }


 function fehlerausgabe($array1, $array2) {
 	 if (count($array1) > 0)
	 {
		 print "❗ Bitte füllen Sie folgende Pflichtfelder(*) aus: ";
		 foreach ($array1 as $required_input)
		 {
	 		 print "➤ $required_input ";
		 }
	 }
	 if (count($array2) > 0)
	 {
		 foreach ($array2 as $hint)
		 {
		 print "$hint <br>";
		 }
	 }
	 print "test test";
 }

 ?>