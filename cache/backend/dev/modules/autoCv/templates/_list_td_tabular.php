<td class="sf_admin_text sf_admin_list_td_id_cv">
  <?php echo link_to($cv->getIdCv(), 'cv_edit', $cv) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_iduser">
  <?php echo $cv->getIduser() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_titrecv">
  <?php echo $cv->getTitrecv() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_descriptioncv">
  <?php echo $cv->getDescriptioncv() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_datedisponibilitecv">
  <?php echo false !== strtotime($cv->getDatedisponibilitecv()) ? format_date($cv->getDatedisponibilitecv(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_tarifcv">
  <?php echo $cv->getTarifcv() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_estvisiblecv">
  <?php echo $cv->getEstvisiblecv() ?>
</td>
