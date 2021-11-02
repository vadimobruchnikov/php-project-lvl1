<?php

namespace Brain\Games;

use function cli\line;
use function cli\prompt;

class BrainPrime extends Engine
{
    public function __construct()
    {
        parent::__construct();
        $this->maxRounds = 3;
    }

    public function greeting()
    {
        line('Welcome to the Brain Games!');
    }


    public function isPrime($number)
    {
        if ($number <= 1) {
            return false;
        }

        for ($i = 2; $i <= round($number / 2); $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }
        return true;
    }


    public function gameImplementation()
    {
        // Угадывание простое ли число
        $number = random_int(1, 100);
        $this->correctAnswer = $this->isPrime($number) ? 'yes' : 'no';
        $this->expression = (string)$number;
    }

    public function askQuestion()
    {
        line('Answer "yes" if given number is prime. Otherwise answer "no".');
        line("Question: " . $this->expression);
    }
}
