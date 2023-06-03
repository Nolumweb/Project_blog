<?php include "includes/admin_header.php"?>

<?php 
 if(isset($_GET['del'])){
 $delete_id = $_GET['del'];

 $del_sql ="DELETE FROM `posts` WHERE id = '$delete_id'";
 $query = mysqli_query($connect, $del_sql);
 if($query)
 echo "<script>alert('User Deleted')</script>";
//  echo "<script>window.open('admin_dashboard.php', '_self')</script>";
  header('location:posts.php');
}

?>