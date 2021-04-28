<?php include "includes/freelancerPanelHeader.php"; ?>

    <div id="wrapper">

        <?php include "includes/freelancerpanelnavigation.php"; ?>

            <div id="page-wrapper">

                <div class="container-fluid">

                    <!--<div class="row row-offcanvas row-offcanvas-left"> -->

                        <div class="col-xs-12 col-sm-9 content" style="margin-left:20%">

                                <div class="text-center">

                                    <h1>Welcome Back <?php echo $_SESSION['username'] ?></h1>
                                        
                                </div>

                                <!--Dashboard Customization-->
                
                                <div class="row">

                                    <div class="col-lg-3 col-md-6"> <!--Projects Column-->

                                        <div class="panel panel-primary">

                                                <div class="panel-heading">

                                                    <div class="row">
                                                            <div class="col-xs-3">
                                                                <i class="glyphicon glyphicon-file" style="font-size:45px;"></i>
                                                            </div>

                                                            <div class="col-xs-9 text-right">

                                                                    <?php 
                                                                        $query = "SELECT * FROM projects";
                                                                        $select_projects = mysqli_query($connection,$query);

                                                                        $project_count = mysqli_num_rows($select_projects);

                                                                        echo "<div class='huge'>{$project_count}</div>";
                                                                    ?>

                                                                
                                                                <div>Projects</div>
                                                            </div>
                                                    </div>
                                                    
                                                </div>

                                                    <a href="adminallprojects.php">
                                                        <div class="panel-footer">
                                                            <span class="pull-left">View Projects</span>
                                                            <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </a>
                                        </div>

                                    </div>


                                    <div class="col-lg-3 col-md-6"> <!--Bids Column-->
                                        <div class="panel" style="background-color:red;">

                                                <div class="panel-heading">

                                                    <div class="row">

                                                            <div class="col-xs-3">
                                                                <i class="glyphicon glyphicon-tasks" style="font-size:45px;"></i>
                                                            </div>

                                                            <div class="col-xs-9 text-right">

                                                                <?php 
                                                                        $query = "SELECT * FROM bids";
                                                                        $select_bids = mysqli_query($connection,$query);

                                                                        $bids_count = mysqli_num_rows($select_bids);

                                                                        echo "<div class='huge'>{$bids_count}</div>";
                                                                    ?>

                                                            
                                                            <div>Bids</div>
                                                            </div>

                                                    </div>

                                                </div>

                                                    <a href="adminbids.php">
                                                        <div class="panel-footer">
                                                            <span class="pull-left">View Bids</span>
                                                            <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </a>
                                        </div>

                                    </div>


                                    <div class="col-lg-3 col-md-6"> <!--Categories Column-->

                                        <div class="panel" style="background-color:lime;">

                                            <div class="panel-heading">

                                                    <div class="row">

                                                        <div class="col-xs-3">
                                                            <i class="glyphicon glyphicon-list" style="font-size:45px;"></i>
                                                        </div>

                                                        <div class="col-xs-9 text-right">

                                                                <?php 
                                                                        $query = "SELECT * FROM category";
                                                                        $select_categories = mysqli_query($connection,$query);

                                                                        $category_count = mysqli_num_rows($select_categories);

                                                                        echo "<div class='huge'>{$category_count}</div>";
                                                                    ?>

                                                            <div>Categories</div>

                                                        </div>
                                                        
                                                    </div> <!--row-->
                                            </div> <!--panel-heading-->

                                                    <a href="admincategories.php">
                                                        <div class="panel-footer">
                                                            <span class="pull-left">View Categories</span>
                                                            <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </a>

                                        </div><!--panel-->

                                    </div>


                                    <div class="col-lg-3 col-md-6"> <!--Users Column-->

                                        <div class="panel" style="background-color:magenta;">

                                            <div class="panel-heading">

                                                    <div class="row">

                                                        <div class="col-xs-3">
                                                            <i class="glyphicon glyphicon-user" style="font-size:45px;"></i>
                                                        </div>

                                                        <div class="col-xs-9 text-right">

                                                                    <?php 
                                                                        $query = "SELECT * FROM user";
                                                                        $select_users = mysqli_query($connection,$query);

                                                                        $user_count = mysqli_num_rows($select_users);

                                                                        echo "<div class='huge'>{$user_count}</div>";
                                                                    ?>

                                                            
                                                            <div> Users</div>

                                                        </div>
                                                        
                                                    </div>

                                            </div>
                                                    <a href="adminusers.php">
                                                        <div class="panel-footer">
                                                            <span class="pull-left">View Users</span>
                                                            <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </a>

                                        </div>

                                    </div>


                            </div><!--entire panel row div-->

                        </div>
                    
                    <!--</div>-->

                </div>


            </div>

    </div>

<?php include "includes/adminfooter.php"; ?>