<?php


namespace WabLab\Questions\Contracts\Renderer\Html;

interface MultipleSelectionQuestion extends Question
{
    public function setQuestion(\WabLab\Questions\Contracts\MultipleSelectionQuestion $question);
}