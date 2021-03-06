<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge, chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta property="og:image" content="http://www.adaptation-undp.org/sites/default/files/uploads/homepage-thumbnail.jpg" />
<title><?php print $head_title; ?></title>
<?php
if (theme_get_setting('toggle_favicon')) {
  $favicon = theme_get_setting('favicon');
} else {
  $favicon = path_to_theme()."/img/favicon.ico";
  kpr($favicon);
} ?>
<link rel="shortcut icon" type="image/x-icon" href="<?php print $favicon; ?>" />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,400italic,300italic' rel='stylesheet' type='text/css'>
<script src="https://use.fontawesome.com/e0d6fc2342.js"></script>

<?php print $styles; ?>
<?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php
    print $page_top;
    print $page;
    print $page_bottom;
  ?>
</body>
</html>