<?php


namespace WabLab\Questions\Repositories;

use \WabLab\Questions\Contracts\Repositories\Question as QuestionRepositoriesInterface;
use \WabLab\Questions\Contracts\Question as QuestionInterface;
use Illuminate\Database\Eloquent\Model;

class Question implements QuestionRepositoriesInterface
{
    /**
     * @var Model
     */
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param QuestionInterface $question
     */
    public function save(QuestionInterface $question)
    {
        $this->model->create($question);
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        $this->model->where('id',$id)->delete();
    }

    /**
     * @param $id
     * @return QuestionInterface
     */
    public function getById($id):QuestionInterface
    {
        return $this->model->findOrfail($id);
    }
}