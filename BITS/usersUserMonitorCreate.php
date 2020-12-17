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

    <title>Admin Section - Add CMJAH Monitors</title>
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

            <h2 class="page-title">Add CMJAH Monitor</h2>

            <!-- Displaying success message telling user that record was added -->
            <?php include(ROOT_PATH . "/app/includes/messages.php");?>
            <!-- Displaying Error message is there is any error -->
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>

            <form action="usersUserMonitorCreate.php" method="post" enctype="multipart/form-data">
                <div>
                    <!-- <label>Username</label> -->
                    <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>" class="text-input">
                </div>
                <div>
                    <!-- <label>Hospiat</label> -->
                    <input type="hidden" name="hospital" value="cmjah" class="text-input">
                </div>
                <div>
                    <label for="">Ward</label>
                    <select name="ward" class="text-input">
                        <option></option>
                        <option value="267">267</option>
                        <option value="275(4)">275(4)</option>
                        <option value="275(2)">275(2)</option>
                        <option value="369">369</option>
                        <option value="374">374</option>
                        <option value="375(Admin)">375(Admin)</option>
                        <option value="375">375</option>
                        <option value="377">377</option>
                        <option value="394">394</option>
                        <option value="395">395</option>
                        <option value="396">396</option>
                        <option value="554">554</option>
                    </select>
                </div>
                <div>
                    <label>Name of the monitor</label>
                    <select name="computer" class="text-input">
                        <option></option>
                        <option value="hp">HP</option>
                        <option value="acer">Acer</option>
                        <option value="asus">Asus</option>
                        <option value="mac">Mac</option>
                        <option value="lg">LG</option>
                        <option value="samsung">Samsung</option>
                    </select>
                </div>
                <div>
                    <label>Serial Number</label>
                    <input type="text" name="sn" class="text-input" value="<?php echo $sn; ?>">
                </div>
                <div>
                    <label>Assets Number</label>
                    <input type="text" name="assets" class="text-input" value="<?php echo $assets; ?>">
                </div>
                <div>
                    <button type="submit" name="create-user-cmjah-monitor" class="btn btn-big">Add Monitor</button>
                </div>
            </form>

        </div>

    </div>
    <!-- // Admin Content -->

</div>
<!-- // Admin Page wrapper -->



<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

<!-- CKeditor -->
<script src="ckeditor5/ckeditor.js"></script>
<!--/* What it does it "It look into the document & any element that has ad id=body, Replace
it with our reach text editor" */-->
<script>
    ClassicEditor.create( document.getElementById( "body" ));
</script>

<!-- Custom Script -->
<script src="assets/js/script.js"></script>

</body>
</html>