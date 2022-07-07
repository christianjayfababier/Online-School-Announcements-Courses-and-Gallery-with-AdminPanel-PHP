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



<div class="dashboard-wrapper"  style="margin-top:77px;background-color: #aeb2b8;">
            <div class="container-fluid  dashboard-content">
               <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row" style="background-color: #F8F9FA;    margin-right: -30px;
    margin-left: -28px;
    margin-top: -26px;
    padding-top: 36px;">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                             <h2 class="pageheader-title"><i class="fa fa-fw fa-pen"></i> Add Image </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Images to Gallery</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row justify-content-center" style="margin-top:10px">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                                    <div class="card influencer-profile-data">
                                    <div class="card-header"><strong>Post Image</strong></div>
                                        <div class="card-body">
                                             <div class="" id="message"></div>
                                            <form id="validationform" name="docu_form" data-parsley-validate="" novalidate="" enctype="multipart/form-data" >
                                               
                                            <div class="form-group row justify-content-center">
                                                <img id="uploadPreview" style="width: 500px; height: auto" />
                                                </div>
                                                <div class="form-group row justify-content-center">
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" type="file" alt="uploaded_image" id="uploaded_image" accept=".jpeg, .jpg, .png, .gif" required="" placeholder="" class="inputfile form-control" onchange="PreviewImage();" name="uploaded_image" required>
                                                        <label for="uploaded_image" style="width: 100%;padding:10px;"><center><i class="fa fa-fw fa-images">
                                </i> <strong>Add Photo</strong></center></label>
                                                      
                                                       
                                                    </div>
                                                </div>

                                                <div class="form-group row justify-content-center">
                                                    
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" alt="img_title"  type="text" required="" placeholder="Image Title" class="form-control">
                                                    </div>
                                                    
                                                </div>

                                                <div class="form-group row justify-content-center">
                                                    
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <textarea data-parsley-type="alphanum" alt="img_desc" id="img_desc" type="text" required="" placeholder="Image Description" class="form-control" style="height:200px"></textarea>
                                                    </div>
                                                    
                                                </div>



                                                <div class="form-group row justify-content-center">
                                                    
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <select data-parsley-type="alphanum" alt="img_style" type="text" required="" placeholder="Pano / Reg" class="form-control" id="img_style" required>
                                                        <option value="Regular Image">--Required: Choose Image Type--</option> 
                                                        <option value="Regular Image">Regular Image</option> 
                                                        <option value="Panorama">Panorama / Virtual Tour Image</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                </div>
                                         
                                                <div class="card-footer">
                                            <div class="form-group row text-right">
                                                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                        <button type="button" class="btn btn-space btn-primary" id="btn-docu">POST IMAGE</button>
                                                    </div>
                                                </div>
                                            </div>  

                                        </div>
                                        
                                                
                                            </form>
                                        </div>
                                    </div>
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
            
              const img_title = document.querySelector('input[alt=img_title]').value; 
              const img_desc = document.querySelector('textarea[id=img_desc]').value; 
              const img_style = $('#img_style option:selected').val();
              const uploaded_image = document.querySelector('input[id=uploaded_image]').value;

             var data = new FormData(this.form);

                data.append('img_title', img_title);
                data.append('img_desc', img_desc);
                data.append('img_style', img_style);
                data.append('uploaded_image', $('#uploaded_image')[0].files[0]);
   

                if (img_title === '' || img_desc === '' || img_style === '' || uploaded_image === '') { //continue niyo nalang ito
                  $('#message').html('<div class="alert alert-danger"> Required All Fields!</div>');
                  } else {
                      $.ajax({
                          url: '../init/controllers/add_photo.php',
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
    oFReader.readAsDataURL(document.getElementById("uploaded_image").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
};

</script>

</body>
 
</html>