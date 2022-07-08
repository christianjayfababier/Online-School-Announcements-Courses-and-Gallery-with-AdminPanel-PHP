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
                             <h2 class="pageheader-title"><i class="fa fa-fw fa-pen"></i> Add Photo/Video </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Images or Videos to Gallery</li>
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
                                    <div class="card-header"><strong>Post Photo/Video</strong></div>
                                        <div class="card-body">
                                             <div class="" id="message"></div>
                                            <form id="validationform" name="docu_form" data-parsley-validate="" novalidate="" enctype="multipart/form-data" >
                                               
                                            <div class="form-group row justify-content-center">

                                               <center> <div id="img-vid-con" style="width: 500px; height: auto" ></div></center>
                                                </div>

                                                <div class="form-group row justify-content-center">
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" type="file" alt="uploaded_image" id="uploaded_image" accept="file_extension|audio/*|video/*|image/*|media_type" required="" placeholder="" class="inputfile form-control"  name="uploaded_image" required>
                                                        <label for="uploaded_image" style="width: 100%;padding:10px;"><center><i class="fa fa-fw fa-images">
                                </i> <strong>Add Photo/Video</strong></center></label>
                                                      
                                                       
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
                                                    
                                                    <div id="img_style_opt"></div>
                                                      
                                                      
                                                    </div>
                                                </div>
                                                
                                                </div>
                                         
                                                <div class="card-footer">
                                            <div class="form-group row text-right">
                                                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                        <button type="button" class="btn btn-space btn-primary" id="btn-docu">POST</button>
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

//$("#inp-img-vid").change( function(){ imgPreview(this); } );
document.getElementById("uploaded_image").addEventListener("change", onFileSelected, false);

var tmpElement; //will be dynamically changed to Image or Video

var file, file_ext, file_path, file_type, file_name;

function show_Info_popUP()
{
    alert("File is selected... " + "\n name : " + file_name  + "\n type : " + file_type + "\n ext : " + file_ext );
}

function onFileSelected ( input )
{
 
    //if(input.files && input.files[0])
    if( input.target.files[0] )
    {
        file = input.target.files[0]; // FileList object
        
        file_ext; //# will extract file extension
        file_type = file.type; file_name = file.name;
        file_path = (window.URL || window.webkitURL).createObjectURL(file);
        
        //# get file extension (eg: "jpg" or "jpeg" or "webp" etc)
        file_ext = file_name.toLowerCase();
        file_ext = file_ext.substr( (file_ext.lastIndexOf(".")+1), (file_ext.length - file_ext.lastIndexOf(".")) );
        
        //# get file type (eg: "image" or "video")
        file_type = file_type.toLowerCase();
        file_type = file_type.substr( 0, file_type.indexOf("/") );
        
        let reader = new FileReader();
        reader.readAsDataURL(file);
       
        
        //reader.onload = function(e)
        reader.onloadend = function(evt) 
        { 
            
            if (evt.target.readyState == FileReader.DONE) 
            {
                //# get container...
                let container = document.getElementById("img-vid-con");
                let options = document.getElementById("img_style_opt");
                var x = document.getElementById('img_style_opt');
                var img_style_opt;

                
                //# remove any already existing child element(s)
                while (container.firstChild)  
                { container.removeChild(container.firstChild); }
                while (options.firstChild)  
                { options.removeChild(options.firstChild); }
                
                //# if IMAGE...
                if ( file_type == "image" )
                {
                    tmpElement = document.createElement( "img");
                    tmpElement.setAttribute("id", "preview-img");
                    img_style_opt = ' <select data-parsley-type="alphanum" alt="img_style" type="text" required="" placeholder="Pano / Reg / Video" class="form-control" id="img_style" required><option value="Regular Image">--Required: Choose Image Type--</option><option value="Regular Image">Regular Image</option><option value="Panorama">Panorama / Virtual Tour Image</option></select>';

            
                    
                }

              
                //# if VIDEO...
                if ( file_type == "video" )
                {
                    tmpElement = document.createElement( "video");
                    tmpElement.setAttribute("id", "preview-vid");
                    tmpElement.setAttribute("controls", "true" );
                    img_style_opt = ' <select data-parsley-type="alphanum" alt="img_style" type="text" required="" placeholder="Pano / Reg / Video" class="form-control" id="img_style" required><option value="Video">Video</option></select>';

                    
                    tmpElement.addEventListener("loadeddata", () => 
                    {
                        //# what to do when some video data is loaded
                        
                        if (tmpElement.readyState >= 3) 
                        { 
                            //# what to do when video's first frame is ready
                            tmpElement.muted = true; //# if you want silent preview
                            tmpElement.play();
                            
                        }
            
                    }); 

                    
                }
                
                x.insertAdjacentHTML('afterbegin', img_style_opt);
                
                //# finalise display size
                tmpElement.width = 500; tmpElement.height = 400;
                
                tmpElement.setAttribute("src", file_path);
                container.appendChild(tmpElement);
              
            }
        
        }
        
    }
}
    
</script>


</body>
 
</html>