<?php 

function check_login($con)
{
    if(isset($_SESSION['user_id']))
    {
        $id = $_SESSION['user_id'];
        $query = "SELECT * from users where user_id = '$id' limit 1";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }

    }
    //redirect to login
    header("Location: login.php");
    die;
}


function random_num($length)
{   
    $text = "";
    if ($length < 3)
    {
        $length = 3;
    }

    $len = rand(3,$length);

    for ($i=0; $i < $len; $i++) {
        #code...
        $text .= rand(0,9);
    }
    return $text;
      
}


function messagebox()
{
    echo "<script>alert('Registration Successful!');document.location='login.php'</script>";
}

