<head>
<link rel="stylesheet" href="style.css">
</head>
<html>
    <h1>Combat log</h1>
    <?php
    include "ascii.php";
    session_start();
    include "utilities.php";
        if (isset($_SESSION['combatLog'])) {
            foreach ($_SESSION['combatLog'] as $log) {
                echo "<p>$log</p>";
            }
        } else {
            echo "Cannot find combat log data. Have you performed any actions yet?<br>";
        }
        ?>
        <a href="combat.php">Back to the battle</a>.
<body>
</html>