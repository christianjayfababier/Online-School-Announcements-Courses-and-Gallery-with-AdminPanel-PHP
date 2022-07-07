
<?php
 
 include('../admin/init/model/engine.model.php');
     

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Courses</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>
    <body style="background-color: #E9EBEE;">
        <!-- Responsive navbar-->
          <!-- Navigation-->
          <?php include('../components/nav/nav-courses.php');?>



        <!-- Page header with logo and tagline-->

        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">PRMSU Courses</h1>
                    <p class="lead mb-0">Check out our available courses</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row justify-content-center">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->

                    <?php 
                        $conn = new engine_model();
                        $docu = $conn->fetchAll_courses();
                        ?>
                        <?php foreach ($docu as $row) { ?>
                    <div class="card mb-4 shadow p-1 bg-white rounded">
                    <div class="card-header " style="background-color: #0F0072;">
                    <h3 class="card-title" style="color: white;">
                    <?= $row['course_name']; ?> &nbsp; (<?= $row['course_abbreviation']; ?>)
                </h3>
                    </div>
                    <div class="card-body">
                            <p class="card-text"><?= $row['course_description']; ?></p>
                        </div>
                       
                    <div class="card-footer text-muted">
                    <em>President Ramon Magsaysay State University Courses</em>
                    </div>

                    </div>
                  
                    <?php }?>
                </div>
              
            </div>
        </div>
        <!-- Footer-->
        <?php include('../components/footer/footer-courses.php');?>
        <!-- Bootstrap core JS-->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
