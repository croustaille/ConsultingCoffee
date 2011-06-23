<div class="dm_module_search">
  <?php
    $currentSearch = $sf_user->getAppliedSearchOnModule('dmUserAdmin');
    printf('<form action="%s" method="get">', url_for1(array('sf_route' => 'dm_user')));
    printf('<input id="dm_module_search_input" class="ui-corner-left" type="text" title="%s" value="%s" name="search"/>',
      __('Search in %1%', array('%1%' => __("Users"))),
      $currentSearch
    );
    printf('<input type="submit" class="dm_submit ui-corner-right" value="%s" />', __('Search'));
    if ($currentSearch)
    {
      printf('<a href="%s" class="s16block s16_cross dm_cancel_search" title="%s">&nbsp;</a>', url_for1(array('sf_route' => 'dm_user')).'?search=', __('Cancel search'));
    }
  ?>
  </form>
  
</div>