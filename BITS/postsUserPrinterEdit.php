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

    <title>Admin Section - Edit HJH Printers</title>
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
            <a href="usersHJHcreate.php" class="btn btn-big">Add Record</a>
            <a href="usersHJHindex.php" class="btn btn-big">Manage Records</a>
            <a href="postsUserWorkstationCreate.php" class="btn btn-big">Add Workstation</a>
            <a href="hjh_user_workstations.php" class="btn btn-big">Manage Workstations</a>
        </div>

        <div class="content">

            <h2 class="page-title">Edit HJH Printer</h2>

            <!-- Displaying success message telling user that record was added -->
            <?php include(ROOT_PATH . "/app/includes/messages.php");?>
            <!-- Displaying Error message is there is any error -->
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>

            <form action="postsUserPrinterEdit.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div>
                    <!-- <label>Username</label> -->
                    <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>" class="text-input">
                </div>
                <div>
                    <!-- <label>Hospiat</label> -->
                    <input type="hidden" name="hospital" value="hjh" class="text-input">
                </div>
                <div>
                    <label for="">Ward</label>
                    <select name="ward" class="text-input">
                        <?php if($ward == '2 (Room 1 Interview room)'): ?>
                            <option value="2 (Room 1 Interview room)">2 (Room 1 Interview room)</option>
                            <option value="2 (office 31)">2 (office 31)</option>
                            <option value="2 (office 27)">2 (office 27)</option>
                            <option value="2 (office 26)">2 (office 26)</option>
                            <option value="WHC Office">WHC Office</option>
                            <option value="19">19</option>
                            <option value="18">18</option>
                            <option value="17">17</option>
                            <option value="16">16</option>
                        <?php endif; ?>
                        <?php if($ward == '2 (office 31)'): ?>
                            <option value="2 (office 31)">2 (office 31)</option>
                            <option value="2 (office 27)">2 (office 27)</option>
                            <option value="2 (office 26)">2 (office 26)</option>
                            <option value="WHC Office">WHC Office</option>
                            <option value="19">19</option>
                            <option value="18">18</option>
                            <option value="17">17</option>
                            <option value="16">16</option>
                            <option value="2 (office 31)">2 (office 31)</option>
                        <?php endif; ?>
                        <?php if($ward == '2 (office 27)'): ?>
                            <option value="2 (office 27)">2 (office 27)</option>
                            <option value="2 (office 26)">2 (office 26)</option>
                            <option value="WHC Office">WHC Office</option>
                            <option value="19">19</option>
                            <option value="18">18</option>
                            <option value="17">17</option>
                            <option value="16">16</option>
                            <option value="2 (Room 1 Interview room)">2 (Room 1 Interview room)</option>
                            <option value="2 (office 31)">2 (office 31)</option>
                        <?php endif; ?>
                        <?php if($ward == '2 (office 26)'): ?>
                            <option value="2 (office 26)">2 (office 26)</option>
                            <option value="WHC Office">WHC Office</option>
                            <option value="19">19</option>
                            <option value="18">18</option>
                            <option value="17">17</option>
                            <option value="16">16</option>
                            <option value="2 (Room 1 Interview room)">2 (Room 1 Interview room)</option>
                            <option value="2 (office 31)">2 (office 31)</option>
                            <option value="2 (office 27)">2 (office 27)</option>
                        <?php endif; ?>
                        <?php if($ward == 'WHC Office'): ?>
                            <option value="WHC Office">WHC Office</option>
                            <option value="19">19</option>
                            <option value="18">18</option>
                            <option value="17">17</option>
                            <option value="16">16</option>
                            <option value="2 (Room 1 Interview room)">2 (Room 1 Interview room)</option>
                            <option value="2 (office 31)">2 (office 31)</option>
                            <option value="2 (office 27)">2 (office 27)</option>
                            <option value="2 (office 26)">2 (office 26)</option>
                        <?php endif; ?>
                        <?php if($ward == 19): ?>
                            <option value="19">19</option>
                            <option value="18">18</option>
                            <option value="17">17</option>
                            <option value="16">16</option>
                            <option value="2 (Room 1 Interview room)">2 (Room 1 Interview room)</option>
                            <option value="2 (office 31)">2 (office 31)</option>
                            <option value="2 (office 27)">2 (office 27)</option>
                            <option value="2 (office 26)">2 (office 26)</option>
                            <option value="WHC Office">WHC Office</option>
                        <?php endif; ?>
                        <?php if($ward == 18): ?>
                            <option value="18">18</option>
                            <option value="17">17</option>
                            <option value="16">16</option>
                            <option value="2 (Room 1 Interview room)">2 (Room 1 Interview room)</option>
                            <option value="2 (office 31)">2 (office 31)</option>
                            <option value="2 (office 27)">2 (office 27)</option>
                            <option value="2 (office 26)">2 (office 26)</option>
                            <option value="WHC Office">WHC Office</option>
                            <option value="19">19</option>
                        <?php endif; ?>
                        <?php if($ward == 17): ?>
                            <option value="17">17</option>
                            <option value="16">16</option>
                            <option value="2 (Room 1 Interview room)">2 (Room 1 Interview room)</option>
                            <option value="2 (office 31)">2 (office 31)</option>
                            <option value="2 (office 27)">2 (office 27)</option>
                            <option value="2 (office 26)">2 (office 26)</option>
                            <option value="WHC Office">WHC Office</option>
                            <option value="19">19</option>
                            <option value="18">18</option>
                        <?php endif; ?>
                        <?php if($ward == 16): ?>
                            <option value="16">16</option>
                            <option value="2 (Room 1 Interview room)">2 (Room 1 Interview room)</option>
                            <option value="2 (office 31)">2 (office 31)</option>
                            <option value="2 (office 27)">2 (office 27)</option>
                            <option value="2 (office 26)">2 (office 26)</option>
                            <option value="WHC Office">WHC Office</option>
                            <option value="19">19</option>
                            <option value="18">18</option>
                            <option value="17">17</option>
                        <?php endif; ?>
                    </select>
                </div>
                <div>
                    <label>Name of the priter</label>
                    <select name="computer" class="text-input">
                        <?php if($printer_name == 'laser'): ?>
                            <option value="laser">Laser printer</option>
                            <option value="brother">Brother printer</option>
                        <?php endif; ?>
                        <?php if($printer_name == 'brother'): ?>
                            <option value="brother">Brother printer</option>
                            <option value="laser">Laser printer</option>
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
                    <button type="submit" name="update-user-hjh-printer" class="btn btn-big">Update Printer</button>
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