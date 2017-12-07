<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
        $i = contador();
        echo $i;
		function contador(){
        	$archivo = "contador.txt"; //el archivo que contiene en numero
        	$f = fopen($archivo, "r"); //abrimos el archivo en modo de lectura

            $contador = fread($f, filesize($archivo)); //leemos el archivo
            $contador = $contador + 1; //sumamos +1 al contador
            fclose($f);

        	$f = fopen($archivo, "w+");
            fwrite($f,$contador);
            fclose($f);
        	return $contador;
    	}

	?>
</body>
</html>