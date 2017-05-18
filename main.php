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
       <a href="adduser.php">Cadastrar usuario do sistema</a><br/>
<?php endif; ?>
       <a href="#">Cadastrar client</a><br/>
</body>
</html>
