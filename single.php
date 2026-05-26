<?php get_header(); ?>

<main class="w-full pt-20 bg-white">

    <div class="relative w-full bg-gray-200 py-10 md:py-14 text-center">
        <h1 class="font-outfit text-4xl font-bold tracking-[0.2em] mb-2">BLOG</h1>
        <p class="font-noto text-xl tracking-[0.2em] text-gray-600">ブログ</p>
    </div>

    <div class="container mx-auto max-w-6xl px-4 py-12 md:py-16">
        <div class="grid grid-cols-1 md:grid-cols-[1fr_300px] gap-12 items-start">

            <article class="w-full">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <header class="mb-8 md:mb-12">
                        <div class="flex items-center gap-4 mb-4">
                            <time class="font-outfit text-base text-gray-500 font-bold" datetime="<?php echo get_the_date('c'); ?>">
                                <?php echo get_the_date('Y.m.d'); ?>
                            </time>
                        </div>

                        <h2 class="text-2xl md:text-3xl font-bold leading-tight md:leading-relaxed text-gray-800 mb-6">
                            <?php the_title(); ?>
                        </h2>

                        <?php
                        $categories = get_the_category();
                        if ($categories) : ?>
                            <div class="flex flex-wrap gap-2">
                                <?php foreach ($categories as $cat) : 
                                    if ($cat->slug === 'news') continue;
                                ?>
                                    <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="!no-underline border border-gray-400 px-3 py-1 text-xs text-gray-600 font-bold bg-white hover:bg-gray-100 transition-colors">
                                        <?php echo esc_html($cat->name); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </header>
                <?php /*
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="mb-10 overflow-hidden rounded-lg">
                            <?php the_post_thumbnail('large', ['class' => 'w-full h-auto object-cover']); ?>
                        </div>
                    <?php endif; ?>
                */ ?>
                    <div class="post-content prose prose-zinc max-w-none text-gray-700 leading-8 mb-16
                        [&_h2]:text-2xl [&_h2]:font-bold [&_h2]:border-l-4 [&_h2]:border-gray-800 [&_h2]:pl-4 [&_h2]:my-10
                        [&_h3]:text-xl [&_h3]:font-bold [&_h3]:my-8
                        [&_p]:mb-6 [&_img]:rounded-md [&_img]:shadow-sm">
                        <?php the_content(); ?>
                    </div>

                    <div class="flex justify-between items-center py-10 border-t border-b border-gray-200 font-bold text-sm md:text-base">
                        <div class="w-1/3 text-left">
                            <?php previous_post_link('%link', '＜ 前の記事', false, '', 'category'); ?>
                        </div>
                        <div class="w-1/3 text-center">
                            <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="text-gray-400 hover:text-gray-800">一覧に戻る</a>
                        </div>
                        <div class="w-1/3 text-right">
                            <?php next_post_link('%link', '次の記事 ＞', false, '', 'category'); ?>
                        </div>
                    </div>

                <?php endwhile; endif; ?>
            </article>

            <aside class="w-full space-y-12 md:space-y-16 mt-10 md:mt-0">
                
                <div>
                    <h3 class="text-xl font-bold border-b-2 border-black pb-2 mb-6 tracking-widest">人気記事</h3>
                    <div class="space-y-6">
                        <?php
                        // ★修正版6：列名を 'content' から 'id' に修正し、type=4 (合計) を取得
                        global $wpdb;

                        $table_views = $wpdb->prefix . 'post_views';
                        $table_posts = $wpdb->prefix . 'posts';

                        // Post Views Counterのテーブル仕様（id = 投稿ID, type = 4 が全期間合計）に合わせて結合
                        // count は予約語なので `` で囲む
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

                        // クエリ実行
                        $top_viewed = $wpdb->get_results($sql);

                        // デバッグ用：もしこれでもエラーが出る場合、以下のコメントを外してください
                        // if(!empty($wpdb->last_error)) { echo '<p class="text-red-500 text-xs">' . esc_html($wpdb->last_error) . '</p>'; }

                        $post_ids = [];
                        if ($top_viewed) {
                            foreach ($top_viewed as $row) {
                                if (is_numeric($row->ID) && $row->ID > 0) {
                                    $post_ids[] = intval($row->ID);
                                }
                            }
                        }

                        // 取得したIDで記事を表示
                        if (!empty($post_ids)) {
                            $popular_args = array(
                                'post_type'      => 'post',
                                'post__in'       => $post_ids,
                                'orderby'        => 'post__in', // ランキング順を維持
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
                    <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>" class="relative">
                        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="記事検索" class="w-full border border-gray-400 py-3 pl-10 pr-4 rounded-sm text-sm focus:outline-none focus:border-gray-600" />
                        <button type="submit" id="searchsubmit" class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </button>
                    </form>
                </div>

                <div class="sidebar-related">
                        <?php
                        if ( function_exists( 'echo_crp' ) ) {
                            echo_crp();
                        }
                        ?>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-6 font-noto tracking-widest">タグ</h3>
                    <?php
                    $post_tags = get_the_tags();
                    if ($post_tags) : ?>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($post_tags as $tag) : ?>
                                <span class="border border-gray-400 px-4 py-1 text-xs text-gray-600 font-bold bg-white rounded-full">
                                    <?php echo esc_html($tag->name); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    <?php else : ?>
                        <p class="text-sm text-gray-400">タグはありません</p>
                    <?php endif; ?>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-6 font-noto tracking-widest">カテゴリー</h3>
                    <?php
                    $exclude_slugs = ['blog', 'news', 'uncategorized'];
                    
                    // hide_empty を 1 に変更
                    $cat_args = array(
                        'orderby' => 'name', 
                        'order' => 'ASC', 
                        'hide_empty' => 1 
                    );
                    $all_cats = get_categories($cat_args);
                    $display_cats = [];
                    foreach ($all_cats as $cat) {
                        if (!in_array($cat->slug, $exclude_slugs)) $display_cats[] = $cat;
                    }

                    if ($display_cats) : ?>
                    <div class="grid grid-cols-2 gap-2">
                        <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="flex items-center justify-center border border-gray-400 bg-white hover:bg-gray-100 text-gray-700 px-2 py-2 text-xs font-bold transition-colors !no-underline">すべて</a>
                        
                        <?php foreach($display_cats as $cat): ?>
                            <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="flex items-center justify-center border border-gray-400 bg-white hover:bg-gray-100 text-gray-700 px-2 py-2 text-xs font-bold transition-colors !no-underline">
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
        </section>

</main>

<?php get_footer(); ?>