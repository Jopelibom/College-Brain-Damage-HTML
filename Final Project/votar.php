<?php
$cl = 0;
$ka = 0;


$pdo = new PDO('mysql:host=localhost;dbname=votacao', 'root', Null);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$consulta = $pdo->query("SELECT nome FROM tab ;");

while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    if ($linha ['nome'] == 'cl'){$cl++;}
    if ($linha ['nome'] == 'ka'){$ka++;}

}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Sorvete', <?php echo("$cl"); ?>],
            ['Açaí', <?php echo("$ka"); ?>]
               
        ]);

        var options = {
          title: 'Tabela de votos atual',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
    <meta charset="UTF-8">
    <title>Restaurante menu</title>
    <style>
    
*, *:before, *:after {
  -webkit-box-sizing: inherit;
  -moz-box-sizing: inherit;
  box-sizing: inherit;
}

::-webkit-input-placeholder {
  color: #56585b;
}

::-moz-placeholder {
  color: #56585b;
}

:-moz-placeholder {
  color: #56585b;
}

html {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Lato', sans-serif;
  margin: 0;
  background: url(imgs/80.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  color: #0a0a0b;
}

ul, nav{
  list-style: none;
  padding: 0;
}

a {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
  opacity: 0.9;
}

a:hover {
  opacity: 1;
}


h1 {
  font-size: 2rem;
  font-weight: 700;
  color: #fff;
  margin: 0 0 1.3rem;
}


i {
  font-size: 1.3rem;
}

header {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 10;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: #fff;
  padding: 10px 100px 0;
}

header nav ul {
  display: flex;
}

header nav li{
  margin: 0 15px;
}

header nav li:first-child{
  margin-left: 0; 
}

header nav li:last-child{
  margin-right: 0;  
}

a.topo {
  color: #fff;
  padding: 10px;

  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  transition: all 0.2s;
}

a.topo:hover {
  background: #c78933;
  border: 1px solid #c78933;
  color: #fff;
}

.tabela{
  color: #475663;
  height: 80vh;
  position: absolute;
}

.flex-form input[type="submit"] {
  background: #c78933;
  border: 1px solid #c78933;
  color: #fff;
  padding: 0 30px;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  transition: all 0.2s;
}

.flex-form input[type="submit"]:hover {
  background: #c78933;
  border: 1px solid #c78933;
}

.flex-form {
  display: -webkit-box;
  display: flex;
  z-index: 10;
  position: relative;
  width: 500px;
  box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.3);
}

.flex-form > * {
  border: 0;
  padding: 0 0 0 10px;
  background: #fff;
  line-height: 50px;
  font-size: 1rem;
  border-radius: 0;
  outline: 0;
  -webkit-appearance: none;
}


.image {
  filter: grayscale(25%);
  width: 80px;
  height: 80px;
  flex-shrink: 0;
  object-fit: cover;
  margin-right: 1.5em;
}


image:hover{
	filter: grayscale(0%);
	transform: scale(1.2);
	transition: all 0.3s;
}

#madeby {
  position: absolute;
  bottom: 0;
  right: 0;
  padding: 25px 100px;
  color: #fff;
}


  .flex-form {
    display: -webkit-box;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
  }

  input[type="search"] {
    flex-basis: 0;
  }


  .container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 1.5em;
}

.menu {
  font-family: 'Lato', sans-serif;
  font-size: 14px;
}

.cabecario {
  background-color:#4756632f;
  color: #ffffff;
  margin: 0;
  padding-bottom: 0em;
  border-bottom: 2px solid #c78933;

}

.grupo {
  background-color:#4756632f;
  color: #ffffff;
  display: grid;
  grid-template-columns: 1fr;
  gap: 1.5em;
  padding: 1.5em 0;
}

.item {
  color: #ffffff;
  display: flex;
}

.item-image {
  width: 80px;
  height: 80px;
  flex-shrink: 0;
  object-fit: cover;
  margin-right: 1.5em;
}

.item-texto {
  flex-grow: 1;
}

.item-cabecario {
  display: flex;
  justify-content: space-between;
  margin: 0;
}

.item-nome {
  margin-right: 1.5em;
}

.menu-item-description {
  line-height: 1.6;
}



  .grupo {
    grid-template-columns: repeat(2, 1fr);
  }

  .item-image {
    filter: grayscale(25%);
    width: 125px;
    height: 125px;
  }
  .item-image:hover{
	filter: grayscale(0%);
	transform: scale(1.2);
	transition: all 0.3s;
}



    </style>
</head>
<body>
    <div class="container">

  <header>
    <h2><a href="index.html"><i class="ion-plane"></i> Restaurante</a></h2>
    <nav>
    <ul>
        <li>
          <a class="topo" href="index.html" title="Home">Home</a>
        </li>
        <li>
          <a class="topo" href="menu.html" title="Menu">Menu</a>
        </li>
        <li>
          <a class="topo" href="sobre.html" title="Sobre">Sobre</a>
        </li>
        <li>
          <a class="topo" href="votar.php" title="Sobre">Votação</a>
        </li>
      </ul>
    </nav>
  </header>



</div></div>




<div class="container">
  <div class="menu">
    <h2 class="cabecario">
      Vote no especial da semana
    </h2>
    <div class="grupo">
      <div class="item">
      <a href="registra.php?nome=cl"><img class="item-image" src="imgs/sorvet.png" alt="comidanome"></a>
        <div class="item-texto">
          <h3 class="item-cabecario">
            <span class="item-nome">Taça de sorvete 500ml</span>
            <span class="item-preco">R$16.90</span>
          </h3>
          <p class="menu-item-description">
          Taça de sorvete 500ml
            / R$0.50 por acompanhamento adicional 
          </p>
        </div>
      </div>
      <div class="item">
      <a href="registra.php?nome=ka"><img class="item-image" src="imgs/acai.png" alt="comidanome"></a>
        <div class="item-texto">
          <h3 class="item-cabecario">
            <span class="item-nome">Açaí</span>
            <span class="item-preco">R$9.90</span>
          </h3>
          <p class="menu-item-description">
          Açaí 300g
            - Leite Condensado
            - Morango
            - Aveia
            - Banana

          </p>
        </div>
      </div>
    </div>
  </div>
</div>
    <div class="container">
    <div class="grupo" id="donutchart" style="width: 400px; height: 400px;"></div>
</body>
</html>