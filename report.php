<?php
    session_start();
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

    echo "<br/>";
}

fclose($handle);

?>

</body>
</html>




