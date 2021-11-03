<?php

namespace Brain\Games\BrainPrime;

use function cli\line;
use function cli\prompt;

function isPrime(int $number): bool
{
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= round($number / 2); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function askQuestion(): void
{
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
}

function gameImplementation(): string
{
    // Угадывание простое ли число
    $number = random_int(1, 100);
    $correctAnswer = isPrime($number) ? 'yes' : 'no';
    line("Question: " . $number);
    return $correctAnswer;
}
