<?php

function determinePlayerAction ($actioncount) {
if  ($_SESSION['actionTaken'] < 1) { 
    switch ($actioncount) {
        case 1:
            echo "Attack debug";
            break;
        case 2:
            echo "Heal debug <br>";
            healSelf($_SESSION['playerHp']);
            //$_SESSION['actionTaken'] += 1;
            break;
        case 3:
            echo "3rd action debug";
            break;
        case 4:
            echo "4 action debug";
            break;
        default:
        echo "There is no turn to take.";
    }
} else {
    echo "Error: It's not your turn.";
}
}
function canTakeTurn ($turn) {
    if ($turn == 0) {
        return false;
    } else {
        return true;
    }
}
//Physical attack and defence mechanics
function attackTarget ($attacker, $defender) {

}

function defendFrom ($attacker, $defender) {
    
}

//Spells
function healSelf (&$caster) {
    ob_start();
    $caster+=100;
    if ($caster > 200){
        echo "Overhealed! You're currently at " . $caster . "HP. <br> Let's fix that...";
        $caster = 200;
    }
    echo "Your HP is now " . $caster . ".";
    $combatlog = ob_get_clean();
    if (!isset($_SESSION['combatLog'])) {
        $_SESSION['combatLog'] = [];
    }
    $_SESSION['combatLog'][] = "<strong>" . date("h:i:sa") . "</strong><br>" . " "  . $combatlog;
    echo $combatlog;
}