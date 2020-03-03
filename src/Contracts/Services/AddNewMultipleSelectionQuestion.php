<?php


namespace WabLab\Questions\Contracts\Services;

use WabLab\Questions\Contracts\MultipleChoiceQuestion;
use WabLab\Questions\Contracts\MultipleSelectionQuestion;
use WabLab\Questions\Contracts\QuestionChoice;

interface AddNewMultipleSelectionQuestion
{

    /**
     * this service will assemble the question and save it using the question repository
     *
     * @param string $title
     * @param string $description
     * @param array $choices of strings
     * @param array $correctChoices of strings
     * @param float $points
     * @return MultipleSelectionQuestion
     */
    public function process(string $title, string $description, array $choices, array $correctChoices, float $points): MultipleSelectionQuestion;
}