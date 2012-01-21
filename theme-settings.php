<?php

/**
 * Need to figure out how to add a new field in the theme's settings to allow
 * a second logo to be selected.
 * http://eclecticcatastrophe.com/content/advanced-drupal-theme-admin-settings  (D6)
 *
 * code below is from http://drupal.org/node/177868#comment-1445178, but I can't get it to work...
 * --couldn't get it to work b/c this was in the Theme directory.... stupid...
 */
/*
function uw_madison_omega_form_system_theme_settings_alter(&$form, &$form_state)  {

  $form['logo']['settings']['sublogo'] = array(
    '#type' => 'fieldset',
    '#title' => t('Second Logo'),
    '#description' => t("Will appear on the upper left part of the screen.")
  );

    $logo_path = theme_get_setting('sublogo_path');
    // If $logo_path is a public:// URI, display the path relative to the files
    // directory; stream wrappers are not end-user friendly.
    if (file_uri_scheme($logo_path) == 'public') {
      $logo_path = file_uri_target($logo_path);
    }
    
  $form['logo']['settings']['sublogo']['sublogo_path'] = array(
    '#type' => 'textfield',
    '#title' => t('PATH TO SECONDARY LOGO'),
    '#default_value' =>  $logo_path,
  );

  $form['logo']['settings']['sublogo']['sublogo_upload'] = array(
    '#type' => 'file',
    '#title' => t('UPLOAD SECONDARY LOGO IMAGE'),
  );
      


  // We are editing the $form in place, so we don't need to return anything.
  $form['#submit'][]   = 'uw_madison_omega_settings_submit';
}*/
?>


<?php
/*function uw_madison_omega_settings_submit($form, &$form_state) {
  $settings = array();
  
  // Check for a new uploaded file, and use that if available.
  if ($file = file_save_upload('sublogo_upload')) {
    $parts = pathinfo($file->filename);
    $destination = 'public://' . $parts['basename'];
    $file->status = FILE_STATUS_PERMANENT;
    
  
     if (file_copy($file, $destination, FILE_EXISTS_REPLACE)) {
        $_POST['sublogo_path'] = $form_state['values']['sublogo_path'] = $destination;
     }
  }

}*/
?>