<?php


namespace WabLab\Questions\Services;

use WabLab\Questions\Contracts\Descriptor;
use WabLab\Questions\Contracts\MultipleSelectionQuestion;
use \WabLab\Questions\Contracts\Services\AddNewMultipleSelectionQuestion as AddNewMultipleSelectionQuestionInterface;
class AddNewMultipleSelectionQuestion implements AddNewMultipleSelectionQuestionInterface
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
    public function process(string $body, array $choices, array $correctChoices, float $points, Descriptor $descriptor): MultipleSelectionQuestion
    {
        // TODO: Implement process() method.
    }
}