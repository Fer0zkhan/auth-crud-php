<?php
require("./base.php");
?>
<div class="jumbotron jumbotron-container mt-2">
    <div class="container">
        <h1 class="display-4">My Profile</h1>
        <p class="lead">Hi L Here is Mine Profile Info</p>
        <?php 
        if (isset($_SESSION['Name'])){
        ?>
        <p><strong>Name :</strong> <?php echo $_SESSION['Name'] ?></p>
        <p><strong>Phone :</strong><?php echo $_SESSION['Phone'] ?></p>
        <p><strong>Email :</strong><?php echo $_SESSION['Email'] ?></p>
        <?php } ?>
    </div>
</div>