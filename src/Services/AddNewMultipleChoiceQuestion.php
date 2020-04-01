<?php


namespace WabLab\Questions\Services;

use WabLab\Questions\Contracts\Descriptor;
use WabLab\Questions\Contracts\MultipleChoiceQuestion;

class AddNewMultipleChoiceQuestion
{

    public function process(string $body, array $choices, array $correctChoices, float $points, Descriptor $descriptor): MultipleChoiceQuestion
    {
        // TODO: Implement process() method.
    }
}