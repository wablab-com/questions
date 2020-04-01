<?php


namespace WabLab\Questions\Renderer\Html;

use \WabLab\Questions\Contracts\Renderer\Html\MultipleChoiceQuestion as MultipleChoiceQuestionRendererInterface;


class MultipleChoiceQuestionRenderer implements MultipleChoiceQuestionRendererInterface
{

    protected $question;

    /**
     * @var \WabLab\Questions\Contracts\MultipleChoiceQuestion
     */
    public function setQuestion(\WabLab\Questions\Contracts\MultipleChoiceQuestion $question)
    {
        $this->question = $question;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        $html ='';
        $html .='<div>'.$this->question->getBody().'</div>';
        $html .='<input />';
        return $html;

    }
}