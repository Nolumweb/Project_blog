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
                            Welcome to the Admin
                            
                            <small class="welc-color"></small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <!-- /.row -->    
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    
                                        </div>
                                        <?php
                                //$sql= "SELECT *  FROM`posts`WHERE 1"; 
                               // $query = mysqli_query($con, $sql);
                               // $cnt_post= mysqli_num_rows($query);
                                        ?>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class='huge'><?php //echo $cnt_post?></div>
                                        <div>Posts</div>


                                </div>
                            </div>
                            <a href="posts.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                            <div class='huge'>11</div>
                                        <div>Comments</div>
                                    </div>
                                </div>
                            </div>
                            <a href="comments.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                            <div class='huge'>44</div>
                                        <div> Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">

                                            <div class='huge'>6</div>
                                        <div>Categories</div>
                                    </div>
                                </div>
                            </div>
                            <a href="categories.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row graph">
                        <script type="">
                            
                        </script>
                        <img src="images\fc3noor2.png" alt="">

                    </div>

                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        <footer class="footer-area">
            <div class="container">
                <div class="row">                    
                    <div class="col-md-12">
                    <div class="text-center bg-white">
                        <p>Copyright &copy; 2019 | Designed With <i class="fa fa-heart"></i> by <a href="" target="_blank">Vickyweb</a></p>
                    </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
<?php include "includes/admin_footer.php"?>
