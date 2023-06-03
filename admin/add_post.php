<?php include "includes/admin_header.php"?>

<?php
$msg="";




if(isset($_POST['create_post'])){
$title=$_POST['title'];
$author=$_POST['author'];
$status=$_POST['post_status'];
$content=$_POST['post_content'];
$date=date('D_m_y');

$image= $_FILES['post_image']['name'];
$img_tmp= $_FILES['post_image']['tmp_name'];
move_uploaded_file($img_tmp, "images/$image");


$sql= "INSERT INTO `posts`( `id`, `title`, `author`, `image`, `status`, `content`, `date` )
VALUES ( '', '$title', '$author', '$image','$status', '$content', '$date' )";
$query = mysqli_query($connect, $sql);
header('location:posts.php');

if ($query) {
    echo "Inserted";
} else {
    echo"not Inserted";
}



}
?>


     







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
                   


                        <form action="" method="post" enctype="multipart/form-data">
<p class= "text-center text-success fw-bold"><?php echo $msg ?></p>



    <div class="form-group">
        <label for="title">Post title</label>
        <input class="form-control" type="text" name="title">
    </div>

    <div class="form-group">
        <label for="author">Post author</label>
        <input class="form-control" type="text" name="author">
    </div>


    <div class="form-group">
        <select name="post_status" id="">
            <option value="" selected disabled>Select status</option>
            <option value="trending">Trending</option>
            <option value="top">Top</option>
            <option value="latest">Latest</option>
            <option value="others">Others</option>
            <option value="special1">Special1</option>
            <option value="special2">Special2</option>
            <option value="special3">Special3</option>
                            
        </select>
    </div>

    <div class="form-group">
        <label for="image">Post image</label>
        <input type="file" name="post_image">
    </div>

    <div class="form-group">
        <label for="content">Post content</label>
        <textarea id="summernote" name="post_content" class="form-control"></textarea>                    
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post" >
    </div>
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