<?php
require_once('../../classes/message.php');
session_start();
$sendBy = $_SESSION['Id'];
$receivedBy = $_POST['id'];
$message = new Message();
$messages = $message->getMessagesBySenderAndReciever($sendBy, $receivedBy);


?>

<div style="display: none;">
    <span id="sender"><?php echo $_SESSION['Id']; ?></span>
    <span id="receiver"><?php echo $_POST['id']; ?></span>
</div>


<ul>
    <?php 
        while($msg = mysqli_fetch_assoc($messages)){
            if($msg['SendBy'] == $sendBy){?>
                <li class="sender-msg">
                    <p><?php echo $msg['Message']; ?></p>
                    <p style="text-align: right"><?php echo $msg['SendTime']; ?></p>
                </li>
    <?php        

            }else{?>
                <li class="receiver-msg">
                    <p><?php echo $msg['Message']; ?></p>
                    <p style="text-align: right"><?php echo $msg['SendTime']; ?></p>
                </li>
    <?php        

            }
        }
    ?>
</ul>
