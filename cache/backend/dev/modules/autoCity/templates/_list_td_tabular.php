<td class="sf_admin_text sf_admin_list_td_id_city">
  <?php echo link_to($city->getIdCity(), 'city_edit', $city) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_idcountry">
  <?php echo $city->getIdcountry() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_cityname">
  <?php echo $city->getCityname() ?>
</td>
