<?php

// Plugin definition
$plugin = array(
  'title' => t('One Column Bootstrap -- Fluid Header/Footer with fixed width middle'),
  'category' => t('Columns: 1'),
  'icon' => 'onecol-fluid-header-fixed-width-body.png',
  'theme' => 'onecol_fluid_header_fixed_width_body',
  'css' => 'onecol-fluid-header-fixed-width-body.css',
  'regions' => array(
    'top' => t('Top'),
    'middle' => t('Middle (Fixed Width)'),
    'bottom' => t('Bottom')
  ),
);
