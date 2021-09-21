<?php
	session_start();
	$_SESSION['nome']=$_POST['nome'];
	$_SESSION['telefone']=$_POST['telefone'];
	$banco = new PDO('mysql:host=localhost;dbname=final2', 'root','');
	$novo_cliente = array('nome'=>$_POST['nome'],'telefone'=>$_POST['telefone']);
	$banco->prepare('INSERT INTO clientes (nome,telefone) VALUES (:nome,:telefone)')->execute($novo_cliente);
?>
<html>
	<head>
		<title>Armazenado</title>
	</head>
	<body>
		<a href="visualizar.php">Visualizar dados</a>
	</body>
</html>