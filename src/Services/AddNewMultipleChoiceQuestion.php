<?php


namespace WabLab\Questions\Services;

use WabLab\Questions\Contracts\Descriptor;
use WabLab\Questions\Contracts\MultipleChoiceQuestion;
use WabLab\Questions\Contracts\QuestionChoice;
use WabLab\Questions\Contracts\Repositories\MultipleChoiceQuestionRepository;
use WabLab\Questions\Contracts\TextDescriptor;

class AddNewMultipleChoiceQuestion extends Service
{

    public function process(string $body, array $choices, array $correctChoices, float $points, Descriptor $descriptor): MultipleChoiceQuestion
    {

        $question = $this->di->make(MultipleChoiceQuestion::class); /**@var $question \WabLab\Questions\Contracts\MultipleChoiceQuestion*/
        $question->setBody($body);
        $question->setDescriptor($descriptor);
        $question->setPoints($points);

        //
        // add choices
        //
        foreach($choices as $inx => $choiceText) {
            $choiceObj = $this->di->make(QuestionChoice::class); /**@var $choiceObj QuestionChoice*/
            $descriptor = $this->di->make(TextDescriptor::class); /**@var $descriptor TextDescriptor*/
            $descriptor->setText($choiceText);
            $choiceObj->addDescriptor($descriptor);
            if(in_array($inx, $correctChoices)) {
                $choiceObj->setIsCorrectAnswer(true);
            } else {
                $choiceObj->setIsCorrectAnswer(false);
            }

            $question->addChoice($choiceObj);
        }

        //
        // get MultipleChoice Question repository to save the new created object
        //
        $repository = $this->di->make(MultipleChoiceQuestionRepository::class);/**@var $repository MultipleChoiceQuestionRepository*/
        return $repository->save($question);

    }
}