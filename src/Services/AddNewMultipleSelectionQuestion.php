<?php


namespace WabLab\Questions\Services;

use WabLab\Questions\Contracts\Descriptor;
use WabLab\Questions\Contracts\MultipleSelectionQuestion;
use WabLab\Questions\Contracts\Repositories\MultipleChoiceQuestionRepository;
use WabLab\Questions\Contracts\Repositories\MultipleSelectionQuestionRepository;
use WabLab\Questions\Contracts\Repositories\MultipleSelectionQuestionRepostory;
use \WabLab\Questions\Contracts\Services\AddNewMultipleSelectionQuestion as AddNewMultipleSelectionQuestionInterface;
class AddNewMultipleSelectionQuestion extends Service
{


    public function process(string $body, array $selections, array $correctSelections, float $points, Descriptor $descriptor): MultipleSelectionQuestion
    {

       $question = $this->di->make(MultipleSelectionQuestion::class); /** @var $question MultipleSelectionQuestion  */
       $question->setBody($body);
       $question->setDescriptor($descriptor);
       $question->setPoints($points);
       $question->addSelection($selections);
       $question->addCorrectSelection($correctSelections);

        //
        // get Multiple Selection Question repository to save the new created object
        //

       $repository = $this->di->make(MultipleSelectionQuestionRepository::class); /* @var  $repository \WabLab\Questions\Contracts\Repositories\MultipleSelectionQuestionRepository */
        return $repository->save($question);
    }
}