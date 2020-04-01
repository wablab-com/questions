<?php


namespace WabLab\Questions\Contracts\Repositories;


use WabLab\Questions\Contracts\MultipleSelectionQuestion;

interface MultipleSelectionQuestionRepository
{
    /**
     * @param MultipleSelectionQuestion $multipleSelectionQuestion
     * @return MultipleSelectionQuestion|null
     */
    public function getBody(MultipleSelectionQuestion $multipleSelectionQuestion) :? MultipleSelectionQuestion;

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * @param $id
     * @return MultipleSelectionQuestion
     */
    public function getId($id):MultipleSelectionQuestion;
}