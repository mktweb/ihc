<?php
    session_start();
    $is_root = $_SESSION["root"];

    // cadastrar usuario do sistema
    // cadastrar senha de acesso
    // consultar senha de acesso

?>
<html>
<body>
<?php if ($is_root): ?>
       <a href="manageaccess.php">Gerenciar Colaboradores</a><br/>
<?php endif; ?>
       <a href="managepassword.php">Gerenciar Senhas</a><br/>
       <a href="report.php">Relatório Gerencial</a><br/>
</body>
</html>
