<?php
class RockPaperScissors
{
  function playGame($first_player, $second_player)
  {
    if ($first_player == $second_player)
      return 'Tie';

    if ($first_player == 'rock') {
      if ($second_player == 'scissors')
        return 'Player 1';
      if ($second_player == 'paper')
        return 'Player 2';
    } elseif ($first_player == 'paper') {
      if ($second_player == 'rock')
        return 'Player 1';
      if ($second_player == 'scissors')
        return 'Player 2';
    } elseif ($first_player == 'scissors') {
      if ($second_player == 'rock')
        return 'Player 2';
      if ($second_player == 'paper')
        return 'Player 1';
    }

    return 'Invalid input';
  }
}
?>
