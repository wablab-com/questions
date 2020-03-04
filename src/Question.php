<?php


namespace WabLab\Questions;
use \WabLab\Questions\Contracts\Question as QuestionInterface;
use WabLab\Questions\Traits\HasPoints;

class Question implements QuestionInterface
{

    use HasPoints;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $description;



    public function setTitle(string $title):void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTitle():string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;

    }

    /**
     * @param string $title
     */
    public function setDescription(string $title)
    {
        $this->description = $title;
    }

}