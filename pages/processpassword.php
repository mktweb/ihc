<?php
session_start();
$is_root = $_SESSION["root"];
?>
<?php if ($is_root): ?>
       <a href="manageaccess.php">Gerenciar Colaboradores</a><br/>
<?php endif; ?>
       <a href="managepassword.php">Gerenciar Senhas</a><br/>
       <a href="report.php">Relatório Gerencial</a><br/>
       <br><br>
<?php
$filename = "database.txt";
$handle = fopen($filename, "a");

$prestador = $_POST['prestador'];
if($_POST['service'] != "")
	$service = $_POST['service'];
else
	$service = $_POST['new_service'];
$username = $_POST['username'];
$password = $_POST['password'];
$link = $_POST['link'];
$owner = $_POST['owner'];

$data = "\n".$prestador.";".$service.";".$username.";".$password.";".$link.";".$owner;

if(fwrite($handle, $data)){
	echo "Dados gravados com sucesso.<br><br>";
} else {
	echo "Erro ao gravar senha, tente novamente.<br><br>";
}
echo "<a href='managepassword.php'>Gerenciar Senhas</a> / <a href='addpassword.php'>Nova Senha</a>";
fclose($handle);

