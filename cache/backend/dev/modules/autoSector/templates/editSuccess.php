<?php use_helper('I18N', 'Date') ?>
<?php include_partial('sector/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Sector', array(), 'messages') ?></h1>

  <?php include_partial('sector/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('sector/form_header', array('sector' => $sector, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('sector/form', array('sector' => $sector, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('sector/form_footer', array('sector' => $sector, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
