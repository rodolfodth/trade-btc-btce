<?php
header('Content-Type: text/html; charset=utf-8');

?>

<head>
<title>Trade Bot BTC-E</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script src="js/bootstrap.js"></script>
</head>
<body>

<div class="container">

<div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">BTC-e Trade Bot</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
			  <li  class="active"><a href="index.php">Home</a></li>
              <li><a href="auto-trade.php">Auto Trade</a></li>
              <li><a href="configuracoes.php">Configurações</a></li>

          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
	  
<div class="jumbotron">
<h1>BTC-e Trade Bot</h1>
<h3>Realize trades automáticos no BTC-e, antes coloque as configurações ideais!</h3></br>
<p style="float:left; margin-right:10px;"><a class="btn btn-lg btn-success" href="auto-trade.php" role="button">Ir para Auto Trade </a></p>
<p><a class="btn btn-lg btn-warning" href="configuracoes.php" role="button">Ir para Configurações </a></p>	
</div>
</div>
</body>