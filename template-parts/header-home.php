<?php
/**
 * Header (Home)
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- HOME HEADER : heroの上に重ねる -->
<header id="site-header" class="absolute left-0 top-0 z-50 w-full bg-transparent text-white">
  <div class="mx-auto max-w-7xl px-6">
    <div class="flex h-20 items-center justify-between">

      <!-- 左：空（ロゴなし） -->
      <div class="w-24"></div>

      <!-- 中央：グローバルメニュー -->
      <nav class="flex items-center gap-16 font-outfit text-sm tracking-[0.35em]">
        <a href="#works"   class="hover:opacity-80 !no-underline">WORKS</a>
        <a href="#service" class="hover:opacity-80 !no-underline">SERVICE</a>
        <a href="#blog"    class="hover:opacity-80 !no-underline">BLOG</a>
        <a href="#company" class="hover:opacity-80 !no-underline">COMPANY</a>
        <a href="#contact" class="hover:opacity-80 !no-underline">CONTACT</a>
      </nav>

      <!-- 右：SNS -->
      <div class="flex items-center gap-6">
        <a href="https://www.instagram.com/amt_web/" aria-label="X" class="hover:opacity-80">
          <img
            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-x-white.png"
            alt=""
            class="h-7 w-7"
            loading="lazy"
            decoding="async"
          >
        </a>
        <a href="https://x.com/amt_web" aria-label="Instagram" class="hover:opacity-80">
          <img
            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-instagram-white.png"
            alt=""
            class="h-7 w-7"
            loading="lazy"
            decoding="async"
          >
        </a>
      </div>

    </div>
  </div>
</header>
