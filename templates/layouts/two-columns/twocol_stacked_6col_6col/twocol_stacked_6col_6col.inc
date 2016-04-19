<?php

// Plugin definition
$plugin = array(
  'title' => t('Two column Bootstrap (stacked): 50/50'),
  'category' => t('Columns: 2'),
  'icon' => 'twocol-stacked-6col-6col.png',
  'theme' => 'twocol_stacked_6col_6col',
  'css' => 'twocol_stacked_6col_6col.css',
  'regions' => array(
    'top' => t('Top'),
    'left' => t('Left side'),
    'right' => t('Right side'),
    'bottom' => t('Bottom')
  ),
);
