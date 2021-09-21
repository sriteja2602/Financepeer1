<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                              <?php $query=mysqli_query($con,"select fullName,userImage from users where userEmail='".$_SESSION['login']."'");
 while($row=mysqli_fetch_array($query)) 
 {
 ?> 
                  <p class="centered"><a href="profile.php">
<?php $userphoto=$row['userImage'];
if($userphoto==""):
?>
<img src="userimages/noimage.png"  class="img-circle" width="70" height="70" >
<?php else:?>
  <img src="userimages/<?php echo htmlentities($userphoto);?>" class="img-circle" width="70" height="70">

<?php endif;?>
</a>
</p>
 
                  <h5 class="centered"><?php echo htmlentities($row['fullName']);?></h5>
                  <?php } ?>
                    
                  <li class="mt">
                      <a href="dashboard.php">
                          
                          <h5><i class="fa fa-dashboard"></i>Dashboard</h5>
                      </a>
                  </li>


                  
                  <li class="sub-menu" style="margin-top:2px;">
                      <a href="register-complaint.php" >
                          <h5><i class="fa fa-book"></i>Lodge Complaint</h5>
                          
                      </a>
                    </li>
                  </li>
                  <li class="sub-menu" style="margin-top:10 px">
                      <a href="complaint-history.php" >
                          <h5><i class="fa fa-tasks"></i>Complaint History</h5>
                          
                      </a>
                      
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <h5><i class="fa fa-cogs"></i>Account Setting</h5>
                      </a>
                      <ul class="sub">
                          <li><a  href="profile.php"> <h6><i class="fa fa-user"></i> Profile</h6> </a></li>
                          <li><a  href="change-password.php"><h6><i class="fa fa-lock"></i> Change Password</h6></a></li>
                        
                      </ul>
                  </li>
                 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>