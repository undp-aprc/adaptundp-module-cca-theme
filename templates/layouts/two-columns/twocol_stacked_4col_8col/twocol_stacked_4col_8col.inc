<?php

// Plugin definition
$plugin = array(
  'title' => t('Two column Bootstrap (stacked): 25/75'),
  'category' => t('Columns: 2'),
  'icon' => 'twocol-stacked-4col-8col.png',
  'theme' => 'twocol_stacked_4col_8col',
  'css' => 'twocol_stacked_4col_8col.css',
  'regions' => array(
    'top' => t('Top'),
    'left' => t('Left side'),
    'right' => t('Right side'),
    'bottom' => t('Bottom')
  ),
);
