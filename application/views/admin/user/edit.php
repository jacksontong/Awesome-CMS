<?php 
$name = [
	'name' => 'name',
	'size' => '25',
	'class' => 'form-control',
];
$email = [
	'name' => 'email',
	'size' => '25',
	'class' => 'form-control',
	'type' => 'email'
];
$password = [
	'name' => 'password',
	'size' => '25',
	'class' => 'form-control',
	'type' => 'password'
];
$password2 = [
	'name' => 'password_confirm',
	'size' => '25',
	'class' => 'form-control',
	'type' => 'password'
];
?>
<div class="modal-header">
	<h3><?php echo empty($user->id) ? 'Add a new user' : 'Edit user ' . $user->name; ?></h3>
</div>
<div class="modal-body">
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
<table class="table">
	<tr>
		<td>Name</td>
		<td><?php echo form_input($name, @set_value('name', $user->name)); ?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><?php echo form_input($email, @set_value('email', $user->email)); ?></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><?php echo form_password($password); ?></td>
	</tr>
	<tr>
		<td>Confirm password</td>
		<td><?php echo form_password($password2); ?></td>
	</tr>
	<tr>
		<td></td>
		<td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
	</tr>
</table>
<?php echo form_close(); ?>
</div>