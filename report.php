<?php
    session_start();
?>

<html>
<body>

<?php

$filename = "database.txt";
$handle = fopen($filename, "r");

<div class="ui centered grid">
  <div class="row">
    <div class="ui fourteen wide column">
      <table class="ui celled table">
        <thead>
          <tr>
            <th>Nome de Prestador de Serviço</th>
            <th>Serviço Contratado</th>
            <th>Nome Usuário</th>
            <th>Senha Usuário</th>
            <th>Utilizador da Senha</th>
            <th>Link Serviço</th>
          </tr>
        </thead>
        <tbody>

  while ($line = fgets($handle)) {
    echo "<tr>"
    $columns = split(";", trim($line));

    foreach ($columns as &$value) {
        echo "<td>$value</td>";
    }

    echo "</tr>"
    echo "<br/>";
}
      </tbody>
    </table>
    </div>
  </div>
</div>
fclose($handle);

?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css">


</body>
</html>
