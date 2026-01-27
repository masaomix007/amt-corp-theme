<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
// トップだけヘッダーを切り替える（★ここは1回だけ）
if ( is_front_page() ) {
  get_template_part('template-parts/header', 'home');
} else {
  get_template_part('template-parts/header', 'default');
}
?>
