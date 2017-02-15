<?php
require_once 'src/RockPaperScissors.php';

class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
{
  function test_playGame_tie()
  {
    //Arrange
    $test_RockPaperScissors = new RockPaperScissors;
    $first_input = 'rock';
    $second_input = 'rock';

    //Act
    $result = $test_RockPaperScissors->playGame($first_input, $second_input);

    //Assert
    $this->assertEquals('Tie', $result);
  }

  function test_playGame_rockVScissors()
  {
    //Arrange
    $test_RockPaperScissors = new RockPaperScissors;
    $first_input = 'rock';
    $second_input = 'scissors';

    //Act
    $result = $test_RockPaperScissors->playGame($first_input, $second_input);

    //Assert
    $this->assertEquals('Player 1', $result);
  }

  function test_playGame_scissorsVRock()
  {
    //Arrange
    $test_RockPaperScissors = new RockPaperScissors;
    $first_input = 'scissors';
    $second_input = 'rock';

    //Act
    $result = $test_RockPaperScissors->playGame($first_input, $second_input);

    //Assert
    $this->assertEquals('Player 2', $result);
  }

  function test_playGame_paperVRock()
  {
    //Arrange
    $test_RockPaperScissors = new RockPaperScissors;
    $first_input = 'paper';
    $second_input = 'rock';

    //Act
    $result = $test_RockPaperScissors->playGame($first_input, $second_input);

    //Assert
    $this->assertEquals('Player 1', $result);
  }

  function test_playGame_rockVPaper()
  {
    //Arrange
    $test_RockPaperScissors = new RockPaperScissors;
    $first_input = 'rock';
    $second_input = 'paper';

    //Act
    $result = $test_RockPaperScissors->playGame($first_input, $second_input);

    //Assert
    $this->assertEquals('Player 2', $result);
  }
}
