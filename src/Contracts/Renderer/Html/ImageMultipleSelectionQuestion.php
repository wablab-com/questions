<?php


namespace WabLab\Questions\Contracts\Renderer\Html;

interface ImageMultipleSelectionQuestion extends Question
{
    public function setQuestion(\WabLab\Questions\Contracts\MultipleSelectionQuestion $question);
}