<?php
require("./base.php");
require("./core/database.php");
?>

<div class="jumbotron jumbotron-container mt-5">
    <div class="container">
        <h1 class="display-4">Dashboard</h1>
        <p class="lead">List Of Register Users</p>
        <?php 
        if(isset($_GET['status'])) {
            echo "<div class='row'><div class='col-xl-6'><div class='alert alert-success alert-dismissible fade show' role='alert'>";
            echo $_GET['status'];
            echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div></div></div>";
        }
        ?>
        <table class="table table-dark table-striped mt-5">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
            $sql = "SELECT * FROM users;";
            $result = mysqli_query($conn, $sql);
            if($result){
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <th scope="row"><?php echo $row['id'] ?></th>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td>
                        <div class="row">
                            <div class="col-xl-3">
                                <a href="./edit.php?id=<?php echo $row['id'] ?>" type="button"
                                    class="btn btn-success">Edit</a>
                            </div>
                            <div class="col-xl-3">
                                <a href="./delete.php?id=<?php echo $row['id'] ?>" type="button"
                                    class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php }}else { ?>
                <p>No Data Found</p>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>