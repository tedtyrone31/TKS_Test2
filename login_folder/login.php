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

            if (!empty($user_name) && !empty($password) && !is_numeric($user_name))
            {   
                // if ($password) !== ($password_confirm) {
                //     die('Password and Confirm password should match!');   
                //  }
                //read from database
                $user_id = random_num(3);
                $query = "select * from users where user_name = '$user_name' limit 1";

                $result = mysqli_query($con, $query);
                
            
            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['password'] === $password)
                    {   
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: index.php");
                        die;
                    }

                }
                 
            }
            $errors = "Incorrect username or password!";
            
        }else
            {
                $errors = "Please enter valid information!";
            }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TKS Login</title>
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
            <label class="log-in-form">Log-in</label>
            <input type="text" placeholder="Username" name="user_name" class="user-input" required>
            <input type="password" placeholder="Password" name="password" class="user-input" required>
            <a href="index.php"><input type="submit" value="Log-in" class="login-signup small-button"></a>
            <a href="sign-up.php"><input value="Sign-up" class="login-signup" style="width: 45px;"></a>
           
        </form>
    </div>  

    <footer>
        <div class="footer"></div>
    </footer>
</body>
</html>