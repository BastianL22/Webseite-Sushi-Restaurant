
<?php



$name = $_POST['name'];
$nachricht = $_POST['nachricht'];
addToGuestbook ($name, $nachricht);

function addToGuestbook ($name, $nachricht)
{
    
    
    $filename = "Gaestebuch_eintraege.html";

    $file_contents=file_get_contents($filename);

    $timestamp= time();
    $todayDate = date ("j.n.Y", $timestamp);
    $todayTime = date ("G:i:s", $timestamp);

    if (empty($_POST["name"])){
        print "<div> Sie müssen einen Namen eingeben! kehren Sie <a href='Kundenrezensionen.php'>hier</a> zur letzten Seite zurück</div>";    
        exit();
        }

    $neuereintrag = "<article class='container'>"."<h2 class='name'>"."Name: $name"."</h2>".
    "<div class='nachricht'>".
    "$todayDate : $nachricht".
    "</div> </article>";

    $neuereintrag = $neuereintrag." \n";

    file_put_contents($filename, $neuereintrag, FILE_APPEND);

print"<!DOCTYPE html>
<html lang='de'>
<head>
<meta charset='utf-8'>
<meta name='author' content='Bastian Lux'>
<meta name='keywords' content='Impressum'>
<title>entry</title>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>

</head>
<body>";


print "<div>Schauen Sie sich das <a href='Gaestebuch_content.php'>Gästebuch</a> an!</div>";


}


?>

