<?php include "includes/admin_header.php" ?>


<?php
                    if (isset($_GET['edit'])) {
                        $get_post_id = $_GET['edit'];

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

                        $image = $_FILES['image']['name'];
                        $img_tmp = $_FILES['image']['tmp_name'];
                        move_uploaded_file($img_tmp, "images/$image");

                        if (empty($image)) {
                            $sql = "UPDATE `posts` SET `title`='$title', `author`='$author', `image`='$image', `status`='$status', `content`='$content',  `date`='$date' WHERE `id`='$get_post_id'";
                            $query = mysqli_query($connect, $sql);
                            if ($query) {
                                echo "Inserted";
                            } else {
                                echo"not Inserted";
                            }
                            header('location:posts.php');
 
                        }
                    }
                    ?>











<div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/admin_navigation.php" ?>

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
                        <p class="text-center text-success fw-bold"></p>

                        <div class="form-group">
                            <label for="title">Post title</label>
                            <input class="form-control" type="text" name="title" value="<?php echo $title ?? ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="author">Post author</label>
                            <input class="form-control" type="text" name="author" value="<?php echo $author ?? ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="status">Post status</label>
                            <select name="status" class="form-control">
                                <option value="" disabled>Select status</option>
                                <option value="trending" <?php if ($status === 'trending') echo 'selected'; ?>>Trending</option>
                                <option value="top" <?php if ($status === 'top') echo 'selected'; ?>>Top</option>
                                <option value="latest" <?php if ($status === 'latest') echo 'selected'; ?>>Latest</option>
                                <option value="others" <?php if ($status === 'others') echo 'selected'; ?>>Others</option>
                                <option value="special1" <?php if ($status === 'special1') echo 'selected'; ?>>Special1</option>
                                <option value="special2" <?php if ($status === 'special2') echo 'selected'; ?>>Special2</option>
                                <option value="special3" <?php if ($status === 'special3') echo 'selected'; ?>>Special3</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="image">Post image</label>
                            <input type="file" name="image">
                        </div>

                        <div class="form-group">
                            <label for="content">Post content</label>
                            <textarea id="summernote" name="content" class="form-control"><?php echo $content ?? ''; ?></textarea>
                        </div>

                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
                        </div>
                    </form>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

    <?php include "includes/admin_footer.php" ?>
                                                                                                                                                                                         