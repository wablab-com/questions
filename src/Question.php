<?php


namespace WabLab\Questions;
use WabLab\Questions\Contracts\Descriptor;
use \WabLab\Questions\Contracts\Question as QuestionInterface;
use WabLab\Questions\Traits\HasPoints;

abstract class Question implements QuestionInterface
{

    use HasPoints;

    /**
     * @var string
     */
    protected $body;

    /**
     * @var Descriptor
     */
    protected $descriptor;



    public function getBody(): string
    {
        return $this->body;
    }

    public function setBody(string $question)
    {
        $this->body = $question;
    }

    public function getDescriptor(): Descriptor
    {
        return $this->descriptor;
    }

    public function setDescriptor(Descriptor $descriptor)
    {
        $this->descriptor = $descriptor;
    }


}