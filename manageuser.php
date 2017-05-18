<?php
    session_start();
    if(!$_SESSION['root'])
        header("main.php");
?>
<!DOCTYPE html>
<html>
<body>
<form action="add.php" method="post">
    <label>Nome do Prestador de serviço</label>
    <input type="text" name="username"/>
    <br/>
    <label>Serviço Contratado</label>
    <select name="service">
        <option value=""></option>
    </select>
    <br/>
    <label>Novo Serviço</label>
    <br>
    <input type="text" name="new_service">
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
