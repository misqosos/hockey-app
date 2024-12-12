<h1>Player Created</h1>
<?php
require_once("../service/BioService.php");
require_once("../service/PlayerService.php");
require_once("../service/GearService.php");
require_once("../classes/player/Player.php");

$gearService = new GearService();
$playerService = new PlayerService();
$bioService = new BioService();

$gear = $gearService->getLastRecord();
$bio = $bioService->getLastRecord();
$player = $playerService->getLastRecord();

// $savedPlayer = new Player(
//     $player["firstName"],
//     $player["surname"], 
//     $gearService->mapToEntity($gear), 
//     $bioService->mapToEntity($bio)
// );

echo $player["firstName"] . " " . $player["surname"] . "<br>";
echo "<h3>Player</h3>";
foreach ($player as $key => $value) {
    echo $key . " = " . $value . "<br>"; 
}
echo "<h3>Bio</h3>";
foreach ($bio as $key => $value) {
    echo $key . " = " . $value . "<br>"; 
}
echo "<h3>Gear</h3>";
foreach ($gear as $key => $value) {
    echo $key . " = " . $value . "<br>"; 
}

?>
