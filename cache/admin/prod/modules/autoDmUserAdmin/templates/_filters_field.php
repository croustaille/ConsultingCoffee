<?php if ($field->isPartial()): ?>
  <?php include_partial('dmUserAdmin/'.$name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?>
<?php elseif ($field->isComponent()): ?>
  <?php include_component('dmUserAdmin', $name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?>
<?php else: ?>
  <div class="<?php echo $class ?> clearfix">
    <div class="label">
      <?php echo $form[$name]->renderLabel($label) ?>
    </div>
    <div class="field">
      <?php echo $form[$name]->renderError() ?>

      <?php echo $form[$name]->render($attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes) ?>

      <?php if ($help || $help = $form[$name]->renderHelp()): ?>
        <div class="help"><?php echo __($help) ?></div>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>