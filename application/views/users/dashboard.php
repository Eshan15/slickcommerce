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
      <div class="row row-md m-b-1">
         <div class="col-md-4">
            <div class="box bg-white user-1">
               <div class="u-img img-cover" style="background-image: url(<?php echo base_url('assets/images')?>/img/photos-1/4.jpg);"></div>
               <div class="u-content">
                  <div class="avatar box-64">
                     <img class="b-a-radius-circle shadow-white" src="<?php echo base_url('assets/images')?>/img/avatars/1.jpg" alt="">
                     <i class="status bg-success bottom right"></i>
                  </div>
                  <h5><a class="text-black" href="#">Larry Hal</a></h5>
                  <p class="text-muted p-b-0-5">Editor, project manager</p>
                  <p class="text-muted p-b-0-5">Email : <span>ricku.com100@gmail.com</span></p>
               </div>
            </div>
         </div>
         <div class="col-md-8">
            <div class="box box-block bg-white">
               <div class="clearfix m-b-1">
                  <h5 class="pull-xs-left">Sales statistics</h5>
                  <div class="pull-xs-right">
                     <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-angle-down"></i></button>
                     <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-reload"></i></button>
                     <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-close"></i></button>
                  </div>
               </div>
               <div id="advanced" class="chart-container m-b-1" style="height: 295px;"></div>
               <div class="text-xs-center">
                  <span class="m-x-1"><i class="fa fa-circle text-success"></i> Development</span>
                  <span class="m-x-1"><i class="fa fa-circle text-warning"></i> SEO</span>
                  <span class="m-x-1"><i class="fa fa-circle text-danger"></i> Mobile apps</span>
                  <span class="m-x-1"><i class="fa fa-circle text-primary"></i> Other</span>
               </div>
            </div>
         </div>
      </div>
      <div class="row row-md">
         <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="box box-block tile tile-2 bg-danger m-b-2">
               <div class="t-icon right"><i class="ti-shopping-cart-full"></i></div>
               <div class="t-content">
                  <h1 class="m-b-1">1,325</h1>
                  <h6 class="text-uppercase">Orders</h6>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="box box-block tile tile-2 bg-success m-b-2">
               <div class="t-icon right"><i class="ti-bar-chart"></i></div>
               <div class="t-content">
                  <h1 class="m-b-1">$ 47,855</h1>
                  <h6 class="text-uppercase">Revenue</h6>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="box box-block tile tile-2 bg-primary m-b-2">
               <div class="t-icon right"><i class="ti-package"></i></div>
               <div class="t-content">
                  <h1 class="m-b-1">6,800</h1>
                  <h6 class="text-uppercase">Products</h6>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="box box-block tile tile-2 bg-warning m-b-2">
               <div class="t-icon right"><i class="ti-receipt"></i></div>
               <div class="t-content">
                  <h1 class="m-b-1">1,682</h1>
                  <h6 class="text-uppercase">Sold</h6>
               </div>
            </div>
         </div>
      </div>
      <div class="row row-md">
         <div class="col-md-6">
            <div class="box box-block bg-white">
               <div class="clearfix m-b-1">
                  <h5 class="pull-xs-left">Activity</h5>
                  <div class="pull-xs-right">
                     <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-angle-down"></i></button>
                     <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-reload"></i></button>
                     <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-close"></i></button>
                  </div>
               </div>
               <div class="clearfix">
                  <div class="pull-md-left">
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search...">
                     </div>
                  </div>
                  <div class="pull-md-right">
                     <select class="custom-select">
                        <option selected>Action</option>
                        <option value="1">Edit</option>
                        <option value="3">Approve</option>
                        <option value="2">Delete</option>
                        <option value="3">Spam</option>
                     </select>
                  </div>
               </div>
               <div class="management m-b-1">
                  <div class="m-item">
                     <div class="mi-checkbox">
                        <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        </label>
                     </div>
                     <div class="mi-title">
                        <a class="text-black">John Doe</a> commented on <a class="text-black">Lorem ipsum dolor</a>
                     </div>
                     <div class="mi-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed diam sem, imperdiet at mollis vestibulum, bibendum id purus. Aliquam molestie, leo sed molestie...</div>
                     <div class="clearfix">
                        <div class="pull-md-left">
                           <a class="btn btn-success btn-sm" href="#"><i class="ti-check m-r-0-5"></i>Approve</a>
                           <a class="btn btn-secondary btn-sm" href="#"><i class="ti-pencil m-r-0-5"></i>Edit</a>
                           <a class="btn btn-danger btn-sm" href="#"><i class="ti-trash m-r-0-5"></i>Delete</a>
                        </div>
                        <div class="pull-md-right">
                           <span class="font-90 text-muted">5 minutes ago</span>
                        </div>
                     </div>
                  </div>
                  <div class="m-item">
                     <div class="mi-checkbox">
                        <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        </label>
                     </div>
                     <div class="mi-title">
                        <a class="text-black">John Doe</a> commented on <a class="text-black">Lorem ipsum dolor</a>
                     </div>
                     <div class="mi-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed diam sem, imperdiet at mollis vestibulum, bibendum id purus. Aliquam molestie, leo sed molestie...</div>
                     <div class="clearfix">
                        <div class="pull-md-left">
                           <a class="btn btn-success btn-sm" href="#"><i class="ti-check m-r-0-5"></i>Approve</a>
                           <a class="btn btn-secondary btn-sm" href="#"><i class="ti-pencil m-r-0-5"></i>Edit</a>
                           <a class="btn btn-danger btn-sm" href="#"><i class="ti-trash m-r-0-5"></i>Delete</a>
                        </div>
                        <div class="pull-md-right">
                           <span class="font-90 text-muted">5 minutes ago</span>
                        </div>
                     </div>
                  </div>
               </div>
               <button class="btn btn-outline-primary btn-block" type="button">Show more <i class="ti-angle-down m-l-0-5"></i></button>
            </div>
         </div>
         <div class="col-md-6">
            <div class="card">
               <div class="card-block b-b clearfix">
                  <h5 class="pull-xs-left">New users</h5>
                  <div class="pull-xs-right">
                     <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-angle-down"></i></button>
                     <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-reload"></i></button>
                     <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-close"></i></button>
                  </div>
               </div>
               <div class="items-list">
                  <div class="il-item">
                     <a class="text-black" href="#">
                        <div class="media">
                           <div class="media-left">
                              <div class="avatar box-48">
                                 <img class="b-a-radius-circle" src="<?php echo base_url('assets/images')?>/img/avatars/1.jpg" alt="">
                                 <i class="status bg-success bottom right"></i>
                              </div>
                           </div>
                           <div class="media-body">
                              <h6 class="media-heading">John Doe</h6>
                              <span class="text-muted">Software Engineer</span>
                           </div>
                        </div>
                        <div class="il-icon"><i class="fa fa-angle-right"></i></div>
                     </a>
                  </div>
                  <div class="il-item">
                     <a class="text-black" href="#">
                        <div class="media">
                           <div class="media-left">
                              <div class="avatar box-48">
                                 <img class="b-a-radius-circle" src="<?php echo base_url('assets/images')?>/img/avatars/2.jpg" alt="">
                                 <i class="status bg-danger bottom right"></i>
                              </div>
                           </div>
                           <div class="media-body">
                              <h6 class="media-heading">John Doe</h6>
                              <span class="text-muted">Software Engineer</span>
                           </div>
                        </div>
                        <div class="il-icon"><i class="fa fa-angle-right"></i></div>
                     </a>
                  </div>
                  <div class="il-item">
                     <a class="text-black" href="#">
                        <div class="media">
                           <div class="media-left">
                              <div class="avatar box-48">
                                 <img class="b-a-radius-circle" src="<?php echo base_url('assets/images')?>/img/avatars/3.jpg" alt="">
                                 <i class="status bg-secondary bottom right"></i>
                              </div>
                           </div>
                           <div class="media-body">
                              <h6 class="media-heading">John Doe</h6>
                              <span class="text-muted">Software Engineer</span>
                           </div>
                        </div>
                        <div class="il-icon"><i class="fa fa-angle-right"></i></div>
                     </a>
                  </div>
                  <div class="il-item">
                     <a class="text-black" href="#">
                        <div class="media">
                           <div class="media-left">
                              <div class="avatar box-48">
                                 <img class="b-a-radius-circle" src="<?php echo base_url('assets/images')?>/img/avatars/4.jpg" alt="">
                                 <i class="status bg-secondary bottom right"></i>
                              </div>
                           </div>
                           <div class="media-body">
                              <h6 class="media-heading">John Doe</h6>
                              <span class="text-muted">Software Engineer</span>
                           </div>
                        </div>
                        <div class="il-icon"><i class="fa fa-angle-right"></i></div>
                     </a>
                  </div>
                  <div class="il-item">
                     <a class="text-black" href="#">
                        <div class="media">
                           <div class="media-left">
                              <div class="avatar box-48">
                                 <img class="b-a-radius-circle" src="<?php echo base_url('assets/images')?>/img/avatars/5.jpg" alt="">
                                 <i class="status bg-success bottom right"></i>
                              </div>
                           </div>
                           <div class="media-body">
                              <h6 class="media-heading">John Doe</h6>
                              <span class="text-muted">Software Engineer</span>
                           </div>
                        </div>
                        <div class="il-icon"><i class="fa fa-angle-right"></i></div>
                     </a>
                  </div>
               </div>
               <div class="card-block">
                  <button type="submit" class="btn btn-primary btn-block">Users management</button>
               </div>
            </div>
         </div>
      </div>
      <div class="box box-block bg-white">
         <div class="clearfix m-b-1">
            <h5 class="pull-xs-left">Popular categories</h5>
            <div class="pull-xs-right">
               <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-angle-down"></i></button>
               <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-reload"></i></button>
               <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-close"></i></button>
            </div>
         </div>
         <div id="multiple" class="chart-container"></div>
      </div>
   </div>
</div>

