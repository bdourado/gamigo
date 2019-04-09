<?php


namespace Bdourado\Gamigo;

class Gamigo
{
    /**
     * @var array
     */
    private $SRP = array(
        0 => 'Scissor',
        1 => 'Rock',
        2 => 'Paper'
    );

    /**
     * @var string
     */
    private $playerA = 'Paper';

    /**
     * @var string
     */
    private $playerB = '';

    /**
     * @var int
     */
    private $playerAVictories = 0;

    /**
     * @var int
     */
    private $playerBVictories = 0;

    /**
     * @var int
     */
    private $tie = 0;

    /**
     * @var int
     */
    private $numberOfGames = 0;


    /**
     * Gamigo constructor.
     * @param int $numberOfGames
     */
    public function __construct($numberOfGames = 100)
    {
        $this->numberOfGames = $numberOfGames;
    }


    /**
     * @return mixed
     */
    public function getPlayerA()
    {
        return $this->playerA;
    }

    /**
     * @return mixed
     */
    public function getPlayerB()
    {
        return $this->playerB;
    }

    /**
     * @return int
     */
    public function getPlayerAVictories()
    {
        return $this->playerAVictories;
    }

    /**
     * @return int
     */
    public function getPlayerBVictories()
    {
        return $this->playerBVictories;
    }

    /**
     * @return int
     */
    public function getTie()
    {
        return $this->tie;
    }

    public function startGame()
    {
        for ($i = 0; $i < $this->numberOfGames; $i++) {
            $rand = rand(0, 2);
            $this->playerB = $this->SRP[$rand];

            if ($this->playerB == 'Scissor') {
                $this->playerBVictories++;
            }

            if ($this->playerB == 'Rock') {
                $this->playerAVictories++;
            }

            if ($this->playerB == 'Paper') {
                $this->tie++;
            }
        }
    }

    public function getResults()
    {
        echo "\r\n";
        echo "Player A wins ".$this->getPlayerAVictories()." of ".$this->numberOfGames." games";
        echo "<br>\r\n";
        echo "Player B wins ".$this->getPlayerBVictories()." of ".$this->numberOfGames." games";
        echo "<br>\r\n";
        echo "Tie: ".$this->getTie()." of ".$this->numberOfGames." games";
        echo "<br>\r\n";
        echo "Winner is: " . $this->getWinner(). " (".$this->getWinnerResult().")";
    }

    public function getWinner()
    {
        if ($this->getPlayerAVictories() > $this->getPlayerBVictories()) {
            return "Player A";
        }

        if ($this->getPlayerAVictories() < $this->getPlayerBVictories()) {
            return "Player B";
        }

        if ($this->getPlayerAVictories() == $this->getPlayerBVictories()) {
            return "Tie";
        }
    }

    public function getWinnerResult()
    {
        if ($this->getPlayerAVictories() > $this->getPlayerBVictories()) {
            return $this->getPlayerAVictories()." to ". $this->getPlayerBVictories();
        }

        if ($this->getPlayerAVictories() < $this->getPlayerBVictories()) {
            return $this->getPlayerBVictories()." to ". $this->getPlayerAVictories();
        }

        if ($this->getPlayerAVictories() == $this->getPlayerBVictories()) {
            return $this->getPlayerBVictories()." to ". $this->getPlayerAVictories();
        }
    }

}