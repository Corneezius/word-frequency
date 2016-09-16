# Word Frequency Finder

#### Web app that allow users to input a sentence and a word, the program will then tell them the amount times that word was repeated on that sentence. It will use php, silex, twig, and tests (phpunit). 09.16.16

#### By _**Nicolas Hurtado**_


## Description

Given a word, Word Frequency Finder will ask the user for a sentence to input and a word to find within that sentence. The program will then tell the user how many times that word appears on the sentence.


## Setup/Installation Requirements

* If you wish to view the source code locally on your machine please follow the following steps:

  +  1). Navigate to the directory in which you want the Word Frequency Funder project to reside.

  +  2). Enter the following command into your terminal:
        git clone https://github.com/KomodoTech/word-frequency.git

  +  3). Navigate to the word-frequency directory, and execute the following command in the terminal:
          composer install

  +  4). Navigate to the web directory and start your local host by executing the following command in your terminal:
          php -S localhost:8000

  +  5). Open up the browser of your choice and go to the following url:
          http://localhost:8000/

  +  6). If you wish to look at the source code, feel free to browse through the files in the word-frequency directory


## Specs

* 1). The program recognizes a single letter word on a single letter sentence
  + IN: sentence: "a" word: "a"
  + OUT: 1

* 2). The program recognizes a single letter word on a sentence one time
  + IN: sentence: "an apple is a fruit" word: "a"
  + OUT: 1

* 3). The program recognizes a single letter word multiple times
  + IN: sentence: "a friend of mine just had a birthday" word: "a"
  + OUT: 2

* 4). The program recognizes an alpha word in a sentence
  + IN: sentence: "a friend of mine just had a birthday" word: "birthday"
  + OUT: 1

* 5). The program recognizes multiple alpha words in a sentence
  + IN:  sentence: "I will have one salad and one soup" word: "one"
  + OUT: 2

* 6). The program will recognize words that are written in different cases;
  + IN: sentence: "I will have One salad and oNe soup" word: "one"
  + OUT: 2

* 7). The program will recognize a string with a mix of numeric and alpha  characters

  + IN: sentence: "Th3r3 is some here and th3r3 are some over there" word: "th3r3"
  + OUT: 2

* 8). The program will recognize a string with a mix of numeric, alpha and non-alphanumeric characters
  + IN: sentence: "C@nad@ oh C@nad@" word:"C@nad@"
  + OUT: 2

## Known Bugs

None yet


## Support and Contact Details

Please feel free to contact us through the github account nickh93 or at the following email:
    nickh93@outlook.com

## Technologies Used

* silex v~2.0
* twig v~1.0
* phpunit v5.5.*
* bootstrap v3.3.7



### License

* GPLV3

Word Frequency Finder Copyright (c) 2016 **Nicolas Hurtado**
