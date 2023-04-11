
<?php

@include 'config.php';

if(isset($_POST['submit'])){

    $username = mysqli_real_escape_string($conn,$_POST['username'] );
    $firstname = mysqli_real_escape_string($conn,$_POST['firstname'] );
    $lastname = mysqli_real_escape_string($conn,$_POST['lastname'] );
    $email = mysqli_real_escape_string($conn,$_POST['email'] );
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];
// echo $username
// die();
    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $error[]= 'user already exist!';
    }else{

        if($pass !=$cpass){
            $error[] = 'password not matched';
        }else{
            $insert = "INSERT INTO user_form(firstname, lastname, username, email, password, user_type) VALUES('$firstname', '$lastname', '$username', '$email', '$pass', '$user_type')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
        }
    }





};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="form-container">
    <form action="" method="post">
        <h3>register now</h3>
        <?php
        if (isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
        <input type="text" name="username" required placeholder="username">
        <br>
        <input type="text" name="firstname" required placeholder="first name"><input type="text" name="lastname" required placeholder="last name">
        <br>
        <input type="email" name="email" required placeholder="example@gmail.com">
        <br>
        <input type="password" name="password" required placeholder="enter your password">
        <input type="password" name="cpassword" required placeholder="confirm your password">
        <br>
        <select name="user_type" >
            <option value="user">user</option>
            <option value="admib">admin</option>
        </select>
        <input type="submit" name="submit" value="register now" class="form-btn">
        <p>already have an account?<a href="login_form.php">login now</a></p>

    </form>
</div>
</body>
</html>