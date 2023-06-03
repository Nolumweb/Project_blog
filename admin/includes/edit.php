<?php include('config.php');?>

<?php
if(isset($_GET['edit'])){
    $get_post_id = $_GET['edit'];



 $sql = "SELECT * FROM `posts` WHERE `post_id`= $get_post_id ";
 $edit_post_query = mysqli_query($connect,$sql);

 while($row = mysqli_fetch_assoc($edit_post_query)){
     $id = $row['id'];
     $title=$_POST['title'];
     $author=$_POST['author'];
     $status=$_POST['status'];
     $content=$_POST['content'];
     $image = $row['image'];
     $date=date('D_m_y');
    
 }
}


$sql = "SELECT * FROM `posts` WHERE `id`= $get_post_id ";
$edit_post_query = mysqli_query($connect, $sql);

while ($row = mysqli_fetch_assoc($edit_post_query)) {
    $id = $row['id'];
    $title = $row['title'];
    $author = $row['author'];
    $status = $row['status'];
    $content = $row['content'];
    $image = $row['image'];
    $date = date('D_m_y');
}
}

if (isset($_POST['create_post'])) {
$title = $_POST['title'];
$author = $_POST['author'];
$status = $_POST['status'];
$content = $_POST['content'];
$date = date('D_m_y');

    if(isset($_POST['create_post'])){
        $title=$_POST['title'];
        $author=$_POST['author'];
        $status=$_POST['status'];
        $content=$_POST['content'];
        $date=date('D_m_y');
        
        $image= $_FILES['post_image']['name'];
        $img_tmp= $_FILES['post_image']['tmp_name'];
        move_uploaded_file($img_tmp, "images/$image");
        
    
    if(empty($image)){

        $sql = "SELECT * FROM `posts` WHERE `id`= $get_post_id";
        $image_query= mysqli_query($connect,$sql);

        while($row = mysqli_fetch_assoc($image_query)){
            $image = $row['image'];

        }
    }


 }

 
?>



 
    


<form action="" method="post" enctype="multipart/form-data">
<p class= "text-center text-success fw-bold"></p>



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

     








