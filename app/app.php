<?php

    require_once(__DIR__."/../vendor/autoload.php");
    require_once(__DIR__."/../src/WordFrequency.php");

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"));

    $app->get("/", function() use($app) {
        return $app["twig"]->render("Word_frequency_form.html.twig");
    });

    $app->get("/count_result", function() use($app) {
        $sentence_count_results = new RepeatCounter($_GET['sentence'], $_GET['word']);
        $count = $sentence_count_results->CountRepeats();
        $word = $sentence_count_results->getWord();
        $sentence = $sentence_count_results->getSentence();

        return $app['twig']->render("count_results.html.twig", array("wordCount" => $count, "wordUsed" => $word, "sentenceUsed" => $sentence));
    });

    return $app;

?>
