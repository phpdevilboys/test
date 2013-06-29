<?php 
if( isset($news) && $news->exists()){
	foreach($news as $single_news){	
?>
	<h3 class="new_heading"><?php echo $single_news->title; ?></h3>
	<div class="content_txt">
	<?php echo $single_news->title; ?>
	<div class="hr_line" style="width:100%;height:5px;"></div>
		<?php echo $single_news->description; ?>
		<div><?php echo date ("d F Y", strtotime($single_news->created_at)); ?></div>
	</div>
	<div style="clear">&nbsp;</div>
	<?php }//foreach ends ?>

	<?php if(isset($paging_links)){ ?>
		<div class="paging hr_line" ><?php echo $paging_links; ?></div>
	<?php }// end if ?>
<?php
	}else{
	echo '<h1 style="color:red;">No record Found!</h1>';
}
?>