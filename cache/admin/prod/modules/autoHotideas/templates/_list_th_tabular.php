
<?php ob_start(); ?>

<th class="sf_admin_text sf_admin_list_th_title">
  <?php $translatedLabel = __('Title'); ?>
  <?php if ('title' == $sort[0]): ?>
    <?php echo link_to($translatedLabel, '@hotideas', array('class' => 's16 s16_sort_'.$sort[1], 'query_string' => 'sort=title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php else: ?>
    <?php echo link_to($translatedLabel, '@hotideas', array('class' => 's16 s16_right_little', 'query_string' => 'sort=title&sort_type=asc', 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php endif; ?>
</th>

<?php $currentHeader = ob_get_clean(); ?>

<?php print $currentHeader ?>
<?php ob_start(); ?>

<th class="sf_admin_foreignkey sf_admin_list_th_categoryidea">
  <?php $translatedLabel = __('Categoryidea'); ?>
  <?php if ('categoryidea' == $sort[0]): ?>
    <?php echo link_to($translatedLabel, '@hotideas', array('class' => 's16 s16_sort_'.$sort[1], 'query_string' => 'sort=categoryidea&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php else: ?>
    <?php echo link_to($translatedLabel, '@hotideas', array('class' => 's16 s16_right_little', 'query_string' => 'sort=categoryidea&sort_type=asc', 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php endif; ?>
</th>

<?php $currentHeader = ob_get_clean(); ?>

<?php print $currentHeader ?>
<?php ob_start(); ?>

<th class="sf_admin_foreignkey sf_admin_list_th_image">
  <?php $translatedLabel = __('Image'); ?>
  <?php if ('image' == $sort[0]): ?>
    <?php echo link_to($translatedLabel, '@hotideas', array('class' => 's16 s16_sort_'.$sort[1], 'query_string' => 'sort=image&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php else: ?>
    <?php echo link_to($translatedLabel, '@hotideas', array('class' => 's16 s16_right_little', 'query_string' => 'sort=image&sort_type=asc', 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php endif; ?>
</th>

<?php $currentHeader = ob_get_clean(); ?>

<?php print $currentHeader ?>
<?php ob_start(); ?>

<th class="sf_admin_foreignkey sf_admin_list_th_author">
  <?php $translatedLabel = __('Author'); ?>
  <?php if ('author' == $sort[0]): ?>
    <?php echo link_to($translatedLabel, '@hotideas', array('class' => 's16 s16_sort_'.$sort[1], 'query_string' => 'sort=author&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php else: ?>
    <?php echo link_to($translatedLabel, '@hotideas', array('class' => 's16 s16_right_little', 'query_string' => 'sort=author&sort_type=asc', 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php endif; ?>
</th>

<?php $currentHeader = ob_get_clean(); ?>

<?php print $currentHeader ?>
<?php ob_start(); ?>

<th class="sf_admin_text sf_admin_list_th_price">
  <?php $translatedLabel = __('Price'); ?>
  <?php if ('price' == $sort[0]): ?>
    <?php echo link_to($translatedLabel, '@hotideas', array('class' => 's16 s16_sort_'.$sort[1], 'query_string' => 'sort=price&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php else: ?>
    <?php echo link_to($translatedLabel, '@hotideas', array('class' => 's16 s16_right_little', 'query_string' => 'sort=price&sort_type=asc', 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php endif; ?>
</th>

<?php $currentHeader = ob_get_clean(); ?>

<?php print $currentHeader ?>
<?php ob_start(); ?>

<th class="sf_admin_text sf_admin_list_th_extract">
  <?php $translatedLabel = __('Extract'); ?>
  <?php if ('extract' == $sort[0]): ?>
    <?php echo link_to($translatedLabel, '@hotideas', array('class' => 's16 s16_sort_'.$sort[1], 'query_string' => 'sort=extract&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php else: ?>
    <?php echo link_to($translatedLabel, '@hotideas', array('class' => 's16 s16_right_little', 'query_string' => 'sort=extract&sort_type=asc', 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php endif; ?>
</th>

<?php $currentHeader = ob_get_clean(); ?>

<?php print $currentHeader ?>
<?php ob_start(); ?>

<th class="sf_admin_text sf_admin_list_th_body">
  <?php $translatedLabel = __('Body'); ?>
  <?php if ('body' == $sort[0]): ?>
    <?php echo link_to($translatedLabel, '@hotideas', array('class' => 's16 s16_sort_'.$sort[1], 'query_string' => 'sort=body&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php else: ?>
    <?php echo link_to($translatedLabel, '@hotideas', array('class' => 's16 s16_right_little', 'query_string' => 'sort=body&sort_type=asc', 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php endif; ?>
</th>

<?php $currentHeader = ob_get_clean(); ?>

<?php print $currentHeader ?>
<?php ob_start(); ?>

<th class="sf_admin_boolean sf_admin_list_th_is_active">
  <?php $translatedLabel = __('Is active'); ?>
  <?php if ('is_active' == $sort[0]): ?>
    <?php echo link_to($translatedLabel, '@hotideas', array('class' => 's16 s16_sort_'.$sort[1], 'query_string' => 'sort=is_active&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php else: ?>
    <?php echo link_to($translatedLabel, '@hotideas', array('class' => 's16 s16_right_little', 'query_string' => 'sort=is_active&sort_type=asc', 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php endif; ?>
</th>

<?php $currentHeader = ob_get_clean(); ?>

<?php print $currentHeader ?>
<?php ob_start(); ?>

<th class="sf_admin_date sf_admin_list_th_created_at">
  <?php $translatedLabel = __('Created at'); ?>
  <?php if ('created_at' == $sort[0]): ?>
    <?php echo link_to($translatedLabel, '@hotideas', array('class' => 's16 s16_sort_'.$sort[1], 'query_string' => 'sort=created_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php else: ?>
    <?php echo link_to($translatedLabel, '@hotideas', array('class' => 's16 s16_right_little', 'query_string' => 'sort=created_at&sort_type=asc', 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php endif; ?>
</th>

<?php $currentHeader = ob_get_clean(); ?>

<?php print $currentHeader ?>
<?php ob_start(); ?>

<th class="sf_admin_date sf_admin_list_th_updated_at">
  <?php $translatedLabel = __('Updated at'); ?>
  <?php if ('updated_at' == $sort[0]): ?>
    <?php echo link_to($translatedLabel, '@hotideas', array('class' => 's16 s16_sort_'.$sort[1], 'query_string' => 'sort=updated_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php else: ?>
    <?php echo link_to($translatedLabel, '@hotideas', array('class' => 's16 s16_right_little', 'query_string' => 'sort=updated_at&sort_type=asc', 'title' => __('Sort by %field%', array('%field%' => $translatedLabel)))) ?>
  <?php endif; ?>
</th>

<?php $currentHeader = ob_get_clean(); ?>

<?php print $currentHeader ?>