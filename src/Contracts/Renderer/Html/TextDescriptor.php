<?php


namespace WabLab\Questions\Contracts\Renderer\Html;


interface TextDescriptor extends Descriptor
{
    public function setDescriptor(\WabLab\Questions\Contracts\TextDescriptor $descriptor);
}