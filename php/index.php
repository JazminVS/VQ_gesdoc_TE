<?php

$fp = fopen("txt/test.txt", "r+");

#Obtiene una línea desde el puntero de un archivo.
#La lectura termina cuando se llegue a $length, se llegue a una nueva línea o se alcance el final del archivo.
echo "Obtiene una línea desde el puntero de un archivo."."<br>"."<br>";
while (!feof($fp)){
$linea = fgets($fp);
echo $linea;
}
fclose($fp);