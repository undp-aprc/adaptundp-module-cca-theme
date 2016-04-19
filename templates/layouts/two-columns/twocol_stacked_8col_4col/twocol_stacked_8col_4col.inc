<?php

// Plugin definition
$plugin = array(
  'title' => t('Two column Bootstrap (stacked): 75/25'),
  'category' => t('Columns: 2'),
  'icon' => 'twocol-stacked-8col-4col.png',
  'theme' => 'twocol_stacked_8col_4col',
  'css' => 'twocol_stacked_8col_4col.css',
  'regions' => array(
    'top' => t('Top'),
    'left' => t('Left side'),
    'right' => t('Right side'),
    'bottom' => t('Bottom')
  ),
);
