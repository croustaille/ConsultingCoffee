<td colspan="3">
  <?php echo __('%%id_sector%% - %%sectorname%% - %%totalsuppliersector%%', array('%%id_sector%%' => link_to($sector->getIdSector(), 'sector_edit', $sector), '%%sectorname%%' => $sector->getSectorname(), '%%totalsuppliersector%%' => $sector->getTotalsuppliersector()), 'messages') ?>
</td>
