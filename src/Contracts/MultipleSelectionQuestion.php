<?php


namespace WabLab\Questions\Contracts;


interface MultipleSelectionQuestion extends Question
{

    public function addChoice(QuestionChoice $questionChoice);

    public function getChoices(): array;

}