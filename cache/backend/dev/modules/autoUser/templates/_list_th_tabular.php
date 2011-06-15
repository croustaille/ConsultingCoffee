<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_iduser">
  <?php if ('iduser' == $sort[0]): ?>
    <?php echo link_to(__('Iduser', array(), 'messages'), '@user', array('query_string' => 'sort=iduser&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Iduser', array(), 'messages'), '@user', array('query_string' => 'sort=iduser&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_foreignkey sf_admin_list_th_idusertype">
  <?php if ('idusertype' == $sort[0]): ?>
    <?php echo link_to(__('Idusertype', array(), 'messages'), '@user', array('query_string' => 'sort=idusertype&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Idusertype', array(), 'messages'), '@user', array('query_string' => 'sort=idusertype&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_titreuser">
  <?php if ('titreuser' == $sort[0]): ?>
    <?php echo link_to(__('Titreuser', array(), 'messages'), '@user', array('query_string' => 'sort=titreuser&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Titreuser', array(), 'messages'), '@user', array('query_string' => 'sort=titreuser&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_nameuser">
  <?php if ('nameuser' == $sort[0]): ?>
    <?php echo link_to(__('Nameuser', array(), 'messages'), '@user', array('query_string' => 'sort=nameuser&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Nameuser', array(), 'messages'), '@user', array('query_string' => 'sort=nameuser&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_surnameuser">
  <?php if ('surnameuser' == $sort[0]): ?>
    <?php echo link_to(__('Surnameuser', array(), 'messages'), '@user', array('query_string' => 'sort=surnameuser&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Surnameuser', array(), 'messages'), '@user', array('query_string' => 'sort=surnameuser&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_adressuser">
  <?php if ('adressuser' == $sort[0]): ?>
    <?php echo link_to(__('Adressuser', array(), 'messages'), '@user', array('query_string' => 'sort=adressuser&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Adressuser', array(), 'messages'), '@user', array('query_string' => 'sort=adressuser&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_countryuser">
  <?php if ('countryuser' == $sort[0]): ?>
    <?php echo link_to(__('Countryuser', array(), 'messages'), '@user', array('query_string' => 'sort=countryuser&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Countryuser', array(), 'messages'), '@user', array('query_string' => 'sort=countryuser&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_raisonsocialuser">
  <?php if ('raisonsocialuser' == $sort[0]): ?>
    <?php echo link_to(__('Raisonsocialuser', array(), 'messages'), '@user', array('query_string' => 'sort=raisonsocialuser&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Raisonsocialuser', array(), 'messages'), '@user', array('query_string' => 'sort=raisonsocialuser&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_phonenumberuser">
  <?php if ('phonenumberuser' == $sort[0]): ?>
    <?php echo link_to(__('Phonenumberuser', array(), 'messages'), '@user', array('query_string' => 'sort=phonenumberuser&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Phonenumberuser', array(), 'messages'), '@user', array('query_string' => 'sort=phonenumberuser&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_mailuser">
  <?php if ('mailuser' == $sort[0]): ?>
    <?php echo link_to(__('Mailuser', array(), 'messages'), '@user', array('query_string' => 'sort=mailuser&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Mailuser', array(), 'messages'), '@user', array('query_string' => 'sort=mailuser&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_pwduser">
  <?php if ('pwduser' == $sort[0]): ?>
    <?php echo link_to(__('Pwduser', array(), 'messages'), '@user', array('query_string' => 'sort=pwduser&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Pwduser', array(), 'messages'), '@user', array('query_string' => 'sort=pwduser&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_isactivateuser">
  <?php if ('isactivateuser' == $sort[0]): ?>
    <?php echo link_to(__('Isactivateuser', array(), 'messages'), '@user', array('query_string' => 'sort=isactivateuser&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Isactivateuser', array(), 'messages'), '@user', array('query_string' => 'sort=isactivateuser&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_lastconnexionuser">
  <?php if ('lastconnexionuser' == $sort[0]): ?>
    <?php echo link_to(__('Lastconnexionuser', array(), 'messages'), '@user', array('query_string' => 'sort=lastconnexionuser&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Lastconnexionuser', array(), 'messages'), '@user', array('query_string' => 'sort=lastconnexionuser&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_zipcodeuser">
  <?php if ('zipcodeuser' == $sort[0]): ?>
    <?php echo link_to(__('Zipcodeuser', array(), 'messages'), '@user', array('query_string' => 'sort=zipcodeuser&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Zipcodeuser', array(), 'messages'), '@user', array('query_string' => 'sort=zipcodeuser&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_jobdescriptionuser">
  <?php if ('jobdescriptionuser' == $sort[0]): ?>
    <?php echo link_to(__('Jobdescriptionuser', array(), 'messages'), '@user', array('query_string' => 'sort=jobdescriptionuser&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Jobdescriptionuser', array(), 'messages'), '@user', array('query_string' => 'sort=jobdescriptionuser&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_corporationsize">
  <?php if ('corporationsize' == $sort[0]): ?>
    <?php echo link_to(__('Corporationsize', array(), 'messages'), '@user', array('query_string' => 'sort=corporationsize&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Corporationsize', array(), 'messages'), '@user', array('query_string' => 'sort=corporationsize&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_isacceptemailnews">
  <?php if ('isacceptemailnews' == $sort[0]): ?>
    <?php echo link_to(__('Isacceptemailnews', array(), 'messages'), '@user', array('query_string' => 'sort=isacceptemailnews&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Isacceptemailnews', array(), 'messages'), '@user', array('query_string' => 'sort=isacceptemailnews&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_apayersacotisationpourpublication">
  <?php if ('apayersacotisationpourpublication' == $sort[0]): ?>
    <?php echo link_to(__('Apayersacotisationpourpublication', array(), 'messages'), '@user', array('query_string' => 'sort=apayersacotisationpourpublication&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Apayersacotisationpourpublication', array(), 'messages'), '@user', array('query_string' => 'sort=apayersacotisationpourpublication&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_datevalidationpayement">
  <?php if ('datevalidationpayement' == $sort[0]): ?>
    <?php echo link_to(__('Datevalidationpayement', array(), 'messages'), '@user', array('query_string' => 'sort=datevalidationpayement&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Datevalidationpayement', array(), 'messages'), '@user', array('query_string' => 'sort=datevalidationpayement&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_datefinvalidation">
  <?php if ('datefinvalidation' == $sort[0]): ?>
    <?php echo link_to(__('Datefinvalidation', array(), 'messages'), '@user', array('query_string' => 'sort=datefinvalidation&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Datefinvalidation', array(), 'messages'), '@user', array('query_string' => 'sort=datefinvalidation&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_isconsultant">
  <?php if ('isconsultant' == $sort[0]): ?>
    <?php echo link_to(__('Isconsultant', array(), 'messages'), '@user', array('query_string' => 'sort=isconsultant&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Isconsultant', array(), 'messages'), '@user', array('query_string' => 'sort=isconsultant&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_isrecruteur">
  <?php if ('isrecruteur' == $sort[0]): ?>
    <?php echo link_to(__('Isrecruteur', array(), 'messages'), '@user', array('query_string' => 'sort=isrecruteur&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Isrecruteur', array(), 'messages'), '@user', array('query_string' => 'sort=isrecruteur&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_issupplier">
  <?php if ('issupplier' == $sort[0]): ?>
    <?php echo link_to(__('Issupplier', array(), 'messages'), '@user', array('query_string' => 'sort=issupplier&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Issupplier', array(), 'messages'), '@user', array('query_string' => 'sort=issupplier&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>