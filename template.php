<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

/**
 * hook_form_alter() for the search block.
 * Examples came from http://drupal.org/node/154137
 */
function uw_madison_omega_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    $form['actions']['submit']['#value'] = t('GO!'); // Change the text on the submit button
    //$form['search_block_form']['#title'] = t('Nate'); // Change the text on the label element -- Issues...
    //$form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty -- Issues...
    
    $form['search_block_form']['#size'] = 30;  // define size of the textfield
    $form['search_block_form']['#default_value'] = t('Search this site'); // Set a default value for the textfield
    
    $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search this site';}";
    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search this site') {this.value = '';}";
  }
}

/**
 * hook_breadcrumb() to change the breadcrumb separator.
 * Works, but had to move the return $output; inside of the if statement b/c if there wasn't
 * a breadcrumb for the page, there was a $output variable not defined error.  I'm guessing it's
 * not available for this page???
 *
 * Code for breadcrumb gotten from http://drupal.org/node/1326740.
 */
function uw_madison_omega_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    $output .= '<div class="breadcrumb">' . implode(' > ', $breadcrumb) . '</div>';
    return $output;
  }

  
}
