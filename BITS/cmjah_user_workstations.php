<!-- Including the global path -->
<?php
include("path.php");
include(ROOT_PATH . "/app/controllers/support.php");
usersOnly();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Admin Styling -->
    <link rel="stylesheet" href="assets/css/admin.css">

    <title>Admin Section - Manage CMJAH Workstations</title>
</head>
<body>

<!-- Including the adminHeader nav-bar -->
<?php include(ROOT_PATH . "/app/includes/adminHeader.php");?>

<!-- Admin Page Wrapper -->
<div class="admin-wrapper">

    <!-- Left Sidebar -->
    <!-- Including the adminSidebar -->
    <?php include(ROOT_PATH . "/app/includes/userSidebar.php");?>
    <!-- // Left Sidebar -->

    <!-- Admin Content -->
    <div class="admin-content">
        <div class="button-group">
            <a href="usersCMJAHcreate.php" class="btn btn-big">Add Record</a>
            <a href="usersCMJAHindex.php" class="btn btn-big">Manage Records</a>
            <a href="usersUserWorkstationCreate.php" class="btn btn-big">Add Workstation</a>
            <a href="cmjah_user_workstations.php" class="btn btn-big">Manage Workstations</a>
        </div>

        <div class="content">

            <h2 class="page-title">Manage CMJAH Workstations</h2>

            <div class="left-sidebar">
                <ul>
                    <li><a href="cmjah_user_Tower_workstations.php" class="btn btn-big">Manage CMJAH Tower's</a></li>
                    <li><a href="cmjah_user_Monitor_workstations.php" class="btn btn-big">Manage CMJAH Monitor's</a></li>
                    <li><a href="cmjah_user_Printer_workstations.php" class="btn btn-big">Manage CMJAH Printer's</a></li>
                </ul>
            </div>


        </div>

    </div>
    <!-- // Admin Content -->

</div>
<!-- // Admin Page wrapper -->



<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

<!-- Custom Script -->
<script src="assets/js/script.js"></script>
</body>
</html>