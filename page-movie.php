<?php
/**
 * Template Name: 映像・動画制作
 */
get_header(); 
?>

<main class="w-full pt-20">

    <div class="relative h-[250px] md:h-[300px] w-full overflow-hidden bg-gray-200">
        <div class="absolute inset-0">
             <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/movie-hero.webp" alt="Movie Hero" class="w-full h-full object-cover">
        </div>
        
        <div class="bg-black/60 absolute inset-0 flex flex-col items-center justify-center text-white">
            <div class="border-2 border-white px-20 py-2 backdrop-blur-[2px]">
                <h1 class="font-lato text-3xl md:text-4xl font-bold tracking-[0.2em]">MOVIE</h1>
            </div>
            <p class="font-noto text-sm md:text-base tracking-[0.2em] mt-4">映像・動画制作</p>
        </div>
    </div>

    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto max-w-5xl px-16 lg:px-6">
            
            <div class="text-center mb-16">
                <div class="w-30 mx-auto mb-4">
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-movie.svg" alt="" class="w-full h-auto object-contain">
                </div>
                <h2 class="font-outfit text-3xl font-bold tracking-[0.2em] text-gray-800 mb-1">SERVICE</h2>
                <p class="font-noto text-base tracking-widest text-gray-800">提供サービス</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-12">
                
                <div>
                    <div class="flex items-center gap-4 border-b-2 border-black pb-4 mb-4">
                        <div class="w-12 flex-shrink-0">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-service-item.svg" alt="" class="w-full h-auto">
                        </div>
                        <h3 class="font-bold text-lg md:text-xl text-gray-800">企業プロモーション</h3>
                    </div>
                    <p class="text-base text-gray-600 leading-7">会社やブランドの特徴や雰囲気を伝え、認知やイメージ向上に役立つ動画を制作します</p>
                </div>

                <div>
                    <div class="flex items-center gap-4 border-b-2 border-black pb-4 mb-4">
                        <div class="w-12 flex-shrink-0">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-service-item.svg" alt="" class="w-full h-auto">
                        </div>
                        <h3 class="font-bold text-lg md:text-xl text-gray-800">商品・サービス紹介</h3>
                    </div>
                    <p class="text-base text-gray-600 leading-7">新商品やサービスの特徴を分かりやすく伝える動画を制作します</p>
                </div>

                <div>
                    <div class="flex items-center gap-4 border-b-2 border-black pb-4 mb-4">
                        <div class="w-12 flex-shrink-0">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-service-item.svg" alt="" class="w-full h-auto">
                        </div>
                        <h3 class="font-bold text-lg md:text-xl text-gray-800">マニュアル・操作説明</h3>
                    </div>
                    <p class="text-base text-gray-600 leading-7">製品やサービスの使い方を分かりやすく解説する動画を制作します</p>
                </div>

                <div>
                    <div class="flex items-center gap-4 border-b-2 border-black pb-4 mb-4">
                        <div class="w-12 flex-shrink-0">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-service-item.svg" alt="" class="w-full h-auto">
                        </div>
                        <h3 class="font-bold text-lg md:text-xl text-gray-800">イベント・記念日</h3>
                    </div>
                    <p class="text-base text-gray-600 leading-7">式典やイベントの様子を記録・編集し、思い出や情報を効果的に残す動画を制作します</p>
                </div>

                <div>
                    <div class="flex items-center gap-4 border-b-2 border-black pb-4 mb-4">
                        <div class="w-12 flex-shrink-0">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-service-item.svg" alt="" class="w-full h-auto">
                        </div>
                        <h3 class="font-bold text-lg md:text-xl text-gray-800">教育・研修動画</h3>
                    </div>
                    <p class="text-base text-gray-600 leading-7">社内研修や学習コンテンツを、理解しやすく整理して提供できる動画を制作します</p>
                </div>

                <div>
                    <div class="flex items-center gap-4 border-b-2 border-black pb-4 mb-4">
                        <div class="w-12 flex-shrink-0">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-service-item.svg" alt="" class="w-full h-auto">
                        </div>
                        <h3 class="font-bold text-lg md:text-xl text-gray-800">SNS・WEB広告動画</h3>
                    </div>
                    <p class="text-base text-gray-600 leading-7">SNSやWEB広告で効果的に伝わるよう、構成や演出を工夫した動画を制作します</p>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-gray-50 pb-16 md:pb-24">
        <div class="bg-gray-300 py-6 md:py-8 text-center mb-16">
            <h3 class="font-lato text-4xl font-black tracking-[0.2em] text-gray-700">WORK FLOW</h3>
            <p class="font-noto text-xl font-semibold tracking-[0.2em] text-gray-600 mt-1">制作の流れ</p>
        </div>

        <div class="container mx-auto max-w-5xl px-16 lg:px-6">
            
            <div class="flex flex-col md:grid md:grid-cols-2 gap-0 md:gap-x-20 mb-16">

                <div class="relative flex flex-col gap-12 pb-12 md:pb-0">
                    <div class="absolute left-[52px] top-0 bottom-0 w-[8px] bg-[#333333]"></div>

                    <div class="relative z-10 flex gap-6 md:gap-8">
                         <div class="flex-shrink-0 bg-white border-2 border-[#333333] w-28 py-3 flex items-center justify-center h-fit">
                             <span class="text-sm font-outfit font-bold whitespace-nowrap tracking-wider">STEP 01</span>
                         </div>
                         <div class="pt-2">
                             <h4 class="font-bold text-lg mb-3">お問い合わせ</h4>
                             <p class="text-sm text-gray-600 leading-7">まずはお気軽にご要望やご相談内容をお聞かせください。目的や課題を伺い、お見積りまでは無料で対応いたします。</p>
                         </div>
                    </div>

                    <div class="relative z-10 flex gap-6 md:gap-8">
                         <div class="flex-shrink-0 bg-white border-2 border-[#333333] w-28 py-3 flex items-center justify-center h-fit">
                             <span class="text-sm font-outfit font-bold whitespace-nowrap tracking-wider">STEP 02</span>
                         </div>
                         <div class="pt-2">
                             <h4 class="font-bold text-lg mb-3">ヒアリング</h4>
                             <p class="text-sm text-gray-600 leading-7">現状の課題を共有・理解するために、貴社の強みや特長、ターゲット設定、競合他社、ブランドの方向性などを丁寧に伺います。</p>
                         </div>
                    </div>

                    <div class="relative z-10 flex gap-6 md:gap-8">
                         <div class="flex-shrink-0 bg-white border-2 border-[#333333] w-28 py-3 flex items-center justify-center h-fit">
                             <span class="text-sm font-outfit font-bold whitespace-nowrap tracking-wider">STEP 03</span>
                         </div>
                         <div class="pt-2">
                             <h4 class="font-bold text-lg mb-3">企画・構成</h4>
                             <p class="text-sm text-gray-600 leading-7">ヒアリング内容をもとに構成案やシナリオを作成し、伝えたいメッセージを整理して効果的なストーリーを設計します。</p>
                         </div>
                    </div>
                </div>

                <div class="relative flex flex-col gap-12 pt-0">
                    <div class="relative z-10 flex gap-6 md:gap-8">
                         <div class="absolute left-[52px] top-0 h-[calc(100%+3rem)] w-[8px] bg-[#333333] -z-10"></div>

                         <div class="flex-shrink-0 bg-white border-2 border-[#333333] w-28 py-3 flex items-center justify-center h-fit">
                             <span class="text-sm font-outfit font-bold whitespace-nowrap tracking-wider">STEP 04</span>
                         </div>
                         <div class="pt-2">
                             <h4 class="font-bold text-lg mb-3">制作・編集</h4>
                             <p class="text-sm text-gray-600 leading-7">内容に応じて撮影や編集、アニメーション制作を行い、映像・音声・テロップを組み合わせて伝わる映像に仕上げます。</p>
                         </div>
                    </div>

                    <div class="relative z-10 flex gap-6 md:gap-8">
                         <div class="absolute left-[52px] top-0 h-[calc(100%+3rem)] w-[8px] bg-[#333333] -z-10"></div>

                         <div class="flex-shrink-0 bg-white border-2 border-[#333333] w-28 py-3 flex items-center justify-center h-fit">
                             <span class="text-sm font-outfit font-bold whitespace-nowrap tracking-wider">STEP 05</span>
                         </div>
                         <div class="pt-2">
                             <h4 class="font-bold text-lg mb-3">確認・修正</h4>
                             <p class="text-sm text-gray-600 leading-7">初稿を共有し、内容をご確認いただきます。ご要望に応じて調整・修正を行い、完成版へと仕上げていきます。</p>
                         </div>
                    </div>

                    <div class="relative z-10 flex gap-6 md:gap-8">
                         <div class="flex-shrink-0 bg-white border-2 border-[#333333] w-28 py-3 flex items-center justify-center h-fit">
                             <span class="text-sm font-outfit font-bold whitespace-nowrap tracking-wider">STEP 06</span>
                         </div>
                         <div class="pt-2">
                             <h4 class="font-bold text-lg mb-3">納品・運用</h4>
                             <p class="text-sm text-gray-600 leading-7">最終データを目的に合わせた形式で納品いたします。公開や運用方法についても、用途に応じてご案内いたします。</p>
                         </div>
                    </div>
                </div>

            </div>

            <div class="w-full">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/movie-workflow.webp" alt="Movie Work Flow" class="w-full h-[250px] md:h-[400px] object-cover shadow-lg">
            </div>

        </div>
    </section>

    <section class="bg-white">
        <div class="bg-gray-300 py-6 md:py-8 text-center">
            <h3 class="font-lato text-4xl font-black tracking-[0.2em] text-gray-700">SOLUTION</h3>
            <p class="font-noto text-xl font-semibold tracking-[0.2em] text-gray-600 mt-1">課題解決</p>
        </div>

        <div class="container mx-auto max-w-5xl px-16 lg:px-6 py-16 md:py-24">
            
            <p class="text-center text-base md:text-lg font-bold mb-12 tracking-widest">このようなお悩みを解決します</p>

            <div class="flex flex-col-reverse md:flex-row items-center gap-12">
                
                <div class="w-full md:w-1/2 flex justify-center">
                     <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/movie-solution.svg" alt="Solution" class="w-3/4 md:w-3/4 h-auto object-contain">
                </div>

                <div class="w-full md:w-1/2">
                    <ul class="space-y-6">
                        
                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-400 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm md:text-base font-bold text-gray-800">動画制作の手間や時間がかかりすぎる</span>
                        </li>

                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-400 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm md:text-base font-bold text-gray-800">企画や構成の方向性に迷ってしまう</span>
                        </li>

                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-400 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm md:text-base font-bold text-gray-800">専門知識がなく、ナレーションや字幕作成が難しい</span>
                        </li>

                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-400 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm md:text-base font-bold text-gray-800">広告や SNS 用に短尺動画を効率よく作りたい</span>
                        </li>

                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-400 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm md:text-base font-bold text-gray-800">動画の雰囲気に合うロゴを制作したい</span>
                        </li>

                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-400 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm md:text-base font-bold text-gray-800">外国語や多言語対応の動画制作が難しい</span>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section class="bg-gray-200">
        <div class="bg-gray-300 py-6 md:py-8 text-center">
            <h3 class="font-lato text-4xl font-black tracking-[0.2em] text-gray-700">Q & A</h3>
            <p class="font-noto text-xl font-semibold tracking-[0.2em] text-gray-600 mt-1">よくある質問</p>
        </div>

        <div class="container mx-auto max-w-5xl px-16 lg:px-6 py-16 md:py-24">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-16">
                
                <div>
                    <div class="relative bg-white border border-gray-400 rounded-full py-6 px-8 mb-6 shadow-sm">
                        <p class="font-bold text-gray-800 text-sm md:text-base flex items-start gap-3">
                            <span class="font-outfit text-xl font-bold leading-none mt-[2px]">Q.</span>
                            <span>動画の制作費用を教えてください</span>
                        </p>
                        <div class="absolute -bottom-[12px] left-1/2 -translate-x-1/2 w-5 h-5 bg-white border-b border-r border-gray-400 rotate-45"></div>
                    </div>
                    <div class="flex items-start gap-3 px-8">
                        <span class="font-outfit text-xl font-bold text-gray-800 leading-none mt-[2px]">A.</span>
                        <p class="text-sm text-gray-700 leading-7">
                            内容や時間、演出の種類、素材や撮影の有無によって費用は変わります。詳細をお伺いした上でお見積りいたしますので、まずはお気軽にご相談ください。
                        </p>
                    </div>
                </div>

                <div>
                    <div class="relative bg-white border border-gray-400 rounded-full py-6 px-8 mb-6 shadow-sm">
                        <p class="font-bold text-gray-800 text-sm md:text-base flex items-start gap-3">
                            <span class="font-outfit text-xl font-bold leading-none mt-[2px]">Q.</span>
                            <span>素材がなくても制作できますか？</span>
                        </p>
                        <div class="absolute -bottom-[12px] left-1/2 -translate-x-1/2 w-5 h-5 bg-white border-b border-r border-gray-400 rotate-45"></div>
                    </div>
                    <div class="flex items-start gap-3 px-8">
                        <span class="font-outfit text-xl font-bold text-gray-800 leading-none mt-[2px]">A.</span>
                        <p class="text-sm text-gray-700 leading-7">
                            素材がなくても動画の制作は可能です。ただし、新規でロゴを作成したり撮影を行う場合は、別途費用が発生することがあります。必要に応じて最適な方法をご提案いたしますので、ご相談ください。
                        </p>
                    </div>
                </div>

                <div class="qa-hidden-item hidden md:block">
                    <div class="relative bg-white border border-gray-400 rounded-full py-6 px-8 mb-6 shadow-sm">
                        <p class="font-bold text-gray-800 text-sm md:text-base flex items-start gap-3">
                            <span class="font-outfit text-xl font-bold leading-none mt-[2px]">Q.</span>
                            <span>広告用のサムネイルも作ってもらえますか？</span>
                        </p>
                        <div class="absolute -bottom-[12px] left-1/2 -translate-x-1/2 w-5 h-5 bg-white border-b border-r border-gray-400 rotate-45"></div>
                    </div>
                    <div class="flex items-start gap-3 px-8">
                        <span class="font-outfit text-xl font-bold text-gray-800 leading-none mt-[2px]">A.</span>
                        <p class="text-sm text-gray-700 leading-7">
                            広告やSNS用のサムネイルも制作可能です。内容やデザインに応じて作成いたしますが、別途費用がかかります。
                        </p>
                    </div>
                </div>

                <div class="qa-hidden-item hidden md:block">
                    <div class="relative bg-white border border-gray-400 rounded-full py-6 px-8 mb-6 shadow-sm">
                        <p class="font-bold text-gray-800 text-sm md:text-base flex items-start gap-3">
                            <span class="font-outfit text-xl font-bold leading-none mt-[2px]">Q.</span>
                            <span>ナレーションや字幕も対応できますか？</span>
                        </p>
                        <div class="absolute -bottom-[12px] left-1/2 -translate-x-1/2 w-5 h-5 bg-white border-b border-r border-gray-400 rotate-45"></div>
                    </div>
                    <div class="flex items-start gap-3 px-8">
                        <span class="font-outfit text-xl font-bold text-gray-800 leading-none mt-[2px]">A.</span>
                        <p class="text-sm text-gray-700 leading-7">
                            はい、ナレーションや字幕作成にも対応可能です。内容や用途、ターゲットに合わせて、分かりやすく伝わる最適な動画をご提案いたします。
                        </p>
                    </div>
                </div>

                <div class="qa-hidden-item hidden md:block">
                    <div class="relative bg-white border border-gray-400 rounded-full py-6 px-8 mb-6 shadow-sm">
                        <p class="font-bold text-gray-800 text-sm md:text-base flex items-start gap-3">
                            <span class="font-outfit text-xl font-bold leading-none mt-[2px]">Q.</span>
                            <span>外国語にも対応できますか？</span>
                        </p>
                        <div class="absolute -bottom-[12px] left-1/2 -translate-x-1/2 w-5 h-5 bg-white border-b border-r border-gray-400 rotate-45"></div>
                    </div>
                    <div class="flex items-start gap-3 px-8">
                        <span class="font-outfit text-xl font-bold text-gray-800 leading-none mt-[2px]">A.</span>
                        <p class="text-sm text-gray-700 leading-7">
                            外国語のナレーションや字幕作成にも対応可能です。外国語は参考資料等を基に作成しますが、正確性の確認はお客様にもご協力いただく場合があります。用途やターゲットに合わせて最適な形をご提案いたします。
                        </p>
                    </div>
                </div>

                <div class="qa-hidden-item hidden md:block">
                    <div class="relative bg-white border border-gray-400 rounded-full py-6 px-8 mb-6 shadow-sm">
                        <p class="font-bold text-gray-800 text-sm md:text-base flex items-start gap-3">
                            <span class="font-outfit text-xl font-bold leading-none mt-[2px]">Q.</span>
                            <span>動画はどの形式で納品されますか？</span>
                        </p>
                        <div class="absolute -bottom-[12px] left-1/2 -translate-x-1/2 w-5 h-5 bg-white border-b border-r border-gray-400 rotate-45"></div>
                    </div>
                    <div class="flex items-start gap-3 px-8">
                        <span class="font-outfit text-xl font-bold text-gray-800 leading-none mt-[2px]">A.</span>
                        <p class="text-sm text-gray-700 leading-7">
                            MP4など一般的な動画形式で納品いたします。用途に応じて、SNS・Web・社内利用など最適な形式をご提案します。
                        </p>
                    </div>
                </div>

                <div class="qa-hidden-item hidden md:block">
                    <div class="relative bg-white border border-gray-400 rounded-full py-6 px-8 mb-6 shadow-sm">
                        <p class="font-bold text-gray-800 text-sm md:text-base flex items-start gap-3">
                            <span class="font-outfit text-xl font-bold leading-none mt-[2px]">Q.</span>
                            <span>人からの制作依頼も可能ですか?</span>
                        </p>
                        <div class="absolute -bottom-[12px] left-1/2 -translate-x-1/2 w-5 h-5 bg-white border-b border-r border-gray-400 rotate-45"></div>
                    </div>
                    <div class="flex items-start gap-3 px-8">
                        <span class="font-outfit text-xl font-bold text-gray-800 leading-none mt-[2px]">A.</span>
                        <p class="text-sm text-gray-700 leading-7">
                            はい、承ります。小売店様や個人様の制作も行っており、ご予算に応じたプランをご提案いたします。お気軽にお問い合わせください。
                        </p>
                    </div>
                </div>

                <div class="qa-hidden-item hidden md:block">
                    <div class="relative bg-white border border-gray-400 rounded-full py-6 px-8 mb-6 shadow-sm">
                        <p class="font-bold text-gray-800 text-sm md:text-base flex items-start gap-3">
                            <span class="font-outfit text-xl font-bold leading-none mt-[2px]">Q.</span>
                            <span>遠方からの依頼はできますか?</span>
                        </p>
                        <div class="absolute -bottom-[12px] left-1/2 -translate-x-1/2 w-5 h-5 bg-white border-b border-r border-gray-400 rotate-45"></div>
                    </div>
                    <div class="flex items-start gap-3 px-8">
                        <span class="font-outfit text-xl font-bold text-gray-800 leading-none mt-[2px]">A.</span>
                        <p class="text-sm text-gray-700 leading-7">
                            はい、可能です。Zoomなどを使用したオンラインでの打ち合わせを基本として進行させていただきます。
                        </p>
                    </div>
                </div>

            </div>

            <div class="text-center md:hidden" id="qa-view-more-area">
                <button onclick="toggleQa()" class="btn-view-more mt-6">
                    VIEW MORE <span aria-hidden="true">〉</span>
                </button>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>