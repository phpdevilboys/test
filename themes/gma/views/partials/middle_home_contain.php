<div class="innerdiv extrapadding3 width_283">
	<h1>Latest News</h1>
	{{ news:show_news order-by="created_at" limit="5" }}
	<a href="<?php echo site_url('news'); ?>">Read More..</a> 	
</div>							
	<div class="innerdiv width_283 extrapadding3">
		<h1>How It Videos</h1>
	    <div class="dividertop"></div>
	    <div class="content_txt">
                {{ video:youtube id="Pr6dLxOeOvA" width="300" height="210" }}
                {{ video:show_more_video_link }}
            </div>
	</div>				 
<div class="clear"></div>
