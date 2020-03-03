<?php

namespace WabLab\Questions\Contracts;


interface Question extends HasPoints
{

    public function getId();

    public function getTitle(): string;

    public function setTitle(string $title);


    public function getDescription(): string;

    public function setDescription(string $title);
}