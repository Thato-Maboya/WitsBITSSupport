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

    <title>Admin Section - Add Item Record</title>
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
            <a href="teamCreate.php" class="btn btn-big">Add Item</a>
            <a href="teamIndex.php" class="btn btn-big">Manage Items</a>
        </div>

        <div class="content">

            <h2 class="page-title">Add User or Office Item Record</h2>

            <!-- Displaying success message telling user that record was added -->
            <?php include(ROOT_PATH . "/app/includes/messages.php");?>
            <!-- Displaying Error message is there is any error -->
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>

            <form action="teamCreate.php" method="post" enctype="multipart/form-data">
                <div>
                    <!-- <label>Username</label> -->
                    <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>" class="text-input">
                </div>
                <div>
                    <!-- <label>Hospiat</label>
                    <input type="hidden" name="hospital" value="hjh" class="text-input">-->
                </div>
                <div>
                    <label for="">Name of individual</label>
                    <select name="name" class="text-input">
                        <option></option>
                        <option value="Thato Maboya">Thato Maboya</option>
                        <option value="Mapule Nhlapho">Mapule Nhlapho</option>
                        <option value="Irma Mare">Irma Mare</option>
                        <option value="Michael Klipin">Michael Klipin</option>
                        <option value="Bradley Segal">Bradley Segal</option>
                        <option value="Belinda Mc Bride">Belinda Mc Bride</option>
                        <option value="Jolame Chirwa">Jolame Chirwa</option>
                        <option value="Proud Sachinda">Proud Sachinda</option>
                        <option value="Phelelani Mpanganase">Phelelani Mpanganase</option>
                        <option value="Ndzalama Shivambu">Ndzalama Shivambu</option>
                        <option value="WHC Office">WHC Office</option>
                    </select>
                </div>
                <div>
                    <label>Type of hardware</label>
                    <select name="computer" class="text-input">
                        <option></option>
                        <option value="lg PC">LG PC</option>
                        <option value="samsung PC">Samsung PC</option>
                        <option value="hp PC">HP PC</option>
                        <option value="acer PC">Acer PC</option>
                        <option value="asus PC">Asus PC</option>
                        <option value="mac PC">Mac PC</option>
                        <option value="samsung Monitor">Samsung Monitor</option>
                        <option value="acer Monitor">Acer Monitor</option>
                        <option value="lg Monitor">LG Monitor</option>
                        <option value="dell Monitor">Dell Monitor</option>
                        <option value="huawei wifi">Huawei Wifi</option>
                        <option value="rain wifi">Rain Wifi</option>
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
                    <button type="submit" name="team-create" class="btn btn-big">Add Info</button>
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
