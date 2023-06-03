<?php
include('config.php');
$msg="";


if (isset($_POST['submit'])){
    $fullname=mysqli_real_escape_string($connect,$_POST['fullname']);
    $username=mysqli_real_escape_string($connect,$_POST['username']);
    $email=mysqli_real_escape_string($connect,$_POST['email']);
    $password=mysqli_real_escape_string($connect, $_POST['password']);
    $cpassword=mysqli_real_escape_string($connect, $_POST['cpassword']);
   
    if (!empty($fullname)){
        if (!empty($username)){
            if (!empty($email)){
                if ($password != ''){
                  if(strlen($password) >= 6){
                if ($password === $cpassword && $cpassword=1){
                     $password = md5($password);



                            //select from database to get all the registered emails and username
                                    $sel_data="SELECT `email`, `username` FROM `register` WHERE `email` = '$email' OR `username` ='$username'";
                                    $query_it = mysqli_query($connect, $sel_data);
                                    $count_it =mysqli_num_rows($query_it);
                                    while($row =mysqli_fetch_assoc($query_it)){
                                     $db_email=$_POST['email'];
                                    $db_username=$_POST['username'];
                }
                if($count_it > 0){
                    if($email===$db_email || $username === $db_username){
                    $msg= "Email/ Username already exist";
                    }
                }else{
                    //this ll insert only when the condition are true




                    $sql =  "INSERT INTO `register`(`id`, `fulllname`, `username`, `email`, `password`, `cpassword`) 
                    VALUES ('', '$fullname', '$username', '$email','$password', '$cpassword')";
                    $query = mysqli_query($connect, $sql);
                    // Welcome message
                    $_SESSION['success'] = "You have logged in";

                    header("Refresh:2; url=login.php");
                    if ($query){
                $_SESSION['success'] = "You Have Registered"; 
                     } else{
                        // echo"not successful";
                        die ('Database error').mysqli_error($connect);
                     }
                    echo'free to register';
            }




            }else{
                    $msg = "Passwords must match";
                  }
    
                }else{
                    $msg = "Password length must be at the range of 6-12 characters";
                }
            }else{
                $msg = "Password cannot be empty";
            }
        }else{
            $msg = "Email cannot be empty";
        }
    }else{
        $msg = "Username cannot be empty";
    }
    }else{
        $msg = "Fullname cannot be empty";
    }
    
}
    
    ?>



  









 



<style>
    .gen{
        box-shadow: 0 0 3px 1px silver;
        padding:5px;
    }

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.0.0-beta3-dist/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="col-sm-6 m-auto mt-5 gen">
                <h1 class="text-center text-primary fw-bold">Registration</h1>
                <p class= "text-center text-warning fw-bold"><?php echo $msg ?></p>
            <form action="" method="post">
            <div class="form-group">
                    <label for = "fullname">Fullname</label>
                    <input type="text" name="fullname" class="form-control" placeholder="Enter your fullname">
                </div>

                <div class="form-group">
                    <label for = "username">username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter your username">
                </div>
                
                

                <div class="form-group">
                    <label for = "email">email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email">
                </div>

                <div class="form-group mt-3">
                    <label for = "password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password">
                </div>
                <div class="form-group mt-3">
                    <label for = "confirm-password">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" placeholder="Enter your password">
                </div>

                <input class="btn btn-primary mt-3" type="submit" name="submit" value="submit">
                    
            </form>

        </div>
        </div>

</body>
</html>



