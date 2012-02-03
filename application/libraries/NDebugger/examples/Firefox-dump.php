<?php ob_start(1) // needed by FirePHP ?>

<!DOCTYPE html><link rel="stylesheet" href="style.css">

<h1>Using Firebug and FireLogger</h1>

<?php

require_once '../Nette/Debugger.php';


$arr = array(10, 20, array('key1' => 'val1', 'key2' => TRUE));

// will show in FireLogger tab in Firebug
Debugger::fireLog('Hello World');
Debugger::fireLog($arr);


function first($arg1, $arg2)
{
	second(TRUE, FALSE);
}



function second($arg1, $arg2)
{
	third(array(1, 2, 3));
}


function third($arg1)
{
	throw new Exception('The my exception', 123);
}

try {
	first(10, 'any string');
} catch (Exception $e) {
	Debugger::fireLog($e);
}
