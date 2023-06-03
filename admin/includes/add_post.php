



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

