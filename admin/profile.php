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
                                Edit Your Profile
                                <small class="welc-color"></small>
                            </h1>
                            
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="firstname">Fullname</label>
                                    <input value=""  class="form-control" type="text" name="fullname">
                                </div>

           
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input value="" class="form-control" type="text" name="username">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input value=""  class="form-control" type="email" name="email">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input value=""  class="form-control" type="password" name="password">
                                </div>

                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Update Profile" >
                                </div>
                            </form>                
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

<?php include "includes/admin_footer.php"?>