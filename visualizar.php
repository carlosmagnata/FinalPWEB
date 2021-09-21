<html>
	<head>
		<title>Visualizar</title>
	</head>
	<body>
		<?php
			session_start();
			echo "<h1>Dados:</h1><br>Nome: ".$_SESSION['nome']."<br>Telefone: ".$_SESSION['telefone'];
		?>
	</body>
</html>