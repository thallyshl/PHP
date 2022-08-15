<?php
require_once ('header.php');

$name = filter_input(INPUT_POST, 'nome');
$password = filter_input(INPUT_POST, 'senha');

if ($name && $password) {
    echo "<h2>NOME:</h2> $name";
} else {
    echo 'Não enviou!';
};



?>