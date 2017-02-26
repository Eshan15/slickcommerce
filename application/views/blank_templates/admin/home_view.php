<div class="site-content">
<!-- Content -->
	<div class="content-area p-y-1">
		<div class="container-fluid">	
			<div class="card card-block">
				<h5>Pages</h5>	
				<p></p>
				<p>
				<a class="btn btn-outline-success w-min-sm m-b-0-25 waves-effect waves-light" href="<?php echo base_url('index.php/blank_template/add_page/'); ?>">Add New Pages</a>
				</p>
				<div class="row">
					<div class="col-md-12">
						<table class="table m-md-b-0">
							<thead class="thead-inverse">
								<tr>
									<th>#</th>
									<th>Pages</th>
									<th>Page Edit</th>
									<th>Page Delete</th>
								</tr>
							</thead>
							<tbody>
							<?php $i=1; foreach ($model as $getpage) { 
							$temp_id=$getpage->blank_temp_id;
							?>
								<tr>
									<th scope="row"><?php echo $i; ?></th>
									<td><?php echo  $getpage->blank_pages; ?></td>
									<td><a class="btn btn-outline-warning w-min-sm m-b-0-25 waves-effect waves-light" href="<?php echo base_url('index.php/blank_template/edit_page/') . $temp_id; ?>">Edit</a></td>
									<td><a class="btn btn-outline-danger w-min-sm m-b-0-25 waves-effect waves-light" href="<?php echo base_url('index.php/blank_template/del_page/'). $temp_id; ?>">Delete</a></td>
								</tr>
							<?php $i++; }  ?>	
							</tbody>
						</table>
					</div>								
				</div>
			</div>			
        </div>        
    </div>   



