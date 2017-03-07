<div class="site-content">
<!-- Content -->
	<div class="content-area p-y-1">
		<div class="container-fluid">	
			<div class="card card-block">
				<h5>Edit Category</h5>	
				<p></p>
				<p>
				<a class="btn btn-outline-success w-min-sm m-b-0-25 waves-effect waves-light" href="<?php echo base_url('index.php/blank_template/add_category/'); ?>">Add New Category</a>
				</p>
				<div class="row">
					<div class="col-md-12">
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
							<td><a href="<?php echo base_url('index.php/blank_template/edit_category'); ?>">Edit</a></td>
							<td><a href="<?php echo base_url('index.php/blank_template/delete_category'); ?>">Delete</a></td>
							</tr>
							<?php $i++; } ?>
							</tbody>
						</table>
					<?php } else { ?>
					<h6>No Category Found...</h6>
					<?php } ?>
					</div>								
				</div>
			</div>			
        </div>        
    </div> 




