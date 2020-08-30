<?php

namespace Prices;

class SpeakerPrices 
{
    public $low;
    public $medium;
    public $high;

    function __construct($low, $medium, $high)
    {
        $this->low = $low;
        $this->medium = $medium;
        $this->high = $high;
    }

    function getLow() 
    {
        return $this->low;
    }

    function getMedium() 
    {
        return $this->medium;
    }

    function getHigh() 
    {
        return $this->high;
    }
}
