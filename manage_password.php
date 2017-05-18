<?php
    session_start();
    $is_root = $_SESSION["root"];
?>

<html>
<body>

<?php

$filename = "database.txt";
$handle = fopen($filename, "r");

while ($line = fgets($handle)) {
    $columns = split(";", trim($line));

    foreach ($columns as &$value) {
        echo "$value ";
    }

    if ($is_root) {
        echo '<a href="#">DELETE</a>';
    }

    echo "<br/>";

}

fclose($handle);

?>

</body>
</html>




