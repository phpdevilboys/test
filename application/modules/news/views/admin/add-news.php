<div class="box">
    <div class="heading">
        <h1><img alt="" src="<?php echo theme_url('assets/images/news.png'); ?>"> <?php echo ($mode); ?> News</h1>

        <div class="buttons">
            <a class="button" href="#" onClick="$('#form').submit();"><span>Save</span></a>
            <a class="button" href="<?php echo site_url(ADMIN_PATH . '/news/index'); ?>"><span>Cancel</span></a>
        </div>
    </div>
    <div class="content">

        <?php echo form_open_multipart(null, 'id="form"')?>

        <div class="form">
            <div>
                <span class="required">* </span><?php echo form_label('Title:', 'title')?>
                <?php echo form_input(array('name' => 'title', 'value' => set_value('title', isset($News->title) ? $News->title : '')))?>
            </div>
            <div>
                <span class="required">&nbsp;&nbsp;</span><?php echo form_label('Date:', 'date')?>
                <?php echo form_input(array(
                            'name' => 'news_date',
                            'class'=>'dateinput',
                            'value' => set_value('news_date', isset($News->news_date) ? $News->news_date : date('m/d/Y'))
                        ));
                ?>
            </div>
            <div>
                <?php echo form_label('Image:', 'image') ?>
                <?php echo form_upload(array('name'=>'image')) ?>
            </div>
            <div>
                <span class="required">* </span><?php echo form_label('Description:', 'description')?>
                <br /><br />
                <?php echo form_textarea(array(
                            'name' => 'description',
                            'value' => set_value('description', isset($News->description) ? $News->description : ''),
                            'class' => 'textarea_content ckeditor_textarea', 
                        ));
                ?>
            </div>
        </div>

        <div class="clear"></div>

        <?php echo form_close(); ?>
    </div>
</div>
<?php js_start(); ?>
<script type="text/javascript">
$(document).ready( function() {
    var ckeditor_config = { 
        toolbar : [
                        { name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
                        { name: 'colors', items : [ 'TextColor','BGColor' ] },
                        { name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv','- ','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock' ] },
                        { name: 'tools', items : [ 'ShowBlocks' ] },
                        { name: 'tools', items : [ 'Maximize' ] },
                                        '/',
                        { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Subscript','Superscript','Strike','-','RemoveFormat' ] },
                        { name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
                        { name: 'insert', items : [ 'Image','Flash','MediaEmbed','Table','HorizontalRule','SpecialChar' ] },
                        { name: 'links', items : [ 'Link','Unlink','Anchor' ] },
                        { name: 'document', items : [ 'Source' ] }
                    ],
        entities : true,
        height : '300px'
    };

    $('textarea.ckeditor_textarea').each(function(index) {
        ckeditor_config.height = $(this).height();
        CKEDITOR.replace($(this).attr('name'), ckeditor_config); 
    });

    $(".dateinput").datepicker({
        changeMonth: true,
        changeYear: true
    });
});
</script>
<?php js_end(); ?>