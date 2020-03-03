<?php


namespace WabLab\Questions;
use \WabLab\Questions\Contracts\StringComponent as StringComponentInterface;

class StringComponent implements StringComponentInterface
{
    /**
     * @var string
     */
    protected $text;

    /**
     * @param string $text
     */
    public function setText(string $text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

}