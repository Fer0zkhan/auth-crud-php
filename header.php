<?php 
session_start();
?>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <?php
            if(!isset($_SESSION['Name'])){
            ?>

                    <a class="nav-link" href="./login.php">Login</a>
                    <a class="nav-link" href="./register.php">Register</a>

                    <?php }else { ?>
                    <a class="nav-link" href="./index.php">Dashboard</a>
                    <a class="nav-link" href="./profile.php">My Profile</a>
                    <a class="nav-link" href="./logout.php">Logout</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </nav>
</div>