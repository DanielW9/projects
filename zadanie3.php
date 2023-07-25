<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>*{
    font-family: sans-serif;
    text-align: center;
    }
    </style>
    <h1>Zadanie 3</h1>
    <?php
    
class RankingTable {
    private $players = array(); 
    private $results = array(); 

    public function __construct($playerNames) {
        
        foreach ($playerNames as $name) {
            $this->players[$name] = 0;
            $this->results[$name] = 0;
        }
    }

    public function recordResult($playerName, $score) {
        
        $this->players[$playerName] = $score;
        $this->results[$playerName]++;
    }

    public function playerRank($rank) {
        
        arsort($this->players);
        asort($this->results);

        $rankedPlayers = array_keys($this->players);

        
        return $rankedPlayers[$rank - 1];
    }
}


$table = new RankingTable(array('Jan', 'Maks', 'Monika'));
$table->recordResult('Jan', 2);
$table->recordResult('Maks', 3);
$table->recordResult('Monika', 5);

echo $table->playerRank(1);

    ?>
</body>
</html>