<?php


namespace WabLab\Questions\Contracts;


interface MultipleChoiceQuestion extends Question
{

    public function addChoice(QuestionChoice $questionChoice);

    public function getChoices(): array;

}