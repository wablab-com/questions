<?php


namespace WabLab\Questions\Contracts;


interface ImageComponent extends OutputComponent
{
    public function setUrl(string $url);
    public function getUrl(): string;
}