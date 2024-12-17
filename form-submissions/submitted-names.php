<?php session_start(); ?>
<?php

if (isset($_POST["route"])) {
    $_SESSION["names"] = array_combine(array_keys($_POST), array_values($_POST));
    header("Location: ../forms/bio/bio.php");
}

?>