<ul class="sf_admin_actions clearfix">
<?php if ($form->isNew()): ?>
  <?php echo $helper->linkToList(array(  'label' => 'Back to list',  'params' =>   array(  ),  'class_suffix' => 'list',)) ?>
  <?php echo $helper->linkToSave($form->getObject(), array(  'label' => 'Save',  'params' =>   array(  ),  'class_suffix' => 'save',)) ?>
  <?php echo $helper->linkToSaveAndAdd($form->getObject(), array(  'label' => 'Save and Add',  'params' =>   array(  ),  'class_suffix' => 'save_and_add',)) ?>
  <?php echo $helper->linkToSaveAndList($form->getObject(), array(  'label' => 'Save and Back to list',  'params' =>   array(  ),  'class_suffix' => 'save_and_list',)) ?>
  <?php echo $helper->linkToSaveAndNext($form->getObject(), array(  'label' => 'Save and Next',  'params' =>   array(  ),  'class_suffix' => 'save_and_next',)) ?>
  <?php if(!$form->getObject()->isNew()): echo $helper->linkToDelete($form->getObject(), array(  'label' => 'Delete',  'title' => 'Delete this %1%',  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',)); endif; ?>
  <?php if(!$form->getObject()->isNew()): echo $helper->linkToAdd(array(  'label' => 'Add',  'title' => 'Add a %1%',  'params' =>   array(  ),  'class_suffix' => 'add',)); endif; ?>
  <?php if(!$form->getObject()->isNew()): echo $helper->linkToViewPage($form->getObject(), array(  'label' => 'Show',  'title' => 'View page on website',  'params' =>   array(  ),  'class_suffix' => 'view_page',)); endif; ?>
  <?php if(!$form->getObject()->isNew()): echo $helper->linkToHistory($form->getObject(), array(  'label' => 'History',  'title' => 'Revision history of %1%',  'params' =>   array(  ),  'class_suffix' => 'history',)); endif; ?>
<?php else: ?>
  <?php echo $helper->linkToList(array(  'label' => 'Back to list',  'params' =>   array(  ),  'class_suffix' => 'list',)) ?>
  <?php echo $helper->linkToSave($form->getObject(), array(  'label' => 'Save',  'params' =>   array(  ),  'class_suffix' => 'save',)) ?>
  <?php echo $helper->linkToSaveAndAdd($form->getObject(), array(  'label' => 'Save and Add',  'params' =>   array(  ),  'class_suffix' => 'save_and_add',)) ?>
  <?php echo $helper->linkToSaveAndList($form->getObject(), array(  'label' => 'Save and Back to list',  'params' =>   array(  ),  'class_suffix' => 'save_and_list',)) ?>
  <?php echo $helper->linkToSaveAndNext($form->getObject(), array(  'label' => 'Save and Next',  'params' =>   array(  ),  'class_suffix' => 'save_and_next',)) ?>
  <?php if(!$form->getObject()->isNew()): echo $helper->linkToDelete($form->getObject(), array(  'label' => 'Delete',  'title' => 'Delete this %1%',  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',)); endif; ?>
  <?php if(!$form->getObject()->isNew()): echo $helper->linkToAdd(array(  'label' => 'Add',  'title' => 'Add a %1%',  'params' =>   array(  ),  'class_suffix' => 'add',)); endif; ?>
  <?php if(!$form->getObject()->isNew()): echo $helper->linkToViewPage($form->getObject(), array(  'label' => 'Show',  'title' => 'View page on website',  'params' =>   array(  ),  'class_suffix' => 'view_page',)); endif; ?>
  <?php if(!$form->getObject()->isNew()): echo $helper->linkToHistory($form->getObject(), array(  'label' => 'History',  'title' => 'Revision history of %1%',  'params' =>   array(  ),  'class_suffix' => 'history',)); endif; ?>
<?php endif; ?>
</ul>
