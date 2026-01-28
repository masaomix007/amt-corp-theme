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
      <div class="mt-6 max-w-[720px] font-['Noto_Sans_JP'] text-[18px] leading-[29px] tracking-[0.1em] font-normal text-white/90">
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
  'posts_per_page' => 1, // まずは1件でOK。あとで3件に戻してもいい
  'post_status'    => 'publish',
  'no_found_rows'  => true,
]);
?>

<section id="news" class="w-full bg-gray-200 py-14">
  <!-- 見出し -->
  <div class="mx-auto max-w-6xl px-4">
    <div class="text-center">
      <h2 class="text-5xl font-extrabold tracking-[0.25em] text-gray-700">NEWS</h2>
      <p class="mt-2 text-2xl font-semibold tracking-[0.25em] text-gray-600">新着情報</p>
    </div>
  </div>

  <!-- 薄いグレーのブロック（この中に日付＋件名＋VIEW MORE を入れる） -->
  <div class="mt-10 w-full bg-gray-100">
    <div class="mx-auto max-w-6xl px-4 py-10">
      <div class="grid gap-6 md:grid-cols-[1fr_auto] md:items-end">
        <!-- 左：日付＋件名 -->
        <div>
          <?php if ($news_query->have_posts()): ?>
            <?php while ($news_query->have_posts()): $news_query->the_post(); ?>
              <div class="flex items-center gap-10 text-xl">
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

        <!-- 右下：VIEW MORE（薄いグレーの箱の中） -->
        <div class="md:text-right">
            <a
            class="inline-flex items-center justify-center border border-gray-600 px-10 py-2 text-m tracking-widest text-gray-700 hover:bg-white/50 !no-underline"
            href="<?php echo esc_url(home_url('/news/')); ?>"
>
            VIEW MORE
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

</main>

<?php
get_footer();
