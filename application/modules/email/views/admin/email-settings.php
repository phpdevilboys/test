<div class="box">
    <div class="heading">
        <h1><img alt="" src="<?php echo theme_url('assets/images/mail.png'); ?>"> Email Settings</h1>

        <div class="buttons">
            <a class="button" href="#" onClick="$('#form').submit();"><span>Save</span></a>
            <a class="button" href="<?php echo site_url(ADMIN_PATH . '/email/index'); ?>"><span>Cancel</span></a>
        </div>
    </div>
    <div class="content">
        <?php echo form_open(null, 'id="form"')?>
        <div class="form">
            <div>
                <?php echo form_label('Mail Protocol', 'protocol')?>
                <?php
                    $options = array(
                        'mail'  => 'Mail',
                        'smtp'  => 'Smtp'
                    );
                    
                    echo form_dropdown('protocol', $options, isset($Setting->protocol) ? $Setting->protocol : '' ,'id="protocol"');    
                ?>
            </div>
            <span id="smtp_setting">
        		<div>
        			<?php echo form_label('SMTP Host:', 'host')?>
        			<?php echo form_input(array('name' => 'host', 'size'=>'50', 'value' => set_value('host', isset($Setting->host) ? $Setting->host : '')))?>
        		</div>
            	<div>
            		<?php echo form_label('SMTP Username:', 'username')?>
            		<?php echo form_input(array('name' => 'username', 'size'=>'50', 'value' => set_value('username', isset($Setting->username) ? $Setting->username : '')))?>
        		</div>
        		<div>
        			<?php echo form_label('SMTP Password:', 'password')?>
        			<?php echo form_input(array('name' => 'password', 'size'=>'50', 'value' => set_value('password', isset($Setting->password) ? $Setting->password : '')))?>
        		</div>
            </span>
            <div>
                <?php echo form_label('Contact Email:', 'contact_email')?>
                <?php echo form_input(array('name' => 'contact_email', 'size'=>'50', 'value' => set_value('contact_email', isset($Setting->contact_email) ? $Setting->contact_email : '')))?>
            </div>
            <div>
                <?php echo form_label('Support Email:', 'support_email')?>
                <?php echo form_input(array('name' => 'support_email', 'size'=>'50', 'value' => set_value('support_email', isset($Setting->support_email) ? $Setting->support_email : '')))?>
            </div>
    	</div>
    	<div class="clear"></div>
        <?php echo form_close(); ?>
	</div>
</div>
<?php js_start(); ?>
    <script type="text/javascript">
        $('document').ready(function(){

            var protocalVal = $('#protocol').val();
            if( protocalVal=='smtp' ){
                $('#smtp_setting').show()
            }else{
                $('#smtp_setting').hide()
            }

            $('#protocol').change(function(){
                if( $(this).val()=='smtp' ){
                    $('#smtp_setting').show()
                }else{
                    $('#smtp_setting').hide()
                }
            });
        });
    </script>
<?php js_end(); ?>