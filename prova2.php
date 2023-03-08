<?php
	if (isset($_POST["tasto_invia"]))
	{
		echo "Ciao " . $_POST["nome_utente"] . ", il tuo indirizzo email e: " . $_POST["indirizzo_email"] . ".<br>";
		echo 'Il tuo messaggio e: "' . $_POST["testo_messaggio"] . '".<br> Grazie per averci contattato.<br>';
	}
	?>