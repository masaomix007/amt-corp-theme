<?php get_header(); ?>

<main class="w-full pt-20 bg-white">

    <div class="relative w-full bg-gray-200 py-10 md:py-14 text-center">
        <h1 class="font-outfit text-4xl font-bold tracking-[0.2em] mb-2 uppercase">
            <?php
            // ▼ ページのタイプに合わせてタイトルを自動切り替え
            if (is_search()) {
                echo 'SEARCH';
            } elseif (is_category()) {
                echo 'CATEGORY';
            } elseif (is_tag()) {
                echo 'TAG';
            } else {
                echo 'ARCHIVE';
            }
            ?>
        </h1>
        <p class="font-noto text-xl tracking-[0.2em] text-gray-600">
            <?php
            // ▼ サブタイトルの自動切り替え
            if (is_search()) {
                echo '「' . get_search_query() . '」の検索結果';
            } else {
                single_term_title();
            }
            ?>
        </p>
    </div>

    <div class="container mx-auto max-w-6xl px-4 lg:px-6 py-12 md:py-16">
        
        <?php
        // -------------------------------------------------------------
        // カテゴリーデータの取得（サイドバー用）
        // -------------------------------------------------------------
        $exclude_slugs = ['blog', 'news', 'uncategorized'];
        $cat_args = array(
            'orderby' => 'name',
            'order'   => 'ASC',
            'hide_empty' => 1
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
                <div class="space-y-6 md:space-y-10 px-6 lg:px-4">
                    
                    <h2 class="text-xl font-bold border-b-2 border-black pb-2 mb-6 tracking-widest uppercase">
                        <?php
                        // ▼ 見出しの自動切り替え
                        if (is_search()) {
                            echo '検索キーワード：' . get_search_query();
                        } else {
                            echo '「';
                            single_term_title();
                            echo '」の一覧';
                        }
                        ?>
                    </h2>

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            
                            <article class="flex flex-col md:flex-row gap-4 md:gap-8 border-b border-gray-300 pb-6 md:pb-10 last:border-b-0">
                                <a href="<?php the_permalink(); ?>" class="block w-full md:w-[280px] flex-shrink-0 group overflow-hidden">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium_large', [
                                            'class' => 'w-full aspect-video object-cover group-hover:scale-105 transition-transform duration-300'
                                        ]); ?>
                                    <?php else : ?>
                                        <img 
                                            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/no-image.svg" 
                                            alt="No Image" 
                                            class="w-full aspect-video object-cover"
                                        >
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

                    <?php else : ?>
                        <div class="text-center py-20">
                            <?php if (is_search()) : ?>
                                <p class="text-gray-500 mb-8">「<?php echo get_search_query(); ?>」に一致する記事は見つかりませんでした。</p>
                                <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="inline-block border border-gray-800 px-8 py-3 font-bold hover:bg-gray-800 hover:text-white transition-colors">ブログトップへ戻る</a>
                            <?php else : ?>
                                <p class="text-gray-500">記事が見つかりませんでした。</p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <aside class="w-full space-y-12 md:space-y-16 mt-10 md:mt-0 lg:px-4">

                <div>
                    <h3 class="text-xl font-bold border-b-2 border-black pb-2 mb-6 tracking-widest">人気記事</h3>
                    <div class="space-y-6">
                        <?php
                        global $wpdb;
                        $table_views = $wpdb->prefix . 'post_views';
                        $table_posts = $wpdb->prefix . 'posts';
                        $sql = "
                            SELECT p.ID, pvc.`count` as views
                            FROM {$table_views} pvc
                            INNER JOIN {$table_posts} p ON pvc.id = p.ID
                            WHERE p.post_type = 'post' 
                            AND p.post_status = 'publish'
                            AND pvc.type = 4
                            ORDER BY views DESC
                            LIMIT 5
                        ";
                        $top_viewed = $wpdb->get_results($sql);
                        $post_ids = [];
                        if ($top_viewed) {
                            foreach ($top_viewed as $row) {
                                if (is_numeric($row->ID) && $row->ID > 0) {
                                    $post_ids[] = intval($row->ID);
                                }
                            }
                        }
                        if (!empty($post_ids)) {
                            $popular_args = array(
                                'post_type'      => 'post',
                                'post__in'       => $post_ids,
                                'orderby'        => 'post__in',
                                'posts_per_page' => 3,
                                'ignore_sticky_posts' => 1,
                            );
                            $popular_query = new WP_Query($popular_args);
                        } else {
                            $popular_query = new WP_Query();
                        }
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
                        else :
                        ?>
                            <p class="text-sm text-gray-500">集計中...</p>
                        <?php endif; ?>
                    </div>
                </div>

                <div>
                    <form role="search" method="get" action="<?php echo home_url('/'); ?>" class="relative">
                        <input type="text" name="s" value="<?php echo get_search_query(); ?>" placeholder="記事検索" class="w-full border border-gray-400 py-3 pl-10 pr-4 rounded-sm text-sm focus:outline-none focus:border-gray-600" />
                        <button type="submit" class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" /></svg>
                        </button>
                    </form>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-6 font-noto tracking-widest">カテゴリー</h3>
                    <?php if ($display_cats) : ?>
                    <div class="grid grid-cols-2 gap-2">
                        <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="block text-center border border-gray-400 bg-white hover:bg-gray-100 text-gray-700 px-2 py-2 text-xs font-bold transition-colors !no-underline">すべて</a>
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
</main>

<?php get_footer(); ?>