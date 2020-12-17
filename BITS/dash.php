<?php

include("path.php");
include(ROOT_PATH . "/app/controllers/support.php");
usersOnly();

/* Getting demo_viewer table data */

$sql = "SELECT SUM(replaced_toner) as count FROM hjh 

			GROUP BY MONTH(created_at) ORDER BY created_at";

$toner = mysqli_query($conn,$sql);

$toner = mysqli_fetch_all($toner,MYSQLI_ASSOC);

$toner = json_encode(array_column($toner, 'count'),JSON_NUMERIC_CHECK);



/* Getting demo_click table data */

$sql = "SELECT SUM(quality_of_paper) as count FROM hjh

			GROUP BY MONTH(created_at) ORDER BY created_at";

$paper = mysqli_query($conn,$sql);

$paper = mysqli_fetch_all($paper,MYSQLI_ASSOC);

$paper = json_encode(array_column($paper, 'count'),JSON_NUMERIC_CHECK);


?>


<!DOCTYPE html>

<html>

<head>
    <!-- font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Admin Styling -->
    <link rel="stylesheet" href="assets/css/admin.css">
    <title>HighChart</title>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>

</head>

<body>


<script type="text/javascript">


    $(function () {


        var data_paper = <?php echo $paper; ?>;

        var data_toner = <?php echo $toner; ?>;


        $('#container').highcharts({

            chart: {

                type: 'column'

            },

            title: {

                text: 'Yearly Paper and Toner Ratio'

            },

            xAxis: {

                categories: ['01','02','03','04','05','06','07','08']

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

    });


</script>

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

            <h2 class="page-title">Dashboard</h2>

                <div class="container">
                    <br/>

                    <div class="panel-body">

                        <div id="container" style="width: 100%"></div>

                    </div>

                </div>
        </div>
    </div>

</body>

</html>