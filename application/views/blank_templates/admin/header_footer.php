<div class="site-header">
   <nav class="navbar navbar-dark">
      
      <ul class="nav navbar-nav pull-xs-right">         
         
         <li class="nav-item dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
               <div class="avatar box-32">
                  <img src="<?php echo base_url('assets/images');?>/img/avatars/1.jpg" alt="">
               </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right animated flipInY">
               <a class="dropdown-item" href="#">
               <i class="ti-email m-r-0-5"></i> Inbox
               </a>
               <a class="dropdown-item" href="#">
               <i class="ti-user m-r-0-5"></i> Profile
               </a>
               <a class="dropdown-item" href="#">
               <i class="ti-settings m-r-0-5"></i> Settings
               </a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="#"><i class="ti-help m-r-0-5"></i> Help</a>
               <a class="dropdown-item" href="#"><i class="ti-power-off m-r-0-5"></i> Sign out</a>
            </div>
         </li>
         <li class="nav-item hidden-md-up">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapse-1">
            <i class="ti-more"></i>
            </a>
         </li>
         
      </ul>
      <div class="navbar-toggleable-sm collapse" id="collapse-1">
         <div class="header-form pull-md-left m-md-r-1">
            <form>
               <input type="text" class="form-control b-a" placeholder="Search for...">
               <button type="submit" class="btn bg-white b-a-0">
               <i class="ti-search"></i>
               </button>
            </form>
         </div>         
      </div>
   </nav>
</div>
<div class="site-content">
<!-- Content -->
<div class="content-area p-y-1">
   <div class="container-fluid">
	<div class="box box-block bg-white">
		<?php foreach ($details_header as $get_row){ ?>
			<?php $page_id=$get_row->blank_head_id; ?>
			
			<form action="<?php echo base_url(); ?>/index.php/blank_template/update_header/<?php echo $page_id; ?>" method="post">
			
			<label>Header</label>
			<textarea id="editor" name="header"><?php echo $get_row->header; ?></textarea>
			<label>footer</label>
			<textarea id="editor1" name="footer"><?php echo $get_row->footer; ?></textarea>
			
			<br/>
			<br/>
			<input type="submit" class="btn btn-info" name="save" value="save "/>
			</form>
			<?php } ?>
	</div>
   </div>

<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/samples/js/sample.js'); ?>"></script>

<script>
	CKEDITOR.replace( 'editor' );
	CKEDITOR.replace( 'editor1' );	
</script>

