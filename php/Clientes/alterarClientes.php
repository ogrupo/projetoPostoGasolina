<?php
	//error_reporting(0);
    //chamo a inclusão do arquivo com os dados de conexão do banco	
    include("../conexao.php");
//se a variável global $_GET tiver dados, é porque existe um código passado pelo link "Alterar", presente no arquivo ListarClientes.php
if($_GET){
	/*pega o código do cliente */
	//veja que o cod foi passado como parâmetro na chamada da alteração presente no arquivo ListarClientes.php 
	$codigo = $_GET['cod'];
	//trecho de código para buscar os dados pelo código
	$query = mysql_query("SELECT * FROM cliente WHERE idCliente=" . $codigo);
	$exibe = mysql_fetch_array($query);
	//armazeno os dados em variáveis
	@$nome = $exibe['nome'];
	@$email = $exibe['email'];
    @$senha = $exibe['senha'];
    @$razaoSocial = $exibe['nomeEmpresa'];
    @$cnpj = $exibe['cnpj'];
}
?>
<html>
	<head>
		<title>Alteração de Dados</title>
        
                <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css">

    <link rel="stylesheet" href="../css/font-awesome.css">

    <link rel="stylesheet" href="../css/main.css">

    <link rel="stylesheet" href="../css/metisMenu.css">
        
    <link rel="stylesheet" href="../css/animate.css">
        
    <link href="../css/menu.css" rel="stylesheet" type="text/css" />
        
    <link href="../css/responsive.css" rel="stylesheet" type="text/css" />
        
    <link href="../css/menu.css" rel="stylesheet" type="text/css" />
        
    <link href="../css/core.css" rel="stylesheet" type="text/css" />
        
            <style>
                body{
                    background: repeat #444;
                }
                form{
                    margin-left: 40px;
                    padding-top: 40px;
                }
            </style>
        
	</head>
	<body>
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="assets/php/Clientes/page-user.php" class="logo"><span>Abasteça<span>Já!</span></span></a>
                    </div>
                    <!-- End Logo container-->

                </div>
            </div>
        </header>
	    <h1>Alteração de dados de cliente</h1>	
		<!--o método de envio do formulário é post e os dados são enviados para o mesmo arquivo do formulário-->
		
            <form method="post" name="alterarClientes.php">
		      <!-- note que o atributo name fará o papel de uma variável para conseguirmos resgatar os dados informados pelo usuário -->
                <!-- note também que o formulário aparece com valores preenchidos porque há a impressão das variáveis nos campos -->
			     Nome <br><input type="text" name="nome" value="<?php echo $nome ?>" ><br>
			     E-mail<br><input type="email" name="email" value="<?php echo $email ?>" ><br>
                 Senha<br><input type="password" name="senha" value="<?php echo $senha ?>" ><br>
                 Razão Social<br><input type="text" name="razaoSocial" value="<?php echo $razaoSocial ?>" ><br>
                 CNPJ<br><input type="text" name="CNPJ" value="<?php echo $cnpj ?>" ><br>
                <input type="submit" id="" value="Alterar" name="submit">
		  </form>

<br><br><!--<a href="listar-clientes.php"> Listar Clientes </a>-->		
	</body>
</html>
<?php
 /*fazer update*/ 
 //se houver valores na variável global $_POST é porque há dados preenchidos para alteração
 if($_POST){
	 //armazeno os dados do formulário em variáveis
	@$nome = $_POST["nome"];
    @$email = $_POST["email"];
    @$senha = $_POST["senha"];
    @$razaoSocial = $_POST["razaoSocial"];
    @$cnpj = $_POST["CNPJ"];
	
	//faço o comando DML para update de dados na tabela e armazeno na variável sql
    $sql = "UPDATE cliente SET nome='$nome', email='$email', nomeEmpresa='$razaoSocial',
    cnpj='$cnpj' WHERE idcliente=$codigo";
    /*$sql = "UPDATE cliente SET nome ='".$nome."', email='".$email."' WHERE idcliente = " . $codigo;*/
    echo ("Query: ".$sql);
	//chamo a função msql_query que efetua o update no banco e verifico o retorno da função
    if(mysql_query($sql,$conexao)){
        $msg = "Atualizado com sucesso!";
    }else{
        $msg = "Erro ao gravar!";
    }
	echo("<br>Resultado: ".$msg);
	//função que exibe exatemente o erro retornado no SGBD (caso houver)
	echo mysql_error($conexao);
	//fecho a conexão com o banco porque não será preciso usá-la mais
    mysql_close($conexao);   
	//comando que redireciona o usuário para a tela de lista de clientes após a alteração
	header("location:listar-clientes.php");
}	
?>