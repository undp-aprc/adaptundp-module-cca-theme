<?php

// Plugin definition
$plugin = array(
  'title' => t('Two column Bootstrap: 50/50'),
  'category' => t('Columns: 2'),
  'icon' => 'twocol-6col-6col.png',
  'theme' => 'twocol_6col-6col',
  'css' => 'twocol-6col-6col.css',
  'regions' => array(
    'left' => t('Left side'),
    'right' => t('Right side')
  ),
);
