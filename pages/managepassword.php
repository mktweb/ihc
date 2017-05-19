<?php
    session_start();
    $is_root = $_SESSION["root"];
?>

<html>
<body>
<?php if ($is_root): ?>
       <a href="manageaccess.php">Gerenciar Colaboradores</a><br/>
<?php endif; ?>
       <a href="managepassword.php">Gerenciar Senhas</a><br/>
       <a href="report.php">Relatório Gerencial</a><br/>
       <br><br>
<table>
    <thead>
        <tr>
            <td>Nome do Prestador de serviço</td>
            <td>Serviço Contratado</td>
            <td>Nome do Usuário</td>
            <td>Senha do Usuário</td>
            <td>Link para o serviço</td>
            <td>Utilizador da Senha</td>
            <?php if ($is_root) { ?>
            <td>Ação</td>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
    <?php

    $filename = "database.txt";
    $handle = fopen($filename, "r");

    while ($line = fgets($handle)) {
        echo "<tr>";
        $columns = split(";", trim($line));

        for ($i=0; $i < 6; $i++) { 
            echo "<td>".$columns[$i]."</td>";
        }
        echo "<td> <a href='editpassword.php?edit=".$line."'>Editar</a>";
        if ($is_root) {
            echo ' / <a href="removepassword.php?rem='.$line.'">Remover</a>';
        }

        echo "</td></tr>";

    }

    fclose($handle);

    ?>
    </tbody>
</table>
<br>
<br>
<a href="addpassword.php">Nova Senha</a>
</body>
</html>




