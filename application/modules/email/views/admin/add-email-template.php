<div class="box">
    <div class="heading">
        <h1><img alt="" src="<?php echo theme_url('assets/images/mail.png'); ?>"> <?php echo ($mode); ?> Email Template</h1>

        <div class="buttons">
            <a class="button" href="#" onClick="$('#form').submit();"><span>Save</span></a>
            <a class="button" href="<?php echo site_url(ADMIN_PATH . '/email/index'); ?>"><span>Cancel</span></a>
        </div>
    </div>
    <div class="content">
        <?php echo form_open(null, 'id="form"')?>
        <div class="form">
            <div>
                <span class="required">* </span><?php echo form_label('Title:', 'title')?>
                <?php echo form_input(array('name' => 'title', 'value' => set_value('title', isset($Email->title) ? $Email->title : '')))?>
            </div>
            <div>
                <span class="required">* </span><?php echo form_label('Module:', 'module')?>
                <?php $options = array(
                                      'contact'         => 'Contact/Enquiry Email Template',
                                      'registration'    => 'Registraion Email Template',
                                      'advisor'         => 'Advisor Email Template',
                                      'changepassword'  => 'Change Password Email Template',
                                    ); 
            
                echo form_dropdown('module', $options, isset($Email->module) ? $Email->module : '');    
                ?>
            </div>
            <div>
                <span class="required">* </span><?php echo form_label('Subject:', 'subject')?>
                <?php echo form_input(array('name' => 'subject', 'value' => set_value('subject', isset($Email->subject) ? $Email->subject : '')))?>
            </div>
            <div>
                <?php echo form_label('Default:', 'default'); ?>
                <?php
                    $checkYes = (isset($Email) && $Email->is_default==1) ? TRUE : FALSE;
                    $checkNo = (isset($Email) && $Email->is_default==0) ? TRUE : FALSE;
                    $checkNo = (!isset($Email->is_default)) ? TRUE : $checkNo;
                    
                    echo form_radio(array(
                        'name'      => 'is_default',
                        'value'     => '1',
                        'checked'   => $checkYes,
                    )) . ' Yes ';
                    echo form_radio(array(
                        'name'      => 'is_default',
                        'value'     => '0',
                        'checked'   => $checkNo,
                    )) . ' No';
                ?>
            </div>
            <div>
                <span class="required">* </span><?php echo form_label('Body:', 'body')?>
                <div style="margin-top:10px;">
                    <?php echo form_textarea(array(
                        'name' => 'body',
                        'value' => set_value('body', isset($Email->body) ? $Email->body : ''),
                        'class' => 'textarea_content ckeditor_textarea', 
                        ));
                    ?>
                </div>
            </div>
            <div>
                <span class="required">* </span><?php echo form_label('Add Signature:', 'signature')?>
                <div style="margin-top:10px;">
                    <?php echo form_textarea(array(
                            'name' => 'signature',
                            'value' => set_value('signature', isset($Email->add_sign) ? $Email->add_sign : ''),
                            'class' => 'textarea_content ckeditor_textarea', 
                        ));
                    ?>
                </div>
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

});
</script>
<?php js_end(); ?>
