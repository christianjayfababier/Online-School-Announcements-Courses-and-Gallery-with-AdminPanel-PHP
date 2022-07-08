<?php include('_header/header.php');?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <?php include('_sidebar/sidebar.php');?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->


<div class="dashboard-wrapper" >
            <div class="container-fluid  dashboard-content">
               <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:77px;">
                        <div class="page-header">
                             <h2 class="pageheader-title"><i class="fa fa-fw fa-file-word"></i> View All Posts </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">View All Posts</li>
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
                                <h5 class="card-header">View All Posts</h5>
                                <div class="card-body">
                                    <div id="message"></div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered first">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             <?php 
                                                $conn = new engine_model();
                                                $docrequest = $conn->fetchAll_posts();
                                               ?>
                                               <?php foreach ($docrequest as $row) {

                                                ?>
                                                <tr>
                                                    <td><?= $row['post_title']; ?></td>
                                                    <td><?= $row['post_description']; ?></td>
                                                    <td>
                                                    <?php
                                                    if ($row['post_image'] === '') {
                                                        echo '<center>No Image Uploaded</center>';
                                                    }else{
                                                    ?>
                                                    <center>
                                                    <img src="../<?= $row['post_image']; ?>" style="width:100px;margin-bottom:5px;">
                                                    
                                                    <a href="../<?php echo $row['post_image']?>" target="_blank" class="text-secondary font-weight-bold text-xs" onlclick="show">
                                                        <span class="badge badge-secondary" style="background-color:#32a852;width:60%" ><i class="fa fa-eye"></i> View </span> 
                                                        </a>
                                                        
                                                    </center>
                                                    <?php } ?>
                                                        </td>
                                                    <td><em>Published</em><br> <?= $row['post_date']; ?></td>
                                                    <td class="align-right">
                                                    
                                                       
                                                        <a href="edit.post.php?post=<?= $row['post_id']; ?>&post-title=<?php echo $row['post_title']; ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit post">
                                                        <span class="badge badge-secondary" style="background-color:#57a7f7;width:100%" ><i class="fa fa-edit"></i> Edit</span> 
                                                        </a> <hr>
                                                        <a href="javascript:;" data-id="<?= $row['post_id']; ?>" class="text-secondary font-weight-bold text-xs delete" data-toggle="tooltip" data-original-title="Delete post">
                                                        <span class="badge badge-secondary" style="background-color:#f5655b;width:100%"><i class="fa fa-trash-alt"></i> Delete </span>
                                                        </a> 
                                                        
                                                      </td>
                                                </tr>
                                             
                                             <?php } ?>


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
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
<script>
    $(document).ready(function() {

        load_data();

        var count = 1;

        function load_data() {
            $(document).on('click', '.delete', function() {

                var post_id = $(this).attr("data-id");
                // console.log("================get course_id================");
                // console.log(course_id);
                if (confirm("Are you sure want to remove this data?")) {
                    $.ajax({
                        url: "../init/controllers/delete_post.php",
                        method: "POST",
                        data: {
                            post_id: post_id
                        },
                      success: function(response) {

                          $("#message").html(response);
                          },
                          error: function(response) {
                            console.log("Failed");
                          }
                    })
                }
            });
        }

    });
</script>

    
<script>
           document.addEventListener('DOMContentLoaded', () => {
              let btn = document.querySelector('#btn-docu');
              btn.addEventListener('click', () => {

              const post_title = document.querySelector('input[alt=post_title]').value;
              const post_image = document.querySelector('input[id=post_image]').value; 
              const post_description = document.querySelector('input[alt=post_description]').value;
              const post_id = document.querySelector('input[alt=post_id]').value;
   

             var data = new FormData(this.form);

                data.append('post_title', post_title);
                data.append('post_description', post_description);
                data.append('post_image', $('#post_image')[0].files[0]);
                data.append('post_id', post_id);
           
   

                if (post_title === '' || post_description === '' || post_image === '') {//continue niyo nalang ito

                  } else {
                      $.ajax({
                          url: '../init/controllers/edit_post.php',
                          type: "POST",
                          data: data,
                          processData: false,
                          contentType: false,

                          async: false,
                          cache: false,

                          success: function(data) {
                              $('#message').html(data);

                          },
                          error: function(data) {
                              console.log("Failed");
                          }
                      });
                  }     

              });
          });
      </script>

</body>
 
</html>