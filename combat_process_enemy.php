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
<h1>Information (enemy turn)</h1>


<?php
//Can the player take a turn? 
ob_start();
    echo "Wolf attacks!<br><br>";
    $damage = rand(10,100);
    echo $damage . " damage done to " . $_SESSION['playerName'] . "!<br><br>";
    $_SESSION['playerHp'] -= $damage;
    echo $_SESSION['playerName'] . " has " . $_SESSION['playerHp'] .  " HP remaining.<br><br>";
    $combatlog = ob_get_clean();
    if (!isset($_SESSION['combatLog'])) {
        $_SESSION['combatLog'] = [];
        }
$_SESSION['combatLog'][] = "<strong>" . date("h:i:sa") . "</strong><br>" . " "  . $combatlog;
echo $combatlog;
?>



<!-- Capture what we need before leaving -->
    <form method= "post" action="combat.php">
        <input type="submit" value="Continue...">
    </form>
</div>
<textarea class="centered-textarea" cols="70" rows="20"><?= htmlspecialchars(debug()) ?></textarea>
</body>
</html>