<?php


namespace WabLab\Questions\Services;

use WabLab\Questions\Contracts\MultipleChoiceQuestion;
use \WabLab\Questions\Contracts\Services\AddNewMultipleChoiceQuestion as AddNewMultipleChoiceQuestionInterface;

class AddNewMultipleChoiceQuestion implements AddNewMultipleChoiceQuestionInterface
{

    /**
     * @param string $title
     * @param string $description
     * @param array $choices
     * @param array $correctChoices
     * @param float $points
     * @return MultipleChoiceQuestion
     */
    public function process(string $title, string $description, array $choices, array $correctChoices, float $points): MultipleChoiceQuestion
    {
    }
}