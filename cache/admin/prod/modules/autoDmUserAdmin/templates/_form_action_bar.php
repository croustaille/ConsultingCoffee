<?php //PAGINATION ?>

<?php include_partial('dmUserAdmin/form_actions', array('form' => $form, 'helper' => $helper, 'dm_user' => $dm_user)) ?>

<?php include_partial('dmUserAdmin/form_pagination', array('helper' => $helper, 'dm_user' => $dm_user, 'nearRecords' => $nearRecords)) ?>