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
        print "<div>Please enter a name! <a href='Reviews.php'>Here's</a> the link to get back!</div>";    
        exit();
        }

    $neuereintrag = "<article class='container'>"."<h2 class='name'>"."Name: $name"."</h2>".
    "<div class='nachricht'>".
    "$todayDate : $nachricht".
    "</div> </article>";

    $neuereintrag = $neuereintrag." \n";

    file_put_contents($filename, $neuereintrag, FILE_APPEND);

print"<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<meta name='author' content='Bastian Lux'>
<meta name='keywords' content='Impressum'>
<title>entry</title>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>

</head>
<body>";


print "<div>Take a look at the <a href='Gaestebuch_content_e.php'>Guest Book</a>!</div>";

}

?>