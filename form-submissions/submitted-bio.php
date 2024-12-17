<?php session_start(); ?>
<?php

require_once("../service/BioService.php");

if (isset($_POST["goToGear"])) {
    $_SESSION["bio"] = array_combine(array_keys($_POST), array_values($_POST));
    header("Location: ../forms/gear/gear.php");
}

if (isset($_POST["saveBio"])) {
    if (isset($_SESSION["names"])) { unset($_SESSION["names"]); }
    $bioService = new BioService();

    $bio = $_POST;
    $bioSaved = false;

    if ($bioService->addBio($bioService->mapToEntity($bio))) {
        $bioSaved = true;
    } else { echo "Bio not saved"; }

    if ($bioSaved) {
        header("Location: ../pages/bio-summary.php");
    }
}

?>