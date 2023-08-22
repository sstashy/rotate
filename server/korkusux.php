<?php
$key = $_SESSION['key'];
$bacısikenangeris = $conn->query("SELECT * FROM users WHERE key_pas='{$key}'")->fetch();

if ($bacısikenangeris['role'] != 2) {
    header("Location: /check.decart");

}

?>