<?php


namespace WabLab\Questions;


use WabLab\Questions\Contracts\QuestionComponent;
use \WabLab\Questions\Contracts\QuestionComponentsGroup as QuestionComponentsGroupInterface;
class QuestionComponentsGroup implements QuestionComponentsGroupInterface
{
    protected $components = [];

    public function addQuestionComponent(QuestionComponent $questionComponent){
        $this->components[] = $questionComponent;
    }
}