<?php


namespace WabLab\Questions\Contracts\Renderer\Html;

interface ImageMultipleChoiceQuestion extends Question
{
    public function setQuestion(\WabLab\Questions\Contracts\MultipleChoiceQuestion $question);
}