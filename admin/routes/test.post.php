<?php include('_header/header.php');?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <?php include('left_sidebar/sidebar.php');?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->

        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                             <h2 class="pageheader-title"><i class="fa fa-fw fa-file-image"></i> Proof of Payment </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Document</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
               
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Announcements</h5>
                                <div class="card-body">
                                     <div id="message"></div>
                                    <div class="table-responsive">
                    <!--                     <a href="add-document.php" class="btn btn-sm" style="background-color:rgb(235, 151, 42) !important;
                                        color: rgb(243, 245, 238) !important;"><i class="fa fa-fw fa-plus"></i> Add Document</a><br><br> -->
                                        <table class="table table-striped table-bordered first">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Posted on</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                $conn = new engine_model();
                                                $docu = $conn->fetchAll_posts();
                                               ?>
                                               <?php foreach ($docu as $row) { ?>
                                                <tr>
                                                     <td><?= date("M d, Y",strtotime($row['post_date'])); ?></td>
                                                    <td><?= $row['post_title']; ?></td>
                                                    <td><?= $row['post_description']; ?></td>

                                                    <td><a href="../<?php echo $row['post_image']?>" target="_blank"><img src="../../admin/<?php echo $row['post_image']?>" width=75></a></td>

                                                    <td class="align-right">
                                                          <a href="../<?php echo $row['post_image']?>" target="_blank" class="text-secondary font-weight-bold text-xs" onlclick="show">
                                                          <i class="fa fa-eye"></i>
                                                        </a> |
                                      
                                                        <a href="javascript:;" data-id="<?= $row['post_id']; ?>" class="text-secondary font-weight-bold text-xs delete" data-toggle="tooltip" data-original-title="Edit user">
                                                          <i class="fa fa-trash-alt"></i>
                                                        </a>
                                                      </td>
                                                </tr>
                                             <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end responsive table -->
                        <!-- ============================================================== -->
                    </div>
               
            </div>
            
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/login/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/login/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/login/vendor/parsley/parsley.js"></script>
    <script src="../assets/login/libs/js/main-js.js"></script>
    <script src="../assets/login/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../assets/login/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/login/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/login/vendor/datatables/js/data-table.js"></script>
    <script>
    $('#form').parsley();
    </script>
     <script type="text/javascript">
        $(document).ready(function(){
          var name = $('#complete_name').text();
          var intials = $('#complete_name').text().charAt(0);
          var profileImage = $('#profileImage').text(intials);
        });
    </script>
    
</body>
 
</html>