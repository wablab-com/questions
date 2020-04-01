<?php


namespace WabLab\Questions\Services;

use WabLab\Tools\Contracts\DI;

class Service
{

    /**
     * @var DI
     */
    protected $di;

    public function __construct(DI $di)
    {
        $this->di = $di;
    }

}