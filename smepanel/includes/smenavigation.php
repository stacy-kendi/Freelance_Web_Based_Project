<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Tujiajiri</a>
            </div>

            <!-- Top Navigation Menu -->
            <ul class="nav navbar-right top-nav">

                <li> <a href="../smehomepage.php"> Home </a> </li>

                <li><a href="#"><?php echo $_SESSION['username'] ?></a></li>
               
                    <li class="dropdown"> 
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="glyphicon glyphicon-user"> </i> <span class="caret"></span> </a> 
                                <ul class="dropdown-menu">

                                    <li> <a href="viewsmeprofile.php">Profile</a></li>
                                    <li> <a href="../logout.php">Logout</a></li>
                                </ul>
                    
            
                    </li>
            </ul>
            
            
            
            <!-- Sidebar Navigation -->
            <div class="collapse navbar-collapse navbar-sidebar-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li> <a href="index2.php"> Dashboard</a> </li>

                    <!--<li>
                        <a href="#" data-toggle="collapse" data-target="#users"> Users<i class="caret"></i></a>
                        <ul id="users" class="collapse">
                            <li> <a href="adminusers.php">View All Users</a> </li>
                            <li> <a href="users.php">SME</a> </li>
                            <li> <a href="users.php">Youth</a> </li>
                            <li> <a href="adminusers.php?source=adminAddUser">Add User </a> </li>
                        </ul>
                    </li>
                
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#projects_dropdown">Projects <i class="caret"></i></a>

                        <ul id="projects_dropdown" class="collapse">
                            <li> <a href="adminallprojects.php"> All Projects</a> </li>
                            <li> <a href="adminallprojects.php?source=adminaddprojectform">Add Project</a> </li>
                        </ul>
                    </li>

                    <li><a href="admincategories.php"> Categories</a></li>
                    <li><a href="comments.php">Bids</a></li>
                    <li><a href="profile.php"> Payments</a></li>-->  
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#projects_dropdown">Profile <i class="caret"></i></a>

                        <ul id="projects_dropdown" class="collapse">
                            <li><a href="viewsmeprofile.php"> View Profile</a></li>
                            <li> <a href="smeeditprofile.php">Edit Profile</a> </li>
                        </ul>
                    </li>

                   
                    
                    
                    
                </ul>
            </div>
            
            
            
            <!-- /.navbar-collapse -->
        </nav>
        