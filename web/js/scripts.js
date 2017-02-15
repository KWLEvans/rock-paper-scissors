$(function() {
  var player1Input;
  var player2Input;
  var player1Played = false;
  var player2Played = false;


  $("html").keypress(function(event) {
    $("#result").removeClass("bg-success");
    $("#result").html("");
    $("p.choice").hide();

    if (event.which === 65 || event.which === 97) {
      player1Input = "rock";
      player1Played = true;
      $("#player-1-played .ready-tag").show();
    } else if (event.which === 83 || event.which === 115) {
      player1Input = "paper";
      player1Played = true;
      $("#player-1-played .ready-tag").show();
    } else if (event.which === 68 || event.which === 100) {
      player1Input = "scissors";
      player1Played = true;
      $("#player-1-played .ready-tag").show();
    }
    if (event.which === 74 || event.which === 106) {
      player2Input = "rock";
      player2Played = true;
      $("#player-2-played .ready-tag").show();
    } else if (event.which === 75 || event.which === 107) {
      player2Input = "paper";
      player2Played = true;
      $("#player-2-played .ready-tag").show();
    } else if (event.which === 76 || event.which === 108) {
      player2Input = "scissors";
      player2Played = true;
      $("#player-2-played .ready-tag").show();
    }
    submitGame();
  })

  function submitGame() {
    if (player1Played && player2Played) {
      $.post("/play", {player1Input: player1Input, player2Input: player2Input}, function(response) {
        $("#result").html(response);
        $("#result").addClass("bg-success");
        $(".ready-tag").hide();
        revealChoices();
        player1Played = false;
        player2Played = false;
      });
    }
  }

  function revealChoices() {
    $("#player-1-played p.choice").html(capitalize(player1Input));
    $("#player-2-played p.choice").html(capitalize(player2Input));
    $("p.choice").show();
  }
});

function capitalize(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}
