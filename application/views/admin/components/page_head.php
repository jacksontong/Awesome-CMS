<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $meta_title; ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo site_url('public/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo site_url('public/css/admin.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('public/css/datepicker.css'); ?>">

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo site_url('public/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo site_url('public/js/bootstrap-datepicker.js') ?>"></script>
    <?php if (isset($sortable) && $sortable === TRUE): ?>
    <script src="<?php echo site_url('public/js/jquery-ui.min.js') ?>"></script>
    <script src="<?php echo site_url('public/js/jquery.mjs.nestedSortable.js') ?>"></script>
    <?php endif ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo site_url('public/js/tinymce/tinymce.min.js'); ?>"></script>
    <script>
            tinymce.init({selector:'textarea'});
    </script>
</head>