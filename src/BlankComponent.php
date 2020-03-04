<?php


namespace WabLab\Questions;

use \WabLab\Questions\Contracts\BlankComponent as BlankComponentInterface;
use WabLab\Questions\Traits\HasPoints;

class BlankComponent extends InputComponent implements BlankComponentInterface
{
    use HasPoints;
}