<?php


namespace WabLab\Questions;
use \WabLab\Questions\Contracts\MultipleChoiceQuestion as MultipleChoiceQuestionInterface;
use WabLab\Questions\Contracts\QuestionChoice;

class MultipleChoiceQuestion extends Question implements MultipleChoiceQuestionInterface
{

    protected $choices = [];
    protected $id;
    protected $correctChoice = [];

    public function addChoice(array $questionChoice)
    {
        $this->choices[] = $questionChoice;
    }

    public function getChoice(): array
    {
        return $this->choices;
    }

    public function getId()
    {
        return $this->id;
    }

    public function addCorrectChoice(array $correctChoice)
    {
       $this->correctChoice[] = $correctChoice;
    }

    public function getCorrectChoice(): array
    {
      return $this->correctChoice;
    }
}