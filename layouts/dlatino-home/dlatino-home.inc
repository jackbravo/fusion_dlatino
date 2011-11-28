<?php
// $Id: twocol.inc,v 1.1.2.3 2010/06/22 15:54:25 merlinofchaos Exp $

// Plugin definition
$plugin = array(
  'title' => t('dlatino home'),
  'category' => t('Columns: 2'),
  'icon' => 'dlatino-home.png',
  'theme' => 'dlatino-home',
  'css' => 'dlatino-home.css',
  'panels' => array(
    'left'        => t('Left side'),
    'right'       => t('Right side'),
    'sponsors'   => t('Sponsors'),
  ),
);
