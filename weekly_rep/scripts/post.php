<?php
include("connect.php");

// $user = $_REQUEST['username'];
// $_SESSION["userid"] = $_REQUEST['username'];

$user = $_SESSION["userid"];
if (isset($_POST['submit'])) {
    $name = $_POST['fullname'];
    $username = $_POST['username'];
    $department = $_POST['department'];
    $position = $_POST['position'];
    $month = $_POST['month'];
    $week = $_POST['week'];
    $activity = $_POST['activity'];
    $addinfo = $_POST['addinfo'];
    $status = $_POST['status'];



    $sql = "INSERT INTO week_report(name, username, department, position, month, week, activity, additional_info, status) 
            VALUES('$name', '$username', '$department', '$position', '$month', '$week', '$activity', '$addinfo', '$status')";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        die("Query Failed " . mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automated weekly activities report</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel='stylesheet' href='../css/style.css'>

</head>

<body style="background-color: black">
    <div class='wrapper'>
        <!-- Sidebar -->

        <nav id='sidebar' class="fixed-left">
            <div class='sidebar-header'>
                <h5 style="color: black;">User: <?php echo $user; ?></h5>
                <h3>Menu</h3>
                <ul class='list-unstyled components'>
                    <li>
                        <a href='#'>View All Reports</a>
                    </li>
                    <li>
                        <a href='logout.php'>Logout</a>
                    </li>
                </ul>
            </div>


        </nav>
        <div class="container h-100 text-center">
            <div class="row h-100 justify-content-center align-items-center" style="padding-top: 160px">

                <form action="employee.php" method="post">
                    <div class="col-md-4">
                        <h1 style="padding-bottom: 30px; color: #17a2b8;">Successful</h1>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="username" value="<?php echo $_SESSION["userid"]; ?>" readonly>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary" style='background-color: #747474'>View</button>
                </form>
            </div>
        </div>
    </div>
    <script src='../js/solid.js'></script>
    <script src='../js/fontawesome.js'></script>
    <script src='../js/jquery.js'></script>
    <script src='../js/bootstrap.bundle.js'></script>
    <script src='../js/bootstrap.bundle.min.js'></script>
    <script src='../js/jquery.min.js'></script>
    <script src='../js/bootstrap.min.js'></script>

</body>

</html>