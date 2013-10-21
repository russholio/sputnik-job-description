<?php

namespace sputnik\Model\Entity;
use Model\Entity\Entity;

class JobDescription extends Entity
{
    /**
     * @vo Model\Vo\String
     */
    public $repository = '';

    /**
     * @vo Model\Vo\String
     */
    public $runCommand = '';

    /**
     * @vo Model\Vo\Set
     */
    public $arguments = [];

    /**
     * @vo Model\Vo\String
     */
    public $output = '';

    /**
     * @vo Model\Vo\String
     */
    public $errorOutput = '';

    /**
     * @vo Model\Vo\Set
     */
    public $returnData = [];

    function __toString()
    {
        try {
            return serialize($this->to());
        } catch(\Exception $e) {
            return '';
        }
    }
}