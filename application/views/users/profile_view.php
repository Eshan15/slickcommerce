<style>
.template{
	display:none;
}
</style>

<div class="site-content">
<!-- Content -->
	<div class="content-area p-y-1">
		<div class="container-fluid">	
			<div class="card card-block">
				<h5>Choose Theme</h5>	
				<p></p>
				<div class="container">
					<div class="row">						
						<div class="col-md-12">							
							<div class="well">							
								<?php
								$attributes = array("name" => "create_site_name");
								echo form_open("users/create_site_name", $attributes);
								?>
								<label>Site Name</label> <br/><input class="form-control" type="text" name="site_name" value="<?php echo set_value('site_name'); ?>" placeholder="Site Name"/>	
								<span class="text-danger"><?php echo form_error('site_name'); ?></span>
								<br/>
								<input class="btn btn-info" type="submit" name="save_site" value="Save"/>			
								<?php echo form_close(); ?>
								<span class="text-success"><?php echo $this->session->flashdata('msg'); ?></span>
								
								<?php if($show_site){ ?>
								<style>
								form{
									display:none;
								}
								.template{
									display:block;
								}
								</style>
								<?php foreach ($show_site as $site_show){ ?>
								
								<label>Site Name : </label> <?php echo $site_show->user_site_name; ?>
								<br/>
								<br/>
								<?php } ?>
								<?php }else{ ?>
								<style>
								form{
									display:block;
								}
								.template{
									display:none;
								}
								</style>				
								<?php } ?>			
								
							</div>
						</div>
					</div>
					
					<div class="row template">
						<div class="container">
						<div class="row">
						<div class="col-md-4">		
							<a href="<?php echo base_url('index.php/users/add_template/1'); ?>"><img src="<?php echo base_url("assets/images/templates/blank-templates.jpeg"); ?>"/></a>
							<br/><br/>
							<label>Blank Template 1</label>
						</div>
						
						<div class="col-md-4">
							<a href="#"><img src="<?php echo base_url("assets/images/templates/blank-templates.jpeg"); ?>"/></a>
							<br/><br/>
							<label>Template 1</label>
						</div>
						
						<div class="col-md-4">
							<a href="#"><img src="<?php echo base_url("assets/images/templates/blank-templates.jpeg"); ?>"/></a>
							<br/><br/>
							<label>Template 2</label>
						</div>
						</div>
						<br/>
						<br/>
						<div class="row">
						<div class="col-md-4">
							<a href="#"><img src="<?php echo base_url("assets/images/templates/blank-templates.jpeg"); ?>"/></a>
							<br/><br/>
							<label>Template 4</label>
						</div>
						
						<div class="col-md-4">
							<a href="#"><img src="<?php echo base_url("assets/images/templates/blank-templates.jpeg"); ?>"/></a>
							<br/><br/>
							<label>Template 5</label>
						</div>
						
						<div class="col-md-3">
							<a href="#"><img src="<?php echo base_url("assets/images/templates/blank-templates.jpeg"); ?>"/></a>
							<br/><br/>
							<label>Template 6</label>
						</div>
						</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
