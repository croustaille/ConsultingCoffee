<?php
  use_helper('Date');
  use_stylesheet('admin.form');
  use_javascript('admin.form');

  slot('dm.mini_search_form');
  include_partial('hotideas/search');
  end_slot();
?>

<div id="sf_admin_container">

  <div id="sf_admin_header">
    <?php include_partial('hotideas/form_header', array('hotideas' => $hotideas, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('hotideas/form', array('hotideas' => $hotideas, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper, 'nearRecords' => $nearRecords)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('hotideas/form_footer', array('hotideas' => $hotideas, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
