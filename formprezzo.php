<?php
	$risposta ='';
	$costo = 0;
	if(isset($_POST['invia'])) {
		$costo = $_POST["costo"];
		$utile = $costo * 0.20;
		$prezzo = $costo + $utile;
		$risposta = "Il prezzo del prodotto deve essere di $prezzo &euro;";
	}
	
	
?>

<!--codice html-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
		<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<link rel="shortcut icon"  type="image/ico" href="./img/favicon.ico" >
		<title>Prezzo di un prodotto</title>
		<style>
			*{
				padding:0;
				margin: 0;
				text-decoration: none;
			}
			body{
				font-size: 1em;
				font-family: 'Kanit', sans-serif;
				max-width: 600px;
				margin: 0 auto;
			}
			header{
				text-align: center;
				color: yellow;
				background: #468;
				font-size: 1.2em;
				font-weight: 700;
				margin: 20px 0;
			}
			fieldset{
				border: 3px ridge;
				border-color: #ddd #135 #135 #ddd;
			}
			legend{
				margin: 0 5px;
				padding: 0 5px;
				color: darkorange;
			}
			label{
				display: inline-block;
			   width: 54%;
			    padding: 20px 15px;
			    box-sizing:border-box;
			}
			form>input{
				padding: 3px 5px;
				width: 40%;
				box-sizing:border-box;
			}
			menu{
				text-align: center;
				margin: 20px 0;
			}
			menu>input{
				border: 1px solid #ddd;
				background: linear-gradient(#eee,#aaa);
				padding: 7px 23px;
				margin-bottom: 2px;
			}
			a{
				display: block;
				text-align: center;
				color: navy;
			}
			div{
				padding: 10px 0 20px 15px;
				color: darkgreen;
				background: navajowhite;
			}
			a:hover{
				color: crimson;
			}
		</style>
	</head>
	<body>
		<header>Il programma permette di calcolare il prezzo del prodotto nel caso in cui il
			venditore voglia guadagnare il 20% del costo.</header>
		<fieldset>
			<legend>Inserire il costo del prodotto</legend>
			<form action="" method="post">
				<label for="costo">Costo del	prodotto</label>
				<input type="number" name="costo" id="costo" value="<?php echo $costo; ?>" /><br/>
				<menu>
					<input type="submit" name="invia" value="Invia">
					<input type="submit" name="reset"	value="Cancella">
				</menu>
			</form>
			<div><?php echo $risposta; ?></div>
			<a href="./home.html">Torna al men&ugrave; principale</a>
	</body>
</html>