<?php


namespace WabLab\Questions\Services;

use WabLab\Questions\Contracts\Descriptor;
use WabLab\Questions\Contracts\FillInTheBlankQuestion;
use WabLab\Questions\Contracts\Repositories\FillInTheBlankQuestionRepository;
use WabLab\Tools\Contracts\DI;

class AddNewFillInTheBlankQuestion extends Service
{

    public function process(string $body, string $correctAnswer, float $points, Descriptor $descriptor = null): FillInTheBlankQuestion
    {
        //
        // make question object
        //
        $question = $this->di->make(FillInTheBlankQuestion::class); /**@var $question \WabLab\Questions\Contracts\FillInTheBlankQuestion*/
        $question->setBody($body);
        $question->setDescriptor($descriptor);
        $question->setPoints($points);
        $question->setCorrectAnswer($correctAnswer);

        //
        // get fill in the bank repository to save the new created object
        //
        $repository = $this->di->make(FillInTheBlankQuestionRepository::class);/**@var $repository FillInTheBlankQuestionRepository*/
        return $repository->save($question);

    }
}