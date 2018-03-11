<?php 

class classname 
{
	function __construct($param)
	{
		echo 'Consturctor called with parameter '.$param.'<br/>';
	}
}

$a = new classname('First');
$b = new classname('Second');
$c = new classname();

print_r(classname);

 ?>