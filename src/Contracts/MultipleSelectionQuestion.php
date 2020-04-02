<?php


namespace WabLab\Questions\Contracts;


interface MultipleSelectionQuestion extends Question
{

    public function addSelection(QuestionChoice $questionSelection);

    public function getSelections(): array;


}