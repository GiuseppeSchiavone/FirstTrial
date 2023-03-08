<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Documento senza titolo </title>
</head>

<body>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<input type="text" name="nome_utente" placeholder="Nome utente"/><br/>
		<input type="email" name="indirizzo_email" placeholder="Indirizzo email"/><br/>
		<textarea rows="10" cols="100" name="testo_messaggio"></textarea><br/>
		<input type="submit" name="tasto_invia" value="Invia"/>
	</form>


<?php
	if (isset($_POST["tasto_invia"]))
	{
		echo "Ciao " . $_POST["nome_utente"] . ",il tuo indirizzo email è: " . $_POST["indirizzo_email"] . ".<br>";
		echo 'Il tuo messaggio è: "' . $_POST["testo_messaggio"] . '".<br> Grazie per averci contattato.<br>';
	}
	?>

</body>
</html>