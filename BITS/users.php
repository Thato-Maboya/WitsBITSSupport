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

    <title>Admin Section - Manage User</title>
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

        <div class="content">

            <h2 class="page-title">Manage Users</h2>

            <?php include(ROOT_PATH . "/app/includes/messages.php");?>

            <table>
                <thead>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Date</th>
                <th colspan="2">Action</th>
                </thead>
                <tbody>
                <?php foreach ($users_action as $key => $record): ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $record['username']; ?></td>
                        <td><?php echo $record['email']; ?></td>
                        <td><?php echo $record['created_at']; ?></td>
                        <?php if($record['admin']): ?>
                            <td><a href="users.php?admin=0&admin_id=<?php echo $record['id']; ?>" class="publish">admin</a></td>
                        <?php else: ?>
                            <td><a href="users.php?admin=1&admin_id=<?php echo $record['id']; ?>" class="unpublish">user</a></td>
                        <?php endif; ?>
                        <td><a href="users.php?users_delete_id=<?php echo $record['id']; ?>" class="delete">delete</a></td>
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