<?php


namespace WabLab\Questions;
use \WabLab\Questions\Contracts\MultipleChoiceQuestion as MultipleChoiceQuestions;


 class MultipleSelectionQuestion extends Question implements MultipleChoiceQuestions
{
     /**
      * @var int
      */
    protected $points;

     /**
      * @return mixed
      */
     public function getPoints():int
     {
         return $this->points;
     }

     /**
      * @param int $points
      */
     public function setPoints(int $points): void
     {
         $this->points = $points;
     }
 }