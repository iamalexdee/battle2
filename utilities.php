<?php
function printStatus($entity){
    echo $_SESSION[$entity . "Hp"] . "/100";
}

function drawHeader($element){
    echo "<div class=\"$element\">";
    echo "<h1>Magic Quest</h1>";
    echo "</div>";
}
function drawElement($element, $utility){
    echo "<div class=\"$element\">";
    switch ($element) {
        case "topPanel":
            echo "<h1>Magic Quest</h1>";
            echo "The Legend of " . $_SESSION['playerName'] . "&#8482;";
            break;
        case "middlePanel";
            echo "<h1>Enemy Info</h1>";
            echo '<pre>' . htmlspecialchars($utility) . '</pre>';
            break;
        case "playerPanel":
            echo "<h1>Status</h1>";
            echo "<div class=\"playerPanelHp\">";
            echo "&#10084;&#65039;";
            echo printStatus($utility);
            echo "</div>";
            break;
        case "infoPanel";
            echo "<h1>Information</h1>";
            echo "<p>";
            battleQuotes(htmlspecialchars($_SESSION[$utility . "Name"], ENT_QUOTES, "UTF-8"));
            echo "</p>";
            break;
        case "errorProgress";
            echo "<h1>System message</h1>";
            echo "<p>";
            echo "<strong>ERROR:</strong> There is a game already in progress!<br>";
            echo "If you really want to start over...\n" . "<a href=reset.php>Click here</a>. This will erase all your progress, and can't be undone.";
            echo "<br><br> Otherwise..." . "<a href=combat.php>Back to the fight!</a>";
            echo "</p>";
            echo "</div>";
            die;
      }
      echo "</div>";
}
function battleQuotes ($entity) {
$x = rand(1,6);
switch ($x) {
    case 1:
        echo "The wolf stares at you menacingly...";
        break;
    case 2:
        echo "The wolf is thinking about what to do next.";
        break;
    case 3:
        echo "The wolf howls loudly.";
        break;
    case 4:
        echo "Both " . htmlspecialchars($entity, ENT_QUOTES, "UTF-8") . " and the Wolf seem ready to go...";
        break;
    case 5:
            echo htmlspecialchars($entity, ENT_QUOTES, "UTF-8") . " picks their nose, waiting to see what the Wolf might do.";
            break;
    case 6:
            echo "The wolf, also known as the gray wolf or grey wolf, is a large canine native to Eurasia and North America";
            break;
}
}
function nameSet() {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['playerName']) && $_SESSION["nameSet"] == false) {
        $_SESSION['playerName'] = $_POST['playerName'];
        $_SESSION["nameSet"] = true;
        echo "Grabbed POST data, name set to " . $_SESSION['playerName'];
    } else {
        echo "No POST data to grab, player name is: " . $_SESSION['playerName'];
    }
}
function initialSetup(){
    $_SESSION['playerHp'] = 100;
    $_SESSION['enemyHp'] = 150;
    $_SESSION["setUp"] = true;
    $_SESSION['playerTurn'] = 1;
    $_SESSION['actionTaken'] = 0;
}
function debug() {
    echo "POST: \n";
    print_r($_POST);
    echo "SESSION: \n";
    print_r($_SESSION);
}
github