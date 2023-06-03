<?php
include ('config.php');




 $sql = "SELECT * FROM `register` WHERE `id`= '$id' ";
 $edit_query = mysqli_query($connect,$sql);

 while($row = mysqli_fetch_assoc($edit_query)){
    $name= $row['fullname'];
   $user= $row['username'];
   $email= $row['email'];
   $pass= $row['password']; 
   
 }

 if(isset($_POST['update'])){
    $fullname= ($_POST['fullname']);
    $user= ($_POST['username']);
    $email= ($_POST['email']);
    $pass= ($_POST['password']);
   
    

    $sql ="UPDATE `register` SET `fullname` = '$fullname', `username`='$user', `email`='$email', `password`='$pass' WHERE
    `id`='$id'";
    $update_query = mysqli_query($connect,$sql);
    echo 'Update sucessfully';
   if($update_query){
       header('location: dashboard.php');
   }
   else{
       echo "no update confirmed";
   }
    // echo "<p class='bg-success'> Post Updataed . <a href='dashboard.php?edit={$id}'>View post<a/> or 
    // <a href='dashboard.php'>Edit other posts<a/></p>";

 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nolu</title>
    <link rel="stylesheet" href="../style/bootstrap-5.0.0-beta3-dist/css/bootstrap.css">
</head>
<body>


    <h3 class="text-center"  >Manage register </h3>

    <form action="" method="post" enctype="multipart/form-data" class="row">

    <?php
    
            $sql= "SELECT * FROM `register` WHERE `id` = '$id'";
            $query=mysqli_query($connect, $sql);
            

            if (!$query){
                die('Data Error');
            }else{
                $fetchData= mysqli_fetch_assoc($query);
                $fullname= $fetchData['fullname'];
                $username= $fetchData['username'];
                $email= $fetchData['email'];
                $password= $fetchData['password'];
            }
            ?>



                    <div class="form-group text-center">
                    <label for = "fullname">Fullname</label>
                    <input type="text" name="fullname" class="form-control" placeholder="Enter your fullname" value="<?php echo $fullname?>">
                </div>


                <div class="form-group text-center">
                    <label for = "username">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter your username" value="<?php echo $username?>">
                </div>

                <div class="form-group text-center">
                    <label for = "email">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter your email" value="<?php echo $email?>">
                </div>

                
                <div class="form-group mt-3 text-center">
                    <label for = "password">Password</label>
                    <input type="text" name="password" class="form-control" placeholder="Enter your password" value="<?php echo $password?>">
                </div>

              

            <div class="col-lg-12 text-right justify-content-center d-flex">
					<button class="btn btn-primary mr-2"type="submit text-center" name="update"  value="Update" >Update</button>
					<button class="btn btn-secondary"  type="button" >Cancel</button>
				</div>
</form>
</div>
  
  <!-- /.content-wrapper -->
</div>



</body>
</html>
