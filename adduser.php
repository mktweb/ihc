<?php
    session_start();
?>
<html>
<body>
<form action="add.php" method="post">
    <label>Nome do Prestador de serviço</label>
    <input type="text" name="username"/>
    <br/>
    <label>Serviço Contratado</label>
    <input type="text" name="service"/>
    <br/>
    <label>Nome do usuário (login)</label>
    <input type="text" name="username"/>
    <br/>
    <label>Senha do usuário</label>
    <input type="password" name="password"/>
    <br/>
    <label>Link para o Serviço</label>
    <input type="text" name="link"/>
    <br/>
    <label>Utilizador da senha</label>
    <input type="text" name="owner"/>
    <br/>
    <input type="submit" name="sendButton" value="Enviar"/>
</form>
</body>
</html>
