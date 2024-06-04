<div class="lowerPanel">
    <h1>Combat options</h1>
    <p><?=htmlspecialchars($_SESSION["playerName"], ENT_QUOTES, "UTF-8")?>, what will you do?<p>
    <form method= "post" action="combat_process.php">
        <button type = "submit" id="attack" name="action" value="1">Attack &#128481;</button>
        <button type = "submit" id="heal" name="action" value="2">Heal (5MP) &#129497;</button>
        <input type="hidden" name="turn" value="1">
    </form>
        <form action="reset.php">
        <button type = "submit" id="attack"  value="1">RESET GAME</button>
        <p><a href="combatlog.php">View combat log</a></p>
    </form>

</div>
