<?php
$module = mw()->module_manager->get('one=1&ui=any&module=' . $v_mod);
?>

<div class="main-toolbar" id="mw-modules-toolbar">
    <?php if (has_access()): ?>
        <a href="<?php print admin_url(); ?>view:modules" class="btn btn-link text-silver"><i class="mdi mdi-chevron-left"></i> Modules</a>
        <?php $active = mw()->url_manager->param('view'); ?>
    <?php endif; ?>
</div>

