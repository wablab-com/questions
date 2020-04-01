<?php


namespace WabLab\Questions\Renderer\Html;


use WabLab\Questions\Contracts\Renderer\Html\ImageMultipleSelectionQuestion;

class ImageMultipleSelectionQuestionRenderer implements ImageMultipleSelectionQuestion
{
    protected $question;

    /**
     * @param \WabLab\Questions\Contracts\MultipleSelectionQuestion $question
     */
    public function setQuestion(\WabLab\Questions\Contracts\MultipleSelectionQuestion $question)
    {
        $this->question = $question;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        $html ='' ;
        $html .='<div>'.$this->question->getBody().'</div>';
        $html .='<input>';
        return $html;
    }
}