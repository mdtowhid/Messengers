<?php
require_once('~/../database.php');

class Message extends DB{

    public function getMessagesBySenderAndReciever($sendBy, $recievedBy){
        $query = "SELECT * FROM messages WHERE SendBy='$sendBy' AND RecievedBy='$recievedBy' Or  SendBy='$recievedBy' AND RecievedBy='$sendBy'";
        return $this->executeQuery($query)?$this->executeQuery($query) : $this->conn->error;
    }

    public function getReceiver($id){
        return mysqli_fetch_assoc($this->executeQuery("SELECT * FROM users WHERE Id='$id'"));
    }

    public function sendMessage($data){
        $query = "INSERT INTO messages
                    VALUES('', '$data[sendBy]', '$data[receivedBy]', 
                    '$data[message]', '$data[sendTime]', 
                    '$data[receivedTime]', '$data[seenStatus]'); 
                ";
        
        return $this->executeQuery($query) ? true : $this->conn->error;
    }

    public function executeQuery($query){
        return mysqli_query($this->conn, $query);
    }
}

