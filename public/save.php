<?php

require __DIR__ . '/../lib/functions.php';

if (!isset($_POST['submit'])) {
    header('Location: /public/index.php?page=contact&error=0');
    exit();
}

if (!issetMandatoryPostValue('name', 'firstname', 'mail', 'message')) {
    header('Location: /public/index.php?page=contact&error=0');
    exit();
}

$name = getSecuredStringPostData($_POST['name']);
$firstname = getSecuredStringPostData($_POST['firstname']);
$mail = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
$message = getSecuredStringPostData($_POST['message']);

validateRange(3, 20, 'name', '/public/index.php?page=contact&error=1');
validateRange(3, 20, 'firstname', '/public/index.php?page=contact&error=2');
validateRange(6, 100, 'mail', '/public/index.php?page=contact&error=3');
validateRange(10, 300, 'message', '/public/index.php?page=contact&error=4');

$jsonMessage = file_put_contents("../data/last_message.json", $_POST);
json_encode($jsonMessage);

header('Location: admin.php');
