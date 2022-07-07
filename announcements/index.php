
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
        <title>Announcements</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>
    <body style="background-color: #E9EBEE;">
        <!-- Responsive navbar-->
          <!-- Navigation-->
          <?php include('../components/nav/nav-announcements.php');?>



        <!-- Page header with logo and tagline-->

        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">PRMSU Announcements</h1>
                    <p class="lead mb-0">Keep up with the most recent announcements and events.</p>
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
                        $docu = $conn->fetchAll_posts();
                        ?>
                        <?php foreach ($docu as $row) { ?>
                    <div class="card mb-4 shadow p-1 bg-white rounded">
                    <div class="card-header ">
                    <img src="../assets/img/prmsu.png" style="width: 50px;">&nbsp; &nbsp;PRMSU Admin
                    </div>
                    <div class="card-body">
                            <h2 class="card-title"><?= $row['post_title']; ?></h2>
                            <p class="card-text"><?= $row['post_description']; ?></p>
                        </div>
                    <div style="width:850px ;height:350px;background-color:#000" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            <?php 
                      echo '<a href="post/view.php?post='.$row['post_id'].'&post-title='.$row['post_title'].'"> <img class="card-img-top w-850 h-350" style="width:100%;height:100%;object-fit: contain" src="../admin/'.$row['post_image'].'" alt="..." /></a>;'



                
                 ?>
                </div>
                       
                    <div class="card-footer text-muted">
                    Posted on <?= date("M d, Y",strtotime($row['post_date'])); ?>
                    </div>

                    </div>
                  
                    <?php }?>




                  
                    <!-- Nested row for non-featured blog posts-->
                    <!-- Pagination-->




                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>
              
            </div>
        </div>
        <!-- Footer-->
        <?php include('../components/footer/footer-announcements.php');?>
        <!-- Bootstrap core JS-->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
    
        <script src="js/scripts.js"></script>
    </body>
</html>
