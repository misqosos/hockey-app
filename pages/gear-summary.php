<h1>Gear Created</h1>
<?php
require_once("../service/GearService.php");

$gearService = new GearService();

$gear = $gearService->getLastRecord();

echo "<h3>Gear</h3>";
foreach ($gear as $key => $value) {
    echo $key . " = " . $value . "<br>"; 
}
?>
<br>
<a href="/forms/gear/gear.php"><button>Create new gear</button></a><br><br><br><br>
