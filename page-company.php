<?php
/**
 * Template Name: 会社案内
 */
get_header(); 
?>

<main class="w-full pt-20">

    <div class="relative h-[250px] md:h-[300px] w-full overflow-hidden bg-gray-200">
        <div class="absolute inset-0">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/company-hero.webp" alt="Company Hero" class="w-full h-full object-cover">
        </div>

        <div class="bg-black/60 absolute inset-0 flex flex-col items-center justify-center text-white">
            <div class="border-2 border-white px-20 py-2 backdrop-blur-[2px]">
                <h1 class="font-lato text-3xl md:text-4xl font-bold tracking-[0.2em]">COMPANY</h1>
            </div>
            <p class="font-noto text-sm md:text-base tracking-[0.2em] mt-4">会社案内</p>
        </div>
    </div>

    <section class="py-16 md:py-20 bg-white">
        <div class="container mx-auto max-w-4xl px-4 text-center">

            <div class="mb-16">
                <div class="w-30 mx-auto mb-4">
                    <img 
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-company.svg" 
                    alt="" 
                    class="js-scroll-anim w-full h-auto object-contain"
                    >
                </div>
                <h2 class="font-outfit text-3xl font-bold tracking-[0.2em] text-gray-800 mb-1">ABOUT US</h2>
                <p class="font-noto text-base tracking-widest text-gray-800">私たちについて</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8">
                <a href="#value" class="!no-underline group flex flex-col items-center">
                    <span class="block text-base font-bold tracking-widest text-gray-800 mb-2 group-hover:text-gray-500 transition-colors">選ばれる理由</span>
                    <span class="text-gray-600 group-hover:translate-y-1 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" /></svg>
                    </span>
                </a>
                <a href="#outline" class="!no-underline group flex flex-col items-center">
                    <span class="block text-base font-bold tracking-widest text-gray-800 mb-2 group-hover:text-gray-500 transition-colors">会 社 概 要</span>
                    <span class="text-gray-600 group-hover:translate-y-1 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" /></svg>
                    </span>
                </a>
                <a href="#message" class="!no-underline group flex flex-col items-center">
                    <span class="block text-base font-bold tracking-widest text-gray-800 mb-2 group-hover:text-gray-500 transition-colors">代表あいさつ</span>  
                    <span class="text-gray-600 group-hover:translate-y-1 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" /></svg>
                    </span>
                </a>
                <a href="#access" class="!no-underline group flex flex-col items-center">
                    <span class="block text-base font-bold tracking-widest text-gray-800 mb-2 group-hover:text-gray-500 transition-colors">交通アクセス</span>
                    <span class="text-gray-600 group-hover:translate-y-1 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" /></svg>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <section id="value" class="scroll-mt-24">
        <div class="bg-gray-300 py-6 md:py-8 text-center">
            <h3 class="font-outfit text-4xl font-bold tracking-[0.2em] text-gray-700">VALUE</h3>
            <p class="font-noto text-xl font-semibold tracking-[0.2em] text-gray-600 mt-1">選ばれる理由</p>
        </div>

        <div class="w-full flex flex-col md:block bg-gray-100 md:bg-[linear-gradient(90deg,#f3f4f6_50%,#ffffff_50%)]">
            <div class="md:container mx-auto max-w-5xl">
                <div class="grid grid-cols-1 md:grid-cols-2">

                    <div class="bg-gray-100 md:bg-transparent py-16 md:py-24 px-8 md:pr-12 lg:pr-16">
                        <div class="text-lg leading-7 md:leading-8 text-gray-700 font-noto js-fade-stagger">
                            <div class="mb-12 md:mb-16 opacity-0 translate-y-8 transition-all duration-700 ease-out delay-600 stagger-item">
                                <h4 class="w-full font-bold border-b-2 border-black pb-2 mb-6 inline-block">40年以上の経験と豊富な実績</h4>
                                <p class="text-base leading-7">経験豊富なデザイナーから感度の高い若手まで、多様な視点で年齢・性別・ジャンルにとらわれずデザイン制作に取り組みます。</p>
                            </div>
                            <div class="mb-12 md:mb-16 opacity-0 translate-y-8 transition-all duration-700 ease-out delay-600 stagger-item">
                                <h4 class="w-full font-bold border-b-2 border-black pb-2 mb-6 inline-block">コミュニケーションを大切にした制作体制</h4>
                                <p class="text-base leading-7">より良いデザインを実現するには、イメージや方向性の共有が不可欠です。私たちは、スピード感を持ったコミュニケーションと柔軟なフットワークを重視しています。</p>
                            </div>
                            <div class="opacity-0 translate-y-8 transition-all duration-700 ease-out delay-600 stagger-item">
                                <h4 class="w-full font-bold border-b-2 border-black pb-2 mb-6 inline-block">信頼のネットワークで多様なニーズに対応</h4>
                                <p class="text-base leading-7">掲載内容以外のご要望でも、デザインに関わる事なら柔軟に対応いたします。豊富な実績と幅広い取引先とのつながりを活かし、最適なご提案をお届けします。</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white md:bg-transparent py-16 md:py-24 px-6 md:pl-12 lg:pl-16 text-center">
                        <h4 class="inline-block border-2 border-black px-20 py-3 mb-12 font-bold tracking-widest text-lg ">企 業 理 念</h4>

                        <div class="space-y-10 font-noto js-fade-stagger">
                            <div class="opacity-0 translate-y-8 transition-all duration-700 ease-out delay-600 stagger-item">
                                <p class="font-outfit font-bold text-2xl tracking-[0.2em] mb-3 text-gray-800">A<span class="text-gray-400">RT</span></p>
                                <p class="text-lg leading-7 text-gray-600">芸術的であることに加え、<br>効果的に情報を伝える技を携え、<br>デザインという手段で社会に貢献する。</p>
                            </div>
                            <div class="opacity-0 translate-y-8 transition-all duration-700 ease-out delay-600 stagger-item">
                                <p class="font-outfit font-bold text-2xl tracking-[0.2em] mb-3 text-gray-800">M<span class="text-gray-400">IND</span></p>
                                <p class="text-lg leading-7 text-gray-600">顧客のために心を込めた<br>モノ作りに徹し、<br>記憶に残る仕事をする。</p>
                            </div>
                            <div class="opacity-0 translate-y-8 transition-all duration-700 ease-out delay-600 stagger-item">
                                <p class="font-outfit font-bold text-2xl tracking-[0.2em] mb-3 text-gray-800">T<span class="text-gray-400">RUST</span></p>
                                <p class="text-lg leading-7 text-gray-600">信頼を裏切らない真摯な<br>行いを心掛け、社会の中で<br>責任ある役割を果たす。</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="outline" class="scroll-mt-24">
        <div class="bg-gray-300 py-6 md:py-8 text-center">
            <h3 class="font-outfit text-4xl font-bold tracking-[0.2em] text-gray-700">OUTLINE</h3>
            <p class="font-noto text-xl font-semibold tracking-[0.2em] text-gray-600 mt-1">会社概要</p>
        </div>
        <div class="bg-white py-16 md:py-24">
            <div class="container mx-auto max-w-5xl px-8 lg:px-6 grid md:grid-cols-2 gap-12 items-start">

                <div class="w-full order-2 md:order-1">
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/company-office.webp" alt="Office" class="w-full h-auto object-cover grayscale">
                </div>  

                <div class="w-full order-1 md:order-2">
                     <dl class="grid grid-cols-[5em_1fr] gap-x-6 gap-y-1 text-sm leading-7 text-gray-700 border-gray-200">
                        <dt class="font-bold py-1 text-justify [text-align-last:justify]">会社名</dt><dd class="py-1">株式会社 エー・エム・ティー</dd>
                        <dt class="font-bold py-1 text-justify [text-align-last:justify]">住所</dt><dd class="py-1 border-gray-200">〒422-8046 静岡県静岡市駿河区中島153-2</dd>
                        <dt class="font-bold py-1 text-justify [text-align-last:justify]">代表</dt><dd class="py-1 border-gray-200">皆川　智教</dd>
                        <dt class="font-bold py-1 text-justify [text-align-last:justify]">ＴＥＬ</dt><dd class="font-outfit py-1 border-gray-200 ">054-286-4085</dd>
                        <dt class="font-bold py-1 text-justify [text-align-last:justify]">ＦＡＸ</dt><dd class="font-outfit py-1 border-gray-200">054-286-7992</dd>
                        <dt class="font-bold py-1 text-justify [text-align-last:justify]">設立</dt><dd class="py-1 border-gray-200">1985年12月2日</dd>
                        <dt class="font-bold py-1 text-justify [text-align-last:justify]">資本金</dt><dd class="py-1 border-gray-200">10,000,000円</dd>
                        <dt class="font-bold py-1 text-justify [text-align-last:justify]">従業員数</dt><dd class="py-1 border-gray-200">13名</dd>
                        <dt class="font-bold py-1 text-justify [text-align-last:justify]">取引銀行</dt><dd class="py-1 border-gray-200">静岡銀行／静岡焼津信用金庫</dd>
                        <dt class="font-bold py-1 text-justify [text-align-last:justify]">業務内容</dt><dd class="py-1 border-gray-200">ホームページ制作／Web運営支援／広告・印刷物／グラフィックデザイン／パッケージデザイン／ロゴデザイン／販促ツール制作／ノベルティ制作／映像・動画制作</dd>
                    </dl>
                </div>

            </div>
        </div>
    </section>

    <section id="message" class="scroll-mt-24">
        <div class="bg-gray-300 py-6 md:py-8 text-center">
            <h3 class="font-outfit text-4xl font-bold tracking-[0.2em] text-gray-700">MESSAGE</h3>
            <p class="font-noto text-xl font-semibold tracking-[0.2em] text-gray-600 mt-1">代表あいさつ</p>
        </div>
        <div class="bg-gray-100 py-16 md:py-24">
            <div class="container mx-auto max-w-5xl px-6 lg:px-6">
                <h4 class="text-xl md:text-2xl font-bold mb-10 border-b-2 border-black pb-6 block w-full tracking-widest">
                    情報を、価値に変える。
                </h4>

                <div class="grid md:grid-cols-[1fr_300px] gap-12 items-start">
                    <div class="text-base leading-8 text-gray-700 font-noto space-y-6">
                        <p>情報過多の時代。本当に届けたいメッセージが埋もれてしまう。<br>そんな課題を、私たちはデザインの力で解決します。静岡を拠点としながら、オンラインを活用して全国のお客様とお取引させていただいています。</p>
                        <p>紙・WEB・動画。それぞれのメディア特性を活かし、最適な組み合わせで、想いを「伝わるカタチ」にすることが私たちの使命です。</p>
                        <p>AI時代だからこそ、人の心に響くデザインを。データでは測れない共感と信頼を、私たちは大切にしています。技術と感性を融合させ、お客様一人ひとりと真摯に向き合いながら、最適なソリューションをご提案します。</p>
                        <p>ビジネスパートナーとして、新しい価値創造をご一緒させてください。</p>
                    </div>
                    
                    <div class="w-full">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/company-ceo.webp" alt="CEO" class="w-full h-auto object-cover shadow-md grayscale-[20%]">
                        
                        <div class="mt-6 font-noto text-gray-800">
                             <p class="text-xs font-bold mb-4">株式会社エー・エム・ティー</p>
                             
                             <div class="flex items-end justify-between">
                                 <div>
                                     <p class="text-xs font-bold mb-1">代表取締役社長</p>
                                     <p class="text-xl font-bold tracking-[0.2em]">皆川　智教</p>
                                 </div>
                                 <a href="https://www.instagram.com/37kawa/" target="_blank" class="text-gray-800 hover:text-gray-400 transition-colors mb-1 object-contain">
                                  <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.266.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                  </svg>
                                 </a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="access" class="scroll-mt-24">
        <div class="bg-gray-300 py-6 md:py-8 text-center">
            <h3 class="font-outfit text-4xl font-bold tracking-[0.2em] text-gray-700">ACCESS</h3>
            <p class="font-noto text-xl font-semibold tracking-[0.2em] text-gray-600 mt-1">交通アクセス</p>
        </div>
        <div class="bg-white py-16 md:py-24">
             <div class="container mx-auto max-w-5xl px-6 lg:px-6">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
                    
                    <div class="w-full h-[300px] md:h-[400px] order-1 md:order-1">
                         <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/company-building.webp" alt="Building" class="w-full h-full object-cover grayscale-[20%]">
                    </div>

                    <div class="w-full h-[300px] md:h-[400px] bg-gray-100 border border-gray-300 order-3 md:order-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12763.034736499629!2d138.38675027285456!3d34.958745882526124!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601a49cfe3fd7c77%3A0x110ca5013982658f!2z44Ko44O844O744Ko44Og44O744OG44Kj44O8!5e0!3m2!1sja!2sjp!4v1770370175734!5m2!1sja!2sjp" width="100%" height="100%" style="border:0; filter: grayscale(1);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="order-2 md:order-3 md:col-span-2 font-noto">
                        
                         <div class="mb-8">
                             <p class="font-bold text-l mb-1">〒422-8046</p>
                             <p class="font-bold text-l mb-2">静岡県静岡市駿河区中島153-2</p>
                             <p class="text-xs text-gray-500 font-outfit uppercase tracking-wider">
                                 153-2 NAKAZIMA, SURUGA-KU, SHIZUOKA-SHI, SHIZUOKA  AMT inc.
                             </p>
                         </div>

                         <div class="border-t-2 border-black pt-6">
                          <dl class="grid grid-cols-1 gap-y-4 text-sm font-noto leading-relaxed">
                              
                              <div class="block md:grid md:grid-cols-[200px_1fr] md:items-baseline">
                                  <dt class="font-bold mb-1 md:mb-0">車でのアクセス</dt>
                                  <dd class="font-bold pl-4 md:pl-0 text-gray-700">&gt; 静岡ICから車で3分</dd>
                              </div>

                              <div class="block md:grid md:grid-cols-[200px_1fr] md:items-baseline">
                                  <dt class="font-bold mb-1 md:mb-0">バスでのアクセス</dt>
                                  <dd class="font-bold pl-4 md:pl-0 text-gray-700">&gt; しずてつジャストライン 静岡IC入口から徒歩3分</dd>
                              </div>

                          </dl>
                        </div>

                    </div>

                </div>

             </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>