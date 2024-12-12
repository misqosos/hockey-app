<?php session_start(); ?>
<?php

if (isset($_POST["goToGear"])) {
    $_SESSION["bio"] = array_combine(array_keys($_POST), array_values($_POST));
    header("Location: ../forms/gear/gear.php");
}

?>