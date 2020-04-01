<?php


namespace WabLab\Questions\Contracts\Repositories;


use WabLab\Questions\Contracts\MultipleChoiceQuestion;

interface MultipleChoiceQuestionRepository
{
    /**
     * @param MultipleChoiceQuestion $multipleChoiceQuestion
     * @return MultipleChoiceQuestion|null
     */
    public function getBody(MultipleChoiceQuestion $multipleChoiceQuestion) :? MultipleChoiceQuestion ;

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * @param $id
     * @return MultipleChoiceQuestion
     */
    public function getId($id) :MultipleChoiceQuestion;
}