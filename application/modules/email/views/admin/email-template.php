<div class="box">
    <div class="heading">
        <h1><img alt="" src="<?php echo theme_url('assets/images/mail.png'); ?>"> Email Template</h1>

        <div class="buttons">
            <a class="button" href="<?php echo site_url(ADMIN_PATH . "/email/add-email-template"); ?>"><span>Add Email Template</span></a>
            <a class="button delete" href="#"><span>Delete</span></a>
        </div>
    </div>
    <div class="content">
        <?php echo form_open(null, 'id="form"'); ?>
        <table class="list">
            <thead>
                <tr>
                    <th width="1" class="center"><input type="checkbox" onClick="$('input[name*=\'selected\']').attr('checked', this.checked);" /></th>
                    <th class="sortable">Title</th>
                    <th class="sortable">Module</th>
                    <th class="right">Default</th>
                    <th class="right">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($email->exists()): ?>
                    <?php foreach($email as $single_email):?>
                    <tr>
                        <td class="center"><input type="checkbox" value="<?php echo $single_email->id ?>" name="selected[]" /></td>
                        <td><?php echo $single_email->title; ?></td>
                        <td><?php echo $single_email->module; ?></td>
                        <td class="right"><?php echo ($single_email->is_default=='1')?'Yes':'No'; ?></td>
                        <td class="right">[ <a href="<?php echo site_url(ADMIN_PATH . '/email/edit/' . $single_email->id) ?>">Edit</a> ]</td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td class="center" colspan="5">No Email Template have been added.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <?php echo form_close(); ?>

    </div>
</div>

<?php js_start(); ?>
<script type="text/javascript">
    $(document).ready(function() {

        $('.delete').click(function() {
            if (confirm('Delete cannot be undone! Are you sure you want to do this?'))
            {
                $('#form').attr('action', '<?php echo site_url(ADMIN_PATH . '/email/delete'); ?>').submit()
            }
            else
            {
                return false;
            }
        });

    });
</script>
<?php js_end(); ?>
