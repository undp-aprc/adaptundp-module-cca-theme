<?php

// Plugin definition
$plugin = array(
  'title' => t('Three Column Stacked Bootstrap: 25/50/25'),
  'category' => t('Columns: 3'),
  'icon' => 'threecol-stacked-3col-6col-3col.png',
  'theme' => 'threecol_stacked_3col_6col_3col',
  'css' => 'threecol-stacked-3col-6col-3col.css',
  'regions' => array(
      'top' => t('Top'),
    'left' => t('Left side'),
    'middle' => t('Middle'),
    'right' => t('Right side'),
      'bottom' => t('Bottom')
  ),
);
