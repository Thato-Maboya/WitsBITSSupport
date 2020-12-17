<!-- Including the global path -->
<?php
include("path.php");
include(ROOT_PATH . "/app/controllers/support.php");
usersOnly();
global $conn;

/* Getting HJH table data */

$sql = "SELECT SUM(replaced_toner) as count FROM hjh 

			GROUP BY YEAR(created_at) ORDER BY created_at";

$toner = mysqli_query($conn,$sql);

$toner = mysqli_fetch_all($toner,MYSQLI_ASSOC);

$toner = json_encode(array_column($toner, 'count'),JSON_NUMERIC_CHECK);




$sql = "SELECT SUM(quality_of_paper) as count FROM hjh

			GROUP BY YEAR(created_at) ORDER BY created_at";

$paper = mysqli_query($conn,$sql);

$paper = mysqli_fetch_all($paper,MYSQLI_ASSOC);

$paper = json_encode(array_column($paper, 'count'),JSON_NUMERIC_CHECK);
/* End of Getting HJV table data */


/* Getting CMJAH table data */

$sql = "SELECT SUM(replaced_toner) as count FROM cmjah 

			GROUP BY YEAR(created_at) ORDER BY created_at";

$toner_cmjah = mysqli_query($conn,$sql);

$toner_cmjah = mysqli_fetch_all($toner_cmjah,MYSQLI_ASSOC);

$toner_cmjah = json_encode(array_column($toner_cmjah, 'count'),JSON_NUMERIC_CHECK);




$sql = "SELECT SUM(quality_of_paper) as count FROM cmjah

			GROUP BY YEAR(created_at) ORDER BY created_at";

$paper_cmjah = mysqli_query($conn,$sql);

$paper_cmjah = mysqli_fetch_all($paper_cmjah,MYSQLI_ASSOC);

$paper_cmjah = json_encode(array_column($paper_cmjah, 'count'),JSON_NUMERIC_CHECK);
/* End of Getting CMJAH table data */


/* Getting CHBAH table data */

$sql = "SELECT SUM(replaced_toner) as count FROM chbah 

			GROUP BY YEAR(created_at) ORDER BY created_at";

$toner_chbah = mysqli_query($conn,$sql);

$toner_chbah = mysqli_fetch_all($toner_chbah,MYSQLI_ASSOC);

$toner_chbah = json_encode(array_column($toner_chbah, 'count'),JSON_NUMERIC_CHECK);




$sql = "SELECT SUM(quality_of_paper) as count FROM chbah

			GROUP BY YEAR(created_at) ORDER BY created_at";

$paper_chbah = mysqli_query($conn,$sql);

$paper_chbah = mysqli_fetch_all($paper_chbah,MYSQLI_ASSOC);

$paper_chbah = json_encode(array_column($paper_chbah, 'count'),JSON_NUMERIC_CHECK);
/* End of Getting CHBAH table data */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>

    <!-- font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Admin Styling -->
    <link rel="stylesheet" href="assets/css/admin.css">

    <title>Admin Section - Dashboard</title>


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
            <a href="search_date_usersdashboard.php" class="btn btn-big">Generate Stats</a>
            <a href="wards_usersdashboard.php" class="btn btn-big">Ward Stats</a>
            <a href="usersdashboard.php" class="btn btn-big">Yearly Stats</a>
        </div>

        <div class="content">

            <h2 class="page-title">Dashboard</h2>

            <!-- Displaying Error message is there is any error -->
            <?php include(ROOT_PATH . "/app/includes/messages.php");?>

            <hr style="border: 1px solid #234a57">
            <h4>This site provide the total number of toner and paper used for each year.</h4>
            <hr style="border: 1px solid #234a57">


            <div class="panel-body">
                <div id="graph"></div>
            </div>

            <div class="panel-body">
                <div id="graph_cmjah"></div>
            </div>

            <div class="panel-body">
                <div id="graph_chbah"></div>
            </div>


        </div>

    </div>
    <!-- // Admin Content -->

</div>
<!-- // Admin Page wrapper -->



<!-- CKeditor -->
<script src="ckeditor5/ckeditor.js"></script>
<!--/* What it does it "It look into the document & any element that has ad id=body, Replace
it with our reach text editor" */-->
<script>
    ClassicEditor.create( document.getElementById( "body" ));
</script>

<!-- Custom Script -->
<script src="assets/js/script.js"></script>


<!-- PHP and Mysql Charts & Graphs with Ajax -->
<script type="text/javascript">


    $(function () {


        var data_paper = <?php echo $paper; ?>;
        var data_toner = <?php echo $toner; ?>;
        var data_paper_cmjah = <?php echo $paper_cmjah; ?>;
        var data_toner_cmjah = <?php echo $toner_cmjah; ?>;
        var data_paper_chbah = <?php echo $paper_chbah; ?>;
        var data_toner_chbah = <?php echo $toner_chbah; ?>;


        $('#graph').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: '<strong>HJH Yearly Paper and Toner Ratio</strong>'
            },
            xAxis: {
                categories: ['2019','2020','2021','2022', '2023']
            },
            yAxis: {
                title: {
                    text: 'Rate of Consumables issued'
                }
            },
            series: [{
                name: 'Paper',
                data: data_paper
            }, {
                name: 'Toner',
                data: data_toner
            }]

        });


        $('#graph_cmjah').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: '<strong>CMJAH Yearly Paper and Toner Ratio</strong>'
            },
            xAxis: {
                categories: ['2019','2020','2021','2022', '2023']
            },
            yAxis: {
                title: {
                    text: 'Rate of Consumables issued'
                }
            },
            series: [{
                name: 'Paper',
                data: data_paper_cmjah
            }, {
                name: 'Toner',
                data: data_toner_cmjah
            }]

        });


        $('#graph_chbah').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: '<strong>CHBAH Yearly Paper and Toner Ratio</strong>'
            },
            xAxis: {
                categories: ['2019','2020','2021','2022', '2023']
            },
            yAxis: {
                title: {
                    text: 'Rate of Consumables issued'
                }
            },
            series: [{
                name: 'Paper',
                data: data_paper_chbah
            }, {
                name: 'Toner',
                data: data_toner_chbah
            }]

        });

    });


</script>


</body>
</html>