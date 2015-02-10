<?php

if ($argc == 2) {
	$x = shell_exec("libstemmer_c.exe -l portuguese -s ".$argv[1]);
	echo "Output: ".$x;
} else {
	echo "Parametros incorretos";
}

?>