<?php

// Plugin definition
$plugin = array(
    'title' => t('Three Column Bootstrap: 25/50/25'),
    'category' => t('Columns: 3'),
    'icon' => 'threecol-3col-6col-3col.png',
    'theme' => 'threecol_3col_6col_3col',
    'theme arguments' => array('id', 'content'),
    'css' => 'threecol-3col-6col-3col.css',
    'regions' => array(
        'left' => t('Left side'),
        'middle' => t('Middle column'),
        'right' => t('Right side')
    ),
);
