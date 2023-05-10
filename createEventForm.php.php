<?php
require_once 'functions.php';
require_once 'classes/Location.php';
require_once 'classes/LocationTableGateway.php';
require_once 'classes/Connection.php';

$connection = Connection::getInstance();
$gateway = new LocationTableGateway($connection);

$locations = $gateway->getLocations();

if (!isset($formdata)) {
    $formdata = array();
}

if (!isset($errors)) {
    $errors = array();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php require 'utils/styles.php'; ?>
        <?php require 'utils/scripts.php'; ?>
    <meta charset="UTF-8">
    <title> Xpert Events </title>
    <link rel="stylesheet" href="css\dashboard_style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Xpert Events</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="index.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Events</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Guests List</span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Report</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Assigned Sales Staff</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favourites</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
       
        <span class="admin_name">Olaide</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
      <div class = "container">
                <h1>Create Event Form</h1><!--form title-->
                <?php
                if (isset($errorMessage)) {
                    echo '<p>Error: ' . $errorMessage . '</p>';
                }
                ?>
                <form action="createEvent.php" method="POST" class="form-horizontal">
                    <div class="form-group">
                        <label for="Title" class="col-md-2 control-label">Title</label><!--event title-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Title" name="Title" value="<?php echoValue($formdata, "Title")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="TitleError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'Title');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Description" class="col-md-2 control-label">Description</label><!--event description-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Description" name="Description" value="<?php echoValue($formdata, "Description")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="DescriptionError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'Description');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="StartDate" class="col-md-2 control-label">Start Date</label><!--start date-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="StartDate" name="StartDate" value="<?php echoValue($formdata, "StartDate")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="StartDateError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'StartDate');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="EndDate" class="col-md-2 control-label">End Date</label><!--end date-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="EndDate" name="EndDate" value="<?php echoValue($formdata, "EndDate")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="EndDateError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'EndDate');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Cost" class="col-md-2 control-label">Cost</label><!--cost-->
                        <div class="col-md-5">
                            <input type="number" class="form-control" id="Cost" name="Cost" value="<?php echoValue($formdata, "Cost")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="CostError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'Cost');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="LocID" class="col-md-2 control-label">Location ID</label><!--location id-->
                        <div class="col-md-5">
                            <select name="LocID"
                                        id="LocID"
                                        class="form-control"
                                        >
                                    <?php
                                    foreach ($locations as $location) {
                                        echo '<option value="'.$location['LocationID'].'">'.$location['Name'].'</option>';
                                    }
                                    ?>
                                </select>
                        </div>
                        <div class="col-md-4">
                            <span id="LocIDError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'LocID');?>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class = "btn btn-primary">Create Event </button>
                    <a class="btn btn-primary navbar-btn" href = "viewEvents.php">Back</a><!--register button-->
                </form>
            </div>
        </div>
        
          
        </div>
      </div>

      
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}

 </script>
 
</div>
       
    
</body>

</html>
