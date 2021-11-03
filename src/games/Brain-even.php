<?php

namespace Brain\Games\BrainEven;

use function cli\line;
use function cli\prompt;

function askQuestion()
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
}

function gameImplementation()
{
    $number = random_int(1, 100);
    line("Question: $number");
    $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';
    return $correctAnswer;
}
