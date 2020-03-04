<?php


namespace WabLab\Questions\Contracts\Services;

use WabLab\Questions\Contracts\MultipleChoiceQuestion;
use WabLab\Questions\Contracts\QuestionChoice;

interface AddNewMultipleChoiceQuestion
{

    /**
     * this service will assemble the question and save it using the question repository
     *
     * @param string $title
     * @param string $description
     * @param array $choices of strings
     * @param array $correctChoices of strings
     * @param float $points
     * @return MultipleChoiceQuestion
     */
    public function process(string $title, string $description, array $choices, array $correctChoices, float $points): MultipleChoiceQuestion;
}