<div class="site-content">
<!-- Content -->
<div class="content-area p-y-1">
   <div class="container-fluid">
		<div class="box box-block bg-white">
		<h5>Edit Page</h5>
		<p></p>
		<?php foreach ($get_data1 as $get_row){ ?>
			<?php $page_id=$get_row->blank_temp_id; ?>
			<form action="<?php echo base_url(); ?>/index.php/blank_template/update_page/<?php echo $page_id; ?>" method="post">
			
			<label>Pages Name</label>
			<input type="text" name="page_name" class="form-control" value="<?php echo $get_row->blank_pages; ?>"/>
			<label>Section 1</label>
			<textarea id="editor" name="page_sec1"><?php echo $get_row->section1; ?></textarea>
			<label>Section 2</label>
			<textarea id="editor2" name="page_sec2"><?php echo $get_row->section2; ?></textarea>
			<label>Section 3</label>
			<textarea id="editor3" name="page_sec3"><?php echo $get_row->section3; ?></textarea>
			<label>Section 4</label>
			<textarea id="editor4" name="page_sec4"><?php echo $get_row->section4; ?></textarea>
			
			<br/>
			<br/>
			<input type="submit" class="btn btn-outline-warning w-min-sm m-b-0-25 waves-effect waves-light" name="save" value="save "/>
			</form>
		<?php } ?>
		</div>
   </div>
</div>
<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/samples/js/sample.js'); ?>"></script>
<script>
	CKEDITOR.replace( 'editor' );
	CKEDITOR.replace( 'editor2' );
	CKEDITOR.replace( 'editor3' );
	CKEDITOR.replace( 'editor4' );
</script>

