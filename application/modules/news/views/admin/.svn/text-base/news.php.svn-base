<div class="box">
    <div class="heading">
        <h1><img alt="" src="<?php echo theme_url('assets/images/news.png'); ?>"> News</h1>

        <div class="buttons">
            <a class="button" href="<?php echo site_url(ADMIN_PATH . "/news/add-news"); ?>"><span>Add News</span></a>
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
                    <th class="right">#ID</th>
                    <th class="right">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($news->exists()): ?>
                    <?php foreach($news as $single_news):?>
                    <tr>
                        <td class="center"><input type="checkbox" value="<?php echo $single_news->id ?>" name="selected[]" /></td>
                        <td><?php echo $single_news->title; ?></td>
                        <td class="right"><?php echo $single_news->id; ?></td>
                        <td class="right">[ <a href="<?php echo site_url(ADMIN_PATH . '/news/edit/' . $single_news->id) ?>">Edit</a> ]</td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td class="center" colspan="4">No News have been added.</td>
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
                $('#form').attr('action', '<?php echo site_url(ADMIN_PATH . '/news/delete'); ?>').submit()
            }
            else
            {
                return false;
            }
        });

    });
</script>
<?php js_end(); ?>