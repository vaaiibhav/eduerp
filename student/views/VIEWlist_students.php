<?php
$view = new view;
$view->name = 'list_students';
$view->description = 'List Students';
$view->tag = '';
$view->base_table = 'users';
$view->core = 0;
$view->api_version = '2';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
$handler = $view->new_display('default', 'Defaults', 'default');
$handler->override_option('relationships', array(
  'content_profile_rel' => array(
    'label' => 'Content Profile',
    'required' => 0,
    'type' => 'profile',
    'id' => 'content_profile_rel',
    'table' => 'users',
    'field' => 'content_profile_rel',
    'relationship' => 'none',
  ),
  'content_profile_rel_1' => array(
    'label' => 'Content Student Profile',
    'required' => 0,
    'type' => 'student_profile',
    'id' => 'content_profile_rel_1',
    'table' => 'users',
    'field' => 'content_profile_rel',
    'relationship' => 'none',
  ),
  'field_profile_first_choice_nid' => array(
    'label' => 'Programme',
    'required' => 0,
    'delta' => -1,
    'id' => 'field_profile_first_choice_nid',
    'table' => 'node_data_field_profile_first_choice',
    'field' => 'field_profile_first_choice_nid',
    'relationship' => 'content_profile_rel_1',
  ),
  'field_department_id_nid' => array(
    'label' => 'Department nid',
    'required' => 0,
    'delta' => -1,
    'id' => 'field_department_id_nid',
    'table' => 'node_data_field_department_id',
    'field' => 'field_department_id_nid',
    'relationship' => 'field_profile_first_choice_nid',
  ),
  'field_college_id_nid' => array(
    'label' => 'College nid',
    'required' => 0,
    'delta' => -1,
    'id' => 'field_college_id_nid',
    'table' => 'node_data_field_college_id',
    'field' => 'field_college_id_nid',
    'relationship' => 'field_department_id_nid',
  ),
));
$handler->override_option('fields', array(
  'field_profile_jambno_value' => array(
    'label' => 'JAMB No.',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'absolute' => 0,
      'link_class' => '',
      'alt' => '',
      'rel' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 0,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_profile_jambno_value',
    'table' => 'node_data_field_profile_jambno',
    'field' => 'field_profile_jambno_value',
    'relationship' => 'content_profile_rel_1',
  ),
  'name' => array(
    'label' => 'Admission No.',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'absolute' => 0,
      'link_class' => '',
      'alt' => '',
      'rel' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'hide_alter_empty' => 1,
    'link_to_user' => 1,
    'overwrite_anonymous' => 0,
    'anonymous_text' => '',
    'exclude' => 0,
    'id' => 'name',
    'table' => 'users',
    'field' => 'name',
    'relationship' => 'none',
  ),
  'field_profile_last_name_value' => array(
    'label' => 'Last Name',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 1,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_profile_last_name_value',
    'table' => 'node_data_field_profile_last_name',
    'field' => 'field_profile_last_name_value',
    'relationship' => 'content_profile_rel',
  ),
  'field_profile_first_name_value' => array(
    'label' => 'First Name',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 1,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_profile_first_name_value',
    'table' => 'node_data_field_profile_first_name',
    'field' => 'field_profile_first_name_value',
    'relationship' => 'content_profile_rel',
  ),
  'field_profile_middle_name_value' => array(
    'label' => 'Middle Name',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 0,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_profile_middle_name_value',
    'table' => 'node_data_field_profile_middle_name',
    'field' => 'field_profile_middle_name_value',
    'relationship' => 'content_profile_rel',
  ),
  'field_profile_yearofentry_value' => array(
    'label' => 'Year of Entry',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 0,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'repeat' => array(
      'show_repeat_rule' => '',
    ),
    'fromto' => array(
      'fromto' => 'both',
    ),
    'id' => 'field_profile_yearofentry_value',
    'table' => 'node_data_field_profile_yearofentry',
    'field' => 'field_profile_yearofentry_value',
    'relationship' => 'content_profile_rel_1',
  ),
  'field_profile_level_name_value' => array(
    'label' => 'Level',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 0,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_profile_level_name_value',
    'table' => 'node_data_field_profile_level_name',
    'field' => 'field_profile_level_name_value',
    'relationship' => 'content_profile_rel_1',
  ),
  'field_profile_gender_value' => array(
    'label' => 'Gender',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 0,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_profile_gender_value',
    'table' => 'node_data_field_profile_gender',
    'field' => 'field_profile_gender_value',
    'relationship' => 'content_profile_rel',
  ),
  'field_profile_state_name_origin_value' => array(
    'label' => 'State of Origin',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 0,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_profile_state_name_origin_value',
    'table' => 'node_data_field_profile_state_name_origin',
    'field' => 'field_profile_state_name_origin_value',
    'relationship' => 'content_profile_rel',
  ),
  'field_programme_name_value' => array(
    'label' => 'Program',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 0,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_programme_name_value',
    'table' => 'node_data_field_programme_name',
    'field' => 'field_programme_name_value',
    'relationship' => 'field_profile_first_choice_nid',
  ),
));
$handler->override_option('filters', array(
  'rid' => array(
    'operator' => 'or',
    'value' => array(
      8 => '8',
      7 => '7',
    ),
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 0,
      'operator' => 'rid_op',
      'identifier' => 'rid',
      'label' => 'Student Status',
      'optional' => 0,
      'single' => 1,
      'remember' => 1,
      'reduce' => 1,
    ),
    'id' => 'rid',
    'table' => 'users_roles',
    'field' => 'rid',
    'relationship' => 'none',
    'reduce_duplicates' => 0,
    'override' => array(
      'button' => 'Override',
    ),
  ),
  'field_profile_yearofentry_value' => array(
    'operator' => 'contains',
    'value' => '',
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 0,
      'operator' => 'field_profile_yearofentry_value_op',
      'identifier' => 'yearofentry',
      'label' => 'Year of Entry',
      'remember' => 1,
    ),
    'case' => 1,
    'id' => 'field_profile_yearofentry_value',
    'table' => 'node_data_field_profile_yearofentry',
    'field' => 'field_profile_yearofentry_value',
    'relationship' => 'content_profile_rel_1',
  ),
  'field_profile_level_name_value_many_to_one' => array(
    'operator' => 'or',
    'value' => array(),
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 0,
      'operator' => 'field_profile_level_name_value_many_to_one_op',
      'identifier' => 'level',
      'label' => 'Level',
      'optional' => 1,
      'single' => 1,
      'remember' => 1,
      'reduce' => 0,
    ),
    'id' => 'field_profile_level_name_value_many_to_one',
    'table' => 'node_data_field_profile_level_name',
    'field' => 'field_profile_level_name_value_many_to_one',
    'relationship' => 'content_profile_rel_1',
    'reduce_duplicates' => 0,
  ),
  'field_profile_gender_value_many_to_one' => array(
    'operator' => 'or',
    'value' => array(),
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 0,
      'operator' => 'field_profile_gender_value_many_to_one_op',
      'identifier' => 'gender',
      'label' => 'Gender',
      'optional' => 1,
      'single' => 1,
      'remember' => 1,
      'reduce' => 0,
    ),
    'id' => 'field_profile_gender_value_many_to_one',
    'table' => 'node_data_field_profile_gender',
    'field' => 'field_profile_gender_value_many_to_one',
    'relationship' => 'content_profile_rel',
    'reduce_duplicates' => 0,
  ),
  'field_programme_name_value_many_to_one' => array(
    'operator' => 'or',
    'value' => array(),
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 0,
      'operator' => 'field_programme_name_value_many_to_one_op',
      'identifier' => 'programme',
      'label' => 'Programme',
      'optional' => 1,
      'single' => 1,
      'remember' => 1,
      'reduce' => 0,
    ),
    'id' => 'field_programme_name_value_many_to_one',
    'table' => 'node_data_field_programme_name',
    'field' => 'field_programme_name_value_many_to_one',
    'relationship' => 'field_profile_first_choice_nid',
    'reduce_duplicates' => 0,
  ),
  'field_department_name_value_many_to_one' => array(
    'operator' => 'or',
    'value' => array(),
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 0,
      'operator' => 'field_department_name_value_many_to_one_op',
      'identifier' => 'department',
      'label' => 'Department',
      'optional' => 1,
      'single' => 1,
      'remember' => 1,
      'reduce' => 0,
    ),
    'id' => 'field_department_name_value_many_to_one',
    'table' => 'node_data_field_department_name',
    'field' => 'field_department_name_value_many_to_one',
    'relationship' => 'field_department_id_nid',
    'reduce_duplicates' => 0,
  ),
  'field_college_name_value_many_to_one' => array(
    'operator' => 'or',
    'value' => array(),
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 0,
      'operator' => 'field_college_name_value_many_to_one_op',
      'identifier' => 'college',
      'label' => 'Faculty',
      'optional' => 1,
      'single' => 1,
      'remember' => 1,
      'reduce' => 0,
    ),
    'id' => 'field_college_name_value_many_to_one',
    'table' => 'node_data_field_college_name',
    'field' => 'field_college_name_value_many_to_one',
    'relationship' => 'field_college_id_nid',
    'reduce_duplicates' => 0,
  ),
  'uid' => array(
    'operator' => 'in',
    'value' => '',
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 0,
      'operator' => 'uid_op',
      'identifier' => 'uid',
      'label' => 'Admission Number',
      'optional' => 1,
      'remember' => 1,
      'reduce' => 0,
    ),
    'id' => 'uid',
    'table' => 'users',
    'field' => 'uid',
    'relationship' => 'none',
  ),
));
$handler->override_option('access', array(
  'type' => 'perm',
  'perm' => 'student data',
));
$handler->override_option('cache', array(
  'type' => 'none',
));
$handler->override_option('footer', '<?php
require_once \'./\' . drupal_get_path(\'module\', \'eduerp\') . \'/student/list_students_footer.inc\';
?>');
$handler->override_option('footer_format', '3');
$handler->override_option('footer_empty', 0);
$handler->override_option('items_per_page', 100);
$handler->override_option('use_pager', '1');
$handler->override_option('style_plugin', 'table');
$handler->override_option('style_options', array(
  'grouping' => '',
  'override' => 1,
  'sticky' => 0,
  'order' => 'asc',
  'columns' => array(
    'name' => 'name',
    'value' => 'value',
    'value_1' => 'value_1',
    'value_2' => 'value_2',
    'value_3' => 'value_3',
    'value_4' => 'value_4',
    'value_5' => 'value_5',
    'value_6' => 'value_6',
    'value_7' => 'value_7',
    'field_profile_last_name_value' => 'field_profile_last_name_value',
    'field_profile_first_name_value' => 'field_profile_first_name_value',
    'field_profile_middle_name_value' => 'field_profile_middle_name_value',
    'field_profile_yearofentry_value' => 'field_profile_yearofentry_value',
    'field_profile_level_name_value' => 'field_profile_level_name_value',
    'field_profile_gender_value' => 'field_profile_gender_value',
    'field_profile_state_name_origin_value' => 'field_profile_state_name_origin_value',
    'field_programme_name_value' => 'field_programme_name_value',
  ),
  'info' => array(
    'name' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'value_1' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'value_2' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'value_3' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'value_4' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'value_5' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'value_6' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'value_7' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_profile_last_name_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_profile_first_name_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_profile_middle_name_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_profile_yearofentry_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_profile_level_name_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_profile_gender_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_profile_state_name_origin_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_programme_name_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
  ),
  'default' => 'name',
));
$handler = $view->new_display('views_data_export', 'Data export', 'views_data_export_1');
$handler->override_option('items_per_page', '0');
$handler->override_option('style_plugin', 'views_data_export_xls');
$handler->override_option('style_options', array(
  'mission_description' => FALSE,
  'description' => '',
  'attach_text' => 'XLS',
  'provide_file' => 1,
  'filename' => '%view.xls',
  'help' => '',
  'parent_sort' => 0,
));
$handler->override_option('row_plugin', '');
$handler->override_option('path', 'liststudents/export');
$handler->override_option('menu', array(
  'type' => 'none',
  'title' => '',
  'description' => '',
  'weight' => 0,
  'name' => 'navigation',
));
$handler->override_option('tab_options', array(
  'type' => 'none',
  'title' => '',
  'description' => '',
  'weight' => 0,
  'name' => 'navigation',
));
$handler->override_option('displays', array(
  'page_1' => 'page_1',
  'default' => 0,
));
$handler->override_option('sitename_title', FALSE);
$handler->override_option('use_batch', TRUE);
$handler = $view->new_display('page', 'Page', 'page_1');
$handler->override_option('path', 'liststudents');
$handler->override_option('menu', array(
  'type' => 'none',
  'title' => '',
  'description' => '',
  'weight' => 0,
  'name' => 'navigation',
));
$handler->override_option('tab_options', array(
  'type' => 'none',
  'title' => '',
  'description' => '',
  'weight' => 0,
  'name' => 'navigation',
));
