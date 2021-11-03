<?php

namespace Brain\Games\BrainCalc;

use function cli\line;
use function cli\prompt;

function askQuestion(): void
{
    line('What is the result of the expression?');
}

function gameImplementation(): string
{
    // Простой калькулятор 2 числа 3 действия
    $number1 = random_int(2, 20);
    $number2 = random_int(1, $number1);
    $operations = ["+", "-", "*"];
    $operation = random_int(0, 2);
    $expression = $number1 . ' ' . $operations[$operation] . ' ' . $number2;
    line("Question: " . $expression);
    $correctAnswer = '';
    eval(' $correctAnswer = ' . $expression . ";");
    return $correctAnswer;
}
