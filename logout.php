	<?php
	session_start();//logout for the php
	session_destroy();//starts the session then destroys the session and point it towards index page wich is the login page
	 header('Location: index.php');
	?>