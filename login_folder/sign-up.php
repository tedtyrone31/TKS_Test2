<?php
session_start();

    include("connection.php");
    include("function.php");
    


    $errors = [];

    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
            //something was posted
            $user_name = $_POST['user_name'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            

            if (!empty($user_name) && !empty($password) && !is_numeric($user_name )&& !is_numeric($first_name) && !is_numeric($last_name))
            {   
                if (($password) !== ($password_confirm)) {
                    // $errors = "Password and Confirm Password should match!";
                    die('Passwords do not match!');   
                 }
                // save to database

                $user_id = random_num(3);
                $query = "insert into users_login (user_id, user_name, password, first_name, last_name) values ('OSPCC$user_id', '$user_name','$password', '$first_name', '$last_name')"; 
            
                mysqli_query($con, $query);
                // header("Location: login.php");
                messagebox();
                
            
                
            }
            else
            {
                $errors = "Please enter valid information (First Name, Last Name and Username should '<u>NOT</u>' be numeric.";
            }

        }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TKS Signup</title>
   
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <div class="header">
            <h1>OSP CEBU</h1>
            <h3>TIMEKEEPING SYSTEM</h3>
        </div>
    </header>



    <div class="login">
    <?php if (!empty($errors)): ?>
    <div class="alert-danger">
          <div><?php echo $errors ?></div>         
    </div>
    <?php endif;?>
        <form method="post"> 
            <label class="sign-out-form">Sign-up</label>
            <input type="text" placeholder="Please Enter First name" class="user-input" name="first_name" required>
            <input type="text" placeholder="Please Enter Last name" class="user-input" name="last_name" required>
            <input type="text" placeholder="Create Username" class="user-input" name="user_name" required>
            <input type="password" placeholder="Create Password" class="user-input" name="password" required>
            <input type="password" placeholder="Confirm Password" class="user-input" name="password_confirm">
            <a href="login.php"><input type="submit" value="Sign-up" class="login-signup small-button"></a>
            <a href="login.php"><input value="Cancel" class="login-signup" style="width: 45px;"></a>
           
        </form>
    </div>  

    <footer>
        <div class="footer"></div>
    </footer>
</body>
</html>