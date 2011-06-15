<td colspan="3">
  <?php echo __('%%id_city%% - %%idcountry%% - %%cityname%%', array('%%id_city%%' => link_to($city->getIdCity(), 'city_edit', $city), '%%idcountry%%' => $city->getIdcountry(), '%%cityname%%' => $city->getCityname()), 'messages') ?>
</td>
