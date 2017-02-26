<div class="container">
    <div class="row">
        <div class="col-md-12">			
			<div class="row">			
            <br/>
			<br/>
			<?php foreach ($slider_detailEdit as $get_slider){ ?>
			<?php $slider_id=$get_slider->slider_id; ?>
			<?php echo form_open_multipart('blank_template/update_slider/'.$slider_id, array('method'=>'post'));?>
			
			<label>Upload Slider</label>
			<input type="file" name="userfile" class="form-control"/>
			<br/>
			<?php $upload_images = base_url() .'/assets/images/slider/'. $get_slider->slider_images; ?>			
			<img height="200" width="200" src="<?php echo $upload_images;?>"/>	
			<br/><br/>		
			<label>Slider Content</label>
			<textarea id="editor" name="slider_content"><?php echo $get_slider->slider_content; ?></textarea>			
			<br/>
			<br/>
			
			<input type="submit" class="btn btn-info" name="save" value="save "/>
			</form>
			<?php } ?>
			</div>
        </div>        
    </div>
</div>

<script>
	CKEDITOR.replace( 'editor' );	
</script>

