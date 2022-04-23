<?php include('section/header.php');?>

<?php 

  //1.get the id of the selected admin
  $id  = $_GET['id'];

  //2.set the sql aury to set the details
  $sql = "SELECT * FROM tbl_admin WHERE id = $id";

  //execute the query
  $result = mysqli_query($con, $sql);

  if ($result){
      //check wether the user is avialble or not
      $count = mysqli_num_rows($result);

      if ($count == 1){
        //get the details

        $row = mysqli_fetch_assoc($result);

        $username = $row['username'];
      }

      else{
        //failed to get the details 
        //redirect to the cpanel
        header("loacation:cpanel.php");
      }
  }






?>

   
<div class="container" style="padding-top:100px;">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4" style="border:2px solid gray;padding:50px;">
      
      <div class="page-header">
        <h2 class="specialHead">Admin's Password</h2>
      </div>
      
      <form action="updatePwd.php" method="POST">
        <div class="form-group">
          <label>Old Password</label><br>
          <input type="text" name="existingPassword" placeholder="Enter Old Password" class="form-control"><br>

          <label for="">New Password</label><br>
          <input type="password" name="newPassword" class="form-control" placeholder="Enter New Password"><br>

          <label for="">Retype Password</label><br>
          <input type="password" name="retypePassword" class="form-control" placeholder="Enter New Password Again"><br>

          <button type="submit" name="submit" class="btn btn-block span btn-primary "> <span class="glyphicon glyphicon-ok"></span> Change Password</button>
        </div>
      </form>
    </div>
    <div class="col-sm-4"></div>
  </div>
</div>

</div>

<?php include('section/footer.php');?>