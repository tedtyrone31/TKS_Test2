<?php
session_start();

    include("connection.php");
    include("function.php");



    $user_data = check_login($con);

    // $errors = [];

    // if ($_SERVER['REQUEST_METHOD'] == "POST")
    // {
            //something was posted
          
            // $break1 = $_GET['break1'];
    //         $break2 = $_POST['break2'];
    //         $break3 = $_POST['break3'];
    //         $break4 = $_POST['break4'];
            // $query = "insert into test (break1) values ('$break1')"; 
            
            // mysqli_query($con, $query);
    // }    s
//  if ($password) !== ($password_confirm) {
//                     die('Password and Confirm password should match!');   
//                  }
//                 save to database

if(isset($_POST['click']))
{
    $date_clicked = date('Y-m-d H:i:s');;


    $query = "Insert into test(break1) VALUES ('$date_clicked')";
    mysqli_query($con, $query);

}      
    


    // }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body onload="startTime()">

    <header>
        <div class="header">
            <h1>OSP CEBU</h1>
            <h3>TIMEKEEPING SYSTEM</h3>
        </div>
    </header>
        <section class="user-page">
            <div class="end-user">
                    <img src="img/user.jpg" alt="">
                    <label class="emp_name"><?php echo $user_data['first_name'].' '; echo $user_data['last_name'];?></label>
    
                    <a href="logout.php" class="sign-out-lbl"><label >Sign-out </label></a>
                    <div class="emp_button"><br><br>
                       <label>A.M.</label>
                       <!-- <input type="submit" value="Break-start"> -->
                       <!-- <form method="$_POST" action="">
                       <input type="time" name="break1" value="<?php date('Y-m-d H:i:s')?>">
                       <input type="submit" value="submit"> -->
                       <form action="" method="post">
                         <button name="click" class="click">Click me!</button>
                     </form>
                       <button type="button" onclick="breakstartAM()" class="break-buttons">Break-Start</button>
                       <button type="button"  onclick="breakendAM()" class="break-buttons">Break-End</button>
                       <br><br><br>
                       <label>P.M.</label>
                       <button type="button"  onclick="breakstartPM()" class="break-buttons">Break-Start</button>
                       <button type="button"  onclick="breakendPM()" class="break-buttons">Break-End</button>
                       </form>
                    </div>
            </div>
            <div class="user-logs">
                <div class="time-date">
                    <div class="time">
                        <label class="time-display" id="time"></label>
                        <!-- <label class="time-display">11:21:27 <strong>A.M.</strong></label> -->
                    </div>
                    <div class="date"> 
                       <div class="month-year" >
                          <p id="month" class="month"></p>
                          <p id="day"class="exact-date"></p>
                          <p id="year"class="year"></p>
                        </div>
                    </div>
                </div>
                <section class="info-logs">
                    <div class="logs-month">
                    <h1>My Logs</h1>
                    <select name="Month" class="select-month">
                      <option value="january">January</option>
                      <option value="february">February</option>
                      <option value="march">March</option>
                      <option value="april">April</option>
                      <option value="may">May</option>
                      <option value="june">June</option>
                      <option value="july">July</option>
                      <option value="august">August</option>
                      <option value="september">September</option>
                      <option value="october">October</option>
                      <option value="november">November</option>
                      <option value="december">December</option>
                    </select>
                </div>
                <section class="time-period">
                    <div class="am">
                    <p>A.M.</p>
                    </div>
                    <div class="pm">
                    <p>P.M.</p>
                     </div>
                <div class="logs-data">  
                <table >
                    <tr>
                        <th>Date</th>
                        <th>Break-start</th>
                        <th>Break-end</th>
                        <th>Break-start</th>
                        <th>Break-end</th>
                        <th>Total-Break</th>
                    </tr>
                    <form method="GET">
                    <tr>    
                        <td id="dateToday" ></td>
                        <?php
// date_default_timezone_set("Asia/Manila");
// echo date('h:i:s A');
// ?>
                        <td id="break1" name= "break1" aria-valuemax=""></td>
                        <td id="break2" name= "break2"></td>
                        <td id="break3" name= "break3"></td>
                        <td id="break4" name= "break4"></td>
                        <td></td>
                 
                    </tr>
                    <form>
                </table>
                </div>   
                </section>
                </section>
              
            </div>
        </section>
        


    <footer>
        <div class="footer">
        
    </footer>
    
</body>
<script src="myscript.js"></script>
</html>