<?php


namespace WabLab\Questions\Contracts\Repositories;

use WabLab\Questions\Contracts\Question as QuestionInterface;

interface Question
{
    public function save(QuestionInterface $question);

    public function delete($id);

    public function getById($id): QuestionInterface;

}