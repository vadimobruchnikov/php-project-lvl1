<?php

namespace Brain\Games;

use function cli\line;
use function cli\prompt;

class BrainGcd extends Engine
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

    public function gameImplementation()
    {
        // Простой калькулятор 2 числа 3 действия
        $number1 = random_int(2, 25);
        $number2 = $number1 * random_int(1, 5);
        $this->expression = $number1 . ' ' . $number2;
        $this->correctAnswer = $number1;
    }

    public function askQuestion()
    {
        line('Find the greatest common divisor of given numbers.');
        line("Question: " . $this->expression);
    }
}
