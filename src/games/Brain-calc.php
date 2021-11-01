<?php

namespace Brain\Games;

use function cli\line;
use function cli\prompt;

class BrainCalc extends Engine
{
    public function __construct()
    {
        parent::__construct();
        $this->maxRounds = 3;
    }

    public function greeting()
    {
        line('Welcome to the Brain-Calc Game!');
    }

    public function gameImplementation()
    {
        // Простой калькулятор 2 числа 3 действия
        $number1 = random_int(2, 20);
        $number2 = random_int(1, $number1);
        $operations = ["+", "-", "*"];
        $operation = random_int(0, 2);
        $this->expression = $number1 . $operations[$operation] . $number2;
        eval(' $this->correctAnswer = ' . $this->expression . ";");
    }

    public function askQuestion()
    {
        line('What is the result of the expression?');
        line("Question: " . $this->expression);
    }
}
