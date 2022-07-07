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


<div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
               <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:77px;">
                        <div class="page-header">
                             <h2 class="pageheader-title"><i class="fa fa-fw fa-file-word"></i> Edit Post </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Post</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div> 
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                  <?php 
                    include '../init/model/config/conn.auth.php';
                    $GET_postId = intval($_GET['post']);
                    $posttitle = $_GET['post-title'];
                    $sql = "SELECT * FROM `announcement_posts` WHERE `post_id`= ? AND post_title = ?";
                    $stmt = $conn->prepare($sql); 
                    $stmt->bind_param("is", $GET_postId, $posttitle);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()) {
                   ?>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="card influencer-profile-data">
                                        <div class="card-body">
                                             <div class="" id="message"></div>
                                            <form id="validationform" name="docu_form" data-parsley-validate="" novalidate="" enctype="multipart/form-data" >
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right"><i class="fa fa-file-word"></i> Edit Post</label>
                                                </div>
                                                <div class="form-group row justify-content-center"> 
                                                        <img src="../<?= $row['post_image']; ?>" style="width: 300px; height: auto">
                                                </div>
                                                <center><label class="col-12 col-sm-3 col-form-label  ">Title</label></center>
                                                <div class="form-group row justify-content-center">
                                              
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" value="<?= $row['post_title']; ?>" alt="post_title" type="text" required="" placeholder="" class="form-control">
                                                    </div>
                                                </div>

                                                <center><label class="col-12 col-sm-3 col-form-label ">Description</label></center>
                                                <div class="form-group row justify-content-center">
                                                   
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <textarea data-parsley-type="alphanum" value="" alt="post_description" type="text" required="" placeholder="" class="form-control" style="height: 200px;"><?= $row['post_description']; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row justify-content-center">
                                                <img id="uploadPreview" style="width: 500px; height: auto" />
                                                </div>
                                               
                                                
                                                </div>
                                                <div class="form-group row text-right">
                                                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                       <input alt="post_id" value="<?= $row['post_id']; ?>" type="hidden">
                                                        <button type="button" class="btn btn-space btn-primary" id="btn-docu">POST</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                  <?php }  ?>
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
           document.addEventListener('DOMContentLoaded', () => {
              let btn = document.querySelector('#btn-docu');
              btn.addEventListener('click', () => {

              const post_title = document.querySelector('input[alt=post_title]').value;
              const post_description = document.querySelector('textarea[alt=post_description]').value;
              const post_id = document.querySelector('input[alt=post_id]').value;
   

             var data = new FormData(this.form);

                data.append('post_title', post_title);
                data.append('post_description', post_description);
                data.append('post_id', post_id);
           
   

                if (post_title === '' || post_description === '') {//continue niyo nalang ito

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

<script>

function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("post_image").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
};

</script>

</body>
 
</html>