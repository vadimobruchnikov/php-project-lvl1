<?php

namespace Brain\Games;

use function cli\line;
use function cli\prompt;

class BrainProgression extends Engine
{
    public function __construct()
    {
        parent::__construct();
        $this->maxRounds = 3;
    }

    public function greeting()
    {
        line('Welcome to the Brain Games!');
    }

    public function gameImplementation()
    {
        // Угадывание числа из прогрессии
        $startNumber = random_int(1, 50);
        $stepProgression = random_int(1, 6);
        $countProgression = random_int(6, 10);
        $progression = '';
        $this->correctAnswer = $startNumber + $stepProgression * random_int(1, $countProgression);
        for ($i = 1; $i < $countProgression; $i++) {
            if ($this->correctAnswer == $startNumber + $stepProgression * $i) {
                $progression = $progression . '.. ';
            } else {
                $progression = $progression . ($startNumber + $stepProgression * $i) . ' ';
            }
        }
        $this->expression = (string)$progression;
    }

    public function askQuestion()
    {
        line('What number is missing in the progression?');
        line("Question: " . $this->expression);
    }
}
