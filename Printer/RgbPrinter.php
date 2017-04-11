<?php
namespace PrintManager\Printer;
use PrintManager\Color;

class RgbPrinter extends Printer{
    private static $NUMBER_OF_CHANNELS = 3;

    public function __construct(string $name)
    {
        parent::__construct($name, self::$NUMBER_OF_CHANNELS);
    }

    protected function setChannels()
    {
        $this->_channels[] = new Color\Color($name = "Red",   $r = 255, $g = 0, $b = 0);
        $this->_channels[] = new Color\Color($name = "Green", $r = 0, $g = 255, $b = 0);
        $this->_channels[] = new Color\Color($name = "Blue",  $r = 0, $g = 0, $b = 255);
    }
}
