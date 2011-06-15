<td colspan="2">
  <?php echo __('%%idcountry%% - %%namecountry%%', array('%%idcountry%%' => link_to($country->getIdcountry(), 'country_edit', $country), '%%namecountry%%' => $country->getNamecountry()), 'messages') ?>
</td>
