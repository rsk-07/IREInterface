<?php
$xml=simplexml_load_file("result.xml");
echo $xml->getName() . "<br>";

foreach($xml->children() as $child)
{
	echo $child->getName() . "<br>";
	foreach($child->children() as $tweet)
	{
		echo $tweet . "<br>";
	}
	echo "<br>";
	echo "<br>";
}
?>
