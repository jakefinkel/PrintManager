<?php
namespace PrintManager;

ini_set('display_errors', 1);

spl_autoload_register(function ($class) {
    $requirePath = str_replace('\\', '/', $class) . '.php';
    require_once($requirePath);
});

if (array_key_exists('email', $_POST)) {
    echo 'Welcome, ' . $_POST['email'] . '!';
}
else {
    echo '<h1>Please <a href="register.html">Sign Up</a></h1>';
    die();
}

$rgb  = new Printer\RgbPrinter($name = 'Microsoft XPS Document Writer');
$cmyk = new Printer\CmykPrinter($name = 'XEROX Phaser 8100');

$rgb->print();
$cmyk->print();

Printer\Printer::printNumberOfPrinters();
?>
