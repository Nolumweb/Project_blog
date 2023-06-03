<?php include "includes/admin_header.php"?>

    <div id="wrapper">

        <!-- Navigation -->
       <?php include "includes/admin_navigation.php"?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To The Post Page
                            <small class="welc-color"></small>

                        </h1>
                   


<form action="" method="post">
    <table class="table table-bordered table-hover">

        <div id="bulkOptionContainer" class="col-xs-4">
            <select class="form-control form-group" name="bulk-options" id="inp">
                <option value="">Select Option</option>
                <option value="draft">Draft</option>
                <option value="published">Published</option>
                <option value="delete">Delete</option>
                <!-- <option value="clone">Clone</option> -->
            </select>
        </div>

        <div class="col-xs-4" class="form-group" id="apply">
            <a href="add_post.php" class="btn btn-primary">Add New</a>
        </div>

        <thead>
            <tr>
                <th class='text-center'>Id</th>
                <th class='text-center'>Title</th>
                <th class='text-center'>Status</th>
                <th class='text-center'>Image</th>
                <th class='text-center'>Contents</th>
                <th class='text-center'>Author</th>
                <th class='text-center'>Date</th>
                <th class='text-center'>Edit</th>
                <th class='text-center'>Delete</th>
            </tr>
        </thead>
        <tbody>
<?php



$sql= "SELECT *  FROM `posts`WHERE 1"; 
$query = mysqli_query($connect, $sql);
while ($rows = mysqli_fetch_assoc($query)){
   $id =$rows['id'];
   $title =$rows['title'];
   $status =$rows['status'];
   $image =$rows['image'];
   $content =$rows['content'];
   $author=$rows['author'];
   $date =$rows['date'];


?>


            <tr>
            <td><?php echo $id?></td>
            <td class='text-center'><?php echo $title?></td>
            <td><?php echo $status?></td>
            <td><img class='img-responsive' width='100' src='./images/<?php echo $image?>'></td>
            <td><?php echo $content?></td>
            <td><?php echo $author?></td>
            <td><?php echo $date?></td>
            <td><a class='edit' href='edit.php?edit=<?php echo $id?>'>Edit</a></td>
            <td><a class='delete' href='delete.php?del=<?php echo $id?>'>Delete</a></td>
            </tr>
            
            
            <?php
}  
            ?>

            
        </tbody>
    </table>
</form>

<script src="js/jquery.js"></script>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "includes/admin_footer.php"?>