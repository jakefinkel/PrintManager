<?php
namespace PrintManager;

ini_set('display_errors', 1);

spl_autoload_register(function ($class) {
    $requirePath = str_replace('\\', '/', $class) . '.php';
    require_once($requirePath);
});

echo 'Welcome, ' . $_POST['email'] . '!';

$rgb  = new Printer\RgbPrinter($name = 'Microsoft XPS Document Writer');
$cmyk = new Printer\CmykPrinter($name = 'XEROX Phaser 8100');

$rgb->print();
$cmyk->print();

Printer\Printer::printNumberOfPrinters();

?>
