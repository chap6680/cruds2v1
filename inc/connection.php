<?php

try {
    $db =new PDO('mysql:host=internal-db.s83788.gridserver.com;dbname=db83788_treecruds2v1', 'db83788_dc', 'u$nQ7cK^98Ef');
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
//var_dump($db);