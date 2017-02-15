<?php
date_default_timezone_set('America/Los_Angeles');

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/RockPaperScissors.php';

$app = new Silex\Application();
$app->register(new Silex\Provider\TwigServiceProvider(), [
  'twig.path' => __DIR__ . '/../views/'
]);

$app->get('/', function() use ($app) {
  return $app['twig']->render('play.html.twig');
});

$app->post('/play', function() use ($app) {
  $first_input = $_POST['player-1'];
  $second_input = $_POST['player-2'];
  $game = new RockPaperScissors;
  $result = $game->playGame($first_input, $second_input);

  return $app['twig']->render('result.html.twig', [
    'result' => $result
  ]);
});

return $app;
?>
