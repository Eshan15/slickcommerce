<div class="site-content">
<!-- Content -->
	<div class="content-area p-y-1">
		<div class="container-fluid">	
			<div class="card card-block">
				<h5>Category</h5>	
				<p></p>
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<br/>
							<br/>
							<?php if(isset($edit_cat)) { ?>
							<?php foreach ($edit_cat as $cat_show){ ?>
							<?php $id_cat=$cat_show->cat_id; ?>
							<?php echo form_open_multipart('blank_template/update_cat/' . $id_cat, array('method'=>'post','id'=>'save_cat'));?>
							<label>Category Name</label>
							<input type="text" class="form-control" name="edit_name" placeholder="Product Name" value="<?php echo $cat_show->cat_name; ?>"/>
							<span class="text-danger"><?php echo $this->session->flashdata('feedback'); ?></span>
							<br/>
							<br/>
							<input type="submit" class="btn btn-outline-warning w-min-sm m-b-0-25 waves-effect waves-light" name="save" value="Update"/>
							<input type="button" class="btn btn-outline-warning w-min-sm m-b-0-25 waves-effect waves-light" value="Cancel" onclick="history.back(-1)" />
							</form>
							<?php } ?>
							<?php } else { ?>							
							
								<?php echo form_open_multipart('blank_template/save_category/', array('method'=>'post','id'=>'save_cat'));?>
								<label>Category Name</label>
								<input type="text" class="form-control" name="cat_name" placeholder="Product Name"/>
								<span class="text-danger"><?php echo $this->session->flashdata('feedback'); ?></span>
								<br/>
								<br/>
								<input type="submit" class="btn btn-outline-warning w-min-sm m-b-0-25 waves-effect waves-light" name="save" value="save "/>
								</form>	
							<?php } ?>								
						</div> 						
						<div class="col-md-9 show_Cat">
						<br/>
						<br/>
						<?php if($show_cat){ ?>
						<table class="table m-md-b-0">
							<thead class="thead-inverse">
								<tr>
									<th>#</th>
									<th>Category Name</th>									
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
							<?php $i=1; foreach($show_cat as $cat){ ?>
							<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $cat->cat_name; ?></td>	
							<?php $catid=$cat->cat_id; ?>							
							<td><a href="<?php echo base_url('index.php/blank_template/edit_category/') . $catid; ?>">Edit</a></td>
							<td><a href="<?php echo base_url('index.php/blank_template/delete_category/') . $catid; ?>">Delete</a></td>
							</tr>
							<?php $i++; } ?>
							</tbody>
						</table>
						<?php } else { ?>
						<br/><br/>
						<h6>No Category Found...</h6>
						<?php } ?>
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

