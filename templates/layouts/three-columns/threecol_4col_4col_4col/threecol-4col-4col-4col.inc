<?php

// Plugin definition
$plugin = array(
    'title' => t('Three Column Bootstrap: 33/34/33'),
    'category' => t('Columns: 3'),
    'icon' => 'threecol-4col-4col-4col.png',
    'theme' => 'threecol_4col_4col_4col',
    'css' => 'threecol-4col-4col-4col.css',
    'theme arguments' => array('id', 'content'),
    'regions' => array(
        'left' => t('Left side'),
        'middle' => t('Middle'),
        'right' => t('Right side')
  ),
);
