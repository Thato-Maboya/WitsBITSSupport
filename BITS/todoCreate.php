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

    <title>Admin Section - Add To Do Lists</title>
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

            <h2 class="page-title">Add To Do List</h2>

            <!-- Displaying Error message is there is any error -->
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>

            <form action="todoCreate.php" method="post" enctype="multipart/form-data">
                <div>
                    <!-- <label>Username</label> -->
                    <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>" class="text-input">
                </div>
                <div>
                    <label>Hospital</label>
                    <div style="margin-left: 10px">
                        <label>
                            <input onclick="myFunctionHJH()" type="radio" name="hospital" value="hjh" >
                            hjh
                        </label>
                    </div>
                    <div style="margin-left: 10px">
                        <label>
                            <input onclick="myFunctionCMJAH()" type="radio" name="hospital" value="cmjah" >
                            cmjah
                        </label>
                    </div>
                    <div style="margin-left: 10px">
                        <label>
                            <input onclick="myFunctionCHBAH()" type="radio" name="hospital" value="chbah" >
                            chbah
                        </label>
                    </div>
                </div>
                <div>
                    <p id="hjh"></p>
                </div>
                <div>
                    <p id="cmjah"></p>
                </div>
                <div>
                    <p id="chbah"></p>
                </div>
                <div>
                    <label>Issue</label>
                    <textarea name="issue" id="body"><?php echo $issue; ?></textarea>
                </div>

                <div>
                    <button type="submit" name="add-list" class="btn btn-big">Add Todo List</button>
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

<!-- Branching Logic Script by calling ID when clicking on the checkbox -->
<script>
    function myFunctionHJH() {
        document.getElementById("hjh").innerHTML = '<label for="">HJH Ward</label>\n' +
            '                        <select name="ward" class="text-input">\n' +
            '                            <option></option>\n' +
            '                            <option value="2 (office 32)">2 (office 32)</option>\n' +
            '                            <option value="2 (office 30)">2 (office 30)</option>\n' +
            '                            <option value="2 (office 29)">2 (office 29)</option>\n' +
            '                            <option value="2 (office 28)">2 (office 28)</option>\n' +
            '                            <option value="19">19</option>\n' +
            '                            <option value="18">18</option>\n' +
            '                            <option value="17">17</option>\n' +
            '                            <option value="16">16</option>\n' +
            '                        </select>';
    }

    function myFunctionCMJAH() {
        document.getElementById("cmjah").innerHTML = '<label for="">CMJAH Ward</label>\n' +
            '                    <select name="ward" class="text-input">\n' +
            '                        <option></option>\n' +
            '                        <option value="267">267</option>\n' +
            '                        <option value="275(4)">275(4)</option>\n' +
            '                        <option value="275(2)">275(2)</option>\n' +
            '                        <option value="369">369</option>\n' +
            '                        <option value="374">374</option>\n' +
            '                        <option value="375(Admin)">375(Admin)</option>\n' +
            '                        <option value="375">375</option>\n' +
            '                        <option value="377">377</option>\n' +
            '                        <option value="394">394</option>\n' +
            '                        <option value="395">395</option>\n' +
            '                        <option value="396">396</option>\n' +
            '                        <option value="554">554</option>\n' +
            '                    </select>';
    }

    function myFunctionCHBAH() {
        document.getElementById("chbah").innerHTML = '<label for="">CHBAH Ward</label>\n' +
            '                       <select name="ward" class="text-input">\n' +
            '                            <option></option>\n' +
            '                            <option value="10">10</option>\n' +
            '                            <option value="8">8</option>\n' +
            '                            <option value="6">6</option>\n' +
            '                            <option value="5">5</option>\n' +
            '                            <option value="4">4</option>\n' +
            '                            <option value="3">3</option>\n' +
            '                            <option value="2">2</option>\n' +
            '                        </select>';
    }
</script>
</body>
</html>