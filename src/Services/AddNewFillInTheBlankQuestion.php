<?php


namespace WabLab\Questions\Services;

use WabLab\Questions\Contracts\FillInTheBlankQuestion;
use \WabLab\Questions\Contracts\Services\AddNewFillInTheBlankQuestion as AddNewFillInTheBlankQuestionInterface;

class AddNewFillInTheBlankQuestion implements AddNewFillInTheBlankQuestionInterface
{

    /**
     * @inheritDoc
     */
    public function process(string $title, string $description, string $questionAsText, float $points): FillInTheBlankQuestion
    {
        // TODO: Implement process() method.
    }
}