<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Tamagotchis.php";

    session_start();

    if (empty($_SESSION['list_of_tamagotchis'])) {
            $_SESSION['list_of_tamagotchis'] = array();
        }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {

        return $app['twig']->render('tama.html.twig', array('tamas' => Tama::getAll()));

      });

      $app->post("/tama", function() use ($app) {
          $tamagotchi = new Tama($_POST['name']);
          $tamagotchi->save();
          return $app['twig']->render('create_tama.html.twig', array('newtama' => $tamagotchi));
      });

          $app->post("/delete_tama", function() use ($app) {
          Tama::deleteAll();
          return $app['twig']->render('delete_tama.html.twig');
      });

    return $app;
?>
