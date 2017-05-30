<?php


$nazwaPlik="wiadomosci.txt";

if($_GET["wart"]=="wyslij"){

$file = fopen($nazwaPlik, "a");
$count = count(file($nazwaPlik));
$text = $_GET["nick"].">> ".$_GET["wiadomosc"]."\n";
fwrite($file, $text);
fclose($file);

while ($count > 10) { 
	$file = file($nazwaPlik);
	unset($file[0]);
	file_put_contents($nazwaPlik, $file);
	$count--;
}
}
else{
if (!file_exists($nazwaPlik)) { 
	$file = fopen($nazwaPlik, "w");
	fclose($file);
} 
else { 
	$file = fopen($nazwaPlik, "r");
	$text = fread($file, filesize($nazwaPlik));
	fclose($file);
	echo $text;

}}
?>
