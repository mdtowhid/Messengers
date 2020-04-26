<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messangers</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="./scripts/jquery-3.4.1.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="container">
        <div class="left">
            <div class="left-menu">
                <?php require_once('./components/menus/left-menu.php'); ?>
            </div>
            <div class="left-user-container">
                <?php require_once('./components/lists/user-list.php'); ?>
            </div>
        </div>

        <div class="right">
            <div class="top-menu">
                <?php require_once('./components/menus/top-menu.php'); ?>
            </div>
            <div id="routerElements">
                <div id="h">
                    <?php require_once('./components/banner/banner.php'); ?>
                </div>
                <div id="m">
                    <?php require_once('./pages/messanger/messanger.php'); ?>
                </div>
                <div id="p">
                    <?php require_once('./pages/user/user-profile.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <script src="./scripts/app.js"></script>
</body>
</html>