<?php $this->load->view('admin/components/page_head') ?>
<body style="background:#555;">
	
	<div class="modal-dialog">
	    <div class="modal-content">
	        <?php $this->load->view($subview); // Subview is set in controller ?>
	        <div class="modal-footer">
				&copy;<?php echo $meta_title; ?>
	        </div>            <!-- /modal-footer -->
	    </div>         <!-- /modal-content -->
	</div>     <!-- /modal-dialog -->  	
<?php $this->load->view('admin/components/page_tail') ?>