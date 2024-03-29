<style>
#loginbg {
  background-attachment: fixed;
  background-image: url("images/login.jpg");
}
</style>
<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page"id='loginbg'>
<div class="login-box">
  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
  	<div class="login-box-body">
    	<b><p class="login-box-msg">Enter your email that you used to register this account.</p></b>

    	<form action="reset.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="email" class="form-control" name="email" placeholder="Email" required>
        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      		</div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="reset"><i class="fa fa-mail-forward"></i> Send</button>
        		</div>
      		</div>
    	</form>
      <br>
      <a href="login.php"><i class="glyphicon glyphicon-log-in"></i>     I remembered My Password (Login)</a><br>
      <a href="index.php"><i class="fa fa-home"></i> Main Menu</a>
  	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>