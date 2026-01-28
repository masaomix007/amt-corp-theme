<?php
get_header();
?>

<main id="main" class="min-h-screen">

  <?php
  // Hero
  $hero_bg = get_theme_file_uri('images/hero-bg.png'); // ここに背景画像を置く（後で差し替えOK）
  ?>

  <section
    class="relative min-h-[85vh] md:min-h-[720px] overflow-hidden text-white"
    style="background-image: url('<?php echo esc_url($hero_bg); ?>'); background-size: cover; background-position: center;"
  >
    <!-- 背景の暗幕（読みやすさ） -->
    <div class="absolute inset-0 bg-black/0"></div>

    <!-- 右上の薄い色味を足したい場合（お好み） -->
    <div class="absolute inset-0 bg-gradient-to-tr from-black/40 via-black/20 to-transparent"></div>

    <!-- コンテンツ -->
    <div class="relative mx-auto max-w-6xl px-4 pt-28 md:pt-36 pb-16">
        <!-- Hero内：ロゴ＆キャッチを画像に -->
        <div class="mb-6">
        <img
            src="<?php echo esc_url(get_template_directory_uri() . '/images/logo-white.png'); ?>"
            alt="AMT | ART MIND TRUST WEB. DTP. MOVIE DESIGN COMPANY"
            class="w-[520px] max-w-full"
            loading="eager"
            decoding="async"
        >
        </div>

      <!-- 指定：Noto Sans JP Regular / 18px / 行間29 / 文字間10% -->
      <div class="mt-6 max-w-[720px] font-noto text-[18px] leading-[29px] tracking-[0.1em] font-normal text-white/90">
        <p>デザインで、価値を伝える。</p>

        <p class="mt-5">
          紙・WEB・動画。<br>
          時代に合わせて手法は変わっても、<br>
          想いを正しく、深く、心に届けるという本質は変わりません。
        </p>

        <p class="mt-5">
          AIが進化する今だからこそ、<br>
          人の感性と誠実な対話を大切に。
        </p>

        <p class="mt-5">
          40年以上にわたり培ってきた経験と信頼をもとに、<br>
          お客様と真摯に向き合い、<br>
          価値あるコミュニケーションを、ともに創造します。  
        </p>
      </div>

      <!-- ボタン（見た目だけ先に） -->
      <div class="mt-8 flex flex-wrap gap-3">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>"
           class="inline-flex items-center rounded-full bg-white px-6 py-3 text-[14px] font-medium tracking-[0.08em] text-zinc-900">
          お問い合わせ
        </a>

        <a href="<?php echo esc_url(home_url('/company/')); ?>"
           class="inline-flex items-center rounded-full border border-white/35 bg-white/10 px-6 py-3 text-[14px] font-medium tracking-[0.08em] text-white">
          会社情報
        </a>
      </div>
    </div>
  </section>

<?php
$news_query = new WP_Query([
  'post_type'      => 'post',
  'posts_per_page' => 3, // 3件表示
  'post_status'    => 'publish',
  'no_found_rows'  => true,
  'category_name' => 'news',
]);
?>

<!-- NEWS -->
<section id="news" class="w-full">

  <!-- 見出し帯（WORKS等と同じ構造） -->
  <div class="bg-gray-300 ">
    <div class="mx-auto max-w-6xl px-4 py-8 text-center">
      <h2 class="font-lato text-5xl font-black tracking-[0.25em] text-gray-700">NEWS</h2>
      <p class="mt-2 text-2xl font-semibold tracking-[0.25em] text-gray-600">新着情報</p>
    </div>
  </div>

  <!-- コンテンツ帯（薄いグレー） -->
  <div class="bg-gray-100 pb-15">
    <div class="mx-auto max-w-6xl px-4 py-10">
      <div class="grid gap-6 md:grid-cols-[1fr_auto] md:items-end">

        <!-- 左：日付＋件名 -->
        <div class="space-y-4">
          <?php if ($news_query->have_posts()): ?>
            <?php while ($news_query->have_posts()): $news_query->the_post(); ?>
              <div class="flex items-center gap-10 text-l">
                <time class="shrink-0 tracking-widest text-gray-700" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                  <?php echo esc_html(get_the_date('Y.m.d')); ?>
                </time>
                <a class="text-gray-800 !no-underline" href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php else: ?>
            <p class="text-sm text-gray-700">現在お知らせはありません。</p>
          <?php endif; ?>
        </div>

        <!-- 右下：VIEW MORE（同じ薄いグレー帯の中） -->
        <div class="md:text-right">
          <a href="#"
             class="mt-6 inline-flex items-center justify-center gap-2 border border-gray-700 px-6 py-2 text-m tracking-[0.25em] text-gray-800 hover:bg-gray-200 !no-underline">
            VIEW MORE <span aria-hidden="true">〉</span>
          </a>
        </div>

      </div>
    </div>
  </div>

</section>

<!-- WORKS -->
<section class="w-full pb-15">

  <!-- 見出し帯（NEWSと同構造） -->
  <div class="bg-gray-300">
    <div class="mx-auto max-w-6xl px-4 py-8 text-center">
      <p class="font-lato text-5xl font-black tracking-[0.25em] text-gray-700">WORKS</p>
      <p class="mt-2 text-2xl font-semibold tracking-[0.25em] text-gray-600">業務内容</p>
    </div>
  </div>

  <!-- 説明文（上にマージン追加） -->
  <p class="mx-auto mt-8 md:mb-20 md:mt-15 max-w-3xl text-center text-xl leading-8 text-gray-700">
    エー・エム・ティーではWEB・印刷物・動画など<br class="hidden sm:block">
    幅広い制作をワンストップでサポートします
  </p>

  <!-- コンテンツ帯 -->
  <div class="">
    <div class="mx-auto max-w-6xl px-4 py-20">

      <!-- WORKS 一覧 -->
      <div class="grid gap-8 md:grid-cols-3">

        <!-- WORKS ITEM -->
        <div class="relative rounded-2xl bg-white border-2 border-gray-500 px-8 pb-8 pt-20 text-center">
        <!-- アイコン：枠線に乗せて、背面の白で枠線を途切れさせる -->
        <div class="absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2 bg-white px-4">
            <img
            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/works-web.png"
            alt=""
            class="mx-auto h-32 w-32 object-contain"
            loading="lazy"
            decoding="async"
            >
        </div>

        <p class="font-outfit text-2xl font-semibold tracking-[0.3em] text-gray-700">
            WEBSITE
        </p>
        <p class="mt-2 text-l text-gray-700">
            ホームページ制作・運用支援
        </p>

        <!-- 横線 -->
        <hr class="mx-auto mt-5 w-60 border-t border-gray-900 border-2" />

        <p class="mt-4 text-m leading-7 text-gray-700">
            各種WEBサイト<br>LPページ<br>
            サイトリニューアル　...
        </p>

        <a href="#"
            class="mt-6 inline-flex items-center justify-center gap-2 border-2 border-gray-700 px-6 py-2 text-m tracking-[0.25em] text-gray-800 hover:bg-gray-200 !no-underline">
            VIEW MORE <span aria-hidden="true">〉</span>
        </a>
        </div>

        <!-- WORKS ITEM : GRAPHIC -->
        <div class="relative rounded-2xl bg-white border-2 border-gray-500 px-8 pb-8 pt-20 text-center">

        <!-- アイコン（枠線に乗せる） -->
        <div class="absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2 bg-white px-4">
            <img
            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/works-graphic.png"
            alt=""
            class="mx-auto h-32 w-32 object-contain"
            loading="lazy"
            decoding="async"
            >
        </div>

        <p class="font-outfit text-2xl font-semibold tracking-[0.3em] text-gray-700">
            GRAPHIC
        </p>

        <p class="mt-2 text-l text-gray-700">
            印刷・グラフィック制作
        </p>

        <!-- 横線 -->
        <hr class="mx-auto mt-5 w-60 border-t border-gray-900 border-2" />

        <p class="mt-4 text-sm leading-7 text-gray-700">
            チラシ／ポスター<br>
            パンフレット／会社案内<br>
            ロゴデザイン　...
        </p>

        <a href="#"
            class="mt-6 inline-flex items-center justify-center gap-2 border-2 border-gray-700 px-6 py-2 text-m tracking-[0.25em] text-gray-800 hover:bg-gray-200 !no-underline">
            VIEW MORE <span aria-hidden="true">〉</span>
        </a>
        </div>

        <!-- WORKS ITEM : MOVIE -->
        <div class="relative rounded-2xl bg-white border-2 border-gray-500 px-8 pb-8 pt-20 text-center">

        <!-- アイコン（枠線に乗せる） -->
        <div class="absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2 bg-white px-4">
            <img
            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/works-movie.png"
            alt=""
            class="mx-auto h-32 w-32 object-contain"
            loading="lazy"
            decoding="async"
            >
        </div>

        <p class="font-outfit text-2xl font-semibold tracking-[0.3em] text-gray-700">
            MOVIE
        </p>

        <p class="mt-2 text-l text-gray-700">
            映像・動画制作
        </p>

        <!-- 横線 -->
        <hr class="mx-auto mt-5 w-60 border-t border-gray-900" />

        <p class="mt-4 text-sm leading-7 text-gray-700">
            企業プロモーション<br>
            商品・サービス紹介<br>
            WEB広告動画　...
        </p>

        <a href="#"
            class="mt-6 inline-flex items-center justify-center gap-2 border-2 border-gray-700 px-6 py-2 text-m tracking-[0.25em] text-gray-800 hover:bg-gray-200 !no-underline">
            VIEW MORE <span aria-hidden="true">〉</span>
        </a>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- SERVICE -->
<section class="w-full">

  <!-- 見出し帯（NEWSと同一設計） -->
  <div class="bg-gray-300">
    <div class="mx-auto max-w-6xl px-4 py-8 text-center">
      <p class="font-lato text-5xl font-black tracking-[0.25em] text-gray-700">
        SERVICE
      </p>
      <p class="mt-2 text-2xl font-semibold tracking-[0.25em] text-gray-600">
        サービス
      </p>
    </div>
  </div>

  <!-- コンテンツ帯 -->
  <div class="bg-gray-100">
    <div class="mx-auto max-w-6xl px-4 py-30">

      <div class="grid gap-10 md:grid-cols-2 items-center">

        <!-- 画像（仮） -->
        <div>
          <img
            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/service-placeholder.png"
            alt=""
            class="w-full rounded-xl object-cover"
            loading="lazy"
            decoding="async"
          >
        </div>

        <!-- テキスト -->
        <div>
          <p class="font-outfit text-3xl font-semibold tracking-[0.2em] text-gray-700">
            デザインサブスク
          </p>

          <p class="mt-6 text-base leading-8 text-gray-700">
            WEBサイトの更新、バナー制作、印刷物のデザインなど、<br>
            日々発生するクリエイティブ業務を<br>
            月額定額制で柔軟にサポートします。
          </p>

          <p class="mt-4 text-base leading-8 text-gray-700">
            社内にデザイナーを抱えることなく、<br>
            必要なときに、必要な分だけ。<br>
            エー・エム・ティーがパートナーとして伴走します。
          </p>

          <a href="#"
             class="mt-8 inline-flex items-center gap-2 border-2 border-gray-700 px-6 py-2 text-m tracking-[0.25em] text-gray-800 hover:bg-gray-200 !no-underline">
            VIEW MORE <span aria-hidden="true">〉</span>
          </a>
        </div>

      </div>
    </div>
  </div>
</section>

    <?php
    // BLOG（通常投稿）最新3件
    $blog_query = new WP_Query([
    'post_type'           => 'post',
    'posts_per_page'      => 8,
    'post_status'         => 'publish',
    'orderby'        => 'date',      // 公開日基準
    'order'          => 'DESC',      // 新しい順
    'ignore_sticky_posts' => true,
    'category__not_in' => [ get_cat_ID('news') ],
    ]);
    ?>

    <section id="blog" class="w-full bg-gray-300 py-14">
    <!-- 見出し（NEWSと同一） -->
    <div class="mx-auto max-w-6xl px-4">
        <div class="text-center">
        <h2 class="font-lato text-5xl font-black tracking-[0.25em] text-gray-700">BLOG</h2>
        <p class="mt-2 text-2xl font-semibold tracking-[0.25em] text-gray-600">ブログ</p>
        </div>
    </div>

    <!-- 薄いグレーのブロック -->
    <div class="mt-10 w-full bg-gray-100">
        <div class="mx-auto px-10 py-20">

            <div class="grid gap-8 md:grid-cols-4">
                <?php if ($blog_query->have_posts()): ?>
                <?php while ($blog_query->have_posts()): $blog_query->the_post(); ?>
                    <article class="overflow-hidden">
                    <!-- サムネ -->
                    <a href="<?php the_permalink(); ?>" class="block !no-underline">
                        <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('large', [
                            'class' => 'aspect-[16/9] w-full object-cover',
                            'loading' => 'lazy',
                            'decoding' => 'async',
                        ]); ?>
                        <?php else: ?>
                        <div class="aspect-[16/9] w-full bg-gray-200"></div>
                        <?php endif; ?>
                    </a>

                    <!-- テキスト -->
                    <div class="p-6">
                        <time class="block text-xl font-zen font-bold tracking-widest text-gray-900" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                        <?php echo esc_html(get_the_date('Y.m.d')); ?>
                        </time>

                        <?php
                        // news 以外のカテゴリを最大2つまで表示（なければ非表示）
                        $cats = get_the_category();
                        $news_id = get_cat_ID('news');

                        $badge_cats = [];
                        if (!empty($cats)) {
                            foreach ($cats as $cat) {
                                if ((int) $cat->term_id !== (int) $news_id) {
                                    $badge_cats[] = $cat;
                                }
                                if (count($badge_cats) >= 2) {
                                    break;
                                }
                            }
                        }
                        ?>

                        <?php if (!empty($badge_cats)): ?>
                        <div class="mt-3 flex flex-wrap gap-2">
                            <?php foreach ($badge_cats as $cat): ?>
                            <span
                                class="inline-flex items-center border border-gray-700 px-3 py-1 text-xs font-noto font-bold tracking-widest text-gray-800"
                                aria-label="<?php echo esc_attr($cat->name); ?>"
                            >
                                <?php echo esc_html($cat->name); ?>
                            </span>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>

                        <h3 class="mt-3 text-lg text-gray-800">
                        <a href="<?php the_permalink(); ?>" class="!no-underline">
                            <?php the_title(); ?>
                        </a>
                        </h3>
                    </div>
                    </article>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else: ?>
                <p class="text-sm text-gray-700">現在ブログ記事はありません。</p>
                <?php endif; ?>
            </div>

            <!-- 右下：VIEW MORE -->
            <div class="mt-10 text-center md:text-center">
                <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"
                class="inline-flex items-center justify-center gap-2 border border-gray-700 px-6 py-2 text-m tracking-[0.25em] text-gray-800 hover:bg-gray-200 !no-underline">
                VIEW MORE <span aria-hidden="true">〉</span>
                </a>
            </div>

        </div>
    </div>
    </section>


</main>

<?php
get_footer();
