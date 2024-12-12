<?php session_start(); ?>
<head>
    <link rel="stylesheet" type="text/css" href="bio.css">
</head>

<form action="../../form-submissions/submitted-bio.php" method="post" name="bioForm" class="bio-form-wrapper">
    <h1>Set up bio 
        <?php
            if(isset($_SESSION["overall"])) {
                echo "for " .  $_SESSION["overall"]["firstName"] . " " . $_SESSION["overall"]["surname"];
            } 
        ?>
    </h1>
    <div class="fields-wrapper">
        <div class="field">
            <label for="agility" class="field-label">Agility</label>
            <input type="text" name="agility" class="field-input" required>
        </div>
        <div class="field">
            <label for="speed" class="field-label">Speed</label>
            <input type="text" name="speed" class="field-input" required>
        </div>
        <div class="field">
            <label for="stamina" class="field-label">Stamina</label>
            <input type="text" name="stamina" class="field-input" required>
        </div>
        <div class="field">
            <label for="weight" class="field-label">Weight</label>
            <input type="text" name="weight" class="field-input" required>
        </div>
        <div class="field">
            <label for="height" class="field-label">Height</label>
            <input type="text" name="height" class="field-input" required>
        </div>
        <div class="field">
            <label for="position" class="field-label">Position</label>
            <div class="field-input" style="text-align: center;">
                <select name="position" required>
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
                <label><input type="radio" name="side" class="field-input" value="left" required>Left</label>
                <label><input type="radio" name="side" class="field-input" value="right" required>Right</label>
            </div>
        </div>
        <div class="field">
            <label for="sponsor" class="field-label">Sponsor</label>
            <input type="text" name="sponsor" class="field-input" required>
        </div>
        <input type="hidden" name="ownerId">
    </div><br>
    <button type="submit" name="goToGear">Proceed to gear</button>
</form>