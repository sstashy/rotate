<?php
$key = $_SESSION['key'];
$bacısikenangeris = $conn->query("SELECT * FROM users WHERE key_pas='{$key}'")->fetch();

if ($bacısikenangeris['role'] != 1) {
    header("Location: /check.decart");

}

?>