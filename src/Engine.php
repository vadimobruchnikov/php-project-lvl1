<?php

namespace Brain\Games;

use function cli\line;
use function cli\prompt;

abstract class Engine
{
    public $userName;
    public $answer;
    public $correctAnswer;
    public $expression;
    public $gameResult;
    public $maxRounds;

    abstract public function askQuestion();
    abstract public function gameImplementation();

    public function __construct()
    {
        $this->attemped = -1;
        $this->gameResult = true;
        $this->maxRounds = 3;
    }

    public function greeting()
    {
        line('Welcome to the Brain Games!');
    }

    public function getAnswer()
    {
        $this->answer = prompt('Your answer: ');
    }

    public function getUserName()
    {
        $this->userName = prompt('May I have your name?');
        line("Hello, %s!", $this->userName);
    }

    public function wrongAnswer()
    {
        line("'$this->answer' is wrong answer ;(. Correct answer was '$this->correctAnswer'.");
        line("Let's try again, $this->userName!");
    }

    public function congratulations()
    {
        line("Correct!");
        line("Congratulations, $this->userName!");
    }

    public function setResult()
    {
        $this->gameResult = $this->answer == $this->correctAnswer;
    }

    public function isRightAnswer()
    {
        return $this->gameResult;
    }

    public function nextStep()
    {
        $this->attemped++;
        return $this->attemped < $this->maxRounds && $this->gameResult;
    }

    public function playGame()
    {
        $this->greeting();
        $this->getUserName();
        while ($this->nextStep()) {
            $this->gameImplementation();
            $this->askQuestion();
            $this->getAnswer();
            $this->setResult();
            if (!$this->isRightAnswer()) {
                $this->wrongAnswer();
                return;
            }
        }
        $this->congratulations();
    }
}
