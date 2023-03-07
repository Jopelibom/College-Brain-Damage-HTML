<?php
$nome = $_GET["nome"];
//echo "$nome";

try {
  $pdo = new PDO('mysql:host=localhost;dbname=votacao', 'root', Null);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare('INSERT INTO tab (id, nome) VALUES(:id, :nome)');
  $stmt->execute(array(
    ':id' => Null,
    ':nome' => $nome
  ));

  echo("<script>alert('Voto computado com sucesso...');location.href='votar.php';</script>");
} catch(PDOException $e){ 
  echo("<script>alert('Falha ao computar voto...');location.href='votar.php';</script>");
}

?>
