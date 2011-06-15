<?php use_helper('I18N', 'Date') ?>
<?php include_partial('country/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Country', array(), 'messages') ?></h1>

  <?php include_partial('country/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('country/form_header', array('country' => $country, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('country/form', array('country' => $country, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('country/form_footer', array('country' => $country, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
