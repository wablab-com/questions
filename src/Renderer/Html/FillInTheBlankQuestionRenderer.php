<?php


namespace WabLab\Questions\Renderer\Html;



class FillInTheBlankQuestionRenderer implements \WabLab\Questions\Contracts\Renderer\Html\MultipleChoiceQuestion
{

    /**
     * @var \WabLab\Questions\Contracts\MultipleChoiceQuestion
     */
    protected $question;

    public function setQuestion(\WabLab\Questions\Contracts\MultipleChoiceQuestion $question)
    {
        $this->question = $question;
    }

    public function render(): string
    {
        $html = '';
        $html .= '<div>'.$this->question->getBody().'</div>';
        $html .= '<input>';
        return $html;
    }
}