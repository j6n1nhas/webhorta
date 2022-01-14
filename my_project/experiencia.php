<?php
$produto = "Grao-de-bico";
$produto = strtolower($produto);
$dir_handle = opendir("/home/johnny/Documents/Cursos/ISLA/ANO 2/SEMESTRE 3/Programação para a Web/Projeto/Project_root/my_project");
while(false !== ($entry = readdir($dir_handle)))
{
    $fname = strtolower(pathinfo($entry, PATHINFO_FILENAME));
    echo $fname."\n";
    if(str_contains($fname, $produto))
    	echo $fname." tem ".$produto." no nome\n";
}
