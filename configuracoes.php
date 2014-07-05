<?php
header('Content-Type: text/html; charset=utf-8');

mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db( "trade-bot") or die(mysql_error());

$query = "select * from variaveis";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);

 if(isset($_GET['acao'])){
 
	if ($_GET['acao'] == "atualiza") {
	
		if (isset($_POST['valor'])){
			$valor = $_POST['valor'];
			$update = "update variaveis set valor = $valor";
			$do = mysql_query($update) or die(mysql_error());
		}
		if (isset($_POST['fee'])){
			$fee = $_POST['fee'];
			$update = "update variaveis set fee = $fee";
			$do = mysql_query($update) or die(mysql_error());
		}
		if (isset($_POST['tempo'])){
			$tempo = $_POST['tempo'];
			$update = "update variaveis set tempo = $tempo";
			$do = mysql_query($update) or die(mysql_error());
		}
	}
	
	echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0; URL=".$_SERVER['PHP_SELF']."\" >";
}

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
			  <li><a href="index.php">Home</a></li>
              <li><a href="auto-trade.php">Auto Trade</a></li>
              <li class="active"><a href="configuracoes.php">Configurações</a></li>

          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
	  
<div class="jumbotron">
	<p><b>Valor para Trade:</b> <span style="color:red">$<?php echo $row['valor']; ?></span></p>
	<form method="post" action="?acao=atualiza"><div class="input-group"  style="width:250px;" ><span class="input-group-addon">$</span><input type="text" class="form-control" name="valor" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')"/><span class="input-group-btn"> <button type="submit" class="btn btn-default">Atualizar</button> </span></div></form></br></br>
	<p><b>Fee Transação:</b> <span style="color:red"><?php echo $row['fee']; ?>%</span></p>
	<form method="post" action="?acao=atualiza"><div class="input-group"  style="width:250px;" ><span class="input-group-addon">%</span><input type="text" class="form-control" name="fee" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" /><span class="input-group-btn"> <button type="submit" class="btn btn-default">Atualizar</button> </span></div></form></br></br>
	<p><b>Tempo Máximo:</b> <span style="color:red"><?php echo $row['tempo']; ?> minutos </span></p>
	<form method="post" action="?acao=atualiza"><div class="input-group"  style="width:250px;" ><span class="input-group-addon">minutos</span><input type="text" class="form-control" name="tempo" onkeyup="this.value=this.value.replace(/[^\d]/,'')"/><span class="input-group-btn"> <button type="submit" class="btn btn-default">Atualizar</button> </span></div></form></br></br>
	
</div>
</div>
</body>