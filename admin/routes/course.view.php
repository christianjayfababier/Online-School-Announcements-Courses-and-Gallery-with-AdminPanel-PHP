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
                             <h2 class="pageheader-title"><i class="fa fa-fw fa-file-word"></i> View All Courses </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">View All Courses</li>
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
                                <h5 class="card-header">View All Courses</h5>
                                <div class="card-body">
                                    <div id="message"></div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered first">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Abbreviation</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             <?php 
                                                $conn = new engine_model();
                                                $docrequest = $conn->fetchAll_courses();
                                               ?>
                                               <?php foreach ($docrequest as $row) {

                                                ?>
                                                <tr>
                                                    <td><?= $row['course_abbreviation']; ?></td>
                                                    <td><?= $row['course_name']; ?></td>
                                                    <td><?= $row['course_description']; ?></td>
                                                 
                                                    <td class="align-right">
                                                        <a href="edit.course.php?course=<?= $row['course_id']; ?>&course-name=<?php echo $row['course_name']; ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit post">
                                                        <span class="badge badge-secondary" style="background-color:#57a7f7;width:100%" ><i class="fa fa-edit"></i>Edit</span>
                                                        </a> <hr>
                                                        <a href="javascript:;" data-id="<?= $row['course_id']; ?>" class="text-secondary font-weight-bold text-xs delete" data-toggle="tooltip" data-original-title="Delete post">
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

                var course_id = $(this).attr("data-id");
                // console.log("================get course_id================");
                // console.log(course_id);
                if (confirm("Are you sure want to remove this data?")) {
                    $.ajax({
                        url: "../init/controllers/delete_course.php",
                        method: "POST",
                        data: {
                            course_id: course_id
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

              const course_name = document.querySelector('input[alt=course_name]').value;
              const course_abbreviation = document.querySelector('input[alt=course_abbreviation]').value; 
              const course_description = document.querySelector('textarea[alt=course_description]').value;
              const course_id = document.querySelector('input[alt=course_id]').value;
   

             var data = new FormData(this.form);

                data.append('course_name', course_name);
                data.append('course_abbreviation', course_abbreviation);
                data.append('course_description', course_description);
                data.append('course_id', course_id);
           
   

                if (course_name === '' || course_abbreviation === '' || course_description === '') {//continue niyo nalang ito

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