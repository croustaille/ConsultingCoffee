<?php
  use_helper('Date');
  use_stylesheet('admin.form');
  use_javascript('admin.form');

  slot('dm.mini_search_form');
  include_partial('dmUserAdmin/search');
  end_slot();
?>

<div id="sf_admin_container">

  <div id="sf_admin_header">
    <?php include_partial('dmUserAdmin/form_header', array('dm_user' => $dm_user, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('dmUserAdmin/form', array('dm_user' => $dm_user, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper, 'nearRecords' => $nearRecords)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('dmUserAdmin/form_footer', array('dm_user' => $dm_user, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
