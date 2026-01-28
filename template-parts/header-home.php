<header class="absolute top-0 left-0 z-50 w-full">
  <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-6">
    <!-- Logo (TOPはテキストでOK) -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="text-lg font-bold tracking-widest text-white">
      AMT
    </a>

    <!-- Desktop Nav -->
    <nav class="hidden md:block" aria-label="Primary">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'fallback_cb'    => false,
        'menu_class'     => 'flex items-center gap-6 text-sm tracking-widest text-white',
      ]);
      ?>
    </nav>

    <!-- Mobile button -->
    <button class="md:hidden inline-flex items-center justify-center rounded-md p-2 text-white"
      type="button" aria-label="Open menu">
      ☰
    </button>
  </div>
</header>
