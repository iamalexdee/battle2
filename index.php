<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php

    session_start();
    include "utilities.php";
    // Check if we've been here before: Run setup if they haven't
    if (!isset($_SESSION["nameSet"])) {
        $_SESSION["nameSet"] = false;
        $_SESSION["setUp"] = false;
        initialSetup();
        drawHeader("topPanel");
    } else {
    // And offer a reset if they have
        drawElement("errorProgress","");
    }
   
 ?>
<div class="middlePanel">
    <img src="images/mike2.jpg" height="30%">
    <p>A perilous journey awaits you, adventurer...</p>
    <p>YOUR <?=printStatus("player")?></p>
    <p>THE WOLF'S <?=printStatus("enemy")?></p>
    <p>Dare you accept the challenge, and emerge victorious in the realm of Bingus?</p>
    <h2>Hero setup</h2>
    <form method= "post" action="combat.php">
        <label for="playerName">Player name</label><br>
        <input type="text" name="playerName"><br>
        <input type="submit">
    </form>
<p>Oh, and just so you know, I'm validating and sanitising your chosen name (just to be on the safe side, you know?).<p>
</div>
<textarea class="centered-textarea" cols="70" rows="20"><?= htmlspecialchars(debug()) ?></textarea>

<body>
</html>