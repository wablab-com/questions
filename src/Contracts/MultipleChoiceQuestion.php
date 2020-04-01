<?php


namespace WabLab\Questions\Contracts;


interface MultipleChoiceQuestion extends Question
{

    public function addChoice(array $questionChoice);

    public function getChoice(): array;

    public function addCorrectChoice(array $correctChoice);
    public function getCorrectChoice() :array ;
}