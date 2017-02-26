<div class="site-content">
<!-- Content -->
	<div class="content-area p-y-1">
		<div class="container-fluid">	
			<div class="card card-block">
				<h5>Enable Shop</h5>	
				<p></p>
				<div class="row">
					<div class="col-md-12">
						<table class="table m-md-b-0">
							<thead class="thead-inverse">
								<tr>
									<th>#</th>
									<th>Shop Enable</th>									
								</tr>
							</thead>
							<tbody>
							<td>1</td>
							<td>
								<?php $selected_shop= $show_detail_shop[0]->enable_shop; ?>
								<select name="shop_selection" id="shop_selection" class="form-control">
									<option value="-1">Select</option>
									<option value="1" <?php if($selected_shop==1){ echo "selected";} ?> >yes</option>
									<option value="2" <?php if($selected_shop==2){ echo "selected";} ?>>No</option>
								</select>
							</td>							
							</tbody>
						</table>
					</div>
				</div>
				<br/>
				<br/>
				<br/>
				<div class="row">
					<div class="col-md-11 text-center">
					<div  id="show_shop" style="display:none;">
					<a class="btn btn-outline-success w-min-sm m-b-0-25 waves-effect waves-light" href="javascript:void(0)">Orders</a>
					<a class="btn btn-outline-success w-min-sm m-b-0-25 waves-effect waves-light" href="<?php echo base_url('index.php/blank_template/show_categories/'); ?>">Add Categories</a>
					<a class="btn btn-outline-success w-min-sm m-b-0-25 waves-effect waves-light" href="<?php echo base_url('index.php/blank_template/add_product/'); ?>">Add Products</a> 
					<a class="btn btn-outline-success w-min-sm m-b-0-25 waves-effect waves-light" href="<?php echo base_url('index.php/blank_template/show_products/'); ?>">View Products</a> 
					</div>	
					
					<div class="row" id="show_orders" style="display:none;">
					<label>Orders</label>
					</div>
					</div>
				</div>
			</div>        
		</div>   
	</div>
<style>
#shop_selection {
  height: 40px;
}
</style>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
 $(function(){
	var shop_val1=$("#shop_selection").val();	
	if(shop_val1==1){
		$("#show_shop").show();		
	}else{
		$("#show_shop").hide();		
	}
	$("#shop_selection").change(function(){		
		var shop_val=$(this).val();		
		if(shop_val != -1){
			var send_data='q='+shop_val;			
			$.ajax({
				url : '<?php echo base_url('index.php/blank_template/add_shop'); ?>',
				type : 'post',
				data : send_data,
				success: function(resp){
					if(resp==1){
						$("#show_shop").show();						
					}else{
						$("#show_shop").hide();						
					}
					
				}	
			});
		}
		
	});
 });
</script>

