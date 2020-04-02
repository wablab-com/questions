<?php


namespace WabLab\Questions\Renderer\Html;


use WabLab\Questions\Contracts\Renderer\Html\ImageMultipleChoiceQuestion;

class ImageMultipleChoiceQuestionRenderer implements ImageMultipleChoiceQuestion
{
    protected $question;

    /**
     * @param \WabLab\Questions\Contracts\MultipleChoiceQuestion $question
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
       $html='';
       $html .='<div>'.$this->question->getBody().'</div>';
       $html .='<select>';
      foreach ($this->question->getSelection() as $key=> $item){
          $html.= '<option value=""><img name="" src="" /></option>';
      }
      $html .='</select>';
      return $html;

     }
}