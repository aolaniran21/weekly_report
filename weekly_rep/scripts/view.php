<?php
include("connect.php");

$user = $_SESSION["userid"];

?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Automated weekly activities report</title>
    <link rel='stylesheet' href='../css/bootstrap.min.css'>
    <link rel='stylesheet' href='../css/style.css'>
</head>

<body>
    <?php


    $result = mysqli_query($conn, "SELECT * FROM week_report WHERE username = '$user' ORDER BY id DESC");
    echo "<div class='wrapper'>
                <!-- Sidebar -->

                <nav id='sidebar'>
                    <div class='sidebar-header'>
                        <h5 style='color: black;'>User: $user</h5>
                        <h3>Menu</h3>
                        <ul class='list-unstyled components'>
                            <li>
                                <a href='view.php'>View All Reports</a>
                            </li>
                            <li>
                                <a href='logout.php'>Logout</a>
                            </li>
                        </ul>
                    </div>
                    
                </nav>
                
                <div class='container h-100' >
                    <div class='table-responsive-sm'>
                    <table id='basic-data-table' class='table table-sm table-hover' style='width:100%;'>
                        
                        <thead class='primary'>
                            <tr style='bgcolor: #17a2b8'>
                                <h5>Employee Report</h5>
                            </tr>
                            <tr>
                                
                                <th>ID</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Department</th>
                                <th>Position</th>
                                <th>Month</th>
                                <th>Week</th>
                                <th>Activity</th>
                                <th>Additional Information</th>
                                <th>Status</th>
                                <th>Score</th>
                                <th>Remark</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>";
    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $uname = $row['username'];
        $department = $row['department'];
        $position = $row['position'];
        $month = $row['month'];
        $week = $row['week'];
        $activity = $row['activity'];
        $addinfo = $row['additional_info'];
        $status = $row['status'];
        $score = $row['score'];
        $remark = $row['remark'];

        $edit = "<a href='edit.php?id=$id'>Edit</a>";
        // $delete = "<a href='delete.php?id=$id'>Delete</a>";

        echo '<tbody>
                <tr style="border-bottom: 2px solid black"> 
                    <td>' . $id . '</td> 
                    <td>' . $name . '</td> 
                    <td>' . $uname . '</td> 
                    <td>' . $department . '</td> 
                    <td>' . $position . '</td> 
                    <td>' . $month . '</td> 
                    <td>' . $week . '</td> 
                    <td>' . $activity . '</td> 
                    <td>' . $addinfo . '</td> 
                    <td>' . $status . '</td> 
                    <td>' . $score . '</td> 
                    <td>' . $remark . '</td> 
                    <td>' . $edit . '</td>
                    
                </tr>
            </tbody>';
    }
    echo '</div>
        </div>
        </div>
    </table>';

    ?>
    <script src='../js/solid.js'></script>
    <script src='../js/fontawesome.js'></script>
    <script src='../js/jquery.js'></script>
    <script src='../js/bootstrap.bundle.js'></script>
    <script src='../js/bootstrap.bundle.min.js'></script>
    <script src='../js/jquery.min.js'></script>
    <script src='../js/bootstrap.min.js'></script>
</body>

</html>