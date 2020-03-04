<?php


namespace WabLab\Questions\Repositories;

use \WabLab\Questions\Contracts\Repositories\Question as QuestionRepositoriesInterface;
use \WabLab\Questions\Contracts\Question as QuestionInterface;
class Question implements QuestionRepositoriesInterface
{

    public function save(QuestionInterface $question)
    {
        // TODO: Implement save() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function getById($id):QuestionInterface
    {
        // TODO: Implement getById() method.
    }
}