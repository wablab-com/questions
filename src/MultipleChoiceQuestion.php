<?php


namespace WabLab\Questions;
use \WabLab\Questions\Contracts\MultipleChoiceQuestion as MultipleChoiceQuestionInterface;
use WabLab\Questions\Contracts\QuestionChoice;

class MultipleChoiceQuestion extends Question implements MultipleChoiceQuestionInterface
{

    protected $choices = [];

    public function addChoice(QuestionChoice $questionChoice)
    {
        $this->choices[] = $questionChoice;
    }

    public function getChoices(): array
    {
        return $this->choices;
    }
}