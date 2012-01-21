<?php 
/**
 * @file   path_to_theme() .
 * Alpha's theme implementation to display a region.
 */
//$imagepath2 = base_path() . 'sites/all/themes/uw_madison_omega' . '/images/wordmark.gif';//this was going to omega and not uw_madison_omega.  not sure why.
$imagepath = drupal_get_path('theme', 'uw_madison_omega') . '/images/wordmark.gif';
?>
<div<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
    <a href="http://www.wisc.edu/" title="Go to Wisc.edu"><img src="<?php echo $imagepath; ?>" alt="University of Wisconsin-Madison" /></a>
    <?php print $content; ?>
  </div>
</div>