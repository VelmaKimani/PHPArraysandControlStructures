<?php
$player1 = 0;
$player2 = 0;
$round = 0;

//WIN
//Pleayer must reach a score of 11
//Player must be a min of 2 pts higher than opponent

while(abs($player1 - $player2)<2 || ($player1 < 11 && $player2 < 11)) {
    //NOT WINNER
    //Randomly increment on of player scores each round
    $round++;
    echo "<h2>Round $round</h2>\n";
    if (rand(0,1)){
        $player1++;
    } else {
        $player2++;
    }
    echo "Player1 = $player1<br />\n";
    echo "Player2 = $player2<br />\n";
}
echo "<h1>";
if($player1 > $player2){
    echo "Player 1";
} else{
    echo "Player 2";
}
echo " is the winner of the round after $round rounds!</h1>\n";
?>