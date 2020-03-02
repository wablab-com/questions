<?php


namespace WabLab\Questions\Contracts;


interface ImageComponent extends QuestionComponent
{
    public function setUrl(string $url);
    public function getUrl(): string;
}