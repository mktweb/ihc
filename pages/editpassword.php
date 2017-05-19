<?php
session_start();
$is_root = $_SESSION["root"];
?>
<?php
    $dados = $_GET['edit'];
    $d = explode(";", $dados);
?>
<!DOCTYPE html>
<html>
<body>
<?php if ($is_root): ?>
       <a href="manageaccess.php">Gerenciar Colaboradores</a><br/>
<?php endif; ?>
       <a href="managepassword.php">Gerenciar Senhas</a><br/>
       <a href="report.php">Relatório Gerencial</a><br/>
       <br><br>
<form action="processpassword.php" method="post" id="formulario">
    <label>Nome do Prestador de serviço</label>
    <input type="text" name="prestador" value="<?php echo $d[0]; ?>" />
    <br/>
    <label for="service">Serviço Contratado</label>
    <select name="service">
        <option value="">Selecione</option>
        <?php
        $file = "database.txt";
        $fp = fopen($file, "r");
        while (!feof($fp)) {
            $dados = fgets($fp);
            $data = explode(";", $dados);
            echo '<option value="'.$data[1].'"';
            if($data[1] == $d[1]) echo 'selected="selected"';
            echo '>'.$data[1]."</option>";
        }
        ?>
    </select>
    <a href="#" id="novo" onclick="novo();">Novo Serviço</a>
    <div style="display: none;" id="ns">
        <label for="service">Novo Serviço</label>
        <input type="text" name="new_service">
    </div>
    <br>
    <label for="">Nome do usuário (login)</label>
    <input type="text" name="username" value="<?php echo $d[2]; ?>"/>
    <br/>
    <label>Senha do usuário</label>
    <input type="password" name="password" value="<?php echo $d[3]; ?>"/>
    <br/>
    <label>Link para o Serviço</label>
    <input type="text" name="link" value="<?php echo $d[4]; ?>"/>
    <br/>
    <label>Utilizador da senha</label>
    <input type="text" name="owner" value="<?php echo $d[5]; ?>"/>
    <br/>
    <input type="submit" name="sendButton" value="Enviar"/>
</form>
<script type="text/javascript">
function novo() {
    document.getElementById("novo").addEventListener("click", function(event){
        event.preventDefault();
    });
    document.getElementById("ns").style.display = "block";
}
</script>

</body>
</html>