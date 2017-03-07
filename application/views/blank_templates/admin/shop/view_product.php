<div class="site-content">
<!-- Content -->
	<div class="content-area p-y-1">
		<div class="container-fluid">	
			<div class="card card-block">
				<h5>Products</h5>	
				<p></p>
				<p>
				<a class="btn btn-outline-success w-min-sm m-b-0-25 waves-effect waves-light" href="<?php echo base_url('index.php/blank_template/add_product/'); ?>">Add New Product</a>
				</p>
				<div class="row">
					<div class="col-md-12">
						<table class="table m-md-b-0">
							<thead class="thead-inverse">
								<tr>
									<th>#</th>
									<th>Product Name</th>
									<th>Product Category</th>
									<th>Product Features</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							<?php $i=1; foreach($show_prd as $prd){ ?>
							<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $prd->simple_prd_name; ?></td>
							<td>-N/A-</td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;<a id="feature_prd" href="<?php echo base_url('index.php/blank_template/add_feature/'); ?>">
								<i style="color:#BA0000;" class="fa fa-times" aria-hidden="true"></i>
							</a></td>
							<td>-N/A-</td>
							</tr>
							<?php $i++; } ?>
							</tbody>
						</table>
					</div>								
				</div>
			</div>			
        </div>        
    </div> 




