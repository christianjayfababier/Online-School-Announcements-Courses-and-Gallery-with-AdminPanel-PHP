
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
        <title>Virtual Tour</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>
    <body style="background-color: #E9EBEE;">
        <!-- Responsive navbar-->
          <!-- Navigation-->
          <?php include('../components/navigation.php');?>



        <!-- Page header with logo and tagline-->

        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">PRMSU Virtual Tour</h1>
                    <p class="lead mb-0">Check out our campus virtual tour</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
        <div class="row">
            <div>
        <h1>Virtual Images</h1>
        <hr>
    </div>
                <!-- Blog entries-->
                <?php 
                        $conn = new engine_model();
                        $docu = $conn->fetchAll_vimages();
                        ?>
                        <?php foreach ($docu as $row) { ?>
                <div class="col-lg-4">
                    <!-- Featured blog post-->

                   
                    <div class="card mb-4 shadow p-1 bg-white rounded">
                    <img  class="card-img-top" src="../admin/<?php echo $row['uploaded_image']?>" style="width:100%;height:100%;object-fit: contain">
                     
                    <div class="card-body">
                    <?= $row['img_title']; ?>
                              </div>
                       
                    <div class="card-footer text-muted">
                    <?= $row['img_desc']; ?>
                    <br>
                    <?php
                   
                    if ($row['img_style'] === 'Regular Image') {
                        echo '<span class="badge badge-secondary" style="background-color:#6C757D"><em>Regular Image</em></span>';
                    }elseif ($row['img_style'] === 'Panorama'){
                        echo '<a href="virtual-tour-viewer.php?img=';
                        echo  $row['img_id'];
                        echo '&img-title=';
                        echo $row['img_title'];
                        echo '"><span class="badge badge-secondary"' ; 
                        echo 'style="background-color:#007BFF"><em>View Virtual Image</em></span></a>';
                    }else{
                        echo '<span class="badge badge-secondary" style="background-color:#6C757D"><em>Undefined</em></span>';
                    }
                    
                    ?>
                    </div>


 



                    </div>
                    </div>
                    <?php }?>
                </div>

            <div class="row">
            <div>
        <h1>Regular Images</h1>
        <hr>
    </div>
                <!-- Blog entries-->
                <?php 
                        $conn = new engine_model();
                        $docu = $conn->fetchAll_rimages();
                        ?>
                        <?php foreach ($docu as $row) { ?>
                <div class="col-lg-4">
                    <!-- Featured blog post-->

                   
                    <div class="card mb-4 shadow p-1 bg-white rounded">
                    <img  class="card-img-top" src="../admin/<?php echo $row['uploaded_image']?>" style="width:100%;height:100%;object-fit: contain">
                     
                    <div class="card-body">
                    <?= $row['img_title']; ?>
                              </div>
                       
                    <div class="card-footer text-muted">
                    <?= $row['img_desc']; ?>
                    <br>
                    <?php
                    
                    if ($row['img_style'] === 'Regular Image') {
                        echo '<span class="badge badge-secondary" style="background-color:#6C757D"><em>Regular Image</em></span>';
                    }elseif ($row['img_style'] === 'Panorama'){
                        echo '<a href="virtual-tour-viewer.php?img=';
                        echo  $row['img_id'];
                        echo '&img-title=';
                        echo $row['img_title'];
                        echo '"><span class="badge badge-secondary"' ; 
                        echo 'style="background-color:#007BFF"><em>View Virtual Image</em></span></a>';
                    }else{
                        echo '<span class="badge badge-secondary" style="background-color:#6C757D"><em>Undefined</em></span>';
                    }
                    
                    ?>
                    </div>

                    </div>
                    </div>
                    <?php }?>
                </div>
                
              
            </div>
        </div>
        <!-- Footer-->
        <?php include('../components/footer.php');?>
        <!-- Bootstrap core JS-->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
