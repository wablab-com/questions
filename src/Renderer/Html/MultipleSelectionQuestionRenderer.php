<?php


namespace WabLab\Questions\Renderer\Html;


use WabLab\Questions\Contracts\MultipleSelectionQuestion;
use \WabLab\Questions\Contracts\Renderer\Html\MultipleSelectionQuestion as MultipleSelectionQuestionRendererInterface;

class MultipleSelectionQuestionRenderer implements MultipleSelectionQuestionRendererInterface
{

    protected $question;

    public function setQuestion(\WabLab\Questions\Contracts\MultipleSelectionQuestion $question)
    {
      $this->question = $question;
    }

    public function render(): string
    {
       $html ='';
       $html .= '<div>'.$this->question->getBody().'</div>';
       $html .='<input>';
       return  $html;
    }
}