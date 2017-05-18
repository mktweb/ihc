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
       <a href="adduser.php">Gerenciar Acessos</a><br/>
<?php endif; ?>
       <a href="#">Gerenciar Senhas</a><br/>
       <a href="#">Relatório Gerencial</a><br/>
</body>
</html>
