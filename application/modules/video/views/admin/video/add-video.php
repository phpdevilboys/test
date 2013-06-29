<div class="box">
    <div class="heading">
        <h1><img alt="" src="<?php echo theme_url('assets/images/video.png'); ?>"> <?php echo ($mode); ?> Video</h1>

        <div class="buttons">
            <a class="button" href="#" onClick="$('#form').submit();"><span>Save</span></a>
            <a class="button" href="<?php echo site_url(ADMIN_PATH . '/video/index'); ?>"><span>Cancel</span></a>
        </div>
    </div>
    <div class="content">

        <?php echo form_open(null, 'id="form"')?>

        <div class="form">
            <div>
                <span class="required">* </span><?php echo form_label('Title:', 'title')?>
                <?php echo form_input(array('name' => 'title', 'value' => set_value('title', isset($Video->title) ? $Video->title : '')))?>
            </div>
            <div>
                <span class="required">* </span><?php echo form_label('Video Type:', 'video_type')?>
                <?php 
                    $options = array(''=>'Select','youtube'=>'Youtube', 'vimeo'=>'Vimeo');
                    echo form_dropdown('video_type', $options, isset($Video->video_type) ? $Video->video_type : '');
                ?>
            </div> 
            <div>
                <span class="required">* </span><?php echo form_label('Video Code:', 'video_code')?>
                <?php echo form_input(array('name' => 'video_code', 'value' => set_value('video_code', isset($Video->video_code) ? $Video->video_code : '')))?>
            </div>
            <div>
                <?php echo form_label('Description:', 'description')?>
                <?php echo form_textarea(array('name' => 'description', 'value' => set_value('description', isset($Video->description) ? $Video->description : '')))?>
            </div>
        </div>

        <div class="clear"></div>

        <?php echo form_close(); ?>
    </div>
</div>
