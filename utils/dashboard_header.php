<header class="bgImage">
    <nav class="navbar" style="background:black !important;">
        <div class="container">
            <div class="navbar-header"><!--website name/title-->
               <h4> <?php
                require_once 'utils/functions.php';
                echo  '<a href = "index.php">
                    Xpert Event
                </a> ';
                ?></h4>
            </div>
            <ul class="nav navbar-nav navbar-right"><!--navigation-->
                <?php
                //links to database contents. *if logged in
                
                if(is_logged_in()){
                    require_once 'utils/functions.php';
                    echo '<li><a href = "index.php">Home</a></li>';
                    echo '<li><a href = "viewEvents.php">View Events</a></li>';
                    echo '<li><a href = "viewLocations.php">Our Locations</a></li>';
                    echo '<li><a href = "dashboard.php">Dashboard</a></li>';
                    echo '<li><a href = "contact.php">Contact Us</a></li>';
                    echo '<li class="btn btn-primary"><a class = "btn btn-primary" href = "logout.php">Logout</a></li>';
                }
                //links non database contents. *if logged out
                else {
                    echo '<li><a href = "index.php">Home</a></li>';
                    echo '<li><a href = "events2.php"View>See Events</a></li>';
                    echo '<li><a href = "locations2.php">Our Locations</a></li>';
                    echo '<li><a href = "contact.php">Contact Us</a></li>';
                    echo '<button type = "button" class = "btn btn-primary" data-toggle = "modal" data-target = "#login">Login</button>."  "';
                    echo '<a class="btn btn-primary" href = "register_form.php">Register</a>';
                }
                ?>
                 
                
            </ul>
        </div><!--container div-->
    </nav>
   
</header>
