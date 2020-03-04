<?php


namespace WabLab\Questions\Services;

use WabLab\Questions\Contracts\FillInTheBlankQuestion;
use \WabLab\Questions\Contracts\Services\AddNewFillInTheBlankQuestion as AddNewFillInTheBlankQuestionInterface;

class AddNewFillInTheBlankQuestion implements AddNewFillInTheBlankQuestionInterface
{

    /**
     * @param string $title
     * @param string $description
     * @param string $questionAsText
     * @param float $points
     * @return FillInTheBlankQuestion
     */

    public function process(string $title, string $description, string $questionAsText, float $points): FillInTheBlankQuestion
    {
    }
}