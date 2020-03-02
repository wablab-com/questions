<?php


namespace WabLab\Questions\Contracts;


interface StringComponent extends OutputComponent
{
    public function setText(string $text);

    public function getText(): string;
}