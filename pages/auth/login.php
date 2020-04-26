<?php

    include('../../classes/auth.php');
    $auth = new Auth();
    $user = 'k';
    if(isset($_POST['submit'])){
        $user = $auth->loginUser($_POST);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <script src="../../scripts/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/auth.css">
</head>
<body class="lgbd">
    <form action="" method="post" id="logInForm">
        <h3 class="form-header">LOG IN</h3>
        
        <?php 
            if($user == null){?>
                <div class="error">
                    <h4>Given Information Is Error.</h4>
                </div>
        <?php
            }
        ?>
        <label for="Email">Email</label>
        <input type="text" name="Email" required autofocus placeholder="email"/>

        <label for="Password">Password</label>
        <input type="password" name="Password" required placeholder="password"/>
        
        <input id="logInFormButton" name="submit" type="submit" value="Submit"/>
    </form>
    
</body>
</html>