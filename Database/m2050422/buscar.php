	<?php
		require_once "conectar.php";

	$consulta = $pdo->query("SELECT * FROM pessoas;");
	echo "<table border=1>
				<tr>
		        <td>Nome</td>
		        <td>Fone</td>
		        <td>Email</td>
		        <td>Insta</td>
		        </tr>
		  ";      
		  while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
		  	echo "<tr>
		  		<td>{$linha['nome']}</td>
		  		<td>{$linha['fone']}</td>
		  		<td>{$linha['email']}</td>
		  		<td>{$linha['insta']}</td>
		  		<td></td>
		  		<td></td>
		  		</tr>
		  ";
		  
	}
	echo "</table><br><h1 onclick=print();>IMPRIMIR</h1>";
	?>