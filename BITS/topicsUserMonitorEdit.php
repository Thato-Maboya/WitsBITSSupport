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

    <title>Admin Section - Edit CHBAH Monitors</title>
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
            <a href="usersCHBAHcreate.php" class="btn btn-big">Add Record</a>
            <a href="usersCHBAHindex.php" class="btn btn-big">Manage Records</a>
            <a href="topicsUserWorkstationCreate.php" class="btn btn-big">Add Workstation</a>
            <a href="chbah_user_workstations.php" class="btn btn-big">Manage Workstations</a>
        </div>

        <div class="content">

            <h2 class="page-title">Edit CHBAH Monitor</h2>

            <!-- Displaying success message telling user that record was added -->
            <?php include(ROOT_PATH . "/app/includes/messages.php");?>
            <!-- Displaying Error message is there is any error -->
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>

            <form action="topicsUserMonitorEdit.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div>
                    <!-- <label>Username</label> -->
                    <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>" class="text-input">
                </div>
                <div>
                    <!-- <label>Hospiat</label> -->
                    <input type="hidden" name="hospital" value="chbah" class="text-input">
                </div>
                <div>
                    <label for="">Ward</label>
                    <select name="ward" class="text-input">
                        <?php if($ward == 10): ?>
                            <option value="10">10</option>
                            <option value="8">8</option>
                            <option value="6">6</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="WHC Office">WHC Office</option>
                        <?php endif; ?>
                        <?php if($ward == 8): ?>
                            <option value="8">8</option>
                            <option value="6">6</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="WHC Office">WHC Office</option>
                            <option value="10">10</option>
                        <?php endif; ?>
                        <?php if($ward == 6): ?>
                            <option value="6">6</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="WHC Office">WHC Office</option>
                            <option value="10">10</option>
                            <option value="8">8</option>
                        <?php endif; ?>
                        <?php if($ward == 5): ?>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="WHC Office">WHC Office</option>
                            <option value="10">10</option>
                            <option value="8">8</option>
                            <option value="6">6</option>
                        <?php endif; ?>
                        <?php if($ward == 4): ?>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="WHC Office">WHC Office</option>
                            <option value="10">10</option>
                            <option value="8">8</option>
                            <option value="6">6</option>
                            <option value="5">5</option>
                        <?php endif; ?>
                        <?php if($ward == 3): ?>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="WHC Office">WHC Office</option>
                            <option value="10">10</option>
                            <option value="8">8</option>
                            <option value="6">6</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                        <?php endif; ?>
                        <?php if($ward == 2): ?>
                            <option value="2">2</option>
                            <option value="WHC Office">WHC Office</option>
                            <option value="10">10</option>
                            <option value="8">8</option>
                            <option value="6">6</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                        <?php endif; ?>
                        <?php if($ward == "WHC Office"): ?>
                            <option value="WHC Office">WHC Office</option>
                            <option value="10">10</option>
                            <option value="8">8</option>
                            <option value="6">6</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                        <?php endif; ?>
                    </select>
                </div>
                <div>
                    <label>Name of the monitor</label>
                    <select name="computer" class="text-input">
                        <?php if($monitor_name == 'hp'): ?>
                            <option value="hp">HP</option>
                            <option value="acer">Acer</option>
                            <option value="asus">Asus</option>
                            <option value="mac">Mac</option>
                            <option value="lg">LG</option>
                            <option value="samsung">Samsung</option>
                        <?php endif; ?>
                        <?php if($monitor_name == 'acer'): ?>
                            <option value="acer">Acer</option>
                            <option value="asus">Asus</option>
                            <option value="mac">Mac</option>
                            <option value="lg">LG</option>
                            <option value="samsung">Samsung</option>
                            <option value="hp">HP</option>
                        <?php endif; ?>
                        <?php if($monitor_name == 'asus'): ?>
                            <option value="asus">Asus</option>
                            <option value="mac">Mac</option>
                            <option value="lg">LG</option>
                            <option value="samsung">Samsung</option>
                            <option value="hp">HP</option>
                            <option value="acer">Acer</option>
                        <?php endif; ?>
                        <?php if($monitor_name == 'mac'): ?>
                            <option value="mac">Mac</option>
                            <option value="lg">LG</option>
                            <option value="samsung">Samsung</option>
                            <option value="hp">HP</option>
                            <option value="acer">Acer</option>
                            <option value="asus">Asus</option>
                        <?php endif; ?>
                        <?php if($monitor_name == 'lg'): ?>
                            <option value="lg">LG</option>
                            <option value="samsung">Samsung</option>
                            <option value="hp">HP</option>
                            <option value="acer">Acer</option>
                            <option value="asus">Asus</option>
                            <option value="mac">Mac</option>
                        <?php endif; ?>
                        <?php if($monitor_name == 'samsung'): ?>
                            <option value="samsung">Samsung</option>
                            <option value="hp">HP</option>
                            <option value="acer">Acer</option>
                            <option value="asus">Asus</option>
                            <option value="mac">Mac</option>
                            <option value="lg">LG</option>
                        <?php endif; ?>
                    </select>
                </div>
                <div>
                    <label>Serial Number</label>
                    <input type="text" name="sn" class="text-input" value="<?php echo $serial_number; ?>">
                </div>
                <div>
                    <label>Assets Number</label>
                    <input type="text" name="assets" class="text-input" value="<?php echo $assets_number; ?>">
                </div>
                <div>
                    <button type="submit" name="update-user-chbah-monitor" class="btn btn-big">Update Monitor</button>
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