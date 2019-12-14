<?php
    require_once("menu.php");
    require_once("footer.php"); 
    if ( isset(  $_POST["btn_message"])){
		$to = "integrationspruefung@redsyntax.de";
		$subject = $_POST["subject"];
		$message = "Über das Kontaktformular wurde folgende Nachricht gesendet\r\n\r\n";
		$message .= "Von: " .$_POST["email"]."\r\n\r\n";
		$message .= "Betreff: " .$_POST["subject"]."\r\n\r\n";
		$message .= "Nachricht: " .$_POST["message"];
		$sender_mail = "integrationspruefung@redsyntax.de";
		$headers = 'From: ' .$sender_mail . "\r\n". 
			'Reply-To: ' . $sender_mail. "\r\n" . 
			'X-Mailer: Integrationspruefung-Mailprogramm';

		mail($to, $subject, $message, $headers);
		header("Location: ./index.php?contactformsent=true");
		exit ();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Kontakt, Fragen, Informationen zwecks Daueraufenthalt, Staatsbürgerschaft notwendig, um richtige Prüfung für das Visum zu finden.</title>
        <meta charset="UTF-8">
	    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php echo $page_menu;?>
        <div id="wrapper">

            <div class="container-fluid"> 

                <h1>Kontaktformular</h1>
                <p>Sie benötigen nähere Informationen oder haben weitere Fragen?</p>
                <h2>Schreiben Sie uns eine Nachricht</h2>
                <form method="post">
                    <fieldset>
                        <label>
                        	<input type="email" id="contactform" name="email" placeholder="E-Mail-Adresse" required>
						</label><br>
						<label>
							<input type="text" id="contactform" name="subject" placeholder="Betreff" required>
						</label><br>
						<label>
							<textarea type="text" id="contactform" name="message" placeholder="Geben Sie hier Ihre Nachricht ein" required></textarea>
						</label>
                    </fieldset><br>
                    <div class="btn-center"><button type="submit" name="btn_message">Nachricht senden</button></div>
                </form>
            </div>
        </div>
        <?php echo $page_footer; ?>
    </body>
</html>