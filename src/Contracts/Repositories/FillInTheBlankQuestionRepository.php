<?php


namespace WabLab\Questions\Contracts\Repositories;

use WabLab\Questions\Contracts\FillInTheBlankQuestion;

interface FillInTheBlankQuestionRepository
{
    public function save(FillInTheBlankQuestion $question): ?FillInTheBlankQuestion;

    public function delete($id);

    public function getById($id): FillInTheBlankQuestion;

}