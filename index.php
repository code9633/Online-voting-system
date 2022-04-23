<?php include('section/header.php');?>

	<div class="container ">
  	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          
          <a href="index.php" class="navbar-brand headerFont text-lg"><strong>eVoting</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            
            <li><a href="#featuresTab"><span class="subFont"><strong>Features</strong></span></a></li>
            <li><a href="#abhoutTab"><span class="subFont"><strong>About</strong></span></a></li>
            <li><a href="#feedbackTab"><span class="subFont"><strong>Feedback</strong></span></a></li>
        	
          </ul>
  
          <span class="normalFont"><a href="admin/admin.php" class="btn btn-success navbar-right navbar-btn"><strong>Admin Panel</strong></a></span>
        </div>

      </div> 
    </nav>
  </div>

<!-- start of the slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="carousel-item active item">
      <img src="images/22033.jpg" >
        <div class="carousel-caption d-none d-md-block ">
              <h1 class="specialHead">Online Voting System</h1>
              <p class="normalFont" >Vote Your Favourite Star. </p>

              <a href="vault.php" class="btn btn-primary btn-md specialHead"> <span class="glyphicon glyphicon-tag"></span> Cast Your Vote</a>
        </div>
    </div>
  </div>
</div>

<!-- End of the slider -->

<div class="container" id="feedbackTab">
  <div class="row">
    <div class="col-sm-12 text-center">
      <div class="page-header" style="padding-top:20px;padding-bottom:50px;">
        <img src="images/MailBoy.png" width="100" height="100" alt="">
        <br>
        <h1 class="specialHead">CONTACT</h1>
        <p style="font-size:16px;">If You have any suggestion regarding our voting system. We 'll welcome your suggestion,</p>
        
      
        <br>
        <a  class="btn btn-info"> <strong>Feedback</strong></a>
      </div>
    </div>
  </div>
</div>

      
<?php include('section/footer.php');?>