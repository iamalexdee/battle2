<html>
    <?php
    session_start();
    ?>
    <h1>It's like it never happened...</h1>
    <?php
    $_SESSION = array();
    session_destroy();
    ?>
    <p>All player data erased.</p>
    <p><a href="index.php">Return to title screen.</a></p>