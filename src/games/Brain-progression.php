<?php

namespace Brain\Games\BrainProgression;

use function cli\line;
use function cli\prompt;

function askQuestion(): void
{
    line('What number is missing in the progression?');
}

function gameImplementation(): int
{
    // Угадывание числа из прогрессии
    $first = random_int(1, 50);
    $difference = random_int(1, 6);
    $countProgression = random_int(6, 10);
    $progression = '';
    $correctAnswer = $first  + $difference * random_int(0, $countProgression);
    for ($i = 0; $i <= $countProgression; $i++) {
        $hiddenMemberIndex = $first  + $difference * $i;
        if ($correctAnswer == $hiddenMemberIndex) {
            $progression = $progression . '.. ';
        } else {
            $progression = $progression . ($first + $difference * $i) . ' ';
        }
    }
    line("Question: " . (string)$progression);
    return $correctAnswer;
}
