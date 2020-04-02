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

    /**
     * @return string
     */
    public function render(): string
    {
        $html='';
        $html .='<div>'.$this->question->getBody().'</div>';
        $html .='<select>';
        foreach ($this->question->getSelection() as $key=> $item){
            $html.= '<option value=""></option>';
        }
        $html .='</select>';
        return $html;
    }
}