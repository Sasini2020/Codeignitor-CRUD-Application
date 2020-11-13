
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url("resources/css/main.css");?>"/>	


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<div class="container">
<br>  
<hr>
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px ;">
	<h4 class="card-title mt-3 text-center" >Create Account</h4>
	<br><br>
	<!-- <form class="form-horizontal"> -->

    <?php echo form_open('home/save',['class'=>'form-horizontal']);?>

	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        
        <?php echo form_input(['name'=>'name','class'=>'form-control','placeholder'=>'Full Name','value'=>set_value('name')]);?>
        <?php echo form_error('name')?>
    </div> 

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>

        <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'E-mail address','value'=>set_value('email')]);?>
        <?php echo form_error('email')?>

    </div> 
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		
        <?php echo form_input(['name'=>'phone','class'=>'form-control','placeholder'=>'Phone number','value'=>set_value('phone')]);?>
        <?php echo form_error('phone')?>

    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>

        <?php echo form_input(['name'=>'job','class'=>'form-control','placeholder'=>'Job','value'=>set_value('job')]);?>
        <?php echo form_error('job')?>

    </div> 
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <!-- <input class="form-control" placeholder="Create password" type="password"> -->
        <?php echo form_input(['name'=>'password','class'=>'form-control','placeholder'=>'Create password','type'=>'password','value'=>set_value('password')]);?>
        <?php echo form_error('password')?>

    </div> 
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <!-- <input class="form-control" placeholder="Repeat password" type="password"> -->
        <?php echo form_input(['name'=>'repeat_password','class'=>'form-control','placeholder'=>'Repeat password','type'=>'password','value'=>set_value('repeat_password')]);?>
        <?php echo form_error('repeat_password')?>

    </div>                                     
    <div class="form-group">
        <?php echo form_submit(['value'=>'Create Account','class'=>'btn btn-info btn-block']);?>
		<br>
		<?php echo form_reset(['value'=>'RESET','class'=>'btn btn-secondary btn-block']);?>

	</div>     
    <p class="text-center">Have an account? <a href="">Log In</a> </p>                                                                 
<!-- </form> -->
<?php echo form_close();?>

</div> 
</div> 

<?php include('footer.php'); ?>

