<?php

include('~/../database.php');

class Gateway extends DB
{
    public function getUsers()
    {
        $query = "SELECT * FROM users";
        $queryResult = $this->executeQuery($query);
        return $queryResult;
    }

    public function getSender($id){
        $query = "SELECT * FROM users WHERE Id='$id'";
        $queryResult = mysqli_fetch_assoc($this->executeQuery($query));
        return $queryResult;
    }

    public function getReceiver($id){
        $query = "SELECT * FROM users WHERE Id='$id'";
        $queryResult = mysqli_fetch_assoc($this->executeQuery($query));
        mysqli_close($this->conn);

        return $queryResult;
    }

    public function getMessages(){
        $query = "SELECT * FROM messages";
        $queryResult = $this->executeQuery($query);
        //mysqli_close($this->conn);
        return $queryResult;
    }

    public function executeQuery($query){
        return mysqli_query($this->conn, $query);
    }
}