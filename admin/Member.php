
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
                     <a href="./clubMember.php?club_name=<?php echo $club['clubName'] ?>"><h2><?php echo $club['clubName'] ?></h2></a>
                  </div>
               </div>
        
         </div>
         <?php 
      }
      ?>
      </div> 
   </div>
   <!-- Floating Add Button -->
   <a href="addClub.php" 
      class="btn btn-primary rounded-circle shadow-lg" 
      style="position: fixed; bottom: 30px; right: 30px; width: 60px; height: 60px; display: flex; justify-content: center; align-items: center; font-size: 28px;">
      +
   </a>
</main>
<?php
}
require_once "adminFooter.php";

?>
