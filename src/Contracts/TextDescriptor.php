<?php


namespace WabLab\Questions\Contracts;


interface TextDescriptor extends Descriptor
{
    public function setText(string $text);

    public function getText(): string;
}