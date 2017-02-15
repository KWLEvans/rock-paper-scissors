$(function() {
  var player1Input;
  var player2Input;
  var player1Played = false;
  var player2Played = false;


  $("#player-1 button").click(function() {
    player1Input = $(this).val();
    player1Played = true;
    $("#player-1 h3").addClass('played');
    submitGame();
  });

  $("#player-2 button").click(function() {
    player2Input = $(this).val();
    player2Played = true;
    $("#player-2 h3").addClass('played');
    submitGame();
  });

  function submitGame() {
    if (player1Played && player2Played) {
      $.post("/play", {player1Input: player1Input, player2Input: player2Input}, function(response) {
        $("#result").html(response);
      });
    }
  }
});
