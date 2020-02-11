<?php

if(isset($_POST['emailAddress'])) {
    $address = $_POST['emailAddress'];
    $name = $_POST['name'];
    $email = 'info@alitufail.me';
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    $body = 'Name: ' . $name . PHP_EOL . PHP_EOL . 'Email: ' . $email . PHP_EOL . PHP_EOL . $message;
    $headers = 'From: ' . $email . PHP_EOL . 'Reply-To: ' . $email . PHP_EOL . 'MIME-Version: 1.0' . PHP_EOL . 'Content-type: text/plain; charset=utf-8' . PHP_EOL . 'Content-Transfer-Encoding: quoted-printable' . PHP_EOL;
    var isSent = mail($email, $subject, $body, $headers);
	return isSent;
}

?>