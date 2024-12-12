<?php session_start(); ?>
<?php

if (isset($_POST["goToBio"])) {
    $_SESSION["overall"] = array_combine(array_keys($_POST), array_values($_POST));
    header("Location: ../forms/bio/bio.php");
}

?>