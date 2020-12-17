<!-- Including the global path -->
<?php
include("path.php");
include(ROOT_PATH . "/app/controllers/support.php");
adminOnly();
//usersOnly();
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

    <title>Admin Section - Manage HJH Records</title>
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
            <a href="todoCreate.php" class="btn btn-big">Add List</a>
            <a href="todo.php" class="btn btn-big">Manage Lists</a>
        </div>

        <div class="content">

            <h2 class="page-title">Manage Lists {What to do || What is done}</h2>

            <?php include(ROOT_PATH . "/app/includes/messages.php");?>

            <table>
                <thead>
                <th>SN</th>
                <th>Username</th>
                <th>Hospital</th>
                <th>Ward</th>
                <th>Issue(s)</th>
                <th>Action</th>
                </thead>
                <tbody>
                <?php foreach ($todo_data as $key => $list): ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $list['username']; ?></td>
                        <td><?php echo $list['hospital']; ?></td>
                        <td><?php echo $list['ward']; ?></td>
                        <td><?php echo $list['issue']; ?></td>
                        <?php if($list['done']): ?>
                            <td><a href="todo.php?done=0&done_id=<?php echo $list['id']; ?>" class="publish">done</a></td>
                        <?php else: ?>
                            <td><a href="todo.php?done=1&done_id=<?php echo $list['id']; ?>" class="unpublish">not done</a></td>
                        <?php endif; ?>
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