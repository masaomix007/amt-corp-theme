<?php get_header(); ?>

<main class="w-full pt-20 bg-white">

    <div class="relative w-full bg-gray-200 py-10 md:py-14 text-center">
        <h1 class="font-lato text-4xl font-bold tracking-[0.2em] mb-2">BLOG</h1>
        <p class="font-noto text-xl tracking-[0.2em] text-gray-600">ブログ</p>
    </div>

    <div class="container mx-auto max-w-6xl px-4 pt-12 md:pt-16 text-center">
        <p class="text-sm md:text-base leading-7 text-gray-700 font-noto">
            エー・エム・ティーが運営するお役立ち情報です。<br>
            ホームページ制作や印刷物、デザイン、マーケティングなどの情報を発信しています。
        </p>
    </div>

    <div class="container mx-auto max-w-6xl px-4 py-12 md:py-16">
        
        <?php
        // -------------------------------------------------------------
        // カテゴリーデータの取得（SP/PC共通で使うためここで定義）
        // -------------------------------------------------------------
        $exclude_slugs = ['blog', 'news', 'uncategorized'];
        
        // hide_empty=0 にしておくと、記事が0件のカテゴリも表示されます
        // （もし記事があるカテゴリだけ出したい場合は hide_empty=1 にしてください）
        $cat_args = array(
            'orderby' => 'name',
            'order'   => 'ASC',
            'hide_empty' => 0 
        );
        $all_cats = get_categories($cat_args);
        $display_cats = [];

        foreach ($all_cats as $cat) {
            if (!in_array($cat->slug, $exclude_slugs)) {
                $display_cats[] = $cat;
            }
        }
        ?>

        <div class="grid grid-cols-1 md:grid-cols-[1fr_300px] gap-12 items-start">

            <div class="w-full">
                
                <div class="md:hidden mb-12">
                    <h2 class="text-xl font-bold border-b-2 border-black pb-2 mb-6 tracking-widest">カテゴリー</h2>
                    <?php if ($display_cats) : ?>
                    <div class="flex flex-wrap gap-2">
                        <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>" class="block w-[48%] text-center border border-gray-400 bg-gray-700 text-white px-3 py-2 text-xs font-bold tracking-widest !no-underline">すべて</a>
                        
                        <?php foreach($display_cats as $cat): ?>
                            <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="block w-[48%] text-center border border-gray-400 bg-white text-gray-700 px-3 py-2 text-xs font-bold tracking-widest !no-underline">
                                <?php echo esc_html($cat->name); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="space-y-6 md:space-y-10">
                    
                    <h2 class="text-xl font-bold border-b-2 border-black pb-2 mb-6 tracking-widest">最新記事</h2>

                    <?php
                    // NEWSカテゴリのIDを取得
                    $news_cat = get_category_by_slug('news');
                    $news_cat_id = $news_cat ? $news_cat->term_id : 0;

                    // ページ番号
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    // カスタムクエリ
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'paged' => $paged,
                        'category__not_in' => array($news_cat_id) // NEWSを除外
                    );
                    
                    $blog_query = new WP_Query($args);

                    global $wp_query;
                    $temp_query = $wp_query;
                    $wp_query = $blog_query;
                    ?>

                    <?php if ($blog_query->have_posts()) : ?>
                        <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                            <article class="flex flex-col md:flex-row gap-4 md:gap-8 border-b border-gray-300 pb-6 md:pb-10 last:border-b-0">
                                <a href="<?php the_permalink(); ?>" class="block w-full md:w-[280px] flex-shrink-0 group overflow-hidden">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-[180px] md:h-[180px] object-cover group-hover:scale-105 transition-transform duration-300']); ?>
                                    <?php else : ?>
                                        <div class="w-full h-[180px] bg-gray-200 flex items-center justify-center text-gray-400 text-sm">No Image</div>
                                    <?php endif; ?>
                                </a>

                                <div class="flex-1 py-1">
                                    <div class="flex flex-wrap items-center gap-x-4 gap-y-2 mb-2">
                                        <time class="font-outfit text-sm text-gray-500 font-bold" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                                    </div>
                                    
                                    <h3 class="text-lg md:text-xl font-bold leading-8 mb-3 group-hover:text-gray-600">
                                        <a href="<?php the_permalink(); ?>" class="!no-underline text-gray-800"><?php the_title(); ?></a>
                                    </h3>

                                    <?php
                                    $categories = get_the_category();
                                    if ($categories) : ?>
                                        <div class="flex flex-wrap gap-2 mt-2">
                                            <?php foreach ($categories as $cat) : 
                                                // NEWSカテゴリは表示しない
                                                if ($cat->slug === 'news') continue;
                                            ?>
                                                <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="!no-underline border border-gray-400 px-3 py-1 text-[10px] md:text-xs text-gray-600 font-bold bg-white hover:bg-gray-100 transition-colors">
                                                    <?php echo esc_html($cat->name); ?>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    
                    <div class="mt-16 font-outfit 
                        [&_.nav-links]:flex [&_.nav-links]:justify-center [&_.nav-links]:items-center [&_.nav-links]:gap-3
                        [&_a]:flex [&_a]:items-center [&_a]:justify-center [&_a]:w-10 [&_a]:h-10 [&_a]:rounded-full [&_a]:!no-underline [&_a]:text-gray-600 [&_a]:text-lg [&_a:hover]:bg-gray-200
                        [&_span.current]:flex [&_span.current]:items-center [&_span.current]:justify-center [&_span.current]:w-10 [&_span.current]:h-10 [&_span.current]:rounded-full [&_span.current]:bg-gray-800 [&_span.current]:text-white [&_span.current]:text-lg">
                        <?php
                        the_posts_pagination(array(
                            'mid_size' => 2,
                            'prev_text' => '<span class="text-2xl pb-1">＜</span>',
                            'next_text' => '<span class="text-2xl pb-1">＞</span>',
                            'screen_reader_text' => ' ',
                        ));
                        ?>
                    </div>

                    <?php 
                    $wp_query = $temp_query;
                    wp_reset_postdata();
                    ?>

                    <?php else : ?>
                        <p class="text-center py-20 text-gray-500">記事が見つかりませんでした。</p>
                    <?php endif; ?>
                </div>

            </div>

            <aside class="w-full space-y-12 md:space-y-16 mt-10 md:mt-0">
                
                <div>
                    <h3 class="text-xl font-bold border-b-2 border-black pb-2 mb-6 tracking-widest">人気記事</h3>
                    <div class="space-y-6">
                        <?php
                        // 人気記事クエリ
                        $popular_args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'orderby' => 'date', 
                            'order' => 'DESC',
                            'ignore_sticky_posts' => 1,
                            'category__not_in' => array($news_cat_id)
                        );
                        $popular_query = new WP_Query($popular_args);
                        $rank = 1;
                        
                        if ($popular_query->have_posts()) :
                            while ($popular_query->have_posts()) : $popular_query->the_post();
                                $rank_color = '#c49c86';
                                if ($rank === 1) $rank_color = '#dcb67d';
                                elseif ($rank === 2) $rank_color = '#a5a5a5';
                        ?>
                            <a href="<?php the_permalink(); ?>" class="flex gap-4 group !no-underline items-start">
                                <div class="relative w-[34px] flex-shrink-0">
                                    <div class="w-full h-[46px] flex items-center justify-center text-white font-outfit font-bold text-xl pb-1"
                                         style="background-color: <?php echo $rank_color; ?>; clip-path: polygon(0 0, 100% 0, 100% 100%, 50% 80%, 0 100%);">
                                        <?php echo $rank; ?>
                                    </div>
                                </div>
                                <div>
                                    <time class="block text-xs text-gray-500 font-outfit mb-1"><?php echo get_the_date('Y.m.d'); ?></time>
                                    <p class="text-sm font-bold leading-6 text-gray-800 group-hover:text-gray-600 line-clamp-2">
                                        <?php the_title(); ?>
                                    </p>
                                </div>
                            </a>
                        <?php 
                            $rank++;
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                </div>

                <div>
                    <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>" class="relative">
                        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="記事検索" class="w-full border border-gray-400 py-3 pl-10 pr-4 rounded-sm text-sm focus:outline-none focus:border-gray-600" />
                        <button type="submit" id="searchsubmit" class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </button>
                    </form>
                </div>

                <div class="hidden md:block">
                    <h3 class="text-xl font-bold mb-6 font-noto tracking-widest">カテゴリー</h3>
                    <?php if ($display_cats) : ?>
                    <div class="grid grid-cols-2 gap-2">
                        <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>" class="block text-center border border-gray-400 bg-white hover:bg-gray-100 text-gray-700 px-2 py-2 text-xs font-bold transition-colors !no-underline">すべて</a>
                        <?php foreach($display_cats as $cat): ?>
                            <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="block text-center border border-gray-400 bg-white hover:bg-gray-100 text-gray-700 px-2 py-2 text-xs font-bold transition-colors !no-underline">
                                <?php echo esc_html($cat->name); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>

            </aside>
        </div>
    </div>
    
    <section id="contact" class="w-full bg-gray-300">
      <div class="bg-gray-300 py-10 md:py-14">
        <div class="mx-auto max-w-6xl px-4 text-center">
            <h2 class="font-lato text-4xl font-black tracking-[0.25em] text-gray-700">CONTACT</h2>
            <p class="mt-2 text-xl font-semibold tracking-[0.25em] text-gray-600">お問い合わせ</p>
        </div>
      </div>

      <div class="w-full bg-gray-100 pb-20">
        <div class="mx-auto max-w-6xl px-4 py-20">
          <div class="mx-auto grid max-w-5xl gap-10 md:grid-cols-2 md:items-start">

            <div class="mx-auto w-full max-w-xl text-center">
              <a
                href="<?php echo esc_url(home_url('/contact/')); ?>"
                class="group mx-auto inline-flex w-full max-w-xl items-center justify-center gap-5 rounded-full border-2 border-gray-700 bg-transparent px-10 py-8 text-gray-800 !no-underline hover:bg-gray-200"
              >
                <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full p-2.5">
                  <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/contact-email.png" alt="" class="block h-12 w-12 object-contain">
                </span>
                <span class="font-noto text-xl font-bold tracking-widest">お問い合わせ</span>
              </a>
            </div>

            <div class="mx-auto w-full max-w-xl text-center">
              <a
                href="tel:0542864085"
                class="group inline-flex w-full items-center justify-center gap-5 rounded-full border-2 border-gray-700 bg-transparent px-10 py-8 text-gray-800 !no-underline hover:bg-gray-200"
              >
                <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full p-2.5">
                  <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/contact-tel.png" alt="" class="block h-10 w-10 object-contain">
                </span>
                <span class="font-noto text-xl font-bold tracking-widest">054-286-4085</span>
              </a>
              <p class="mt-6 font-noto text-sm font-bold tracking-widest text-gray-800">
                受付9：00〜18：00（土日祝除く）
              </p>
            </div>

          </div>
        </div>
      </div>
    </section>

</main>

<?php get_footer(); ?>