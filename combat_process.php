<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
session_start();
include "utilities.php";
include "fight_logic.php";

//Page setup
drawElement("topPanel", "");
drawElement("middlePanel", "");?>
<div class="infoPanel">
<h1>Information (player turn)</h1>


<?php
//Can the player take a turn? 
determinePlayeraction($_POST['action']);



?>



<!-- Capture what we need before leaving -->
    <form method= "post" action="combat_process_enemy.php">
        <input type="submit" value="Continue (enemy's turn)...">
    </form>
</div>
<textarea class="centered-textarea" cols="70" rows="20"><?= htmlspecialchars(debug()) ?></textarea>
</body>
</html>