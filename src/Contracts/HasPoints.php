<?php


namespace WabLab\Questions\Contracts;


interface HasPoints
{
    public function setPoints(int $points);

    public function getPoints(): int;
}