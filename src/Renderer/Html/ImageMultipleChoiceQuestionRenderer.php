<?php


namespace WabLab\Questions\Renderer\Html;


use WabLab\Questions\Contracts\Renderer\Html\ImageMultipleSelectionQuestion;

class ImageMultipleChoiceQuestionRenderer implements ImageMultipleSelectionQuestion
{
    protected $question;
    public function setQuestion(\WabLab\Questions\Contracts\MultipleSelectionQuestion $question)
    {
       $this->question = $question;
    }

    public function render(): string
    {
       $html='';
       $html .='<div>'.$this->question->getBody().'</div>';
       $html .='<input>';
       return $html;
    }
}