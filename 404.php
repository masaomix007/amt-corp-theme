<?php get_header(); ?>

<main class="w-full pt-20 bg-white min-h-[60vh]">

    <div class="relative w-full bg-gray-200 py-10 md:py-14 text-center">
        <h1 class="font-outfit text-9xl font-bold tracking-[0.2em] mb-2">404</h1>
        <p class="font-noto text-xl tracking-[0.2em] text-gray-600">NOT FOUND</p>
    </div>

    <div class="container mx-auto max-w-4xl px-6 lg:px-4 py-20 text-center">
        
        <h2 class="text-xl md:text-2xl font-bold mb-8 font-noto text-gray-700">
            お探しのページは見つかりませんでした。
        </h2>

        <p class="text-sm md:text-base leading-8 text-gray-600 mb-12 font-noto">
            お探しのページは一時的にアクセスできない状況にあるか、<br class="hidden md:inline">
            移動または削除された可能性があります。
        </p>

        <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center justify-center gap-2 border-2 border-gray-700 px-10 py-3 text-base tracking-[0.1em] text-gray-800 hover:bg-gray-200 transition-colors !no-underline font-bold">
            TOPページへ戻る
        </a>

    </div>

</main>

<?php get_footer(); ?>