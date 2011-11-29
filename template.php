<?php

function fusion_dlatino_tablesort_indicator($style) {
  if ($style == "asc") {
    return '<span class="desc">click to toggle sort</span>';
  }
  else {
    return '<span class="asc">click to toggle sort</span>';
  }
}

function fusion_dlatino_grid_block($element, $name, $classes='') {
  $output = '';
  if ($element) {
    $output .= '<div id="' . $name . '" class="' . $name . ' '. $classes .' block">' . "\n";
    $output .= '<div id="' . $name . '-inner" class="' . $name . '-inner inner clearfix">' . "\n";
    $output .= $element;
    $output .= '</div><!-- /' . $name . '-inner -->' . "\n";
    $output .= '</div><!-- /' . $name . ' -->' . "\n";
  }
  return $output;
}

function fusion_dlatino_preprocess_page(&$vars) {

  //determinando el banner por sección
  $path = drupal_get_path('theme','fusion_dlatino');

  $alias = drupal_get_path_alias($_GET['q']);
  if (strpos($alias, 'acerca-de') !== false) {
    $vars['banner'] = 'banner-acerca-de';
  } else if (strpos($alias, 'program') !== false) {
    $vars['banner'] = 'banner-sesion';
  } else if (strpos($alias, 'lugar') !== false) {
    $vars['banner'] = 'banner-lugar';
  }
}

function fusion_dlatino_menu_item_link($link) {
  
  if (empty($link['localized_options'])) {
    $link['localized_options'] = array();
  }

  //El menu-involved  debe de tener alguna clase para
  //hacer referencia a sus iconos
  if($link['menu_name'] == "menu-involved") {
    $class = strtolower(preg_replace('/[^a-z0-9]/i','',$link['link_title']));
    $link['localized_options'] = array(
      'attributes' => array(
        'class'   =>  'btn-participa participa-'.$class
      )
    );
  }


  if($link['menu_name'] == "menu-contact") {
    $class = strtolower($link['link_title']);

    $link['localized_options'] = array(
      'attributes'  => array(
        'class'   =>  'btn-contact contact-'.$class
      )
    );
  }

  return l($link['title'], $link['href'], $link['localized_options']);
}

