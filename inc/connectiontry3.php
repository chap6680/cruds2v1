<?php

// PDO  $pdo = new PDO('mysql:host=localhost;dbname=db83788_treecruds2v1;port=8889', 'db83788_dc', 'u$nQ7cK^98Ef');
//$row = $statement->fetch(PDO::FETCH_ASSOC);

$pdo = new PDO('mysql:host=internal-db.s83788.gridserver.com;dbname=db83788_treecruds2v1', 'db83788_dc', 'u$nQ7cK^98Ef');
$statement = $pdo->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
$row = $statement->fetch(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo htmlentities($row['_message']); 
echo "hello"
