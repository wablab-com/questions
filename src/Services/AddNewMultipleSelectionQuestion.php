<?php


namespace WabLab\Questions\Services;

use WabLab\Questions\Contracts\MultipleSelectionQuestion;
use \WabLab\Questions\Contracts\Services\AddNewMultipleSelectionQuestion as AddNewMultipleSelectionQuestionInterface;
class AddNewMultipleSelectionQuestion implements AddNewMultipleSelectionQuestionInterface
{

    /**
     * @inheritDoc
     */
    public function process(string $title, string $description, array $choices, array $correctChoices, float $points): MultipleSelectionQuestion
    {
        // TODO: Implement process() method.
    }
}