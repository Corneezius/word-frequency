<?php

    require_once(__DIR__."/../vendor/autoload.php");
    require_once(__DIR__."/../src/WordFrequency.php");

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"));

    $app->get("/", function() use($app) {
        return "Hello";
        //$app["twig"]->render("Word_frequency_form.html.twig");
    });

    return $app;

?>
