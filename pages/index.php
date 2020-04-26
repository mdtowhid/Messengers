<?php
    session_start();
    if($_SESSION['FullName'] == null || $_SESSION['Email'] == null || $_SESSION['UserRole'] == null){
        header('Location: ../pages/auth/login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messangers</title>
    <script src="../scripts/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/messages.css">
</head>
<body>
<div class="container-fluid">
    <div class="container">
        <div class="left">
            <div class="left-menu">
                <?php require_once('../components/menus/left-menu.php'); ?>
            </div>
            <div class="left-user-container">
                <?php require_once('../components/lists/user-list.php'); ?>
            </div>
        </div>

        <div class="right">
            <div class="top-menu">
                <?php require_once('../components/menus/top-menu.php'); ?>
            </div>
            <div id="routerElements">
                <div id="h" class="component">
                    <?php require_once('../components/banner/banner.php'); ?>
                </div>
                <div id="m" class="component">
                    <?php require_once('../components/messenger/messenger.php'); ?>
                </div>
                <div id="p" class="component">
                    <?php require_once('../components/user/user-profile.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <script src="../scripts/app.js"></script>
    <script src="../scripts/messages.js"></script>
</body>
</html>