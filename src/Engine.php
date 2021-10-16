<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

/*
interface iMessenger
{
    function send();
}
class EmailMessenger implements iMessenger 
{
    function send()
    {
        echo "Отправка сообщения на e-mail";
    }
}
$outlook = new EmailMessenger();
$outlook->send();
*/

line('Welcome to the Brain Game!');
$username = prompt('May I have your name?');
line("Hello, %s!", $username);

line('What is the result of the expression?');
$attemped = 1;
$result = true;
$operations = [ "+", "-", "*"];

while ($attemped < 4 && $result) {
    $number1 = random_int(1, 10);
    $number2 = random_int(1, 10);
    $operation = random_int(0, 2);
    $expression = (string)$number1 . $operations[$operation] . $number2;
    line("Question: $expression");
    $answer = prompt('Your answer: ');
    eval('$correctAnswer = ' . $expression . ';');
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
