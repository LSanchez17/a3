<?php 
      require_once ('application/config.php');
      include('elements/header.php');
?>
<div class="container">
	<div class="page-header">
   <h1> the Login View </h1>
   <?php if(isset($error)) {?>
       <div class="alert alert-danger">
           <?php echo $error;?>
   <?php
   }
   ?>
   <?php include('elements/login_form.php');?>

  </div>
</div>
<?php include('elements/footer.php');?>

