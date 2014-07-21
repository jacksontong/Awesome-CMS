<?php $this->load->view('components/page_head'); ?>
<body>
<div class="container">
    <section>
    	<h1><?php echo anchor('', strtoupper(config_item('site_name'))); ?></h1>
    </section>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php echo get_menu($menu); ?>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
</div>
<div class="container">
        <?php $this->load->view('templates/' . $subview); ?>
</div>
<?php $this->load->view('components/page_tail'); ?>