<?php


namespace WabLab\Questions\Contracts;


interface MultipleSelectionQuestion extends Question
{

    public function addSelection(array $questionSelection);

    public function getSelection(): array;

    public function addCorrectSelection(array $questionSelection);
    public function getCorrectSelection(): array;

}