<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_id_city">
  <?php if ('id_city' == $sort[0]): ?>
    <?php echo link_to(__('Id city', array(), 'messages'), '@city', array('query_string' => 'sort=id_city&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Id city', array(), 'messages'), '@city', array('query_string' => 'sort=id_city&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_foreignkey sf_admin_list_th_idcountry">
  <?php if ('idcountry' == $sort[0]): ?>
    <?php echo link_to(__('Idcountry', array(), 'messages'), '@city', array('query_string' => 'sort=idcountry&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Idcountry', array(), 'messages'), '@city', array('query_string' => 'sort=idcountry&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_cityname">
  <?php if ('cityname' == $sort[0]): ?>
    <?php echo link_to(__('Cityname', array(), 'messages'), '@city', array('query_string' => 'sort=cityname&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Cityname', array(), 'messages'), '@city', array('query_string' => 'sort=cityname&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>