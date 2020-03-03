<?php


namespace WabLab\Questions\Contracts;


interface QuestionProperty
{
    public function setName(string $name);
    public function getName(): string;

    public function setValue($value);
    public function getValue();

}