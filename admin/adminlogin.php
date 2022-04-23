<?php 

  include('../constant/config.php');

  //check whether the submit button click or not

  if (isset($_POST['loginBtn'])){
    
    //process the login 
    //1. Get the dat from login form

    $username = $_POST['adminUserName'];
    $password = $_POST['adminPassword'];

    //2.check whether the admin with username and passwors exist or not
    $sql = " SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password' ";

    //3. execute the query
    $result = mysqli_query($con, $sql);

    //4. get the count check wehther the user exist or not
    $count = mysqli_num_rows($result);

    if ($count > 0){
      //userr available and login sucess
      $_SESSION['user'] = $username;
      //redirect to the admin pannel home page
      header('location:cpanel.php');

    }
    else{
      //user not avialable
      //login failed 
      $_SESSION['login'] = "<p class = 'error'>*Login Failed.</p>";
    }


  }


?>
  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }
    </style>

  </head>
  <body>
	
	<div class="container">
  	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a href="../index.php" class="navbar-brand headerFont text-lg"><strong>eVoting</strong></a>
        </div>
      </div> <!-- end of container -->
    </nav>

    
    <div class="container" style="padding-top:150px;">
    	<div class="row">
    		<div class="col-sm-4"></div>
    		<div class="col-sm-4" style="border:2px solid gray;padding:50px;">
    			
    			<div class="page-header">
    				<h2 class="specialHead">Authentication</h2>
    			</div>
          <form action="authentication.php" method="POST">
      			<div class="form-group">
      				<label for="">Username</label><br>
      				<input type="text" name="adminUserName" placeholder="Enter Admin's UserName" class="form-control"><br>

      				<label for="">Password</label><br>
      				<input type="password" name="adminPassword" class="form-control" placeholder="Enter Admin's Password"><br>

      				<button type="submit" class="btn btn-block span btn-primary" name="loginBtn"><span class="glyphicon glyphicon-user"></span> Sign In</button>

              <label id="error"></label>
      			</div>

          </form>
          <br>

    		</div>
    		<div class="col-sm-4"></div>
    	</div>
    </div>

    </div>

<?php include('section/footer.php')?>