<?php


namespace WabLab\Questions\Contracts\Renderer\Html;

interface MultipleChoiceQuestion extends Question
{
    public function setQuestion(\WabLab\Questions\Contracts\MultipleChoiceQuestion $question);
}