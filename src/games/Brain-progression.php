<?php

namespace Brain\Games\BrainProgression;

use function cli\line;
use function cli\prompt;

function askQuestion()
{
    line('What number is missing in the progression?');
}

function gameImplementation()
{
    // Угадывание числа из прогрессии
    $startNumber = random_int(1, 50);
    $stepProgression = random_int(1, 6);
    $countProgression = random_int(6, 10);
    $progression = '';
    $correctAnswer = $startNumber + $stepProgression * random_int(1, $countProgression);
    for ($i = 1; $i < $countProgression; $i++) {
        if ($correctAnswer == $startNumber + $stepProgression * $i) {
            $progression = $progression . '.. ';
        } else {
            $progression = $progression . ($startNumber + $stepProgression * $i) . ' ';
        }
    }
    line("Question: " . (string)$progression);
    return $correctAnswer;
}
