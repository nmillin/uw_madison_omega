<?php 
/**
 * @file   path_to_theme() .
 * Alpha's theme implementation to display a region.
 *
 * The theme_get_setting is if I can get the theme-settings.php code to work so you can upload new sublogos.
 * 
 */
//$imagepath2 = base_path() . 'sites/all/themes/uw_madison_omega' . '/images/wordmark.gif';//this was going to omega and not uw_madison_omega.  not sure why.
$imagepath = drupal_get_path('theme', 'uw_madison_omega') . '/images/wordmark.gif';

?>

<div<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
    <?php if (theme_get_setting('bg_path')): ?>
      <a href="http://www.wisc.edu/" title="Go to Wisc.edu"><img src="<?php print file_create_url(theme_get_setting('bg_path')); ?>" alt="University of WIsconsin-Madison"/></a>
    <?php else: ?>
      <a href="http://www.wisc.edu/" title="Go to Wisc.edu"><img src="<?php echo $imagepath; ?>" alt="University of Wisconsin-Madison" /></a>
    <?php endif; ?>
    <?php print $content; ?>
  </div>
</div>