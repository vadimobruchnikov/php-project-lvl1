<?php

namespace Brain\Games\BrainGcd;

use function cli\line;
use function cli\prompt;

function askQuestion(): void
{
    line('Find the greatest common divisor of given numbers.');
}

function gameImplementation(): string
{
    // Нахождение наибольшего общего делителя
    $number1 = random_int(2, 25);
    $number2 = $number1 * random_int(2, 5);
    $expression = $number1 . ' ' . $number2;
    line("Question: " . $expression);
    $correctAnswer = (string)$number1;
    return $correctAnswer;
}
