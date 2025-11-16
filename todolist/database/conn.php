<?php

try{
    $pdo = new PDO(
        'mysql:host=localhost;
        dbname=ToDo;
        port=3306;
        password=''
    ', 'root', '');
} catch (PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
}
