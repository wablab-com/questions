<?php


namespace WabLab\Questions\Contracts;


interface QuestionProperty
{
    public function set(string $propertyName, $value = null);
    public function getPropertyName(): string;
    public function getPropertyValue();

}