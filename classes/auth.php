<?php
include('~/../database.php');
class Auth extends DB{

    public function loginUser($data){
        $query = "SELECT * FROM users WHERE Email = '$data[Email]' AND Password='$data[Password]'";
        $userQuery = $this->executeQuery($query);
        if($userQuery){
            $user = $this->getUser($userQuery);
            $this->updateIsLoggedInStatus($user);
            $this->createUserSession($user);
            header('Location: ../../pages/index.php');
        }
        return $this->conn->error;
    }

    public function loggOutUser(){
        //session_destroy();
        header("Location: ../index.php");
    }

    public function getUser($userQuery){
        return mysqli_fetch_assoc($userQuery);
    }

    public function updateIsLoggedInStatus($user){
        $query = "UPDATE users SET IsLoggedIn = '1' Where Id='$user[Id]'";
        return $this->executeQuery($query)? '':$this->conn->error;
    }

    public function createUserSession($user){
        session_start();
        $_SESSION['Id'] = $user['Id'];
        $_SESSION['FullName'] = $user['FullName'];
        $_SESSION['Email'] = $user['Email'];
        $_SESSION['UserRole'] = $user['UserRole'];
    }

    public function executeQuery($query){
        return mysqli_query($this->conn, $query);
    }
}