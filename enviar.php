<?php


$produto = $_POST["produto"];
$preço = $_POST["preço"];



if(isset($_FILES['foto']))
 {
    $ext = strtolower(substr($_FILES['foto']['name'],-4)); //Pegando extensão do arquivo
    $new_name = "foto.jpg"; //Definindo um novo nome para o arquivo
    $dir = './imagens/'; //Diretório para uploads 
    move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
 } 
 

 //validando se tem o nome do produto


 if (empty($produto)) {
     echo "Complete o nome do produto";  
}



 
 //validando que o preço seja numério
 if(!is_numeric($preço)) {

    echo "Este campo pode conter apenas número";
 }

 //validando se tem a foto
 if(empty($_FILES['foto'])) {
    echo "Favor adicionar a foto";

}


