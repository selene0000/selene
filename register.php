		<?php
		//https://api.telegram.org/bot118569545:AAFlvM1DcIhbs63TlnF_bBFmEZ4Vni2inyQ/setwebhook?url=https://siabot.herokuapp.com/execute.php
		// PARAMETRI DA MODIFICARE
		//inserite vostro indirizzo su heroku 
		//https://username.herokuapp.com/execute.php
		//inserisci l'ure dell'execute su heroku es: https://telegram2.herokuapp.com/execute.php
		$WEBHOOK_URL = 'https://fathomless-oasis-56337.herokuapp.com/execute.php';
		//inserite il vostro token che vi ha fornito l'utente telegram @botfather
		$BOT_TOKEN = '1780321361:AAEsFLw1viwxa4A9wClyYImYukt2L0c_2Bg';

		// NON APPORTARE MODIFICHE NEL CODICE SEGUENTE
		$API_URL = 'https://api.telegram.org/bot' . $BOT_TOKEN .'/';
		$method = 'setWebhook';
		$parameters = array('url' => $WEBHOOK_URL);
		$url = $API_URL . $method. '?' . http_build_query($parameters);
		
		$handle = curl_init($url);

		
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($handle, CURLOPT_TIMEOUT, 60);
		$result = curl_exec($handle);
		print_r($result);
		?>
