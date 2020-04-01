<?php


namespace WabLab\Questions\Contracts;


interface QuestionChoice
{
    public function addDescriptor(Descriptor $descriptor);

    public function isCorrectAnswer(): bool;

    public function setIsCorrectAnswer(bool $flag = false);

}
