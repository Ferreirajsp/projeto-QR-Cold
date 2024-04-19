<?php
    $servidor = "localhost";
    $usuario= "root";
    $senha="123456";
    $dbname = "qrcode";

    $conexao=new mysqli($bdHost,$bdusuario,$bdsenha,$bdnome);
    if(!$conexao-> connect_erro){
     echo"Erro";
    }
    else{
        echo"conexão efetuada com sucesso";
    }  
    ?>