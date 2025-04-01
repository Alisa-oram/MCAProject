
<?php
require_once "adminNavbar.php";
require_once "admin_functions.php";
$result =showClubs();
if($result){
?>
<main class="col-md-10 ms-sm-auto px-md-4 mt-5" style="min-height: 100vh; padding-top: 70px;">
   <div class="container-fluid ">
      <div class="row mt-5 g-3">
         <?php
         while($club = $result->fetch_assoc()){
            ?>
         <div class="col-md-4 ">
               <div class="card card-widget">
                  <div class="card-body">
                     <a href="./manageStudent.php?club=<?php echo $club['clubName'] ?>"><h2><?php echo $club['clubName'] ?></h2></a>
                  </div>
               </div>
         </div>
         <?php 
      }
      ?>
      </div> 
   </div>
</main>
<?php
}
require_once "./admin/adminFooter.php";

?>
