<?php
session_start();
$is_root = $_SESSION["root"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Remover Colaborador</title>
</head>
<body style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px;">
<?php if ($is_root): ?>
       <a href="manageaccess.php">Gerenciar Colaboradores</a><br/>
<?php endif; ?>
       <a href="managepassword.php">Gerenciar Senhas</a><br/>
       <a href="report.php">Relatório Gerencial</a><br/>
       <br><br>
<?php
$filename = "l.txt";
$handle = fopen($filename, "r");

$username = $_GET['username'];
$password = $_GET['password'];

$data = $username.":".$password;

while (!feof($handle)) {
	if(fgets($handle) != $data) {
		$dados .= $data."\n";
	}
}

fclose($handle);

echo 'Usuário removido com sucesso<br><a href="manageaccess.php">Gerenciar Colaboradores</a> / <a href="addaccess.php">Adicionar Colaborador</a>';
file_put_contents("l.txt", $dados);
?>
</body>
</html>