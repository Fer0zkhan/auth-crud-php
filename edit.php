<?php
require("./base.php");
require("./core/database.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
?>
<div class="jumbotron jumbotron-container mt-2">
    <div class="container">
        <h1 class="display-4">Edit</h1>
        <p class="lead">Edit YourSelf Here</p>
        <div class="row">
            <div class="col-xl-6">
            <?php 
            $sql = "SELECT * FROM users WHERE id='$id';";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <form method="post" action="./core/insert.php?id=<?php echo $row['id'] ?>" class="row g-3 needs-validation">
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Name</label>
                        <input type="text" name="name" value="<?php echo $row['name'] ?>" class="form-control" id="validationCustom01" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom02" class="form-label">Email</label>
                        <input type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom03" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="validationCustom03" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom04" class="form-label">Phone</label>
                        <input type="text" name="phone" value="<?php echo $row['phone'] ?>" class="form-control" id="validationCustom04" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" name="edit_btn" class="btn btn-primary">Edit</button>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>