<div class="specer20"></div>
<h1 class="topheading">How It Videos</h1>
<div class="inner_content">
    <div class="spacer20"></div>
	<?php 
	$video_count = 1;
	if(isset($videos) && $videos->exists())
	{ 
		foreach ($videos as $video) 
		{
	?>
		<?php if($video_count == 1){ ?>
		<div class="dividermiddle_C">
	      <div class="dividertop_C">
	        <div class="dividerbottom_C">
	          <div class="content_txt">
    	
	            <div class="Fleft width439px mr28">
	              <div class="highlitedtxt"><?php echo $video->title; ?></div>
	              <div class="specer20"></div>
	              <div class="vedio_img_cont">
	              		<?php if($video->video_type=='youtube'){ ?>
							<iframe src="http://www.youtube.com/embed/<?php echo $video->video_code; ?>" width="417" height="344" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		              	<?php }elseif($video->video_type=='vimeo'){ ?>
		              		<iframe src="http://player.vimeo.com/video/<?php echo $video->video_code; ?>" width="417" height="344" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		              	<?php }else{ ?>
		        		<img src="{{ theme_url }}/assets/images/vedio_img.png" class="vedio_img" />
		        		<?php } ?>
	              </div>
	              <div class="tds-button_greenb"></div>
	              <div class="clear"></div>
	            </div>
	    <?php }elseif($video_count==2){ ?>    
	            <div class="Fleft width439px ">
	              <div class="highlitedtxt2"><?php echo $video->title; ?></div>
	              <div class="specer20"></div>
	              <div class="vedio_img_cont">
	              	<?php if($video->video_type=='youtube'){ ?>
	              		<iframe src="http://www.youtube.com/embed/<?php echo $video->video_code; ?>" width="417" height="344" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
	              	<?php }elseif($video->video_type=='vimeo'){ ?>
	              		<iframe src="http://player.vimeo.com/video/<?php echo $video->video_code; ?>" width="417" height="344" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
	              	<?php }else{ ?>
	        		<img src="{{ theme_url }}/assets/images/vedio_img.png" class="vedio_img" />
	        		<?php } ?>
	              </div>
	              <div class="tds-button_greenb"></div>
	              <div class="clear"></div>
	              <div class="specer20"></div>
	            </div>

	            <div class="clear"></div>
	            <div class="specer"></div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <?php $video_count=0;}//else
	    $video_count++;
	    }//foreachends
	}//if ends
	?>
    <div class="clear"></div>
</div>
<div class="specer30"></div>