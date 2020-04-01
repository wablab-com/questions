<?php


namespace WabLab\Questions\Contracts;


interface ImageDescriptor extends Descriptor
{
    public function setUrl(string $url);
    public function getUrl(): string;
}