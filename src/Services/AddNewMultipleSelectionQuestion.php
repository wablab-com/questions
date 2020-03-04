<?php


namespace WabLab\Questions\Services;

use WabLab\Questions\Contracts\MultipleSelectionQuestion;
use \WabLab\Questions\Contracts\Services\AddNewMultipleSelectionQuestion as AddNewMultipleSelectionQuestionInterface;
class AddNewMultipleSelectionQuestion implements AddNewMultipleSelectionQuestionInterface
{

    /**
     * @param string $title
     * @param string $description
     * @param array $choices
     * @param array $correctChoices
     * @param float $points
     * @return MultipleSelectionQuestion
     */
    public function process(string $title, string $description, array $choices, array $correctChoices, float $points): MultipleSelectionQuestion
    {
    }
}