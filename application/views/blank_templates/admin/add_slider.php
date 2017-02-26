<div class="site-content">
	<!-- Content -->
	<div class="content-area p-y-1">
	   <div class="container-fluid"> 
		<div class="box box-block bg-white">
		<h5>Add Page</h5>
		<p></p>		
			<?php echo form_open_multipart('blank_template/save_slider/', array('method'=>'post'));?>
			<label>Upload Slider</label>
			<input type="file" name="userfile" class="form-control"/>			
			<label>Slider Content</label>
			<textarea id="editor" name="slider_content"></textarea>
			<label>Slider Order</label>
			<input type="text" name="slider_order" class="form-control"/>
			<span class="text-danger"><?php echo form_error('slider_order'); ?></span>
			<br/>
			<br/>
			<input type="submit" class="btn btn-outline-warning w-min-sm m-b-0-25 waves-effect waves-light" name="save" value="save "/>
			</form> 
		</div>		
	   </div>
	</div>


<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/samples/js/sample.js'); ?>"></script>
<script>
	CKEDITOR.replace( 'editor' );	
</script>

