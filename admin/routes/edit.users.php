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
                             <h2 class="pageheader-title"><i class="fa fa-fw fa-file-word"></i> Edit User </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit User</li>
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
                    $GET_userId = intval($_GET['user']);
                    $usern = $_GET['usern'];
                    $sql = "SELECT * FROM `tb_admin` WHERE `user_id`= ? AND username= ?";
                    $stmt = $conn->prepare($sql); 
                    $stmt->bind_param("is", $GET_userId, $usern);
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
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right"><i class="fa fa-cog"></i> Edit User</label>
                                                </div>
                                                
                                               
                                                <div class="form-group row justify-content-center">
                                                <label class="col-12 col-sm-3 col-form-label  text-sm-right">Complete Name</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" value="<?= $row['complete_name']; ?>" alt="complete_name" type="text" required="" placeholder="" class="form-control" disabled>
                                                    </div>
                                                </div>

                                                
                                                <div class="form-group row justify-content-center">
                                                <label class="col-12 col-sm-3 col-form-label  text-sm-right">Email Address</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" value="<?= $row['email_address']; ?>" alt="email_address" type="text" required="" placeholder="" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row justify-content-center">
                                                <label class="col-12 col-sm-3 col-form-label  text-sm-right">Username</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" value="<?= $row['username']; ?>" alt="username" type="text" required="" placeholder="" class="form-control" disabled>
                                                    </div>
                                                </div>

                                                <div class="form-group row justify-content-center">
                                                <label class="col-12 col-sm-3 col-form-label  text-sm-right">Password</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" value="" alt="password" type="text" required="" placeholder="******" class="form-control" >
                                                    </div>
                                                </div>
                                           
                                                
                                                </div>
                                                <div class="form-group row text-right">
                                                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                       <input alt="user_id" value="<?= $row['user_id']; ?>" type="hidden">
                                                        <button type="button" class="btn btn-space btn-primary" id="btn-docu">Update User</button>
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

              const complete_name = document.querySelector('input[alt=complete_name]').value;
              const email_address = document.querySelector('input[alt=email_address]').value;
              const username = document.querySelector('input[alt=username]').value; 
              const password = document.querySelector('input[alt=password]').value; 
              const user_id = document.querySelector('input[alt=user_id]').value;
   

             var data = new FormData(this.form);

                data.append('complete_name', complete_name);
                data.append('email_address', email_address);
                data.append('username', username);
                data.append('password', password);
                data.append('user_id', user_id);
           
   

                if (complete_name === '' || email_address === '' || username === '') {//continue niyo nalang ito

                  } else {
                      $.ajax({
                          url: '../init/controllers/edit_user.php',
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