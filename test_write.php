<?php
$file = "addTwo.java";

$data_for_file = "this is some data";

if(file_put_contents($file,$data_for_file))
{
	die("yes");
}
else 
{
	die("no");
}

?>
