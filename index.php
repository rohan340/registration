<?php 
require('dbConfig.php');

    if(isset($_POST['submit'])){
        //echo '<pre>';print_r($_POST);die;
        $email = htmlentities($_POST['email']);
        $username = htmlentities($_POST['email']);
        $password = htmlentities($_POST['password']);
        $hash_password = password_hash($password,PASSWORD_DEFAULT);
        $date = date('Y-m-d h:i:s');
        $sql = "insert into `registration`(email,username,password,created_at) values ('$email','$username','$hash_password','$date')";
        //echo $sql;die;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/registration/assets/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row bg-dark text-white mb-2 text-centre">
            <div class="col-md-12"><h3>Registration Form</h3></div>
        </div>
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
            <?php
            if(isset($_POST['submit'])){
                if(mysqli_query($con,$sql)){
                    echo "<p class='text-success'>".'Registration Successfully.'."</p>";
                    header('index.php');
                }
                else{
                    echo "<p class='text-danger'>".'Error in Registration.'."</p>";
                }
            }
                
            ?>
        </form>
    </div>
</body>
</html>