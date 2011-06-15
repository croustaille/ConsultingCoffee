<?php use_helper('I18N', 'Date') ?>
<?php include_partial('Cv/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Cv', array(), 'messages') ?></h1>

  <?php include_partial('Cv/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('Cv/form_header', array('cv' => $cv, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('Cv/form', array('cv' => $cv, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('Cv/form_footer', array('cv' => $cv, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
