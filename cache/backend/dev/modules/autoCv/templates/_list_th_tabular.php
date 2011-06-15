<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_id_cv">
  <?php if ('id_cv' == $sort[0]): ?>
    <?php echo link_to(__('Id cv', array(), 'messages'), '@cv', array('query_string' => 'sort=id_cv&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Id cv', array(), 'messages'), '@cv', array('query_string' => 'sort=id_cv&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_foreignkey sf_admin_list_th_iduser">
  <?php if ('iduser' == $sort[0]): ?>
    <?php echo link_to(__('Iduser', array(), 'messages'), '@cv', array('query_string' => 'sort=iduser&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Iduser', array(), 'messages'), '@cv', array('query_string' => 'sort=iduser&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_titrecv">
  <?php if ('titrecv' == $sort[0]): ?>
    <?php echo link_to(__('Titrecv', array(), 'messages'), '@cv', array('query_string' => 'sort=titrecv&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Titrecv', array(), 'messages'), '@cv', array('query_string' => 'sort=titrecv&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_descriptioncv">
  <?php if ('descriptioncv' == $sort[0]): ?>
    <?php echo link_to(__('Descriptioncv', array(), 'messages'), '@cv', array('query_string' => 'sort=descriptioncv&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Descriptioncv', array(), 'messages'), '@cv', array('query_string' => 'sort=descriptioncv&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_datedisponibilitecv">
  <?php if ('datedisponibilitecv' == $sort[0]): ?>
    <?php echo link_to(__('Datedisponibilitecv', array(), 'messages'), '@cv', array('query_string' => 'sort=datedisponibilitecv&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Datedisponibilitecv', array(), 'messages'), '@cv', array('query_string' => 'sort=datedisponibilitecv&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_tarifcv">
  <?php if ('tarifcv' == $sort[0]): ?>
    <?php echo link_to(__('Tarifcv', array(), 'messages'), '@cv', array('query_string' => 'sort=tarifcv&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Tarifcv', array(), 'messages'), '@cv', array('query_string' => 'sort=tarifcv&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_estvisiblecv">
  <?php if ('estvisiblecv' == $sort[0]): ?>
    <?php echo link_to(__('Estvisiblecv', array(), 'messages'), '@cv', array('query_string' => 'sort=estvisiblecv&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Estvisiblecv', array(), 'messages'), '@cv', array('query_string' => 'sort=estvisiblecv&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>