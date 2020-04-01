<?php


namespace WabLab\Questions\Contracts\Repositories;

use WabLab\Questions\Contracts\FillInTheBlankQuestion;

interface FillInTheBlankQuestionRepository
{
    /**
     * @param FillInTheBlankQuestion $question
     * @return FillInTheBlankQuestion|null
     */
    public function save(FillInTheBlankQuestion $question): ?FillInTheBlankQuestion;

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * @param $id
     * @return FillInTheBlankQuestion
     */
    public function getById($id): FillInTheBlankQuestion;

}