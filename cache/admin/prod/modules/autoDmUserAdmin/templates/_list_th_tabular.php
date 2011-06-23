
<?php ob_start(); ?>

<th class="sf_admin_text sf_admin_list_th_username">
  <?php $translatedLabel = __('Username'); ?>
  <?php if ('username' == $sort[0]): ?>
    <?php echo link_to($translatedLabel, '@dm_user', array('class' => 's16 s16_sort_'.$sort[1], 'query_string' => 'sort=username&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php else: ?>
    <?php echo link_to($translatedLabel, '@dm_user', array('class' => 's16 s16_right_little', 'query_string' => 'sort=username&sort_type=asc', 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php endif; ?>
</th>

<?php $currentHeader = ob_get_clean(); ?>

<?php print $currentHeader ?>
<?php ob_start(); ?>

<th class="sf_admin_text sf_admin_list_th_email">
  <?php $translatedLabel = __('Email'); ?>
  <?php if ('email' == $sort[0]): ?>
    <?php echo link_to($translatedLabel, '@dm_user', array('class' => 's16 s16_sort_'.$sort[1], 'query_string' => 'sort=email&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php else: ?>
    <?php echo link_to($translatedLabel, '@dm_user', array('class' => 's16 s16_right_little', 'query_string' => 'sort=email&sort_type=asc', 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php endif; ?>
</th>

<?php $currentHeader = ob_get_clean(); ?>

<?php print $currentHeader ?>
<?php ob_start(); ?>

<th class="sf_admin_boolean sf_admin_list_th_is_active">
  <?php $translatedLabel = __('Active'); ?>
  <?php if ('is_active' == $sort[0]): ?>
    <?php echo link_to($translatedLabel, '@dm_user', array('class' => 's16 s16_sort_'.$sort[1], 'query_string' => 'sort=is_active&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php else: ?>
    <?php echo link_to($translatedLabel, '@dm_user', array('class' => 's16 s16_right_little', 'query_string' => 'sort=is_active&sort_type=asc', 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php endif; ?>
</th>

<?php $currentHeader = ob_get_clean(); ?>

<?php print $currentHeader ?>
<?php ob_start(); ?>

<th class="sf_admin_boolean sf_admin_list_th_is_super_admin">
  <?php $translatedLabel = __('Super admin'); ?>
  <?php if ('is_super_admin' == $sort[0]): ?>
    <?php echo link_to($translatedLabel, '@dm_user', array('class' => 's16 s16_sort_'.$sort[1], 'query_string' => 'sort=is_super_admin&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php else: ?>
    <?php echo link_to($translatedLabel, '@dm_user', array('class' => 's16 s16_right_little', 'query_string' => 'sort=is_super_admin&sort_type=asc', 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php endif; ?>
</th>

<?php $currentHeader = ob_get_clean(); ?>

<?php print $currentHeader ?>
<?php ob_start(); ?>

<th class="sf_admin_date sf_admin_list_th_last_login">
  <?php $translatedLabel = __('Last login'); ?>
  <?php if ('last_login' == $sort[0]): ?>
    <?php echo link_to($translatedLabel, '@dm_user', array('class' => 's16 s16_sort_'.$sort[1], 'query_string' => 'sort=last_login&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php else: ?>
    <?php echo link_to($translatedLabel, '@dm_user', array('class' => 's16 s16_right_little', 'query_string' => 'sort=last_login&sort_type=asc', 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php endif; ?>
</th>

<?php $currentHeader = ob_get_clean(); ?>

<?php print $currentHeader ?>
<?php ob_start(); ?>

<th class="sf_admin_date sf_admin_list_th_created_at">
  <?php $translatedLabel = __('Created at'); ?>
  <?php if ('created_at' == $sort[0]): ?>
    <?php echo link_to($translatedLabel, '@dm_user', array('class' => 's16 s16_sort_'.$sort[1], 'query_string' => 'sort=created_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php else: ?>
    <?php echo link_to($translatedLabel, '@dm_user', array('class' => 's16 s16_right_little', 'query_string' => 'sort=created_at&sort_type=asc', 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php endif; ?>
</th>

<?php $currentHeader = ob_get_clean(); ?>

<?php print $currentHeader ?>
<?php ob_start(); ?>

<th class="sf_admin_date sf_admin_list_th_updated_at">
  <?php $translatedLabel = __('Updated at'); ?>
  <?php if ('updated_at' == $sort[0]): ?>
    <?php echo link_to($translatedLabel, '@dm_user', array('class' => 's16 s16_sort_'.$sort[1], 'query_string' => 'sort=updated_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php else: ?>
    <?php echo link_to($translatedLabel, '@dm_user', array('class' => 's16 s16_right_little', 'query_string' => 'sort=updated_at&sort_type=asc', 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php endif; ?>
</th>

<?php $currentHeader = ob_get_clean(); ?>

<?php print $currentHeader ?>