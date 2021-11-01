<?php

namespace Brain\Games\BrainEven;

use function cli\line;
use function cli\prompt;

    line('Welcome to the Brain Game!');
    $username = prompt('May I have your name?');
    line("Hello, %s!", $username);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $attemped = 1;
    $result = true;

while ($attemped < 4 && $result) {
    $number = random_int(1, 100);
    line("Question: $number");
    $answer = prompt('Your answer: ');
    $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';
    $result = $answer == $correctAnswer;
    if (!$result) {
        line("'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
        line("Let's try again, $username!");
        return;
    }
    $attemped++;
}
    line("Correct!");
    line("Congratulations, $username!");
