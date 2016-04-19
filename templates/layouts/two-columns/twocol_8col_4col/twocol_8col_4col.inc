<?php

// Plugin definition
$plugin = array(
  'title' => t('Two column Bootstrap: 75/25'),
  'category' => t('Columns: 2'),
  'icon' => 'twocol-8col-4col.png',
  'theme' => 'twocol_8col_4col',
  'css' => 'twocol-8col-4col.css',
  'regions' => array(
    'left' => t('Left side'),
    'right' => t('Right side')
  ),
);
