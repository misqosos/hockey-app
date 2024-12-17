<?php session_start(); ?>
<style>
<?php
    include("bio.css");
?>
</style>

<form action="../../form-submissions/submitted-bio.php" method="post" name="bioForm" class="bio-form-wrapper">
    <h1>Set up bio 
        <?php
            if(isset($_POST["bioOnly"]) && isset($_SESSION["names"])) {
                unset($_SESSION["names"]);
            }
            if(isset($_SESSION["names"])) {
                echo "for " .  $_SESSION["names"]["firstName"] . " " . $_SESSION["names"]["surname"];
            } 
        ?>
    </h1>
    <div class="fields-wrapper">
        <div class="field">
            <label for="agility" class="field-label">Agility</label>
            <input type="text" name="agility" class="field-input">
        </div>
        <div class="field">
            <label for="speed" class="field-label">Speed</label>
            <input type="text" name="speed" class="field-input">
        </div>
        <div class="field">
            <label for="stamina" class="field-label">Stamina</label>
            <input type="text" name="stamina" class="field-input">
        </div>
        <div class="field">
            <label for="weight" class="field-label">Weight</label>
            <input type="text" name="weight" class="field-input">
        </div>
        <div class="field">
            <label for="height" class="field-label">Height</label>
            <input type="text" name="height" class="field-input">
        </div>
        <div class="field">
            <label for="position" class="field-label">Position</label>
            <div class="field-input" style="text-align: center;">
                <select name="position">
                    <option value=""></option>
                    <option value="G">G</option>
                    <option value="LD">LD</option>
                    <option value="RD">RD</option>
                    <option value="LW">LW</option>
                    <option value="RW">RW</option>
                    <option value="C">C</option>
                </select>
            </div>
        </div>
        <div class="field">
            <label for="side" class="field-label">Side</label>
            <div class="field-input">
                <input type="hidden" name="side" class="field-input" value="" >
                <label><input type="radio" name="side" class="field-input" value="left">Left</label>
                <label><input type="radio" name="side" class="field-input" value="right">Right</label>
            </div>
        </div>
        <div class="field">
            <label for="sponsor" class="field-label">Sponsor</label>
            <input type="text" name="sponsor" class="field-input">
        </div>
        <input type="hidden" name="ownerId">
    </div><br>
    <?php if(isset($_SESSION["names"])) : ?>
        <button type="submit" name="goToGear">Proceed to gear</button> Or
        <button type="submit" name="saveBio">Save only bio</button>
    <?php else : ?>
        <button type="submit" name="saveBio">Save new bioset</button>
    <?php endif; ?>
</form>