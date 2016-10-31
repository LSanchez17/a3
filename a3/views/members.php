<?php include('elements/header.php');?>
<?php 
if( is_array($users) ) {
	extract($users);?>

<div class="container">
	<div class="page-header">

<h1><?php echo $uID;?></h1>
 
<?php }?>

<?php if( is_array($users) ) {?>

<div class="container">
<div class="page-header">

<h1><?php echo $uId;?></h1>
  </div>

	<?php foreach($users as $p){?>
    <h3><a href="<?php echo BASE_URL?>members/<?php echo $p['uID'];?>"></a></h3>
	<p><?php echo $p['first_name'];?></p>
        <p><?php echo $p['last_name'];?></p>
        <p><?php echo $p['email'];?></p>
<?php }?>
</div>

<?php }?>


<?php include('elements/footer.php');?>