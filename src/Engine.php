<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function playGame($greetingMessage, $askQuestion, $gameImplementation)
{
    $attemped = 1;
    $gameResult = true;
    $maxRounds = 3;

    line($greetingMessage);

    $userName = prompt('May I have your name?');
    line("Hello, %s!", $userName);

    while ($attemped <= $maxRounds && $gameResult) {
        $askQuestion();
        $correctAnswer = $gameImplementation();
        $answer = prompt('Your answer: ');
        $gameResult = $answer == $correctAnswer;
        if (!$gameResult) {
            line("$answer is wrong answer ;(. Correct answer was $correctAnswer.");
            line("Let's try again, $userName!");
            return;
        }
        $attemped++;
    }
    line("Correct!");
    line("Congratulations, $userName!");
}
