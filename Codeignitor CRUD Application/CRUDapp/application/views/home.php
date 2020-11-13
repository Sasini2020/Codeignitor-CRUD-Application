<?php include('header.php'); ?>
<br><br>
<div class="container">

	<?php if($error=$this->session->flashdata('response')): ?>
		<div class="alert alert-success" role="alert">
			<?php echo $error; ?>
		</div>
		<?php endif;?>

	<div class="row">
		<div class="col-lg-12">
			<?php echo anchor("home/create",'Create an Account',['class'=>'btn btn-success']); ?>
		</div>
	</div>

	<br><br>
<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th class="table-active">Full name</th>
			<th class="table-primary">E-mail</th>
			<th class="table-secondary">Phone number</th>
			<th class="table-success">Job type</th>
			<th class="table-danger">Password</th>
			<th class="table-warning">Repeat password</th>
			<th class="table-success">Operations</th>
			<th class="table-success"></th>

		</tr>
	</thead>

	<tbody>
	 <?Php if( count($records) ):?>
		<?php foreach( $records as $record):?>
			<tr>
				<td><?php echo $record->name; ?></td>
				<td><?php echo $record->email; ?></td>
				<td><?php echo $record->phone; ?></td>
				<td><?php echo $record->job; ?></td>
				<td><?php echo $record->password; ?></td>
				<td><?php echo $record->repeat_password; ?></td>

				<td><?php echo anchor("home/edit/{$record->id}",'Update',['class'=>'btn btn-primary']); ?></td>
				<td><?php echo anchor("home/delete/{$record->id}",'Delete',['class'=>'btn btn-danger']); ?></td>

			</tr>
		<?php endforeach;?> 
		
		<?php else:?>
		<tr>No records found !!!</tr>
	<?php endif;?> 

	<tbody>
		
</table>
</div>

<body>
	<script src="../resources/js/main.js"></script>

</body>

<?php include('footer.php'); ?>

