<?php
require("./database.php");

if (isset($_POST["register_btn"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO users VALUES('' ,'$name', '$email', '$password', '$phone');";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../login.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

// Login
if (isset($_POST["login_btn"])) {   
    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['user_password'] == $password) {
            $_SESSION["Name"] = $row['name'];
            $_SESSION["Email"] = $row['email'];
            $_SESSION["Phone"] = $row['phone'];
            $cookie_name = $row['name'];
            setcookie($cookie_name, time() + (86400 * 30));
            header("Location: ../index.php?status='Login Successfully!'");
        }
    }
        }else {
            header("Location: ../login.php?status='Login Successfully!'");
}
}

if (isset($_POST["edit_btn"])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $sql = "UPDATE users SET `name`='$name', `email`='$email', `user_password`='$password', `phone`='$phone' WHERE id='$id';";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}