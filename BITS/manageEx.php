
<!-- Including the global path -->
<?php
include("path.php");
include(ROOT_PATH . "/app/controllers/support.php");
adminOnly();
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

    <title>Admin Section - Manage CMJAH Records</title>
</head>
<body>

<!-- Including the adminHeader nav-bar -->
<?php include(ROOT_PATH . "/app/includes/adminHeader.php");?>

<!-- Admin Page Wrapper -->
<div class="admin-wrapper">

    <!-- Left Sidebar -->
    <!-- Including the adminSidebar -->
    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php");?>
    <!-- // Left Sidebar -->

    <!-- Admin Content -->
    <div class="admin-content">
        <div class="button-group">
            <a href="usersCreate.php" class="btn btn-big">Add CMJAH Record</a>
            <a href="usersIndex.php" class="btn btn-big">Manage CMJAH Records</a>
        </div>

        <div class="content">

            <h2 class="page-title">Manage CMJAH Records</h2>

            <?php include(ROOT_PATH . "/app/includes/messages.php");?>

            <table>
                <thead>
                    <th>SN</th>
                    <th>Username</th>
                    <th>Ward</th>
                    <th>Toner</th>
                    <th>Paper</th>
                    <th>Other</th>
                    <th>Date</th>
                    <th colspan="2">Action</th>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Thato</td>
                    <td>396</td>
                    <td>Brother</td>
                    <td>1</td>
                    <td>Network issue</td>
                    <td>20-03-2020</td>
                    <td><a href="#" class="edit">edit</a></td>
                    <td><a href="#" class="delete">delete</a></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Krugerson</td>
                    <td>394</td>
                    <td>HP85A</td>
                    <td>1</td>
                    <td>Network issue</td>
                    <td>31-03-2020</td>
                    <td><a href="#" class="edit">edit</a></td>
                    <td><a href="#" class="delete">delete</a></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Maboya</td>
                    <td>377</td>
                    <td>HP12A</td>
                    <td></td>
                    <td></td>
                    <td>14-04-2020</td>
                    <td><a href="#" class="edit">edit</a></td>
                    <td><a href="#" class="delete">delete</a></td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>Intern</td>
                    <td>554</td>
                    <td></td>
                    <td>2</td>
                    <td>LAN Disconnected</td>
                    <td>23-04-2020</td>
                    <td><a href="#" class="edit">edit</a></td>
                    <td><a href="#" class="delete">delete</a></td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>Celia</td>
                    <td>274</td>
                    <td>HP85A</td>
                    <td>3</td>
                    <td></td>
                    <td>05-05-2020</td>
                    <td><a href="#" class="edit">edit</a></td>
                    <td><a href="#" class="delete">delete</a></td>
                </tr>

                <tr>
                    <td>6</td>
                    <td>Solomon</td>
                    <td>275</td>
                    <td></td>
                    <td></td>
                    <td>Internet</td>
                    <td>15-05-2020</td>
                    <td><a href="#" class="edit">edit</a></td>
                    <td><a href="#" class="delete">delete</a></td>
                </tr>
                </tbody>
            </table>

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