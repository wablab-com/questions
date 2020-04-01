<?php


namespace WabLab\Questions;
use \WabLab\Questions\Contracts\ImageDescriptor as ImageDescriptorInterface;

class ImageDescriptor extends Descriptor implements ImageDescriptorInterface
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