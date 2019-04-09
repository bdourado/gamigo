<?php

require_once __DIR__ . '/../vendor/autoload.php';

use \Bdourado\Gamigo\Gamigo;

$gamigo = new Gamigo(100);
$gamigo->startGame();
$gamigo->getResults();
