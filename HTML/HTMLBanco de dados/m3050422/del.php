<?php
require_once "conectar.php";
$id = $_GET["id"];
try {
  $stmt = $pdo->prepare('DELETE FROM pessoas WHERE id = :id');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  echo("<script>alert('Dados excluidos com sucesso...');location.href = 'buscar.php'</script>");
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>