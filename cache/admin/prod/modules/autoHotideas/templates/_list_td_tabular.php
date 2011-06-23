<td class="sf_admin_text sf_admin_list_td_title">
  <?php echo _link('@hotideas?action=edit&pk='.$hotideas->getPrimaryKey())->text(htmlentities(dmString::truncate($hotideas->get('title'), 120), ENT_COMPAT, 'UTF-8'))->addClass('link_edit') ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_categoryidea">
  <?php echo $hotideas->get('categoryidea') ? ($sf_user->canAccessToModule('categoryidea')
? _link($hotideas->get('Categoryidea'))
->text($hotideas->get('Categoryidea')->__toString())
->set('.associated_record.s16right.s16_arrow_up_right_medium')
: $hotideas->get('Categoryidea')) : '-' ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_image">
  <?php echo $hotideas->get('image') ? get_partial('dmMedia/viewLittle', array('object' => $hotideas->get('Image'))) : '-' ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_author">
  <?php echo $hotideas->get('author') ? ($sf_user->canAccessToModule('dmUser')
? _link($hotideas->get('Author'))
->text($hotideas->get('Author')->__toString())
->set('.associated_record.s16right.s16_arrow_up_right_medium')
: $hotideas->get('Author')) : '-' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_price">
  <?php echo htmlentities(dmString::truncate($hotideas->get('price'), 120), ENT_COMPAT, 'UTF-8') ?>
</td>
<td class="sf_admin_text sf_admin_list_td_extract">
  <?php echo htmlentities(dmString::truncate($hotideas->get('extract'), 120), ENT_COMPAT, 'UTF-8') ?>
</td>
<td class="sf_admin_text sf_admin_list_td_body">
  <?php echo str_replace(array('*', '#'), '', htmlentities(dmString::truncate($hotideas->get('body'), 120), ENT_COMPAT, 'UTF-8')) ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_is_active">
  <?php echo sprintf('<a class="s16block s16_%s {field: \'%s\'}" title="%s"></a>', $hotideas->get('is_active') ? 'tick' : 'cross', 'is_active', __('Click to edit')) ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($hotideas->get('created_at')) ? format_date($hotideas->get('created_at'), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($hotideas->get('updated_at')) ? format_date($hotideas->get('updated_at'), "f") : '&nbsp;' ?>
</td>
