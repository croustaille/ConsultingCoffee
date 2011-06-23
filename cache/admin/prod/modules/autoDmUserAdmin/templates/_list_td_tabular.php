<td class="sf_admin_text sf_admin_list_td_username">
  <?php echo _link('@dm_user?action=edit&pk='.$dm_user->getPrimaryKey())->text(htmlentities(dmString::truncate($dm_user->get('username'), 120), ENT_COMPAT, 'UTF-8'))->addClass('link_edit') ?>
</td>
<td class="sf_admin_text sf_admin_list_td_email">
  <?php echo htmlentities(dmString::truncate($dm_user->get('email'), 120), ENT_COMPAT, 'UTF-8') ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_is_active">
  <?php echo sprintf('<a class="s16block s16_%s {field: \'%s\'}" title="%s"></a>', $dm_user->get('is_active') ? 'tick' : 'cross', 'is_active', __('Click to edit')) ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_is_super_admin">
  <?php echo sprintf('<a class="s16block s16_%s {field: \'%s\'}" title="%s"></a>', $dm_user->get('is_super_admin') ? 'tick' : 'cross', 'is_super_admin', __('Click to edit')) ?>
</td>
<td class="sf_admin_date sf_admin_list_td_last_login">
  <?php echo false !== strtotime($dm_user->get('last_login')) ? format_date($dm_user->get('last_login'), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($dm_user->get('created_at')) ? format_date($dm_user->get('created_at'), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($dm_user->get('updated_at')) ? format_date($dm_user->get('updated_at'), "f") : '&nbsp;' ?>
</td>
