<?php
session_start();
$is_root = $_SESSION["root"];
?>
<!DOCTYPE html>
<html>
<head>
	<title> Adicionar Colaborador</title>
</head>
<body style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px;">
<?php if ($is_root): ?>
       <a href="manageaccess.php">Gerenciar Colaboradores</a><br/>
<?php endif; ?>
       <a href="managepassword.php">Gerenciar Senhas</a><br/>
       <a href="report.php">Relatório Gerencial</a><br/>
       <br><br>
	<div style="background-color: #f6f6f6; margin: 0px 0px 0px 0px; padding: 15px 0px 0px 10px; height: 40px;">
		<a href="/main.php">Back</a>
	</div>
	<form action="processaccess.php" style="padding: 0px 0px 0px 10px;" method="post">
		<label for="username">Nome de acesso:</label>
		<input type="text" name="username">
		<br>
		<label for="password">Senha:</label>
		<input type="text" name="password">
		<br>
		<input type="submit" value="Adicionar">
	</form>
</body>
</html>