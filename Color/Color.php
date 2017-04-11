<?php
namespace PrintManager\Color;

class Color {
    private $_rgb;
    private $_name = "";
    
    public function __construct(string $name, int $r, int $g, int $b) {
        $this->setName($name);
        $this->setRGB($r, $g, $b);
    }
    
    public function setName(string $myName) {
        $this->_name = $myName;
        return $this;
    }
    
    public function setRGB(int $r, int $g, int $b) {
        $this->_rgb = new Rgb($r, $g, $b);
        return $this;
    }
    
    public function getName() : string {
        return $this->_name;
    }
    
    public function getRGB() : Rgb {
        return $this->_rgb;
    }
    
    public function drawColor() {
        echo '<span style="color:' . $this->getRGB() . '">' . $this->getName() . '</span>';
        return $this;
    }
}