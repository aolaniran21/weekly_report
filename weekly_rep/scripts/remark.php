<?php
include('connect.php');


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM week_report WHERE id ='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
}



if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['fullname'];
    $date = $_POST['date'];
    $username = $_POST['username'];
    $department = $_POST['department'];
    $position = $_POST['position'];
    $month = $_POST['month'];
    $week = $_POST['week'];
    $activity = $_POST['activity'];
    $addinfo = $_POST['addinfo'];
    $status = $_POST['status'];
    $score = $_POST['score'];
    $remark = $_POST['remark'];

    $update_query = mysqli_query($conn, "UPDATE week_report SET name ='$name', username ='$username', department ='$department', position ='$position', 
    month ='$month', week ='$week', activity ='$activity', additional_info ='$addinfo', 
    status ='$status', score ='$score', remark ='$remark' WHERE id ='$id'");
    if (!$update_query) {
        echo 'error description' . mysqli_error($conn);
    } else {
        header("location: ../scripts/retrieve.php?username=$username&date=$date&id=$id");
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

<body style="background-color: black;">
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center" style="padding-top: 40px">
            <div class="col-md-4">
                <h1 style="padding-bottom: 30px; color: #17a2b8; text-align: center;">Edit Report Sheet</h1>

                <form action=" remark.php" method="post">
                    <div class="form-group">
                        <input class="form-control" type="text" name="username" value="<?php echo $row['username']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="date" name="date" value="<?php echo $row['date']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="hidden" name="id" value="<?php echo $id; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $row['name']; ?>" readonly>
                        <small id="emailHelp" class="form-text text-muted">Surname should be in capital letter.</small>

                    </div>
                    <div class="form-group">
                        <label for="department">Department</label>
                        <select class="form-control" id="department" name="department" readonly>
                            <option value="<?php echo $row['department']; ?>"><?php echo $row['department']; ?></option>
                            

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" class="form-control" id="position" name="position" value="<?php echo $row['position']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="month">Month</label>
                        <select class="form-control" id="month" name="month" readonly>
                            <option value="<?php echo $row['month']; ?>"><?php echo $row['month']; ?></option>
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="week">Week</label>
                        <select class="form-control" id="week" name="week" readonly>
                            <option value="<?php echo $row['week']; ?>"><?php echo $row['week']; ?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="department">Activity</label>
                        <textarea class="form-control" id="activity" rows="3" name="activity" readonly><?php echo $row['activity']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="department">Additional Information</label>
                        <textarea class="form-control" id="addinfo" rows="3" name="addinfo" readonly><?php echo $row['additional_info']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status" readonly>
                            <option value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="score">Score</label>
                        <select class="form-control" id="score" name="score">
                            <option value="<?php echo $row['score']; ?>"><?php echo $row['score']; ?></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="remark">Remark</label>
                        <textarea class="form-control" id="remark" rows="3" name="remark"><?php echo $row['remark']; ?></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>