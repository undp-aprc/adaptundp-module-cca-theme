<?php

// Plugin definition
$plugin = array(
  'title' => t('Two column Bootstrap: 25/75'),
  'category' => t('Columns: 2'),
  'icon' => 'twocol-4col-8col.png',
  'theme' => 'twocol_4col_8col',
  'css' => 'twocol-4col-8col.css',
  'regions' => array(
    'left' => t('Left side'),
    'right' => t('Right side')
  ),
);
