<?php

namespace Api\Doc;

class Docer
{
    private $consPath = '';
    private $jsonPath = '';

    function __construct($consPath, $jsonPath)
    {
        $this->consPath = $consPath;
        $this->jsonPath = $jsonPath;
    }

    public function generateJson()
    {

        echo $this->consPath;
        echo $this->jsonPath;
    }
}
