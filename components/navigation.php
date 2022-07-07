<?php include('src.php');?>

<?php
  $link1 = '';
  $link2 = 'announcements';
  $link3 = 'courses';
  $link4 = 'gallery';

?>

<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav" style="background-color:#0F0072 !important">
            <div class="container px-5">
            <img src="assets/img/prmsu.png" alt style="height: 65px;margin-right: 1rem"/><a class="navbar-brand text-white" href="#page-top">PRMSU</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3 text-white" href="http://localhost/prmsusm.edu.ph/<?= $link1 ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3 text-white" href="http://localhost/prmsusm.edu.ph/<?= $link2 ?>/">Announcements</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3 text-white" href="http://localhost/prmsusm.edu.ph/<?= $link3 ?>/">Courses</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3 text-white" href="http://localhost/prmsusm.edu.ph/<?= $link4 ?>/">Gallery</a></li>
                     
                    </ul>
                   
                </div>
            </div>
</nav>

