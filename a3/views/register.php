<?php include('elements/admin_header.php');?>

<div class="container">
	<div class="page-header">
   <h1> the Register View </h1>
  </div>
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
  <div class="row">
      <div class="span8">
        <form action="<?php echo BASE_URL?>register/<?php echo $task?>" method="post" onsubmit="editor.post()">
          <label><h2>Register</h2></label>
          <label for="uID">Username:</label>
            <input type="text" id="uID" name="uID" value="">
          <br>
          <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="">
          <br>
          <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="">
          <br>
          <label for="first_name">First Name:</label>
  	    <input type="text" id="first_name" name="first_name" value="">
          <br>
          <label for="last_name">Last Name:</label>
  	    <input type="text" id="last_name" name="last_name" value="">
          <br>
          <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
        </form>

        
      </div>
    </div>
</div>
<?php include('elements/admin_footer.php');?>