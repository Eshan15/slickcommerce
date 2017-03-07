<div class="site-content">
<!-- Content -->
	<div class="content-area p-y-1">
		<div class="container-fluid">	
			<div class="card card-block">
				<h5>Attributes</h5>	
				<p></p>
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<br/>
							<br/>
							<?php if(isset($edit_attr)) { ?>
							<?php foreach ($edit_attr as $attr_show){ ?>
							<?php $id_attr=$attr_show->attr_id; ?>
							<?php echo form_open_multipart('blank_template/update_attr/' . $id_attr, array('method'=>'post','id'=>'save_cat'));?>
							<label>Attributes Name</label>
							<input type="text" class="form-control" name="edit_name" placeholder="Product Name" value="<?php echo $attr_show->attr_name; ?>"/>
							<span class="text-danger"><?php echo $this->session->flashdata('feedback'); ?></span>
							<br/>
							<br/>
							<input type="submit" class="btn btn-outline-warning w-min-sm m-b-0-25 waves-effect waves-light" name="save" value="Update"/>
							<input type="button" class="btn btn-outline-warning w-min-sm m-b-0-25 waves-effect waves-light" value="Cancel" onclick="history.back(-1)" />
							</form>
							<?php } ?>
							<?php } else { ?>							
							
								<?php echo form_open_multipart('blank_template/save_attr/', array('method'=>'post','id'=>'save_cat'));?>
								<label>Attributes Name</label>
								<input type="text" class="form-control" name="attr_name" placeholder="Product Name"/>
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
						<?php if($show_attr){ ?>
						<table class="table m-md-b-0">
							<thead class="thead-inverse">
								<tr>
									<th>#</th>
									<th>Attributes Name</th>									
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
							<?php $i=1; foreach($show_attr as $attr){ ?>
							<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $attr->attr_name; ?></td>	
							<?php $attrid=$attr->attr_id; ?>							
							<td><a href="<?php echo base_url('index.php/blank_template/edit_attr/') . $attrid; ?>">Edit</a></td>
							<td><a href="<?php echo base_url('index.php/blank_template/delete_category/') . $attrid; ?>">Delete</a></td>
							</tr>
							<?php $i++; } ?>
							</tbody>
						</table>
						<?php } else { ?>
						<br/><br/>
						<h6>No Attributes Found...</h6>
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

