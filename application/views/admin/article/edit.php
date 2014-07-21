<?php 
$pubdate = [
	'name' => 'pubdate',
	'size' => '25',
	'class' => 'form-control datepicker',
];
$title = [
	'name' => 'title',
	'size' => '25',
	'class' => 'form-control',
];
$slug = [
	'name' => 'slug',
	'size' => '25',
	'class' => 'form-control',
];
$body = [
	'name' => 'body',
	'class' => 'form-control'
];
?>

<h3><?php echo empty($article->id) ? 'Add a new article' : 'Edit article ' . $article->title; ?></h3>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
<table class="table">
	<tr>
		<td>Pubdate</td>
		<td><?php echo form_input($pubdate, @set_value('pubdate', $article->pubdate)); ?></td>
	</tr>
	<tr>
		<td>Title</td>
		<td><?php echo form_input($title, @set_value('title', $article->title)); ?></td>
	</tr>
	<tr>
		<td>Slug</td>
		<td><?php echo form_input($slug, @set_value('slug', $article->slug)); ?></td>
	</tr>
	<tr>
		<td>Body</td>
		<td><?php echo form_textarea($body, set_value('body', $article->body)); ?></td>
	</tr>
	<tr>
		<td></td>
		<td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
	</tr>
</table>
<?php echo form_close(); ?>
<script>
$(function() {
	$('.datepicker').datepicker({ format: 'yyyy-mm-dd' });
});
</script>