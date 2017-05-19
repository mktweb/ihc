<?php
session_start();
$is_root = $_SESSION["root"];
$fp = fopen("l.txt", "r");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Colaborador</title>
</head>
<body style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px;">
<?php if ($is_root): ?>
       <a href="manageaccess.php">Gerenciar Colaboradores</a><br/>
<?php endif; ?>
       <a href="managepassword.php">Gerenciar Senhas</a><br/>
       <a href="report.php">Relatório Gerencial</a><br/>
       <br><br>
	<table>
		<thead>
			<tr>
				<td>Usuário</td>
				<td>Senha</td>
				<td>Ações</td>
			</tr>
		</thead>
		<tbody>
		<?php
		while (!feof($fp)) {
			$buffer = fgets($fp);
			$buffer = explode(":", $buffer);
		?>
			<tr>
				<td><?php echo $buffer[0]; ?></td>
				<td><?php echo $buffer[1]; ?></td>
				<td><a href="removeaccess.php?username=<?php echo $buffer[0]; ?>&password=<?php echo $buffer[1]; ?>">Remover</a></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
	<a href="addaccess.php">Adicionar Colaborador</a>
</body>
</html>