<style>
#loginbg {
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

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper"  id='loginbg'>
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
         <h1 class="lg-text">About Us</h1>
         <p class="image-aboutus-para">Street Kitchen Crew is a relaxed restaurant by day and a swish restaurant and cocktail
		 <br>bar by night giving people an experience unique to Malaysia. <br>
		 <h2 class="lg-text">Why Choose Us?</h2>
		 <p class="image-aboutus-para"><b>Tales of Street Kitchen</b><li>
		Dive into the best cajun premium seafood restaurant, located in Bangsar and Bukit Jelutong, <br>
		for delicious ocean-fresh meals ...Pakai Tangan Jer! From Louisianan countryside to Malaysian <br>
		seafood lovers , enjoy every bit of our ocean-fresh catch drenched in a selection of three signature <br>
		sauces made from a unique blend of Cajun spices and our very own secret spice mix. <br>
<br><br>
		 <b>Your Street Kitchen Crew Moment</b><br><li>
		Whether it's lunch or dinner, kindle unforgettable memories with you family and friends <br>
		in our cosy, rustic setting without burning a hole in your pocket. Sink your teeth into the<br>
		ripples of Sweet Temptation as the perfect ending to your Street Kitchen Crew moment.
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