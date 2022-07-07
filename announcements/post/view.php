<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <?php 
                             include '../../admin/init/model/config/conn.auth.php';
                             $GET_imgId = intval($_GET['post']);
                             $imgtitle = $_GET['post-title'];
                             $sql = "SELECT * FROM `announcement_posts` WHERE `post_id`= ? AND post_title = ?";
                             $stmt = $conn->prepare($sql); 
                             $stmt->bind_param("is", $GET_imgId, $imgtitle);
                             $stmt->execute();
                             $result = $stmt->get_result();
                             while ($row = $result->fetch_assoc()) {
                            ?>
        <title><?= $row['post_title'] ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../assets/css/styles.css" rel="stylesheet" />
    </head>
    <body style="background-color: #E9EBEE;">
        <!-- Responsive navbar-->
          <!-- Navigation-->
          <?php include('../../components/navigation.php');?>
        <!-- Page content-->
        <div class="container " style="margin-top:200px !important">
            <div class="row justify-content-center ">
                <div class="col-lg-8">
               
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            

                            <a href="../"><span class="badge badge-primary" style="background-color:#0F0072" ><i class="fa fa-square-arrow-left"></i></i> ◄ Back to Announcements</span> </a> <br><br><h1 class="fw-bolder mb-1"><?= $row['post_title'] ?></h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on <?= date("M d, Y",strtotime($row['post_date'])); ?></div>
                            
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><a href="../../admin/<?= $row['post_image']; ?>" target="_blank"><img class="card-img-top w-850 h-350" style="width:100%;height:100%;" src="../../admin/<?= $row['post_image']; ?>" alt="..." /></figure></a>
                        
                        <!-- Post content-->
                        <section class="mb-5">
                            
                            <p class="fs-5 mb-4"><?=$row['post_description']; ?></p>
                            <em>Posted by <strong>PRMSU Administrator</strong></em></span>
                            
                              </section>
                    </article>
               <?php } ?>
                </div>
            </div>
        </div>
       <!-- Footer-->
       <?php include('../../components/footer.php');?>
        <!-- Bootstrap core JS-->
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
    
        <script src="../assets/js/scripts.js"></script>
    </body>
</html>
