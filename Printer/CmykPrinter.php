<?php

class CmykPrinter extends Printer {
    private static $NUMBER_OF_CHANNELS = 4;

    public function __construct(string $name)
    {
        parent::__construct($name, self::$NUMBER_OF_CHANNELS);
    }

    protected function setChannels()
    {
        $this->_channels[] = new Color($name = "Cyan",    $r = 0, $g = 255, $b = 255);
        $this->_channels[] = new Color($name = "Magenta", $r = 255, $g = 0, $b = 255);
        $this->_channels[] = new Color($name = "Yellow",  $r = 255, $g = 255, $b = 0);
        $this->_channels[] = new Color($name = "Black",   $r = 0, $g = 0, $b = 0);
    }
}