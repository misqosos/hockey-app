<h1>Bio Created</h1>
<?php
require_once("../service/BioService.php");

$bioService = new BioService();

$bio = $bioService->getLastRecord();

echo "<h3>Bio</h3>";
foreach ($bio as $key => $value) {
    echo $key . " = " . $value . "<br>"; 
}

if (isset($_SESSION["names"])) {
    unset($_SESSION["names"]);
}
?>
<br>
<a href="/forms/bio/bio.php"><button>Create new bio</button></a><br><br><br><br>
