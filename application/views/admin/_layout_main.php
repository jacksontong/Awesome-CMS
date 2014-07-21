<?php $this->load->view('admin/components/page_head') ?>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url('admin/dashboard'); ?>"><?php echo $meta_title; ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo site_url('admin/page'); ?>">Pages</a></li>
            <li><a href="<?php echo site_url('admin/page/order'); ?>">Order pages</a></li>
            <li><a href="<?php echo site_url('admin/user'); ?>">Users</a></li>
            <li><a href="<?php echo site_url('admin/article'); ?>">News Articles</a></li>
            
          </ul>
         
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="row">
            <!-- Main column -->
            <div class="col-md-8">
            <?php $this->load->view($subview); ?>
            </div>
            <!-- Sidebar -->
            <div class="col-md-4">
                <section>
                    <?php echo mailto('cauvongkhuyetbs@gmail.com', '<span class="glyphicon glyphicon-envelope"></span> cauvongkhuyetbs@gmail.com'); ?><br>
                    <?php echo anchor('admin/user/logout', '<span class="glyphicon glyphicon-off"></span> logout'); ?>
                </section>
            </div>
        </div>
    </div>
<?php $this->load->view('admin/components/page_tail') ?>