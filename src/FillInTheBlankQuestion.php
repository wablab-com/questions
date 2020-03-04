<?php


namespace WabLab\Questions;


use WabLab\Questions\Contracts\FillInTheBlankQuestion as FillInTheBlankQuestionInterface;
use WabLab\Questions\Contracts\QuestionComponentsGroup;
use WabLab\Questions\Traits\HasPoints;

class FillInTheBlankQuestion extends Question implements FillInTheBlankQuestionInterface
{

    use HasPoints;

    protected $questionLines = [];

    public function addFillInTheBlankLine(QuestionComponentsGroup $questionComponentsGroup)
    {
        $this->questionLines[] = $questionComponentsGroup;
    }

}