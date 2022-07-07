<?php include('src.php');?>
<?php
  $link1 = '';
  $link2 = 'announcements';
  $link3 = 'courses';
  $link4 = 'gallery';

?>

<footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">President Ramon Magsaysay State University - San Marcelino Campus. All Rights Reserved. &copy; 2022</div>
                    <a href="http://localhost/prmsusm.edu.ph/<?= $link2 ?>/">Announcements</a>
                    <span class="mx-1">&middot;</span>
                    <a href="http://localhost/prmsusm.edu.ph/<?= $link3 ?>/">Courses</a>
                    <span class="mx-1">&middot;</span>
                    <a href="http://localhost/prmsusm.edu.ph/<?= $link4 ?>/">Gallery</a>
                </div>
            </div>
        </footer>