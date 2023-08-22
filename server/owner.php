<?php

$key = $_SESSION['key'];

$codedbyangeris = $conn->query("SELECT * FROM users WHERE key_pas='$key'")->fetch();

if ($codedbyangeris['owner'] != 1) {
    header("Location: check.decart");
}

?>