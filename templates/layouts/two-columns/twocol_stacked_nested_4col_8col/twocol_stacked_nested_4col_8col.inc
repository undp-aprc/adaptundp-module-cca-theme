<?php

// Plugin definition
$plugin = array(
  'title' => t('Two column Bootstrap (stacked & nested): 25/75'),
  'category' => t('Columns: 2'),
  'icon' => 'twocol-stacked-nested-4col-8col.png',
  'theme' => 'twocol_stacked_nested_4col_8col',
  'css' => 'twocol_stacked_nested_4col_8col.css',
  'regions' => array(
    'top' => t('Top'),
    'left' => t('Left side'),
    'right' => t('Right side'),
      'right_lower_left' => ('Right Lower Left'),
      'right_lower_right' => ('Right Lower Right'),
    'bottom' => t('Bottom')
  ),
);
