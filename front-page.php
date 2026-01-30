<?php get_header('home'); ?>

<main id="main" class="min-h-screen">

  <?php
  // Hero
  $hero_bg = get_theme_file_uri('images/hero-bg.png'); // ここに背景画像を置く（後で差し替えOK）
  ?>

  <section
    class="relative min-h-[85vh] md:min-h-[720px] overflow-hidden text-white"
    style="background-image: url('<?php echo esc_url($hero_bg); ?>'); background-size: cover; background-position: center;"
  >
    <div class="absolute inset-0 bg-black/0"></div>

    <div class="absolute inset-0 bg-gradient-to-tr from-black/40 via-black/20 to-transparent"></div>

    <div class="relative mx-auto max-w-6xl px-4 pt-28 md:pt-36 pb-16">
        <div class="mb-6 flex justify-center">
        <img
            src="<?php echo esc_url(get_template_directory_uri() . '/images/logo-white.png'); ?>"
            alt="AMT | ART MIND TRUST WEB. DTP. MOVIE DESIGN COMPANY"
            class="w-[520px] max-w-full"
            loading="eager"
            decoding="async"
        >
        </div>

        <div class="mb-6 flex justify-center py-30">
        <img
            src="<?php echo esc_url(get_template_directory_uri() . '/images/top-switch.png'); ?>"
            alt="scroll"
            class="w-[38px] max-w-full"
            loading="eager"
            decoding="async"
        >
        </div>
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

      <div class="mt-8 flex flex-wrap gap-3">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>"
           class="inline-flex items-center rounded-full bg-white px-6 py-3 text-[14px] font-medium tracking-[0.08em] text-zinc-900 !no-underline">
          お問い合わせ
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

<section id="news" class="w-full">

  <div class="bg-gray-300">
    <div class="mx-auto max-w-6xl px-4 py-8 text-center">
      <h2 class="font-lato text-5xl font-black tracking-[0.25em] text-gray-700">NEWS</h2>
      <p class="mt-2 text-2xl font-semibold tracking-[0.25em] text-gray-600">新着情報</p>
    </div>
  </div>

  <div class="bg-gray-100 pb-15">
    <div class="mx-auto max-w-6xl px-4 py-10">
      <div class="grid gap-6 md:grid-cols-[1fr_auto] md:items-end">

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

        <div class="text-center md:text-right">
          <a href="<?php echo esc_url(home_url('/news/')); ?>" class="btn-view-more mt-6">
              VIEW MORE <span aria-hidden="true">〉</span>
          </a>
        </div>

      </div>
    </div>
  </div>

</section>

<section class="w-full pb-15">

  <div class="bg-gray-300">
    <div class="mx-auto max-w-6xl px-4 py-8 text-center">
      <p class="font-lato text-5xl font-black tracking-[0.25em] text-gray-700">WORKS</p>
      <p class="mt-2 text-2xl font-semibold tracking-[0.25em] text-gray-600">業務内容</p>
    </div>
  </div>

  <p class="mx-auto mt-8 md:mb-20 md:mt-15 max-w-3xl text-center text-xl leading-8 text-gray-700">
    <span class="md:hidden">エー・エム・ティーでは<br>WEB・印刷物・動画など幅広い分野を<br>ワンストップでサポートします</span>
    <span class="hidden md:inline">エー・エム・ティーではWEB・印刷物・動画など<br>幅広い分野をワンストップでサポートします</span>
  </p>

  <div class="">
    <div class="mx-auto max-w-6xl px-4 py-20">

      <div class="grid gap-y-30 md:gap-8 md:grid-cols-3">

        <div class="relative rounded-2xl bg-white border-2 border-gray-500 px-8 pb-8 pt-20 text-center">
        <div class="absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2 bg-white px-4">
            <img
            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/works-web.svg"
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

        <hr class="mx-auto mt-5 w-60 border-t border-gray-900 border-2" />

        <p class="mt-4 text-m leading-7 text-gray-700">
            各種WEBサイト<br>LPページ<br>
            サイトリニューアル　...
        </p>

        <a href="<?php echo esc_url(home_url('/works/website/')); ?>" class="btn-view-more mt-6">
            VIEW MORE <span aria-hidden="true">〉</span>
        </a>
        </div>

        <div class="relative rounded-2xl bg-white border-2 border-gray-500 px-8 pb-8 pt-20 text-center">

        <div class="absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2 bg-white px-4">
            <img
            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/works-graphic.svg"
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

        <hr class="mx-auto mt-5 w-60 border-t border-gray-900 border-2" />

        <p class="mt-4 text-sm leading-7 text-gray-700">
            チラシ／ポスター<br>
            パンフレット／会社案内<br>
            ロゴデザイン　...
        </p>

        <a href="<?php echo esc_url(home_url('/works/graphic/')); ?>" class="btn-view-more mt-6">
            VIEW MORE <span aria-hidden="true">〉</span>
        </a>
        </div>

        <div class="relative rounded-2xl bg-white border-2 border-gray-500 px-8 pb-8 pt-20 text-center">

        <div class="absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2 bg-white px-4">
            <img
            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/works-movie.svg"
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

        <hr class="mx-auto mt-5 w-60 border-t border-gray-900" />

        <p class="mt-4 text-sm leading-7 text-gray-700">
            企業プロモーション<br>
            商品・サービス紹介<br>
            WEB広告動画　...
        </p>

        <a href="<?php echo esc_url(home_url('/works/movie/')); ?>" class="btn-view-more mt-6">
            VIEW MORE <span aria-hidden="true">〉</span>
        </a>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="w-full">

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

  <div class="bg-gray-100">
    <div class="mx-auto max-w-6xl px-4 py-30">

      <div class="grid gap-10 md:grid-cols-2 items-center">

        <div>
          <img
            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/service-placeholder.png"
            alt=""
            class="w-full rounded-xl object-cover"
            loading="lazy"
            decoding="async"
          >
        </div>

        <div class="text-center md:text-left">
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

          <a href="<?php echo esc_url(home_url('/service/')); ?>" class="btn-view-more mt-6">
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

  <section id="blog" class="w-full">
  <div class="bg-gray-300 py-10">
    <div class="mx-auto max-w-6xl text-center">
      <h2 class="font-lato text-5xl font-black tracking-[0.25em] text-gray-700">BLOG</h2>
      <p class="mt-2 text-2xl font-semibold tracking-[0.25em] text-gray-600">ブログ</p>
    </div>
  </div>
    <div class="w-full bg-gray-100">
        <div class="mx-auto px-10 py-20">

            <div class="grid gap-8 md:grid-cols-4">
                <?php if ($blog_query->have_posts()): ?>
                <?php while ($blog_query->have_posts()): $blog_query->the_post(); ?>
                    <article class="overflow-hidden">
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

            <div class="mt-10 text-center md:text-center">
              <a href="#" class="btn-view-more mt-6">
                  VIEW MORE <span aria-hidden="true">〉</span>
              </a>
            </div>

        </div>
    </div>
    </section>

    <section id="company" class="w-full bg-gray-300 py-14">
      <div class="mx-auto max-w-6xl px-4">
        <div class="text-center">
          <h2 class="font-lato text-5xl font-black tracking-[0.25em] text-gray-700">COMPANY</h2>
          <p class="mt-2 text-2xl font-semibold tracking-[0.25em] text-gray-600">会社案内</p>
        </div>
      </div>

      <div class="mt-10 w-full bg-white">
        <div class="mx-auto max-w-6xl px-4 py-20">

          <div class="relative rounded-2xl bg-white border-2 border-gray-500 px-8 pb-10 pt-20">

            <div class="absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2 bg-white px-6">
              <img
                src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/company.svg"
                alt=""
                class="h-32 w-32 object-contain"
                loading="lazy"
                decoding="async"
              >
            </div>
            <p class="text-center font-outfit text-2xl font-semibold tracking-[0.3em] text-gray-700">
              ABOUT US
            </p>
            <p class="mt-2 text-center text-l text-gray-700">
              私たちについて
            </p>

            <div class="grid gap-10 md:grid-cols-2 md:items-start py-20">

              <div>
                <div class="overflow-hidden border-2 border-gray-300 bg-white">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3270.3512271917957!2d138.3884953!3d34.9478046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601a49cfe3fd7c77%3A0x110ca5013982658f!2z44Ko44O844O744Ko44Og44O744OG44Kj44O8!5e0!3m2!1sja!2sjp!4v1769586596088!5m2!1sja!2sjp"
                    width="100%"
                    height="420"
                    style="border:0; filter: grayscale(1);"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen
                  ></iframe>
                </div>

                <div class="mt-6 flex justify-center">
                  <a href="https://www.google.com/maps/place/%E3%82%A8%E3%83%BC%E3%83%BB%E3%82%A8%E3%83%A0%E3%83%BB%E3%83%86%E3%82%A3%E3%83%BC/@34.9477532,138.3859711,17z/data=!3m1!4b1!4m6!3m5!1s0x601a49cfe3fd7c77:0x110ca5013982658f!8m2!3d34.9477532!4d138.388546!16s%2Fg%2F1tfv0lt1?entry=tts&g_ep=EgoyMDI2MDEyNi4wIPu8ASoASAFQAw%3D%3D&skid=be5a934d-fab6-4c57-998a-0a4253c6ecc0" target="_blank" class="btn-view-more mt-6">
                      VIEW MORE <span aria-hidden="true">〉</span>
                  </a>
                </div>
              </div>

              <div class="text-gray-700">
                <dl class="grid grid-cols-[100px_1fr] sm:grid-cols-[120px_1fr] gap-x-8 gap-y-5 text-sm leading-7">
                  <dt class="font-bold tracking-widest">会社名</dt>
                  <dd>株式会社AMT（エー・エム・ティー）</dd>

                  <dt class="font-bold tracking-widest">住　所</dt>
                  <dd>〒422-8046 静岡県静岡市駿河区中島153-2</dd>

                  <dt class="font-bold tracking-widest">ＴＥＬ</dt>
                  <dd>054-286-4085</dd>

                  <dt class="font-bold tracking-widest">ＦＡＸ</dt>
                  <dd>054-286-7992</dd>

                  <dt class="font-bold tracking-widest">設　立</dt>
                  <dd>1985年12月2日</dd>

                  <dt class="font-bold tracking-widest">資本金</dt>
                  <dd>10,000,000円</dd>

                  <dt class="font-bold tracking-widest">従業員数</dt>
                  <dd>13名</dd>

                  <dt class="font-bold tracking-widest">業務内容</dt>
                  <dd>
                    ホームページ制作／Web運営支援／広告・印刷物／グラフィックデザイン／パッケージデザイン／ロゴデザイン／販促ツール制作／ノベルティ制作／映像・動画制作
                  </dd>
                </dl>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

<section id="contact" class="w-full bg-gray-300">
  <div class="mx-auto max-w-6xl px-4">
    <div class="text-center">
      <h2 class="font-lato text-5xl font-black tracking-[0.25em] text-gray-700">CONTACT</h2>
      <p class="mt-2 text-2xl font-semibold tracking-[0.25em] text-gray-600">お問い合わせ</p>
    </div>
  </div>

  <div class="mt-10 w-full bg-gray-100">
    <div class="mx-auto max-w-6xl px-4 py-20">

      <div class="mx-auto grid max-w-5xl gap-10 md:grid-cols-2 md:items-start">

        <div class="mx-auto w-full max-w-xl text-center">
          <a
            href="<?php echo esc_url(home_url('/contact/')); ?>"
            class="group mx-auto inline-flex w-full max-w-xl items-center justify-center gap-5 rounded-full border-2 border-gray-700 bg-transparent px-10 py-8 text-gray-800 !no-underline hover:bg-gray-200"
          >
            <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full p-2.5">
              <img
                src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/contact-email.png"
                alt=""
                class="block h-12 w-12 object-contain"
                loading="lazy"
                decoding="async"
              >
            </span>
            <span class="font-noto text-xl font-bold tracking-widest">お問い合わせ</span>
          </a>
        </div>

        <div class="mx-auto w-full max-w-xl text-center">
          <a
            href="tel:0542864085"
            class="group inline-flex w-full items-center justify-center gap-5 rounded-full border-2 border-gray-700 bg-transparent px-10 py-8 text-gray-800 !no-underline hover:bg-gray-200"
            aria-label="電話をかける 054-286-4085"
          >
            <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full p-2.5">
              <img
                src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/contact-tel.png"
                alt=""
                class="block h-10 w-10 object-contain"
                loading="lazy"
                decoding="async"
              >
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

<?php
get_footer();