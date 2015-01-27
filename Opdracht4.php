<?php


// Het bestand class.TemplatePower.inc.php inladen
include_once( "class.TemplatePower.inc.php" );

// aangeven waar de template te vinden is
$template = new TemplatePower( "Opdracht4.html" );

// template voorbereiden
$template->prepare();

//formulier posten

$template->printToScreen();

foreach($_POST as $Formulier => $Gebruiker)
{
    echo "$Formulier = $Gebruiker <br>";
}

echo " <br> <hr>";















?>
