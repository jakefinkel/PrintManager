<?php

class Rgb {
    private $r = 0;
    private $g = 0;
    private $b = 0;

    public function __construct(int $r, int $g, int $b) {
        $this->r = $r;
        $this->g = $g;
        $this->b = $b;
    }

    public function __toString() : string {
        return sprintf('#%02x%02x%02x', $this->r, $this->g, $this->b);
    }
}