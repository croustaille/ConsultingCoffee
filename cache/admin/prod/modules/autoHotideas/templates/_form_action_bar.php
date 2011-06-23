<?php //PAGINATION ?>

<?php include_partial('hotideas/form_actions', array('form' => $form, 'helper' => $helper, 'hotideas' => $hotideas)) ?>

<?php include_partial('hotideas/form_pagination', array('helper' => $helper, 'hotideas' => $hotideas, 'nearRecords' => $nearRecords)) ?>