<?php

    require_once(__DIR__."/../src/WordFrequency.php");

    class WordFrequencyTest extends PHPUnit_Framework_TestCase
    {
        function test_1leLetterWord1leLetterSentence()
        {
            //Arrange
            $sentence = "a";
            $word = "a";
            $expected_outcome = 1;
            $word_frequency_instance = new WordFreqiency($sentence, $word);

            //ACT
            $test_result = $word_frequency_instance->checkWords($sentence, $word);

            //ASSERT
            $this->assertEquals($expected_outcome, $test_result);
        }

        function test_1leLetterWordOnceMultipleleWordSentence()
        {
            //Arrange
            $sentence = "an apple is a fruit";
            $word = "a";
            $expected_outcome = 1;
            $word_frequency_instance = new WordFreqiency($sentence, $word);

            //ACT
            $test_result = $word_frequency_instance->checkWords($sentence, $word);

            //ASSERT
            $this->assertEquals($expected_outcome, $test_result);
        }

        function test_1leLetterWordMultipleTimesWInMultipleleWordSentence()
        {
            //Arrange
            $sentence = "a friend of mine just had a birthday";
            $word = "a";
            $expected_outcome = 2;
            $word_frequency_instance = new WordFreqiency($sentence, $word);

            //ACT
            $test_result = $word_frequency_instance->checkWords($sentence, $word);

            //ASSERT
            $this->assertEquals($expected_outcome, $test_result);
        }
    }

?>
