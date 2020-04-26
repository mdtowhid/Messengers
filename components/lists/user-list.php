<?php
    require_once('~/../../classes/gateways.php');
    $gateway = new Gateway();
    $users = $gateway->getUsers();

?>

<ul id="userList">
    <?php

        while($user = mysqli_fetch_assoc($users)){ 
            if($user['Id'] != $_SESSION['Id']){?>
                <li id="<?php echo $user['Id'] ?>">
                    <div class="user-img"><?php echo '<h4>' . $user['FullName'][0] . '</h4>'  ?></div>
                    <div class="user-content">
                        <?php echo '<h5>' . $user['FullName'] . '</h5>'?>
                        <?php echo '<h5>' . $user['UserRole'] . '</h5>'?>
                        <?php 
                            if($user['IsLoggedIn'] == true){
                                echo '<span class="loggedin-status"></span>';
                            }
                        ?>
                    </div>
                </li>
        <?php
            }
        }

    ?>
</ul>


