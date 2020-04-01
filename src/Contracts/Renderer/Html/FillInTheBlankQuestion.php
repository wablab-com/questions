<?php


namespace WabLab\Questions\Contracts\Renderer\Html;

interface FillInTheBlankQuestion extends Question
{
    public function setQuestion(\WabLab\Questions\Contracts\FillInTheBlankQuestion $question);
}