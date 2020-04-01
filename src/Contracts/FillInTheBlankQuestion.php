<?php


namespace WabLab\Questions\Contracts;


interface FillInTheBlankQuestion extends Question
{
    public function getCorrectAnswer(): string;
    public function setCorrectAnswer(string $answer);
}