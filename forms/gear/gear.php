<?php session_start(); ?>
<style>
<?php
    include("gear.css");
?>
</style>

<form action="../../form-submissions/submitted-gear.php" method="post" name="gearForm" class="gear-form-wrapper">
    <h1>Set up gear 
        <?php
            if(isset($_POST["gearOnly"]) && isset($_SESSION["names"])) {
                unset($_SESSION["names"]);
            }
            if(isset($_SESSION["names"])) {
                echo "for " .  $_SESSION["names"]["firstName"] . " " . $_SESSION["names"]["surname"];
            } 
        ?>
    </h1>
    <div class="fields-wrapper">
        <div class="field">
            <label for="agility" class="field-label">Helmet</label>
            <input type="text" name="helmet" class="field-input" required>
        </div>
        <div class="field">
            <label for="speed" class="field-label">Skates</label>
            <input type="text" name="skates" class="field-input" required>
        </div>
        <div class="field">
            <label for="stamina" class="field-label">Stick</label>
            <input type="text" name="stick" class="field-input" required>
        </div>
        <div class="field">
            <label for="weight" class="field-label">Gloves</label>
            <input type="text" name="gloves" class="field-input" required>
        </div>
        <div class="field">
            <label for="height" class="field-label">Shin Pads</label>
            <input type="text" name="shinPads" class="field-input" required>
        </div>
        <div class="field">
            <label for="height" class="field-label">Elbow Pads</label>
            <input type="text" name="elbowPads" class="field-input" required>
        </div>
        <div class="field">
            <label for="height" class="field-label">Mouthguard</label>
            <input type="text" name="mouthGuard" class="field-input" required>
        </div>
        <div class="field">
            <label for="height" class="field-label">Shoulder Pads</label>
            <input type="text" name="shoulderPads" class="field-input" required>
        </div>
        <div class="field">
            <label for="height" class="field-label">Neckguard</label>
            <input type="text" name="neckGuard" class="field-input" required>
        </div>
        <div class="field">
            <label for="height" class="field-label">Jersey</label>
            <input type="text" name="jersey" class="field-input" required>
        </div>
        <div class="field">
            <label for="height" class="field-label">Pants</label>
            <input type="text" name="pants" class="field-input" required>
        </div>
        <div class="field">
            <label for="height" class="field-label">Jockstrap</label>
            <input type="text" name="jockstrap" class="field-input" required>
        </div>
        <input type="hidden" name="ownerId">

    </div><br>
    <?php if(isset($_SESSION["names"])) : ?>
        <button type="submit" name="savePlayer">Save new player</button> Or 
        <button type="submit" name="saveGear">Save only gearset</button>
    <?php else : ?>
        <button type="submit" name="saveGear">Save new gearset</button>
    <?php endif; ?>
</form>