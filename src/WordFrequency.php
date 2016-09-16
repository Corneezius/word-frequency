<?php
    class WordFreqiency
    {
        private $sentence;
        private $word;
        private $result;

        function __construct($sentence_used, $search_word)
        {
            $this->sentence = $sentence_used;
            $this->word = $search_word;
            $this->result = 0;
        }

        function getSentence()
        {
            return $this->sentence;
        }
        function setSentence($sentence_used)
        {
            $this->sentence = (string) $sentence_used;
        }
        function getWord()
        {
            return $this->word;
        }
        function setWord($search_word)
        {
            $this->word = (string) $search_word;
        }
        function getResult()
        {
            return $this->result;
        }
        function setResult($sentence_result)
        {
            $this->result = (int) $sentence_result;
        }

        function checkWords()
        {
            $sentence_to_check = $this->getSentence();
            $word_to_check = $this->getWord();
            $count_of_word = 0;
            $words_in_sentence = explode(" ", $sentence_to_check);

            foreach($words_in_sentence as $word)
            {
                if($word === $word_to_check)
                {
                    $count_of_word++;
                }
            }

            return $count_of_word;
        }
    }

?>
