<?php
/**
 * Footer
 * - PC/SP 完全レスポンシブ対応
 * - 画像パスはテーマに合わせて調整済み
 */
?>

<footer class="bg-black text-white w-full pt-16 pb-8 font-noto">
    <div class="mx-auto max-w-6xl px-6 lg:px-10">
        
        <div class="flex flex-col lg:flex-row lg:justify-between items-start mb-12 lg:mb-20">
            
            <div class="w-full lg:w-2/3 flex flex-col lg:flex-row gap-0 lg:gap-20">
                
                <div class="w-full lg:w-1/2 mb-8 lg:mb-0">
                    <p class="mb-4 text-sm font-normal">業務内容</p>
                    <ul class="flex flex-col border-t border-gray-800">
                        <li>
                            <a href="<?php echo esc_url(home_url('/works/website/')); ?>" class="!no-underline flex items-center gap-3 py-4 border-b border-gray-800 hover:text-gray-400 transition-colors">
                                <span class="text-xs">&gt;</span>
                                <span class="text-sm">ホームページ制作・運用支援</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/works/graphic/')); ?>" class="!no-underline flex items-center gap-3 py-4 border-b border-gray-800 hover:text-gray-400 transition-colors">
                                <span class="text-xs">&gt;</span>
                                <span class="text-sm">印刷・グラフィック制作</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/works/movie/')); ?>" class="!no-underline flex items-center gap-3 py-4 border-b border-gray-800 hover:text-gray-400 transition-colors">
                                <span class="text-xs">&gt;</span>
                                <span class="text-sm">映像・動画制作</span>
                            </a>
                        </li>
                         <li>
                            <a href="<?php echo esc_url(home_url('/service/')); ?>" class="!no-underline flex items-center gap-3 py-4 border-b border-gray-800 hover:text-gray-400 transition-colors">
                                <span class="text-xs">&gt;</span>
                                <span class="text-sm">サービス（デザインサブスク）</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="w-full lg:w-1/2 lg:pt-9">
                     <ul class="flex flex-col border-t lg:border-t-0 border-gray-800">
                        <li>
                            <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="!no-underline flex items-center gap-3 py-4 border-b border-gray-800 hover:text-gray-400 transition-colors lg:border-t">
                                <span class="text-xs">&gt;</span>
                                <span class="text-sm font-outfit tracking-widest">BLOG</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/company/')); ?>" class="!no-underline flex items-center gap-3 py-4 border-b border-gray-800 hover:text-gray-400 transition-colors">
                                <span class="text-xs">&gt;</span>
                                <span class="text-sm">会社案内</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://en-gage.net/amt_design/" target="_blank" class="!no-underline flex items-center gap-3 py-4 border-b border-gray-800 hover:text-gray-400 transition-colors">
                                <span class="text-xs">&gt;</span>
                                <span class="text-sm">採用情報</span>
                            </a>
                        </li>
                     </ul>
                </div>
            </div>

            <div class="hidden lg:flex gap-6 pt-9">
                 <a href="https://x.com/amt_web" target="_blank" class="hover:opacity-70 transition-opacity">
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-x-white.png" alt="X" class="w-8 h-8 object-contain">
                 </a>
                 <a href="https://www.instagram.com/amt_web/" target="_blank" class="hover:opacity-70 transition-opacity">
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-instagram-white.png" alt="IG" class="w-8 h-8 object-contain">
                 </a>
            </div>
        </div>

        <div class="mb-10 text-center lg:text-left">
             <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block hover:opacity-80 transition-opacity">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/logo-white.svg" alt="AMT" class="w-40 h-auto">
             </a>
        </div>

        <div class="flex flex-col lg:flex-row lg:justify-between lg:items-end">
            
            <div class="w-full lg:w-1/2">
                
                <div class="lg:hidden flex flex-wrap justify-center items-center gap-x-4 gap-y-2 text-xs mb-8">
                     <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="!no-underline hover:text-gray-300">お問い合わせ</a>
                     <span class="h-3 w-px bg-white"></span>
                     <a href="tel:0542864085" class="!no-underline hover:text-gray-300 font-outfit">054-286-4085</a>
                     <span class="hidden xs:inline h-3 w-px bg-white"></span> <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" class="!no-underline hover:text-gray-300 w-full xs:w-auto text-center mt-1 xs:mt-0">プライバシーポリシー</a>
                </div>

                <div class="text-center lg:text-left text-sm leading-7 mb-10 lg:mb-0">
                    <p class="mb-1 font-bold">株式会社エー・エム・ティー</p>
                    <p class="mb-6">〒422-8046 静岡県静岡市駿河区中島153-2</p>
                    <p class="font-outfit text-xs leading-6 text-gray-400 tracking-wider">
                        AMT.inc.<br>
                        153-2 NAKAZIMA, SURUGA-KU, SHIZUOKA-SHI, SHIZUOKA, <br>422-8046 ,JAPAN
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-col items-center lg:items-end">
                
                <a href="https://maps.app.goo.gl/FVc42h6nScoyrFi16" target="_blank" class="mb-10 lg:mb-12 inline-flex items-center gap-3 rounded-full border border-white px-8 py-3 text-sm hover:bg-white hover:text-black transition-colors !no-underline group">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-hover:text-black">
                       <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                       <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                     </svg>
                     <span class="font-outfit tracking-wide">Google Map</span>
                </a>

                <div class="lg:hidden flex gap-8 mb-10">
                     <a href="https://x.com/amt_web" target="_blank" class="block hover:opacity-70 transition-opacity">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-x-white.png" alt="X" class="w-10 h-10 object-contain">
                     </a>
                     <a href="https://www.instagram.com/amt_web/" target="_blank" class="block hover:opacity-70 transition-opacity">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-instagram-white.png" alt="IG" class="w-10 h-10 object-contain">
                     </a>
                </div>

                <div class="hidden lg:flex justify-end items-center gap-6 text-sm mb-1">
                     <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="!no-underline hover:text-gray-300 transition-colors">お問い合わせ</a>
                     <span class="h-3 w-px bg-white"></span>
                     <span class="font-outfit tracking-widest">054-286-4085</span>
                     <span class="h-3 w-px bg-white"></span>
                     <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" class="!no-underline hover:text-gray-300 transition-colors">プライバシーポリシー</a>
                </div>

            </div>
        </div>

        <div class="mt-4 border-t border-white pt-8">
             <p class="text-center lg:text-right font-outfit text-xs tracking-widest text-white">
                 COPYRIGHT©AMT.inc ALL RIGHTS RESERVED.
             </p>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>