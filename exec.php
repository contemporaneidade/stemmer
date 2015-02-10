<?php

$input	= "../scielo/files/resumos/en/";
$output = "./files/en/";

$files 	= scandir($input);
for ($i = 2; $i < sizeof($files); ++$i) {
	$stemmed = "";
	
	$file = $input.$files[$i];
	$content = file_get_contents($file, "r");
	
	$tmp = explode(" ", $content);
	for ($j = 0; $j < sizeof($tmp); ++$j) {
		$stemmed .= shell_exec("libstemmer_c.exe -l english -s ".$tmp[$j])." ";
	}
	
	$handle = fopen($output.$files[$i], 'w+');
	if ($handle) {
		fwrite($handle, $stemmed);
	}
	fclose($handle);
}
	
	

?>