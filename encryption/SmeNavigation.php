<nav class="navbar navbar-static-top" role="navigation">
 

<div class="container">


    <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#tujiajirinavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"> </span>
            <span class="icon-bar"> </span>
            <span class="icon-bar"> </span>
        </button>

        <a id="navbrand" href="../smehomepage.php" class="navbar-brand" alt="sitename"> Tujiajiri </a>
    </div>


    <div class="collapse navbar-collapse" id="tujiajirinavbar">
    <!--Search Icon Navigation-->

    <form class="navbar-form navbar-left" action="search.php" method="POST" id="searchbar">
        
        <div class="input-group" style="width: 115px">

            <input name="search" type="text" class="form-control"  placeholder="Search" name="search"> 
            <span class="input-group-btn" style="height: 34px; display: flex">
                <button name="submit" class="btn btn-success" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
                        

        </div>

    </form>

        

 
<!--Main Navigation Links--> 
 
        <ul class="nav navbar-nav navbar-center"> 
            <li>  <a href="../smepanel/index2.php"> Dashboard </a>  </li>
            <li>  <a href="../encryption/encryptioninsertproject.php"> Post Project </a>  </li>
            <li> <a href="../freelancerListingPage.php"> Freelancers </a> </li>
            <li> <a href="../contact.php"> Contact </a>  </li>
        </ul>

        

<!--User & Bell Navigation-->
        <ul class="nav navbar-nav pull-right"> 

            <!--User SignUp and Login Navigation-->
            <ul class="nav navbar-nav"> 

                <li> <a href="../signup.php"> SignUp </a> </li> 

                <li > <a href="../login.php"> Login </a> </li>


            </ul> 


            <li class="dropdown" id="icons"> 
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="glyphicon glyphicon-user"> </i> <span class="caret"></span> </a> 
                     <ul class="dropdown-menu">

                        <li> <a href="smepanel/smeprofile.php">Profile</a></li>
                        <li> <a href="smepanel/index2.php">Dashboard</a></li>
                        <li> <a href="contact.php">Contact</a></li>
                        <li> <a href="logout.php">Logout</a></li>
                    </ul>
            
    
            </li>


        </ul> 
 
    </div>


</div>


</nav>
