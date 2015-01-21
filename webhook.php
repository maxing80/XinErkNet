<?php
	date_default_timezone_set("America/Mexico_City");
 	echo date("Y/m/d H:i:s")." Entrando a webhook<br/>\n";
	// Use in the "Post-Receive URLs" section of your GitHub repo.
	if ( $_POST['payload'] ) {
		shell_exec( 'cd /srv/www/git-repo/ && git reset --hard HEAD && git pull');
		echo "Ejecute el pull"
	}
	echo date("Y/m/d H:i:s")." Finalizando a webhook<br/>\n";
?>

