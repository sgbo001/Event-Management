<?php
require_once 'utils/functions.php';
require_once 'classes/User.php';
require_once 'classes/Event.php';
require_once 'classes/EventTableGateway.php';
require_once 'classes/Connection.php';
require_once 'classes/LocationTableGateway.php';

if (!isset($_GET['id'])) {
    die("Illegal request");
}
$id = $_GET['id'];
$connection = Connection::getInstance();
$gateway = new EventTableGateway($connection);

$statement = $gateway->getEventsById($id);
$row = $statement->fetch(PDO::FETCH_ASSOC);
if (!$row) {
    die("Illegal request");
}


if (!is_logged_in()) {
    header("Location: login_form.php");
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php require 'utils/styles.php'; ?>
        <?php require 'utils/scripts.php'; ?>
    </head>
    <body>
        <?php require 'utils/header.php'; ?>
        <div class = "content">
            <div class = "container">
                <?php
                if (isset($message)) {
                    echo '<p>'.$message.'</p>';
                }
                ?>
                <h2>Our Event List</h2>
                <table class = "table table-hover">
                    <thead><!--table labels-->
                        <tr>
                            <th>Event ID</th>
                            <th>Title</th>
                            <th>Description</th>                    
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Cost</th>
                            <th>Location ID</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                       
                            echo '<tr>';
                            echo '<td>' . $row['EventID'] . '</td>';
                            echo '<td>' . $row['Title'] . '</td>';
                            echo '<td>' . $row['Description'] . '</td>';
                            echo '<td>' . $row['StartDate'] . '</td>';
                            echo '<td>' . $row['EndDate'] . '</td>';
                            echo '<td>' . $row['Cost'] . '</td>';
                            echo '<td>'
                            . '<a href="viewLocation.php?id='.$row['LocationID'].'">'.$row['Name'].'</a> '
                            . '</td>';
                            echo '<td>'
                            . '<a href="viewEvent.php?id='.$row['EventID'].'">Show Event</a> '
                            . '<a class="delete" href="deleteEvent.php?id='.$row['EventID'].'">Delete Event</a> '
                            . '</td>';
                            echo '</tr>';

                            $row = $statement->fetch(PDO::FETCH_ASSOC);
                        
                        ?>
                    </tbody>
                </table>

                <a class="btn btn-primary text-center" href = "#">Book Event</a><!--register button-->
            </div>
        </div>

        <?php require 'utils/footer.php'; ?>
    </body>
</html>
