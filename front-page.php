<?php get_header('home'); ?>

<main id="main" class="min-h-screen">

<?php $hero_bg = get_theme_file_uri('images/hero-bg.png'); ?>

<section class="relative w-full bg-cover bg-center bg-fixed text-white"
  style="background-image: url('<?php echo esc_url($hero_bg); ?>');"
>
  <div class="absolute inset-0 bg-black/20 z-0"></div>

  <div class="relative z-10 flex h-screen w-full flex-col items-center justify-center">
    
    <img
      src="<?php echo esc_url(get_template_directory_uri() . '/images/top-logo.svg'); ?>"
      alt="AMT | ART MIND TRUST WEB. DTP. MOVIE DESIGN COMPANY"
      class="w-[520px] max-w-full px-4"
      loading="eager"
      decoding="async"
    >

    <div class="absolute bottom-20 left-1/2 -translate-x-1/2">
      <a href="#news" class="scroll-btn">
        <div class="mouse-icon border-white">
          <div class="mouse-dot bg-white"></div>
        </div>
        <span class="scroll-text text-white">scroll</span>
      </a>
    </div>
  </div>

  <div id="message-area" class="relative z-10 mx-auto w-full max-w-[1440px] px-6 pb-40 pt-20 lg:px-10">
    <div class="mx-auto max-w-[720px] font-noto text-[18px] leading-[29px] tracking-[0.1em] font-normal text-white/90 text-center md:text-left">
      <p>デザインで、価値を伝える。</p>
      <p class="mt-10">
        紙・WEB・動画。<br>
        時代に合わせて手法は変わっても、<br>
        想いを正しく、深く、心に届けるという本質は変わりません。
      </p>
      <p class="mt-10">
        AIが進化する今だからこそ、<br>
        人の感性と誠実な対話を大切に。
      </p>
      <p class="mt-10">
        40年以上にわたり培ってきた経験と信頼をもとに、<br>
        お客様と真摯に向き合い、<br>
        価値あるコミュニケーションを、ともに創造します。
      </p>
    </div>
  </div>

</section>

<header id="sticky-header" class="sticky top-0 z-50 w-full bg-white shadow-md text-gray-500 group">
  <div class="mx-auto w-full max-w-[1440px] px-6 lg:px-10">
    <div class="flex h-20 items-center justify-between">

      <div class="flex-shrink-0 w-auto min-w-[120px]">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="block hover:opacity-80 transition-opacity">
          <img 
            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/logo.svg" 
            alt="AMT" 
            class="h-10 w-auto invert grayscale contrast-10" 
          > 
        </a>
      </div>

      <nav class="hidden lg:flex items-center gap-x-12 font-outfit text-sm font-bold tracking-[0.2em]">
        <?php
          $nav_sticky_class = "!no-underline transition-colors duration-300 text-gray-500 hover:text-gray-800 relative py-2 group/link";
          $underline_sticky = '<span class="absolute bottom-0 left-0 h-[1px] w-0 bg-gray-800 transition-all duration-300 group-hover/link:w-full"></span>';
        ?>

        <div class="relative group/works h-full flex items-center">
            <a href="<?php echo esc_url(home_url('/works/')); ?>" class="<?php echo $nav_sticky_class; ?> z-20">
                WORKS
                <span class="absolute bottom-0 left-0 h-[1px] w-0 bg-gray-800 transition-all duration-300 group-hover/link:w-full group-hover/works:w-full"></span>
            </a>
            <div class="absolute top-8 left-1/2 -translate-x-1/2 pt-12 w-48 flex flex-col gap-2 invisible opacity-0 translate-y-2 group-hover/works:visible group-hover/works:opacity-100 group-hover/works:translate-y-0 transition-all duration-300 ease-out pointer-events-none group-hover/works:pointer-events-auto z-10">
                <a href="<?php echo esc_url(home_url('/works/website/')); ?>" class="!no-underline block bg-white border border-gray-100 hover:bg-gray-50 text-gray-600 text-xs font-noto font-normal text-center py-3 tracking-widest rounded-sm transition-colors shadow-lg">
                    ホームページ制作
                </a>
                <a href="<?php echo esc_url(home_url('/works/graphic/')); ?>" class="!no-underline block bg-white border border-gray-100 hover:bg-gray-50 text-gray-600 text-xs font-noto font-normal text-center py-3 tracking-widest rounded-sm transition-colors shadow-lg">
                    印刷・グラフィック
                </a>
                <a href="<?php echo esc_url(home_url('/works/movie/')); ?>" class="!no-underline block bg-white border border-gray-100 hover:bg-gray-50 text-gray-600 text-xs font-noto font-normal text-center py-3 tracking-widest rounded-sm transition-colors shadow-lg">
                    映像・動画制作
                </a>
            </div>
        </div>

        <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="<?php echo $nav_sticky_class; ?>">BLOG<?php echo $underline_sticky; ?></a>
        <a href="<?php echo esc_url(home_url('/company/')); ?>" class="<?php echo $nav_sticky_class; ?>">COMPANY<?php echo $underline_sticky; ?></a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="<?php echo $nav_sticky_class; ?>">CONTACT<?php echo $underline_sticky; ?></a>
      </nav>
  
      <div class="flex items-center gap-6">
        <div class="hidden lg:flex items-center gap-4">
              <a href="https://x.com/amt_web" target="_blank" class="text-gray-600 hover:text-gray-400 transition-colors">
                  <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.045 4.126H5.078z"/></svg>
              </a>
              <a href="https://www.instagram.com/amt_web/" target="_blank" class="text-gray-600 hover:text-gray-400 transition-colors">
                  <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.266.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                  </svg>
              </a>
        </div>

        <button type="button" class="menu-toggle-btn lg:hidden relative z-[60] w-8 h-6 flex flex-col justify-between focus:outline-none">
          <span class="block w-full h-[2px] bg-gray-600 transition-all duration-300 menu-bar-1 origin-center"></span>
          <span class="block w-full h-[2px] bg-gray-600 transition-all duration-300 menu-bar-2"></span>
          <span class="block w-full h-[2px] bg-gray-600 transition-all duration-300 menu-bar-3 origin-center"></span>
        </button>
      </div>
    </div>
  </div>
</header>

<?php
$news_query = new WP_Query([
  'post_type'      => 'news',
  'posts_per_page' => 3,
  'post_status'    => 'publish',
  'no_found_rows'  => true,
]);
?>

<section id="news" class="w-full">
<div class="bg-gray-300">
    <div class="mx-auto max-w-6xl px-4 py-8 text-center">
      <h2 class="font-lato text-4xl font-black tracking-[0.25em] text-gray-700">NEWS</h2>
      <p class="mt-2 text-xl font-semibold tracking-[0.25em] text-gray-600">新着情報</p>
    </div>
  </div>

  <div class="bg-gray-100 pb-15">
    <div class="mx-auto max-w-6xl px-16 lg:px-4 py-10">
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
      <p class="font-lato text-4xl font-black tracking-[0.25em] text-gray-700">WORKS</p>
      <p class="mt-2 text-xl font-semibold tracking-[0.25em] text-gray-600">業務内容</p>
    </div>
  </div>

  <p class="mx-auto mt-8 md:mb-20 md:mt-15 max-w-3xl text-center text-xl leading-8 text-gray-700">
    <span class="md:hidden">エー・エム・ティーでは<br>WEB・印刷物・動画など幅広い分野を<br>ワンストップでサポートします</span>
    <span class="hidden md:inline">エー・エム・ティーではWEB・印刷物・動画など<br>幅広い分野をワンストップでサポートします</span>
  </p>

  <div class="">
    <div class="mx-auto max-w-6xl px-16 ld:px-4 py-20">

      <div class="grid gap-y-30 md:gap-8 md:grid-cols-3">

        <div class="relative rounded-2xl bg-white border-2 border-gray-500 px-8 pb-8 pt-20 text-center">
        <div class="absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2 bg-white px-4">
            <img
            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-web.svg"
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
            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-graphic.svg"
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
            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-movie.svg"
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
      <p class="font-lato text-4xl font-black tracking-[0.25em] text-gray-700">
        SERVICE
      </p>
      <p class="mt-2 text-xl font-semibold tracking-[0.25em] text-gray-600">
        サービス
      </p>
    </div>
  </div>

  <div class="bg-gray-100">
    <div class="mx-auto max-w-6xl px-4 py-30">

      <div class="grid gap-10 md:grid-cols-2 items-center">

        <div>
          <img
            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/service-placeholder.webp"
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
    // BLOG（通常投稿）最新8件
    $blog_query = new WP_Query([
      'post_type'           => 'post',      // ★通常投稿のみを取得（これでカスタム投稿newsは除外されます）
      'posts_per_page'      => 8,
      'post_status'         => 'publish',
      'orderby'             => 'date',
      'order'               => 'DESC',
      'ignore_sticky_posts' => true,
      // 'category__not_in' => [ get_cat_ID('news') ], // ★不要なので削除（post_typeで分かれているため）
    ]);
    ?>

  <section id="blog" class="w-full">
  <div class="bg-gray-300 py-10">
    <div class="mx-auto max-w-6xl text-center">
      <h2 class="font-lato text-4xl font-black tracking-[0.25em] text-gray-700">BLOG</h2>
      <p class="mt-2 text-xl font-semibold tracking-[0.25em] text-gray-600">ブログ</p>
    </div>
  </div>
    <div class="w-full bg-gray-100">
        <div class="mx-auto px-16 lg:px-10 py-20">

          <div class="grid gap-8 md:grid-cols-4">
                <?php if ($blog_query->have_posts()): ?>
                <?php while ($blog_query->have_posts()): $blog_query->the_post(); ?>

                  <?php
                    // 6件目以降（インデックス5以上）は「スマホで非表示(hidden)、PCで表示(block)」にする
                    $visibility_class = ($blog_query->current_post >= 5) ? ' hidden md:block' : '';
                    ?>

                    <article class="overflow-hidden<?php echo $visibility_class; ?>">

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
                        // カテゴリ表示（newsカテゴリの除外ロジックは念のため残していますが、付与されていなければ無視されます）
                        $cats = get_the_category();
                        $news_id = get_cat_ID('news'); // newsカテゴリID取得

                        $badge_cats = [];
                        if (!empty($cats)) {
                            foreach ($cats as $cat) {
                                // もし誤ってnewsカテゴリが付いていても表示しないように除外
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
              <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="btn-view-more mt-6">
                  VIEW MORE <span aria-hidden="true">〉</span>
              </a>
            </div>

        </div>
    </div>
    </section>

    <section id="company" class="w-full bg-gray-300 py-14">
      <div class="mx-auto max-w-6xl px-4">
        <div class="text-center">
          <h2 class="font-lato text-4xl font-black tracking-[0.25em] text-gray-700">COMPANY</h2>
          <p class="mt-2 text-xl font-semibold tracking-[0.25em] text-gray-600">会社案内</p>
        </div>
      </div>

      <div class="mt-10 w-full bg-white">
        <div class="mx-auto max-w-6xl lg:px-4 px-16 py-20">

          <div class="relative rounded-2xl bg-white border-2 border-gray-500 px-8 pb-10 pt-20">

            <div class="absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2 bg-white px-6">
              <img
                src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-company.svg"
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
                  <a href="<?php echo esc_url(home_url('/company/')); ?>" class="btn-view-more mt-6">
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
      <h2 class="font-lato text-4xl font-black tracking-[0.25em] text-gray-700">CONTACT</h2>
      <p class="mt-2 text-xl font-semibold tracking-[0.25em] text-gray-600">お問い合わせ</p>
    </div>
  </div>

  <div class="mt-10 w-full bg-gray-100">
    <div class="mx-auto max-w-6xl px-16 lg:px-4 py-20">

      <div class="mx-auto grid max-w-5xl gap-10 md:grid-cols-2 md:items-start">

        <div class="mx-auto w-full max-w-xl text-center">
          <a
            href="<?php echo esc_url(home_url('/contact/')); ?>"
            class="group mx-auto inline-flex w-full max-w-xl items-center justify-center gap-5 rounded-full border-2 border-gray-700 bg-transparent px-10 py-8 text-gray-800 !no-underline hover:bg-gray-200"
          >
            <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full p-2.5">
              <img
                src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-email.svg"
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
                src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-tel.svg"
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