<html>
	<head>
		<title>Clientes</title>
        <meta charset="utf-8">
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
        table{
            color: white;
            /*font-variant-alternates: normal;*/
        }
        a{
            color: yellow;
        }
    </style>
        
	</head>

	<body>
    <header id="topnav">
        <div class="topbar-main">
            <div class="container">
                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="../Clientes/page-user.php" class="logo"><span>Abasteça<span>Já!</span></span></a>
                </div>
                    <!-- End Logo container-->

                </div>
            </div>
        </header>
	<h1>Lista de Clientes</h1>
	<center>
	<table border="2">
		<tr bgcolor="black" align="center" valign="center">
			<td><branco>Código do Cliente</branco></td>		
			<td><branco>Nome</branco></td>		
			<td><branco>Email</branco></td>
            <td><branco>Senha</branco></td>
            <td><branco>Razão Social</branco></td>
            <td><branco>CNPJ</branco></td>
			<td><branco>Ação</branco></td>
		</tr>
		
<?php 

    include_once '../conexao.php'; 
	
	$query = mysql_query ("SELECT * FROM cliente");
	
	while ($exibe = mysql_fetch_array($query)) {	
        
	echo "<tr align='center'>" .
		 "<td>" . $exibe['idCliente'] . "</td>" .
	     "<td>" . $exibe['nome'] .  "</td>" .	
	     "<td>" . $exibe['email'] . "</td>".
         "<td>" . $exibe['senha'] . "</td>".
         "<td>" . $exibe['nomeEmpresa'] . "</td>".
         "<td>" . $exibe['cnpj'] . "</td>";
?>			
        <td>
		<a href="alterarClientes.php?cod=<?php echo $exibe['idCliente'] ?>">Alterar</a> 
		<a onclick="return confirm('Confirma a exclusão do Cliente <?php echo $exibe['idCliente'] ?>?');" href="deletar-clientes.php?cod=<?php echo $exibe['idCliente'] ?>">Excluir</a>		
<?php
		echo "</td>" .
		 "</tr>";
	}
	echo "</table></center></div><br><br><br>";
?>
    </body>
</html>