<?php

include_once('../../classes/message.php');
$message = new Message();
$sendMessage = $message->sendMessage($_POST);
?>