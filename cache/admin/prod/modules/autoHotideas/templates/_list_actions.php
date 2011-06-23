<?php if ($configuration->getSortable()): ?>
<div class="sf_admin_action sf_admin_action_sort">
  <?php echo link_to(__('Sort', array(), 'dm'), 'hotideas/sortTable', array(  'class' => 'dm_sort s16 s16_sort',)) ?></div>
<?php endif; ?>

  <div class="sf_admin_action sf_admin_action_new">
<?php echo $helper->linkToNew(array(  'label' => 'Add',  'title' => 'Add a %1%',  'params' =>   array(  ),  'class_suffix' => 'new',)) ?>  </div>
