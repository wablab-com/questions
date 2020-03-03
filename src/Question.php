<?php


namespace WabLab\Questions;
use \WabLab\Questions\Contracts\Question as QuestionInterface;

class Question implements  QuestionInterface
{

    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $description;
    /**
     * @param string $title
     */
    /**
     * @var int
     */
    protected $points;

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

    public function setPoints(int $points)
    {
        $this->points = $points;
    }

    /**
     * @return int
     */
    public function getPoints(): int
    {
        return $this->points;
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