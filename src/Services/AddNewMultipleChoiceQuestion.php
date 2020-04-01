<?php


namespace WabLab\Questions\Services;

use WabLab\Questions\Contracts\Descriptor;
use WabLab\Questions\Contracts\MultipleChoiceQuestion;
use WabLab\Questions\Contracts\Repositories\MultipleChoiceQuestionRepository;

class AddNewMultipleChoiceQuestion extends Service
{

    public function process(string $body, array $choices, array $correctChoices, float $points, Descriptor $descriptor): MultipleChoiceQuestion
    {

        $question = $this->di->make(MultipleChoiceQuestion::class); /**@var $question \WabLab\Questions\Contracts\MultipleChoiceQuestion*/
        $question->setBody($body);
        $question->setDescriptor($descriptor);
        $question->setPoints($points);
        $question->addChoice($choices);
        $question->addCorrectChoice($correctChoices);

        //
        // get MultipleChoice Question repository to save the new created object
        //
        $repository = $this->di->make(MultipleChoiceQuestionRepository::class);/**@var $repository MultipleChoiceQuestionRepository*/
        return $repository->save($question);


    }
}