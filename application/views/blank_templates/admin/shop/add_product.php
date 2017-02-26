<div class="site-content">
<!-- Content -->
	<div class="content-area p-y-1">
		<div class="container-fluid">	
			<div class="card card-block">
				<h5>Products</h5>	
				<p></p>
				<div class="container">
					<div class="row">
						<div class="col-md-12">			
							<div class="row">			
							<br/>
							<br/>
							<?php echo form_open_multipart('blank_template/save_product/', array('method'=>'post','id'=>'save_prd'));?>
							<label>Product Name</label>
							<input type="text" class="form-control" name="prd_name" placeholder="Product Name"/>
							<span id="prd_name" class="text-danger"><?php echo form_error('prd_name'); ?></span>
							<br/>
							<label>Product Regular Price</label>
							<input type="text" id="reg_prc" name="simple_prd_regular_price" class="form-control"/>
							<span id="prd_name" class="text-danger"><?php echo form_error('prd_name'); ?></span>
							<br/>
							<label>Product Sale Price</label>
							<input type="text" id="sale_prc" name="simple_prd_sale_price" class="form-control"/>
							<span id="prd_name" class="text-danger"><?php echo form_error('prd_name'); ?></span>
							<span id="prd_name_price" class="text-danger"><?php echo form_error('check_equal_less'); ?></span>
							<br/>
							<label>Product Image</label>
							<input type="file" name="userfile" class="form-control"/>
							<br/>
							<label>Product Description</label>
							<textarea id="editor" name="simple_prd_description"></textarea>
							<br/>
							<label>Product Short Description</label>
							<textarea id="editor1" name="simple_prd_short_desc"></textarea>
							<br/>
							<span class="text-danger"><?php echo form_error('slider_order'); ?></span>
							<br/>
							<br/>
							<input type="submit" class="btn btn-outline-warning w-min-sm m-b-0-25 waves-effect waves-light" name="save" value="save "/>
							</form>
							</div>
						</div>        
					</div>
				</div>
			</div>			
        </div>        
    </div> 
<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/samples/js/sample.js'); ?>"></script>
<script>
	CKEDITOR.replace( 'editor' );	
	CKEDITOR.replace( 'editor1' );
</script>

