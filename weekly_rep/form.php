<?php
session_start();

$user = $_REQUEST['username'];
$_SESSION["userid"] = $_REQUEST['username'];
// echo $user;
//echo $_SESSION["userid"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Automated weekly activities report</title>
  <link rel='stylesheet' href='css/bootstrap.min.css'>
  <link rel='stylesheet' href='css/style.css'>
</head>

<body style="background-color: black;">
  <div class='wrapper'>
    <!-- Sidebar -->

    <nav id='sidebar' class="fixed-top">
      <div class='sidebar-header'>
        <h5 style="color: black;">User: <?php echo $user; ?></h5>
        <h3>Menu</h3>
        <ul class='list-unstyled components'>
          <li>
            <a href='#'>View All Reports</a>
          </li>
          <li>
            <a href='./scripts/logout.php'>Logout</a>
          </li>
        </ul>
      </div>



    </nav>

    <div class="container h-100">
      <div class="row h-100 justify-content-center align-items-center" style="padding-top: 40px; padding-left:190px;">
        <div class="col-md-6">
          <h1 style='padding-bottom: 30px; color: #17a2b8; text-align: center;'>Daily Report Sheet</h1>
          <form action="./scripts/post.php" method="post">
            <div class="form-group">
              <input class="form-control" type="text" name="username" value="<?php echo $_SESSION["userid"]; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="fullname">Full Name</label>
              <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Your Full Name" required>
              <small id="emailHelp" class="form-text text-muted">Surname should be in capital letter.</small>

            </div>
            <div class="form-group">
              <label for="department">Department</label>
              <select class="form-control" id="department" name="department" required>
                <option value="">Department</option>
                <option value="Admin">Admin</option>
                <option value="Software">Software</option>
                <option value="Graphics">Graphics</option>

              </select>
            </div>
            <div class="form-group">
              <label for="position">Position</label>
              <input type="text" class="form-control" id="position" name="position" placeholder="Position" required>
            </div>
            <div class="form-group">
              <label for="month">Month</label>
              <select class="form-control" id="month" name="month" required>
                <option value="">Month</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
              </select>
            </div>
            <div class="form-group">
              <label for="week">Week</label>
              <select class="form-control" id="week" name="week" required>
                <option value="">Week</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <div class="form-group">
              <label for="department">Activity</label>
              <textarea class="form-control" id="activity" rows="3" name="activity" placeholder="Write out your activity for the day" required></textarea>
            </div>
            <div class="form-group">
              <label for="department">Additional Information</label>
              <textarea class="form-control" id="addinfo" rows="3" name="addinfo" placeholder="Additional Information"></textarea>
            </div>
            <div class="form-group">
              <label for="status">Status</label>
              <select class="form-control" id="status" name="status" required>
                <option value="">Status</option>
                <option value="complete">Complete</option>
                <option value="incomplete">Incomplete</option>
              </select>
            </div>
            <div class="text-center">
              <button type="submit" name="submit" class="btn btn-primary" style='background-color: #747474'>Submit</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>


  <script src='js/solid.js'></script>
  <script src='js/fontawesome.js'></script>
  <script src='js/jquery.js'></script>
  <script src='js/bootstrap.bundle.js'></script>
  <script src='js/bootstrap.bundle.min.js'></script>
  <script src='js/jquery.min.js'></script>
  <script src='js/bootstrap.min.js'></script>
</body>

</html>