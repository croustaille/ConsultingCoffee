<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="sf_admin_form">

  <div class="dm_active_locks"></div>

  <?php $formActions = get_partial('dmUserAdmin/form_action_bar'.(sfConfig::get('dm_admin_embedded') ? '_embedded' : ''), array('dm_user' => $dm_user, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper, 'nearRecords' => $nearRecords)); ?>

  <?php echo $form->renderFormTag(url_for(
    $form->getObject()->isNew()
    ? $helper->getRouteArrayForAction('create')
    : $helper->getRouteArrayForAction('update', $form->getObject())
  )); ?>

  <div class="dm_form_action_bar dm_form_action_bar_top clearfix">
    <?php echo $formActions; ?>
  </div>

    <div class="sf_admin_form_inner ui-widget ui-accordion">

    <?php echo $form->renderHiddenFields(false) ?>

    <?php if ($form->hasGlobalErrors()): ?>
      <?php echo $form->renderGlobalErrors() ?>
    <?php endif; ?>

    <?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?>
      <?php include_partial('dmUserAdmin/form_fieldset', array('dm_user' => $dm_user, 'form' => $form, 'fields' => $fields, 'fieldset' => $fieldset)) ?>
    <?php endforeach; ?>

    </div>

  <div class="dm_form_action_bar dm_form_action_bar_bottom clearfix">
    <?php echo $formActions; ?>
  </div>

  </form>

  <div class="dm_active_locks"></div>

</div>