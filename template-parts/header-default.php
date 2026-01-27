<header class="w-full border-b bg-white">
  <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4">
    <!-- Logo -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="text-lg font-bold tracking-widest">
      AMT
    </a>

    <!-- Desktop Nav -->
    <nav class="hidden md:block" aria-label="Primary">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'fallback_cb'    => false,
        'menu_class'     => 'flex items-center gap-6 text-sm tracking-widest',
      ]);
      ?>
    </nav>

    <!-- Mobile button (あとで動かす) -->
    <button class="md:hidden inline-flex items-center justify-center rounded-md p-2"
      type="button" aria-label="Open menu">
      ☰
    </button>
  </div>
</header>
