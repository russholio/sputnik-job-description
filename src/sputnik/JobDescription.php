<?php

namespace sputnik;

class JobDescription
{
    public $repository = 'russholio/Sick-Beard';
    public $arguments = [
        'a',
        'b',
        'c'
    ];

    function __toString()
    {
        return serialize($this);
    }
}