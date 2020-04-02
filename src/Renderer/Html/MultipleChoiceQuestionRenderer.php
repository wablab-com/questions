<?php


namespace WabLab\Questions\Renderer\Html;


use \WabLab\Questions\Contracts\Renderer\Html\MultipleChoiceQuestion as MultipleChoiceQuestionRendererInterface;


class FillInTheBlankQuestionRenderer implements MultipleChoiceQuestionRendererInterface
{

    /**
     * @var \WabLab\Questions\Contracts\FillInTheBlankQuestion
     */
    protected $question;

    public function setQuestion(\WabLab\Questions\Contracts\MultipleChoiceQuestion $question)
    {
        $this->question = $question;
    }

    public function render(): string
    {
        $html = '';
        $html .= '<div class="row"><div class="form-group">';
        $html .= '<div class="qBody">' . $this->question->getBody() . '</div>';
        $html .= '<select name="questionOption" class="qAnswer">';
        foreach ($this->question->getDescriptor() as $key => $item){
            $html .='<option value="'.$key.'">'.$item.'</option>';
        }
         $html .= '</select>';
        $html .= '</div></div>';
        return $html;
    }
}