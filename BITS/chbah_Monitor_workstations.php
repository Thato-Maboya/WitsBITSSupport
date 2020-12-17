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

    <title>Admin Section - Manage CHBAH Monitor's</title>
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
            <a href="topicsCreate.php" class="btn btn-big">Add Record</a>
            <a href="topicsIndex.php" class="btn btn-big">Manage Records</a>
            <a href="topicsWorkstationCreate.php" class="btn btn-big">Add Workstation</a>
            <a href="chbah_workstations.php" class="btn btn-big">Manage Workstations</a>
        </div>

        <div class="content">

            <h2 class="page-title">Manage CHBAH Moniotor's</h2>

            <?php include(ROOT_PATH . "/app/includes/messages.php");?>

            <table>
                <thead>
                <th>Id</th>
                <th>Username</th>
                <th>Ward</th>
                <th>Monitor Name</th>
                <th>SN</th>
                <th>Assets</th>
                <th>Date</th>
                <th colspan="2">Action</th>
                </thead>
                <tbody>
                <?php foreach ($chbah_workstations_monitor as $key => $record): ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $record['username']; ?></td>
                        <td><?php echo $record['ward']; ?></td>
                        <td><?php echo $record['monitor_name']; ?></td>
                        <td><?php echo $record['serial_number']; ?></td>
                        <td><?php echo $record['assets_number']; ?></td>
                        <td><?php echo $record['created_at']; ?></td>
                        <td><a href="topicsMonitorEdit.php?chbahMonitor_update_id=<?php echo $record['id']; ?>" class="edit">edit</a></td>
                        <td><a href="chbah_Monitor_workstations.php?chbahMonitor_delete_id=<?php echo $record['id']; ?>" class="delete">delete</a></td>
                    </tr>
                <?php endforeach; ?>
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