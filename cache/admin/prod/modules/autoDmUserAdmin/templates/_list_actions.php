<?php if ($configuration->getSortable()): ?>
<div class="sf_admin_action sf_admin_action_sort">
  </div>
<?php endif; ?>

  <div class="sf_admin_action sf_admin_action_new">
<?php echo $helper->linkToNew(array(  'label' => 'Add',  'title' => 'Add a %1%',  'params' =>   array(  ),  'class_suffix' => 'new',)) ?>  </div>
