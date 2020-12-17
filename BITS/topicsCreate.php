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

    <title>Admin Section - Add CHBAH Records</title>
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

            <h2 class="page-title">Add CHBAH Record</h2>

            <!-- Displaying success message telling user that record was added -->
            <?php include(ROOT_PATH . "/app/includes/messages.php");?>
            <!-- Displaying Error message is there is any error -->
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>

                 <form action="topicsCreate.php" method="post">
                     <div>
                         <!-- <label>Username</label> -->
                         <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>" class="text-input">
                     </div>
                    <div>
                        <label for="">Ward</label>
                        <select name="ward" class="text-input">
                            <option></option>
                            <option value="10">10</option>
                            <option value="8">8</option>
                            <option value="6">6</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Consumables issued</label>
                        <div style="margin-left: 10px">
                            <label>
                                <input onclick="myFunctionToner()" type="checkbox" name="replaced_toner" value="1" >
                                Replaced toner
                            </label>
                            <label>
                                <input onclick="myFunctionPaper()" type="checkbox" name="issued_paper" value="1" >
                                Issued paper
                            </label>
                            <label>
                                <input onclick="myFunctionOther()" type="checkbox" name="other_issue" value="1" >
                                Other
                            </label>
                        </div>
                    </div>
                    <div>
                        <p id="toner"></p>
                    </div>
                    <div>
                        <p id="paper"></p>
                    </div>
                    <div>
                        <p id="other"></p>
                    </div>
                    <div>
                        <label for="">Comments</label>
                        <textarea type="text" name="comments" class="text-input"><?php echo $comments; ?></textarea>
                    </div>
                    <div>
                        <button type="submit" name="create-chbah" class="btn btn-big">Add Record</button>
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
    function myFunctionPaper() {
        document.getElementById("paper").innerHTML = '<label for="">Quality of paper</label>' +
            '<input type="number" name="quality_of_paper"  class="text-input">';
    }

    function myFunctionToner() {
        document.getElementById("toner").innerHTML = '<div><label for="">Type of toner</label>\n' +
                                    '                       <select name="type_of_toner" class="text-input">\n' +
                                    '                            <option></option>\n' +
                                    '                            <option value="brother">Brother</option>\n' +
                                    '                            <option value="hp12a">HP12A</option>\n' +
                                    '                            <option value="hp85a">HP85A</option>\n' +
                                    '                        </select></div>';
    }

    function myFunctionOther() {
        document.getElementById("other").innerHTML = '<label for="">Other Issue</label>\n' +
            '                    <textarea type="text" name="issue" class="text-input"></textarea>';
    }
</script>
</body>
</html>