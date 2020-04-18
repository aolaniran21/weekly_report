<?php
include("./scripts/connect.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automated weekly activities report</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel='stylesheet' href='css/style.css'>
</head>

<body style="background-color: black;">
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center" style="padding-top: 160px">
            <div class="col-md-4">
                <h1 style="padding-bottom: 30px; color: #17a2b8;">Daily Report Sheet</h1>
                <h5 class="text-center" style="padding-bottom: 30px; color: #17a2b8;">Admin</h5>

                <form action="./scripts/retrieve.php" method="post">

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Your Username" required>
                        <small id="emailHelp" class="form-text text-muted">Username should be in small letter.</small>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date" >
                        
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary">Search</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>