<?php


namespace WabLab\Questions\Contracts\Renderer\Html;


interface ImageDescriptor extends Descriptor
{
    public function setDescriptor(\WabLab\Questions\Contracts\ImageDescriptor $descriptor);
}