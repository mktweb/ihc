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
<?php
$filename = "l.txt";
$handle = fopen($filename, "a");

$username = $_POST['username'];
$password = $_POST['password'];

$data = "\n".$username.":".$password;

if(fwrite($handle, $data) != FALSE){
	echo "Colaborador adicionado com sucesso!<br>";
} else {
	echo "Falha ao adicionar Colaborador. Tente novamente.<br>";
}
echo '<a href="manageaccess.php">Gerenciar Colaboradores</a> / <a href="manageaccess.php">Adicionar Colaborador</a>';

fclose($handle);
?>
</body>
</html>