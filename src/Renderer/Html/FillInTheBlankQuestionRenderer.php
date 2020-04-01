<?php


namespace WabLab\Questions\Renderer\Html;


use \WabLab\Questions\Contracts\Renderer\Html\FillInTheBlankQuestion as FillInTheBlankQuestionRendererInterface;


class FillInTheBlankQuestionRenderer implements FillInTheBlankQuestionRendererInterface
{

    /**
     * @var \WabLab\Questions\Contracts\FillInTheBlankQuestion
     */
    protected $question;

    public function setQuestion(\WabLab\Questions\Contracts\FillInTheBlankQuestion $question)
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