<div class="site-content">
<!-- Content -->
	<div class="content-area p-y-1">
		<div class="container-fluid">	
			<div class="card card-block">
				<h5>Sliders</h5>	
				<p></p>
				<p>
				<a class="btn btn-outline-success w-min-sm m-b-0-25 waves-effect waves-light" href="<?php echo base_url('index.php/blank_template/add_slider/'); ?>">Add New Slider</a>
				</p>
				<div class="row">
					<div class="col-md-12">
						<table class="table m-md-b-0">
							<thead class="thead-inverse">
								<tr>
									<th>#</th>
									<th>Slider</th>
									<th>Slider Content</th>
									<th>Slider Order</th>
									<th>Slider Action</th>
								</tr>
							</thead>
							<tbody>
							<?php $i=1; foreach ($slider as $getslider) {
							$temp_id=$getslider->slider_id;
							?>
								<tr>
									<th scope="row"><?php echo $i; ?></th>									
									<td>			
									<?php $upload_images = base_url() .'/assets/images/slider/'. $getslider->slider_images; ?>
									<img height="70" width="100" src="<?php echo $upload_images;?>"/>
									</td>
									<td><?php echo $getslider->slider_content; ?></td>
									<td><?php echo $getslider->slider_order; ?></td>
									<td>
										<a class="btn btn-outline-warning w-min-sm m-b-0-25 waves-effect waves-light" href="<?php echo base_url('index.php/blank_template/edit_page/') . $temp_id; ?>">Edit</a>
										<a class="btn btn-outline-danger w-min-sm m-b-0-25 waves-effect waves-light" href="<?php echo base_url('index.php/blank_template/del_page/'). $temp_id; ?>">Delete</a>
									</td>
								</tr>
							<?php $i++; }  ?>	
							</tbody>
						</table>
					</div>								
				</div>
			</div>			
        </div>        
    </div>   