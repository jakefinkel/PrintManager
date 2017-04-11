<?php
namespace PrintManager;

ini_set('display_errors', 1);

spl_autoload_register(function ($class) {
    $reversedSlashes = str_replace('\\', '/', $class);
    $withExtension = $reversedSlashes . ".php";
    $requirePath = str_replace(__NAMESPACE__ . '/', '', $withExtension);

    require_once($requirePath);
});

$rgb  = new Printer\RgbPrinter($name = "Microsoft XPS Document Writer");
$cmyk = new Printer\CmykPrinter($name = "XEROX Phaser 8100");

$rgb->print();
$cmyk->print();

?>