        <div class="nav-left-sidebar sidebar-dark" style="background-color: rgb(39, 44, 74); padding-top: 40px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="index.php">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                       
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item ">
                            <a class="nav-link" href="#" >    
                            <?php
                            $user_id = $_SESSION['user_id'];
                            $conn = new engine_model();
                            $user = $conn->user_account($user_id); 
                            echo '<center><p class = "text-warning" style="color:white !important">Welcome!&nbsp;<b><span id="lastName">'.ucfirst($user['complete_name']).'</span></b><br></p>';
                            echo date("D M d");
                            echo '</center>';
                            ?>
                            </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="index.php" ><i class="fa fa-fw fa-tachometer-alt"></i>Dashboard <span class="badge badge-success">6</span></a>
                            </li>
                            <li class="nav-item has-submenu">
                                <a class="nav-link dropdown-toggle" href="#"><i class="fa fa-fw fa-chalkboard">
                                </i>Posts</a>
                                    <ul class="submenu collapse" style=" list-style:none ;">
                                        <li><a class="nav-link" href="add.post.php">Add New Post</a></li>
                                        <li><a class="nav-link" href="post.view.php">View All Posts</a></li>
                                    </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link dropdown-toggle" href="#"><i class="fa fa-fw fa-user-graduate"></i>Courses  </a>
                                     <ul class="submenu collapse" style=" list-style:none ;">
                                        <li><a class="nav-link" href="add.course.php">Add New Course</a></li>
                                        <li><a class="nav-link" href="course.view.php">View All Courses</a></li>
                                    </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link dropdown-toggle" href="#"><i class="fa fa-fw fa-image"></i>Gallery  </a>
                                     <ul class="submenu collapse" style=" list-style:none ;">
                                        <li><a class="nav-link" href="add.image.php">Add Photo/Video</a></li>
                                        <li><a class="nav-link" href="gallery.view.php">View All </a></li>
                                    </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="users.view.php"><i class="fa fa-fw fa-user-lock"></i>Users <span class="badge badge-success">6</span></a>
                            </li>     

                            <li class="nav-item ">
                                <a class="nav-link" href="logout.php"><i class="fa fa-fw fa-user-lock"></i>Logout <span class="badge badge-success">6</span></a>
                            </li>     
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <script>
        document.addEventListener("DOMContentLoaded", function(){
  document.querySelectorAll('.navbar .nav-link').forEach(function(element){
    
    element.addEventListener('click', function (e) {

      let nextEl = element.nextElementSibling;
      let parentEl  = element.parentElement;	

        if(nextEl) {
            e.preventDefault();	
            let mycollapse = new bootstrap.Collapse(nextEl);
            
            if(nextEl.classList.contains('show')){
              mycollapse.hide();
            } else {
                mycollapse.show();
                // find other submenus with class=show
                var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                // if it exists, then close all of them
                if(opened_submenu){
                  new bootstrap.Collapse(opened_submenu);
                }
            }
        }
    }); // addEventListener
  }) // forEach
}); 
// DOMContentLoaded  end</script>


