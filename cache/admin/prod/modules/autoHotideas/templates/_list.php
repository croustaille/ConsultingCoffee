<div class="sf_admin_list">
  <?php if (!$pager->getNbResults()): ?>
    <h2><?php echo __('No result') ?></h2>
  <?php else: ?>
    <table>
      <thead>
        <tr>
          <th><input class="sf_admin_list_batch_checkbox" type="checkbox" /></th>
          <?php include_partial('hotideas/list_th_tabular', array('sort' => $sort)) ?>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th><input class="sf_admin_list_batch_checkbox" type="checkbox" /></th>
          <?php include_partial('hotideas/list_th_tabular', array('sort' => $sort)) ?>
        </tr>
      </tfoot>
      <tbody class='{toggle_url: "<?php echo £link('@'.$helper->getUrlForAction('toggleBoolean'))->getHref() ?>"}'>
        <?php foreach ($pager->getResults() as $i => $hotideas): $odd = fmod(++$i, 2) ? 'odd' : 'even' ?>
          <tr class="sf_admin_row <?php echo $odd ?> {pk: <?php echo $hotideas->getPrimaryKey() ?>}">
            <td>
              <input type="checkbox" name="ids[]" value="<?php echo $hotideas->getPrimaryKey() ?>" class="sf_admin_batch_checkbox" />
            </td>
            <?php include_partial('hotideas/list_td_tabular', array('hotideas' => $hotideas)) ?>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php endif; ?>
</div>