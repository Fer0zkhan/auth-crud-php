<?php
require("./base.php");
?>
<div class="jumbotron jumbotron-container mt-2">
    <div class="container">
        <h1 class="display-4">Register</h1>
        <p class="lead">Register YourSelf Here</p>
        <div class="row">
            <div class="col-xl-6">
                <form method="post" action="./core/insert.php" class="row g-3 needs-validation">
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="validationCustom01" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom02" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="validationCustom02" required>
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
                        <input type="text" name="phone" class="form-control" id="validationCustom04" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" name="register_btn" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>