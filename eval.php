<?php
$input = $_POST["user_input"];
$file = "addTwo.java";
//echo is_string($input);
//$eval_results = shell_exec($input);
$parameters = array("int b","int c");
$test_case = array(5, 10);
$new_input = str_replace($parameters, $test_case, $input);
//$new_input = str_replace("static", "something", $input);

//echo "original input: $input" . "<br />". "modified input: $new_input" . "<br />";
//echo "<pre>$eval_results</pre>"

/*
"public class addTwo
{
	
}"
*/

$to_compile = "public class addTwo
{
	public static void main(String[] args)
	{
		int parameter1 = Integer.parseInt($test_case[0]);
		int parameter2 = Integer.parseInt($test_case[1]);
		
		String output = addTwo(parameter1, parameter2);
		
	}
	$input
}
";

$current .= $to_compile;

/*
if(file_put_contents($file,$current))
{
	die("yes");
}
else 
{
	die("no");
}
*/

echo "<pre>" . $to_compile . "</pre>";

//echo shell_exec("echo $to_compile > results.test");


/**
$words_to_replace = array("leno","russian");
$replacements = array("rokysopp","chinese");
$string = "hoboken leno love russian";
$new_string = str_replace($words_to_replace, $replacements, $string);

echo $new_string;
**/

?>
