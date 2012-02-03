<!DOCTYPE html><link rel="stylesheet" href="style.css">

<h1>Nette Debugger bar test</h1>

<?php
require_once '../minified/Debugger.php';

Debugger::enable();

$arr = array(10, 20.2, TRUE, NULL, 'hello', (object) NULL, array());


Debugger::barDump(get_defined_vars());

Debugger::barDump($arr, 'The Array');

Debugger::barDump('<a href="#">test</a>', 'String');
