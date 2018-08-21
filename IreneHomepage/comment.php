
<?php

$name = $_POST["name"];
$mes = $_POST["mes"];
$submit = $_POST["submit"];

$write = fopen(comment.txt, "a+");
fwrite($write,"<u><b> $name </b></u <br> $mes <br>");
fclose($write);

$read = fopen(comment.txt, "r+t");
echo "all comment";


while (!feof($read))
{
	echo(fread($read, 1024));
}

fclose($read);
?>