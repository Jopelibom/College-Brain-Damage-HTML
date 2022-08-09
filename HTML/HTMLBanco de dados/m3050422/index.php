<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> -  Contatinhos - </title>
</head>
<body>
<h1> -  Contatinhos - </h1> 
<form action="gravar.php" method="post">
	<td>Nome:<input type="text" name="nome" maxlength="35"></td>
	<td><img src="imgs/lupa.png" height="17" onclick="location.href = 'buscaNome.php?nome=' +nome.value;"></td>
	</tr>
	<p>Fone:<input type="text" name="fone" maxlength="14"></p>
	<p>E-mail:<input type="text" name="email" maxlength="35"></p>
	<p>Instagram:<input type="text" name="insta" maxlength="25"></p>
    <hr>
    <p><input type="submit" name="bt" values="gravar"></p>
    </form>
</body>
</html>