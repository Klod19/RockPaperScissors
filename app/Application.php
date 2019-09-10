<?php 
require __DIR__ . "/../vendor/autoload.php";

$choice = $_GET["choice"];

$gameSession = new GameSession;
$gameSession->startGame($choice);
$result = $gameSession->getGameResults();

echo json_encode($result);
?>