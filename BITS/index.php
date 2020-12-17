<!-- Including the global path -->
<?php
include("path.php");
include(ROOT_PATH . "/app/controllers/support.php");

$posts = '';
$postsTitle = 'Recent Posts';


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

    <title>Blog</title>
</head>
<body>

<!-- Including the header nav-bar -->
<?php include(ROOT_PATH . "/app/includes/header.php");?>
<?php include(ROOT_PATH . "/app/includes/messages.php");?>

<!-- Page Wrapper -->
<div class="page-wrapper">
    <!-- Carousel row slider -->
    <div class="post-slider">
        <h1 class="slider-title">Lists of issue(s) that should be done</h1>
        <i class="fa fa-chevron-left prev"></i>
        <i class="fa fa-chevron-right next"></i>

        <div class="post-wrapper">

            <?php foreach ($undone_todo_data as $todo_data): ?>

                <div class="post" style="background: #008489; color: white">
                    <div style="padding: 10px">
                        <div class="slider-image">
                            <label for="">The issue in ward <strong><?php echo $todo_data['ward']; ?></strong> at <strong style="text-transform: uppercase;"><?php echo $todo_data['hospital']; ?></strong> is:</label>
                            <ul>
                                <li>
                                    <?php echo $todo_data['issue']; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="post-info">
                       <i class="fa fa-user"><?php echo ' '.$todo_data['username']; ?></i>
                        &nbsp;<br>
                        <i class="fa fa-calendar"><?php echo ' '.date('F j, Y', strtotime($todo_data['created_at'])); ?></i>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>

    </div>
    <!-- // Carousel row slider -->


</div>
<!-- // Page wrapper -->


<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

<!-- Slick Carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Custom Script -->
<script src="assets/js/script.js"></script>
</body>
</html>