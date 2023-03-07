	<?php
	$nome = $_POST["nome"];
	$fone = $_POST["fone"];
	$email = $_POST["email"];
	$instagram = $_POST["instagram"];
	 //echo "$nome, $fone, $email, $instagram";


	try {
	  $pdo = new PDO('mysql:host=localhost;dbname=contatosm', 'root', Null);
	  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	  $stmt = $pdo->prepare('INSERT INTO pessoas VALUES (:id, :nome, :fone, :email, :instagram)');
	  $stmt->execute(array(
	    ':id' => null,
	    ':nome' => $nome,
	    ':fone' => $fone,
	    ':email' => $email,
	    ':instagram' => $instagram,
	  ));
	  echo("<script>alert('Dados registrados com sucesso...');</script>");
	  // echo $stmt->rowCount();
	} catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();
}
	?>
