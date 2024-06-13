<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$file = 'private_data.txt';
$current = file_get_contents($file);
$current .= "Name: $name\nEmail: $email\nMessage: $message\n\n";
file_put_contents($file, $current);

header('Location: index.html');
exit();
?>
