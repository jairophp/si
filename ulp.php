<?php


if(isset($_FILES['fileUpload']))
{
    date_default_timezone_set("Brazil/East"); //Definindo timezone padrão

    $ext = strtolower(substr($_FILES['fileUpload']['name'],-4)); //Pegando extensão do arquivo
     $nome_final = $_FILES['fileUpload']['name'];

    $dir = 'uploads/'; //Diretório para uploads

    move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$nome_final); //Fazer upload do arquivo
}
?>