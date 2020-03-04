<?php


namespace WabLab\Questions;
use \WabLab\Questions\Contracts\ImageComponent as ImageComponentInterface;

class ImageComponent extends OutputComponent implements ImageComponentInterface
{
    /**
     * @var string
     */
    protected $url;

    /**
     * @param $url
     */
    public function setUrl(string $url) :void
    {
        $this->url = $url;
    }
    /**
     * @return string
     */
    public function getUrl() :string
    {
        return $this->url;
    }

}