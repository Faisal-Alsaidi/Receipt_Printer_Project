<?php
// Prints out the message to the printer, being at the location /dev/usb/lp0
shell_exec("echo '" . date("d/m/Y ") . date("H:i:s") . "' >> /dev/usb/lp0");
shell_exec("echo '=========================' >> /dev/usb/lp0");
shell_exec(sprintf("echo '%s' >> /dev/usb/lp0", strval(utf8_decode($_POST['message']))));
shell_exec("echo '=========================' >> /dev/usb/lp0");
shell_exec("echo '\n\n\n\n' >> /dev/usb/lp0");
?>
<!Doctype HTML>
<html lang="en">
<head>
	<title>Send Me A Message!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="background-color: #313435;">
	<div class="container">
		<div class="jumbotron text-center text-success" style="position: relative; top: 15px;">
				<h1>Success! Message Received</h1>
		</div>
	</div>
</body>
</html>