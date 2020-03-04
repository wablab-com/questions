<?php


namespace WabLab\Questions;
use WabLab\Questions\Contracts\MultipleSelectionQuestion as MultipleSelectionQuestionInterface;
use WabLab\Questions\Contracts\QuestionChoice;


class MultipleSelectionQuestion extends Question implements MultipleSelectionQuestionInterface
{
    protected $choices = [];
    protected $id;

    public function addChoice(QuestionChoice $questionChoice)
    {
        $this->choices[] = $questionChoice;
    }

    public function getChoices(): array
    {
        return $this->choices;
    }

    public function getId():int
    {
        return $this->id;
    }
}