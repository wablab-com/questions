<?php


namespace WabLab\Questions;
use \WabLab\Questions\Contracts\ImageComponent as ImageComponents;

class ImageComponent implements ImageComponents
{
    /**
     * @var string
     */
    protected $url;
    /**
     * @var array
     */
    protected $properties;

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

    /**
     * @param $properties
     */
    public function setProperties(array $properties) :void
    {
        $this->properties = $properties;
    }

    /**
     * @return array
     */
    public function getProperties():array
    {
        return $this->properties;
    }

}