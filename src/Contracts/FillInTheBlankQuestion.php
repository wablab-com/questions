<?php


namespace WabLab\Questions\Contracts;


interface FillInTheBlankQuestion extends Question
{
    public function addFillInTheBlankLine(QuestionComponentsGroup $questionComponentsGroup);
}