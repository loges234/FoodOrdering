<style>
#contactbg {
 background-repeat: no-repeat;
  background-attachment: fixed;
  background-image: url("images/bg.jpg");
}
</style>
<?php include 'includes/session.php'; ?>
<?php

?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper" id='contactbg'>
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
		           	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
		       		 <div class="image-aboutus-banner"style="margin-top:70px">
   <div class="container">
    <div class="row">
        <div class="col-md-12">
         <h1 class="lg-text">Contact Us</h1><br>
         <p class="image-aboutus-para">
		 <i class="material-icons">&#xe551;</i>	011 638 07090<br><br>
		 <i class="material-icons">&#xe0be;</i>	aisha@gmail.com<br><br>
		 <i class="material-icons" style="font-size:24px;color:red">location_on</i>	22, Jalan KLCC, KL City Centre
		 <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 57000 Kuala Lumpur, Malaysia<br> 
		 <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Kuala%20Lumpur%20City%20Centre&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embedding map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
</p>
       </div>
    </div>
</div>
</div>
	        	</div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>