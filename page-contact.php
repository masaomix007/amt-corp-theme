<?php
/**
 * Template Name: Contact Page
 */
?>

<?php get_header(); ?>

<main class="w-full pt-20 bg-white">

    <div class="relative w-full bg-gray-200 py-10 md:py-14 text-center">
        <h1 class="font-lato text-4xl font-bold tracking-[0.2em] mb-2 uppercase">CONTACT</h1>
        <p class="font-noto text-xl tracking-[0.2em] text-gray-600">お問い合わせ</p>
    </div>

    <div class="container mx-auto max-w-4xl px-4 py-12 md:py-20">
        
        <div class="text-sm md:text-base leading-7 text-gray-700 font-noto mb-16 space-y-4">
            <p>お見積もりやご質問などお気軽にお問い合わせください（お見積もり無料）<br>2〜3営業日以内に、担当よりメールにて返信いたします。</p>
            <p class="text-xs">※返信がない場合は大変申し訳ございませんがご連絡ください（054-286-4085） ※営業・売り込みはご遠慮ください</p>
        </div>

        <div class="contact-form-wrapper">
            <?php 
            // 本番のショートコードIDを確認して書き換えてください
            echo do_shortcode('[contact-form-7 id="458c154" title="コンタクトフォーム 1"]');
            ?>
            <div class="mt-8 text-[10px] leading-relaxed text-gray-400 font-noto text-center md:text-left">
                このサイトは reCAPTCHA によって保護されており、Googleの
                <a href="https://policies.google.com/privacy" target="_blank" rel="noopener" class="underline hover:text-gray-600">プライバシーポリシー</a>と
                <a href="https://policies.google.com/terms" target="_blank" rel="noopener" class="underline hover:text-gray-600">利用規約</a>が適用されます。
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>