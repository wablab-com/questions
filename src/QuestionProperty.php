<?php


namespace WabLab\Questions;
use \WabLab\Questions\Contracts\QuestionProperty as QuestionPropertyInerface;

class QuestionProperty implements QuestionPropertyInerface
{

    protected $name;
    protected $value;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}