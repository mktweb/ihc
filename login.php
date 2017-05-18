<?php
$username = $_POST["username"];
$password = $_POST["password"];

function load_passfile()
{
    $contents = fread($handle, filesize($filename));

    return $contents;
}

function authenticate($user, $pass)
{
    $filename = "l.txt";
    $handle = fopen($filename, "r");

    $auth = false;

    while ($line = fgets($handle)) {
        $credentials = split(":", trim($line));

        if ($user == $credentials[0] && $pass == $credentials[1]) {
            $auth = true;
            break;
        }
    }

    fclose($handle);

    return $auth;
}

if (authenticate($username, $password)) {
    session_start();
    $_SESSION["root"] = $username == "root";
    header("location: main.php");
} else {
    echo "Fail!";
}

?>
