<?php

//error_reporting(E_ALL);

if($_POST){
    @$id = mysql_insert_id();
    @$nome = $_POST["Nome"];
    @$email = $_POST["Email"];
    @$razaoSocial = $_POST["RazaoSocial"];
    @$cnpj = $_POST["CNPJ"];
    

    include_once '../conexao.php';
    //$sql = "insert into cliente values('".$id."','".$nome."','".$email."','".$senha."')";  
    //$sql = "insert into cliente values('$id','$nome','$email','$senha')";   
        $sql = "insert into cliente values('".$id."','".$nome."','".$email."','$_POST[Senha]','".$razaoSocial."','".$cnpj."')";
    echo ("Query: ".$sql);
    
    echo ("<br>Dados da conexão: ".$conexao); 
	
    if(mysql_query($sql,$conexao)){
        $msg = "Gravado com sucesso!";
    }else{
        $msg = "Erro ao gravar!";
    }
	echo("<br>Resultado: ".$msg);
	
	echo mysql_error($conexao);
	
    mysql_close($conexao);   
}

    header("location:http://localhost/programacao-web/Projeto_Abasteca_Ja/page.html");
?>