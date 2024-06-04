<html>
<head>
<link rel="stylesheet" href="style.css">

</head>
<body>
<?php
include "ascii.php";
session_start();
include "utilities.php";
//Debugging
nameSet();
//if ($_SESSION["setUp"] == true) {
//echo "<br>Character setup=yes.";
//}      else {
//  echo "MISSING CHARACTER SETUP.";
//  die;
//}



// Environment setup

drawElement("topPanel", "");
drawElement("middlePanel", "$artWolf");
drawElement("playerPanel", "player");
drawElement("infoPanel", "player");

include "actions.php"

?> 
<textarea class="centered-textarea" cols="70" rows="20"><?= htmlspecialchars(debug()) ?></textarea>
