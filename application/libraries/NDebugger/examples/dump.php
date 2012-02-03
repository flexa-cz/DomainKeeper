<!DOCTYPE html><link rel="stylesheet" href="style.css">

<h1>Nette Debugger dump test</h1>

<?php
require_once '../Nette/Debugger.php';



class Test
{
	public $x = array(10, NULL);

	private $y = 'hello';

	protected $z = 30;
}

$arr = array(10, 20.2, TRUE, NULL, 'hello', (object) NULL, array());

$obj = new Test;


dump('<a href="#">test</a>');

dump($arr);

dump($obj);


echo "<h2>Function dump()</h2>\n";

dump('<a href="#">test</a>', $arr, $obj);


echo "<h2>With location</h2>\n";

Debugger::$showLocation = TRUE;

dump('sensitive data');

echo dump('forced', TRUE);

Debugger::$showLocation = FALSE;
Debugger::$consoleMode = FALSE;


echo "<h2>Production mode</h2>\n";

Debugger::$productionMode = TRUE;

dump('sensitive data');
