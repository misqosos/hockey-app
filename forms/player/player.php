<style>
<?php
    include("player.css");
?>
</style>

<form action="../../form-submissions/submitted-names.php" method="post" name="playerForm" class="player-form-wrapper">
    <h1>Get player a name</h1>
    <div class="fields-wrapper">
        <div class="field">
            <label for="firstName" class="field-label">First name</label>
            <input type="text" name="firstName" class="field-input">
        </div>
        <div class="field">
            <label for="surname" class="field-label">Surname</label>
            <input type="text" name="surname" class="field-input">
        </div>
        <input type="hidden" name="gearId">
        <input type="hidden" name="bioId">
    </div><br>
    <button type="submit" name="route" value="goToBio">Proceed to bio</button>
</form>