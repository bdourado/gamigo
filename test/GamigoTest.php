<?php
require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Bdourado\Gamigo\Gamigo;

class GamigoTest extends TestCase
{
    public function testCanBeAValidGame()
    {
        $gamigo = new Gamigo(100);
        $gamigo->startGame();
        $gamigo->getResults();
        $this->assertTrue(true);
    }
}