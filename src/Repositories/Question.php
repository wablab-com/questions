<?php


namespace WabLab\Questions\Repositories;

use \WabLab\Questions\Contracts\Repositories\Question as QuestionRepositoriesInterface;
use \WabLab\Questions\Contracts\Question as QuestionInterface;
class Question implements QuestionRepositoriesInterface
{

    /**
     * @param QuestionInterface $question
     */
    public function save(QuestionInterface $question)
    {
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
    }

    /**
     * @param $id
     * @return QuestionInterface
     */
    public function getById($id):QuestionInterface
    {
    }
}