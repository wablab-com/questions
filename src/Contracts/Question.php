<?php

namespace WabLab\Questions\Contracts;


interface Question extends HasPoints
{

    public function getId();

    public function getBody(): string;

    public function setBody(string $question);

    public function getDescriptor(): Descriptor;

    public function setDescriptor(Descriptor $descriptor);

}