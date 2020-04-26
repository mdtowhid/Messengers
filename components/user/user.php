<?php
require_once('../../classes/message.php');
session_start();
$receiverId =$_POST['id'];
$message = new Message();
$rcv = '';
if(isset($_POST['action'])){
    $rcv = $messages = $message->getReceiver($receiverId);
}
?>
<div class="user-messanger-header">
    <h4>
        <?php 

            if($rcv['IsLoggedIn'] == 1){?>
                <span id="activeReciever"></span>
        <?php
                
            }
            echo $rcv['FullName'] 
            
        ?>
    </h4>
</div>