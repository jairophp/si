<?php


if(isset($_FILES['fileUpload']))
{
    date_default_timezone_set("Brazil/East"); //Definindo timezone padr�o

    $ext = strtolower(substr($_FILES['fileUpload']['name'],-4)); //Pegando extens�o do arquivo
     $nome_final = $_FILES['fileUpload']['name'];

    $dir = 'uploads/'; //Diret�rio para uploads

    move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$nome_final); //Fazer upload do arquivo
}
?>