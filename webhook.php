<?php
	date_default_timezone_set("America/Mexico_City");
	$html="Empezando Githook:".date("Y/m/d H:i:s");
	/**
	* GIT DEPLOYMENT SCRIPT
	*
	* Used for automatically deploying websites via github or bitbucket, more deets here:
	*
	* https://gist.github.com/1809044
	*/
	// The commands
	$commands = array(
		'echo $PWD',
		'whoami',
		'git pull',
		'git status',
	);
	// Run the commands for output
	$output = '';
	foreach($commands AS $command){
		// Run it
		$tmp = shell_exec($command);
		// Output
		$output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
		$output .= htmlentities(trim($tmp)) . "\n";
	}

	$html.="<!DOCTYPE HTML>";
	$html.="<html lang='en-US'>";
	$html.="<head>";
		$html.="<meta charset='UTF-8'>";
		$html.="<title>GIT DEPLOYMENT SCRIPT</title>";
	$html.="</head>";
	$html.="<body style='background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;'>";
		$html.="<pre>";
		$html.=". ____ . ____________________________";
		$html.="|/ \| | |";
		$html.="[| <span style='color: #FF0000;'>&hearts; &hearts;</span> |] | Git Deployment Script v0.1 |";
		$html.="|___==___| / &copy; oodavid 2012 |";
		$html.="|____________________________|";
		    $html.="$output;";
		$html.="</pre>";
	$html.="</body>";
	$html.="</html>";
	$html.="Terminando Githook:".date("Y/m/d H:i:s");
	$file = fopen('githooklog.html', 'w');
    fwrite($file, $html . PHP_EOL);
	fclose($file);
	echo $html;
?>
