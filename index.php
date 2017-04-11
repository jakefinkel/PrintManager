<?php
ini_set('display_errors', 1);

$rgb  = new RgbPrinter($name = "Microsoft XPS Document Writer");
$cmyk = new CmykPrinter($name = "XEROX Phaser 8100");

$rgb->print();
$cmyk->print();

try {
    $illegal = new Printer($name = "NO!", $numberOfChannels = 0);
}
catch (Error $e) {
    echo "You can't instantiate an abstract class!";
}

?>