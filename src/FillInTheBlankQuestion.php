<?php


namespace WabLab\Questions;


use WabLab\Questions\Contracts\FillInTheBlankQuestion as FillInTheBlankQuestionInterface;
use WabLab\Questions\Traits\HasPoints;

abstract class FillInTheBlankQuestion extends Question implements FillInTheBlankQuestionInterface
{

    use HasPoints;

    protected $correctAnswer;

    public function getCorrectAnswer(): string
    {
        return $this->correctAnswer;
    }

    public function setCorrectAnswer(string $answer)
    {
        $this->correctAnswer = $answer;
    }

}