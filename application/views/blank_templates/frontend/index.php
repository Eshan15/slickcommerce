<?php if(isset($slider)) {?>
<div class="banner">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->

   <ol class="carousel-indicators">
  <?php foreach ($slider as $get_slider) { ?>  
    <?php $slider_id=$get_slider->slider_id; ?>
    <?php if($slider_id==1){ ?>
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <?php } else { ?>
      <li data-target="#myCarousel" data-slide-to="1"></li>
  <?php } ?>
  <?php } ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  <?php foreach ($slider as $get_slider) { ?>  
    <?php $slider_id=$get_slider->slider_id; ?>
    <?php $upload_images = base_url() .'/assets/images/slider/'. $get_slider->slider_images; ?> 
    <?php if($slider_id==1){ ?>
    <div class="item active">
      <img src="<?php echo $upload_images; ?>" alt="Learning">
    </div>
    <?php } else { ?>
    <div class="item">
      <img src="<?php echo $upload_images; ?>" alt="learning">
    </div>
    <?php } ?> 
    <?php } ?>   
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left ion-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right ion-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<?php } ?>

<?php if(isset($section)){ ?>
  <?php 
    foreach ($section as $sec) {
      $section1=$sec->section1;
      $section2=$sec->section2;
      $section3=$sec->section3;
      $section4=$sec->section4;
      if($section1!=""){
        echo $section1;
      }
      if($section2!=""){
        echo $section2;
      }
      if($section3=""){
        echo $section3;
      }
      if($section4!=""){
        echo $section4;
      }
    }

  ?>
<?php } ?>
