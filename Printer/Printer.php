<?php

interface PrinterInterface {
    public function getName() : string;    
    public function printNumberOfChannels() : string;    
    public function print();
}

abstract class Printer implements PrinterInterface {
    private static $NUMBER_OF_PRINTERS = 0;

    private $_name;
    private $_numberOfChannels;
    protected $_channels;
    
    public function getName() : string {
        return "<b>" . $this->_name . "</b>";
    }
    
    public function printNumberOfChannels() : string {
        return "<i>" . $this->_numberOfChannels . "</i>";
    }

    protected function __construct(string $name, int $numberOfChannels)
    {
        self::$NUMBER_OF_PRINTERS += 1;
        $this->_name = $name;
        $this->_numberOfChannels = $numberOfChannels;
        $this->setChannels();
    }
    
    protected abstract function setChannels();

    public function print() {
        echo "<p>";
        echo $this->getName() . " is a printer with ";
        echo $this->printNumberOfChannels() . " channels:<br />";

        foreach ($this->_channels as $color) {
            $color->drawColor();
            echo "<br />";
        }
        echo "</p>";
        return $this;
    }
    
    public function __invoke() {
        echo "you have " . self::$NUMBER_OF_PRINTERS . " printers<br />";
    }
}