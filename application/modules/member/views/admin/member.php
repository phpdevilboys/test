<div class="box">
    <div class="heading">
        <h1><img alt="" src="<?php echo theme_url('assets/images/user.png'); ?>"> Members</h1>

        <div class="buttons">
            <?php /*
            <a class="button" href="<?php //echo site_url(ADMIN_PATH . "/users/edit"); ?>"><span>Add User</span></a>
            <a class="button delete" href="#"><span>Delete</span></a>
             */
            ?>
        </div>
    </div>
    <div class="content">
        <?php echo form_open(null, 'id="form"'); ?>
            <table class="list">
                <thead>
                    <tr>
                        <!--<th width="1" class="center"><input type="checkbox" onClick="$('input[name*=\'selected\']').attr('checked', this.checked);" /></th>-->
                        <th><a rel="first_name" class="sortable" href="#">First Name</a></th>
                        <th><a rel="last_name" class="sortable" href="#">Last Name</a></th>
                        <th><a rel="email" class="sortable" href="#">Email</a></th>
                        <th><a rel="last_login" class="sortable" href="#">Join Date</a></th>
                        <th><a class="sortable">Email Verified</a></th>
                        <th><a class="sortable">Status</a></th>
                        <th class="right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($members)): ?>
                        <?php foreach($members as $member): ?>
                            <tr>
                                <!--td class="center"><input type="checkbox" value="<?php //echo $member->getUserId() ?>" name="selected[]" /></td-->
                                <td><?php $first_name=$member->getFirstName(); echo empty($first_name)?'N/A':$member->getFirstName() ?></td>
                                <td><?php $last_name=$member->getFirstName(); echo empty($last_name)?'N/A':$member->getLastName() ?></td>
                                <td><?php echo $member->getEmailId() ?></td>
                                <td>
                                    <?php
                                        $date = $member->getCreatedDate()->format('m-d-Y');
                                        echo ($date===FALSE)?'N/A':$date;
                                    ?>
                                </td>
                                <td><?php echo ($member->getIsEmailVarified()===True)?'Yes':'No';?></td>
                                <td><span id="active_status_<?php echo $member->getUserId(); ?>"><?php echo ($member->getIsActive()===True)?'Active':'Inactive';?></span></td>
                                <td class="right">
                                    [ <?php 
                                        $active_action=($member->getIsActive()===True)?'Deactivate':'Activate';
                                        echo anchor(ADMIN_PATH . '/member/change_status/' . $member->getUserId(), $active_action, 'class="change_status" id="'.strtolower($active_action) .'-'. $member->getUserId().'"')
                                    ?> 
                                    ]
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="center">No results found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        <?php form_close(); ?>

        <div class="pagination">
            <div class="links"><?php echo $this->pagination->create_links(); ?></div>
            <div class="results">
                <?php /*Showing <?php echo (isset($current_row)) ? $current_row + 1 : 0; ?> to <?php echo $current_row + $per_page; ?> of <?php echo count($total_members); ?> ( <?php echo count($total_members); ?>   Pages)*/?>
            </div>
        </div>
    </div>
</div>

<div id="ajax_modal" style="display: none;">
    <img alt="Loading" src="<?php echo theme_url('assets/images/ajax_loader_circle.gif'); ?>" style="margin: 50px 0 0 63px;">
</div>

<?php js_start(); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.change_status').click(function(event){
            event.preventDefault();
            var link_id = $(this).attr('id');
            id = link_id.split('-');
            $.ajax({
                url: '<?php echo site_url(ADMIN_PATH . '/member/change-status/'); ?>',
                data: {
                    member_id:id[1],
                    action:id[0]
                },
                beforeSend: function(){
                    show_loader();
                },
                success: function(res){
                    if(res.status===true){
                        //window.location.reload();
                        //window.location.href = window.location.href;
                        var action = (id[0]=='activate')?'Deactivate':'Activate';
                        var status = (id[0]=='activate')?'Active':'Inactive';
                        $('#'+link_id).text(action);
                        $('#active_status_'+id[1]).text(status);
                        var new_id = action.toLowerCase()+'-'+id[1];
                        $('#'+link_id).attr('id', new_id);
                        hide_loader();
                    }
                }
            });
        });
    });
    function show_loader()
    {
        $('#ajax_modal').dialog({
            height: 200,
            modal: true,
            title: false,
            closeOnEscape: false,
            resizable: false,
            width: 200
        });
        $(".ui-dialog-titlebar").hide();
    }
    function hide_loader()
    {
        $( "#ajax_modal" ).dialog( "close" );
    }
</script>
<?php js_end(); ?>
    