<?php
require("./base.php");
?>
<div class="jumbotron jumbotron-container mt-5">
    <div class="container">
        <h1 class="display-4">Login</h1>
        <p class="lead">Login YourSelf Here</p>
        <?php 
        if(isset($_GET['status'])) {
            echo "<div class='row'><div class='col-xl-6'><div class='alert alert-danger alert-dismissible fade show' role='alert'>";
            echo $_GET['status'];
            echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div></div></div>";
        }
        ?>
        <div class="row">
            <div class="col-xl-6">
                <form action="./core/insert.php" method="post" class="row g-3 needs-validation">
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="validationCustom01" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom02" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-12">
                        <button name="login_btn" class="btn btn-primary" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>