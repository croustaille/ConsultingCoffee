<ul>
<?php
echo $helper->linkToSave($form->getObject(), array(  'label' => 'Save',  'params' =>   array(  ),  'class_suffix' => 'save',));
?>
<li class="ml10"><input type="submit" value="<?php echo __('Close') ?>" onclick="parent.document.getElementById('cboxClose').setAttribute('rel', 'dm_close');return false;" /></li>
</ul>