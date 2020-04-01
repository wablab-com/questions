<?php


namespace WabLab\Questions;
use WabLab\Questions\Contracts\MultipleSelectionQuestion as MultipleSelectionQuestionInterface;
use WabLab\Questions\Contracts\QuestionChoice;


class MultipleSelectionQuestion extends Question implements MultipleSelectionQuestionInterface
{
    protected $selection = [];
    protected $correctSelection = [];
    protected $id;

    public function addSelection(array $questionSelection)
    {
        $this->selection[] = $questionSelection;
    }

    public function getSelection(): array
    {
        return $this->selection;
    }

    public function getId():int
    {
        return $this->id;
    }

    public function addCorrectSelection(array $correctSelection)
    {
       $this->correctSelection = $correctSelection;
    }

    public function getCorrectSelection(): array
    {
        return  $this->correctSelection;
     }
}