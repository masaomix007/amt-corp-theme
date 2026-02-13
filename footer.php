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
                
                <div class="w-full lg:w-1/2 lg:mb-0">
                    <p class="mb-4 text-lg lg:text-sm font-normal">業務内容</p>
                    <ul class="flex flex-col border-t border-b border-white">
                        <li>
                            <a href="<?php echo esc_url(home_url('/works/website/')); ?>" class="!no-underline flex items-center gap-3 py-4 border-b border-gray-400 hover:text-gray-400 transition-colors">
                                <span class="text-xs">＞</span>
                                <span class="text-sm">ホームページ制作・運用支援</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/works/graphic/')); ?>" class="!no-underline flex items-center gap-3 py-4 border-b border-gray-400 hover:text-gray-400 transition-colors">
                                <span class="text-xs">＞</span>
                                <span class="text-sm">印刷・グラフィック制作</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/works/movie/')); ?>" class="!no-underline flex items-center gap-3 py-4 border-b border-gray-400 hover:text-gray-400 transition-colors">
                                <span class="text-xs">＞</span>
                                <span class="text-sm">映像・動画制作</span>
                            </a>
                        </li>
                        <?php /*
                         <li>
                            <a href="<?php echo esc_url(home_url('/service/')); ?>" class="!no-underline flex items-center gap-3 py-4 border-b border-gray-800 hover:text-gray-400 transition-colors">
                                <span class="text-xs">&gt;</span>
                                <span class="text-sm">サービス（デザインサブスク）</span>
                            </a>
                        </li>
                        */ ?>
                    </ul>
                </div>

                <div class="w-full lg:w-1/2 lg:pt-9">
                     <ul class="flex flex-col md:border-t md:border-b md:border-white">
                        <li>
                            <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="!no-underline flex items-center gap-3 py-4 border-b border-white hover:text-gray-400 transition-colors lg:border-t">
                                <!--<span class="text-xs">&gt;</span>-->
                                <span class="text-lg lg:text-sm font-outfit tracking-widest">B L O G</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/company/')); ?>" class="!no-underline flex items-center gap-3 py-4 border-b border-white hover:text-gray-400 transition-colors">
                                <!--<span class="text-xs">&gt;</span>-->
                                <span class="text-lg lg:text-sm">会社案内</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://en-gage.net/amt_design/" target="_blank" class="!no-underline flex items-center gap-3 py-4 border-b border-white hover:text-gray-400 transition-colors">
                                <!--<span class="text-xs">&gt;</span>-->
                                <span class="text-lg lg:text-sm">採用情報</span>
                            </a>
                        </li>
                     </ul>
                </div>
            </div>

            <div class="hidden lg:flex gap-6 pt-9">
                    <a href="https://x.com/amt_web" target="_blank" class="text-white hover:text-gray-600 transition-colors">
                        <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.045 4.126H5.078z"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/amt_web/" target="_blank" class="text-white hover:text-gray-600 transition-colors">
                        <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.266.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
            </div>
        </div>

        <div class="mb-10 text-center lg:text-left">
             <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block hover:opacity-80 transition-opacity">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/logo-white.svg" alt="AMT" class="w-40 md:w-60 h-auto">
             </a>
        </div>

        <div class="flex flex-col lg:flex-row lg:justify-between lg:items-end">
            
            <div class="w-full lg:w-1/2">
                
                <div class="lg:hidden flex flex-wrap justify-center items-center gap-x-4 gap-y-2 text-base md:text-xs mb-8">
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
                        <svg class="w-10 h-10 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.045 4.126H5.078z"/>
                        </svg>
                     </a>
                     <a href="https://www.instagram.com/amt_web/" target="_blank" class="block hover:opacity-70 transition-opacity">
                        <svg class="w-10 h-10 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.266.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
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