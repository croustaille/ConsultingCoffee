<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_id_sector">
  <?php if ('id_sector' == $sort[0]): ?>
    <?php echo link_to(__('Id sector', array(), 'messages'), '@sector', array('query_string' => 'sort=id_sector&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Id sector', array(), 'messages'), '@sector', array('query_string' => 'sort=id_sector&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_sectorname">
  <?php if ('sectorname' == $sort[0]): ?>
    <?php echo link_to(__('Sectorname', array(), 'messages'), '@sector', array('query_string' => 'sort=sectorname&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Sectorname', array(), 'messages'), '@sector', array('query_string' => 'sort=sectorname&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_totalsuppliersector">
  <?php if ('totalsuppliersector' == $sort[0]): ?>
    <?php echo link_to(__('Totalsuppliersector', array(), 'messages'), '@sector', array('query_string' => 'sort=totalsuppliersector&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Totalsuppliersector', array(), 'messages'), '@sector', array('query_string' => 'sort=totalsuppliersector&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>