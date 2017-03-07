<body class="large-sidebar fixed-sidebar fixed-header skin-1">
	<div class="wrapper">
		<div class="preloader"></div>
			<!-- Sidebar -->
			<div class="site-sidebar-overlay"></div>
				<div class="site-sidebar">
					<a class="logo" href="index.html">
						<span class="l-text">Slick Commerce</span>					
					</a>
					<div class="custom-scroll custom-scroll-dark">
					<ul class="sidebar-menu">
						<li class="menu-title m-t-0-5">Navigation</li>
						<li class="with-sub">
							<a href="<?php echo base_url('index.php/profile/users'); ?>" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-dashboard"></i></span>
								<span class="s-text">Dashboard</span>
							</a>							
						</li>
						<li class="with-sub">
							<a target="_blank" href="<?php echo base_url('index.php/blank_template/show_frontend'); ?>" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-package"></i></span>
								<span class="s-text">View Site</span>
							</a>							
						</li>
						<li class="menu-title">Main</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-paint-bucket"></i></span>
								<span class="s-text">Pages</span>
							</a>
							<ul>
								<li><a href="<?php echo base_url('index.php/blank_template/add_page/'); ?>">Add New Pages</a></li>
								<li><a href="<?php echo base_url('index.php/blank_template/index/'); ?>">Pages</a></li>
							</ul>
						</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-pencil-alt"></i></span>
								<span class="s-text">Header & Footer</span>
							</a>
							<ul>
								<li><a href="<?php echo base_url('index.php/blank_template/header_footer'); ?>">Edit Header & Footer</a></li>								
							</ul>
						</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<!--<span class="tag tag-success">3</span>-->
								<span class="s-icon"><i class="ti-menu-alt"></i></span>
								<span class="s-text">Slider</span>
							</a>
							<ul>
								<li><a href="<?php echo base_url('index.php/blank_template/add_slider/'); ?>">Add New Slider</a></li>
								<li><a href="<?php echo base_url('index.php/blank_template/get_slider'); ?>">Sliders</a></li>								
							</ul>
						</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<!--<span class="tag tag-success">3</span>-->
								<span class="s-icon"><i class="ti-gallery"></i></span>
								<span class="s-text">Shop</span>
							</a>
							<ul>
								<li><a href="<?php echo base_url('index.php/blank_template/shop'); ?>">Enable Shop</a></li>
								<li><a href="<?php echo base_url('index.php/blank_template/add_category'); ?>">Add Categories</a></li>
								<li><a href="<?php echo base_url('index.php/blank_template/show_products/'); ?>">Products</a></li>
								<li><a href="<?php echo base_url('index.php/blank_template/add_product/'); ?>">Add Products</a></li>
								<li><a href="#">Orders</a></li>								
							</ul>
						</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-view-grid"></i></span>
								<span class="s-text">Menus</span>
							</a>
							<ul>
								<li><a href="#">Add Menu</a></li>								
								<li><a href="#">Show Menu</a></li>
							</ul>
						</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-star"></i></span>
								<span class="s-text">Apparence</span>
							</a>
							<ul>
								<li><a href="<?php echo base_url('index.php/blank_template/show_theme/'); ?>">Theme</a></li>								
							</ul>
						</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-settings"></i></span>
								<span class="s-text">Setting</span>
							</a>
							<ul>
								<li><a href="utilities-color.html">Edit Setting Page</a></li>								
							</ul>
						</li>
						<li class="menu-title">More</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-location-arrow"></i></span>
								<span class="s-text">Contact Form</span>
							</a>
							<ul>
								<li><a href="extra-animations.html">Edit Contact Form</a></li>
								<li><a href="extra-comments.html">Submited Data</a></li>								
							</ul>
						</li>
						</ul>
					</div>
				</div>
			
			<!-- Sidebar second -->
			
			<!-- header -->
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
				<a class="dropdown-item" href="<?php echo base_url('index.php/home/logout'); ?>">
					<i class="ti-power-off m-r-0-5"></i> Sign out
				</a>
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