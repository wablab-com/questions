<?php


namespace WabLab\Questions\Contracts\Services;

use WabLab\Questions\Contracts\FillInTheBlankQuestion;
use WabLab\Questions\Contracts\MultipleChoiceQuestion;
use WabLab\Questions\Contracts\MultipleSelectionQuestion;
use WabLab\Questions\Contracts\QuestionChoice;

interface AddNewFillInTheBlankQuestion
{

    /**
     * @param string $title
     * @param string $description
     * @param string $questionAsText    EX: Fill in the Blank questions __are__ graded automatically   (this function will replace __<answer>__ with blank component and the other with string / image component)
     * @param float $points
     * @return FillInTheBlankQuestion
     */
    public function process(string $title, string $description, string $questionAsText, float $points): FillInTheBlankQuestion;
}