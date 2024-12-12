<?php session_start(); ?>
<?php

require_once("../service/BioService.php");
require_once("../service/PlayerService.php");
require_once("../service/GearService.php");
require_once("../classes/player/Player.php");

if (isset($_POST["savePlayer"])) {
    $_SESSION["gear"] = array_combine(array_keys($_POST), array_values($_POST));

    $gearService = new GearService();
    $playerService = new PlayerService();
    $bioService = new BioService();

    $playerSaved = false;

    if (isset($_SESSION["overall"]) && isset($_SESSION["bio"]) && isset($_SESSION["gear"])) {
        $bio = $_SESSION["bio"];
        $gear = $_SESSION["gear"];
        $player = $_SESSION["overall"];

        if ($playerService->addPlayer($playerService->mapToEntity($player))) {
            $newPlayerId = $playerService->getLastRecord()["id"];
            $bio["ownerId"] = $newPlayerId;
            $gear["ownerId"] = $newPlayerId;

            if ($gearService->addGear($gearService->mapToEntity($gear)) &&
                $bioService->addBio($bioService->mapToEntity($bio))) {
                if ($playerService->updateRecord($newPlayerId, "gearId", $gearService->getLastRecordId()) &&
                    $playerService->updateRecord($newPlayerId, "bioId", $bioService->getLastRecordId()) ) {
                    $playerSaved = true;
                }
            }
        };
    }

    if ($playerSaved) {
        header("Location: ../pages/player-summary.php");
    }
}

?>