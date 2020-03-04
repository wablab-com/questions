<?php


namespace WabLab\Questions\Contracts;


interface QuestionChoice
{
    public function addLine(QuestionOutputComponentsGroup $line);

    public function isCorrectAnswer(): bool;

    public function setIsCorrectAnswer(bool $flag = false);
}
