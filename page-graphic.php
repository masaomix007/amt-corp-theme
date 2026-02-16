<?php
/**
 * Template Name: 印刷・グラフィック制作
 */
get_header(); 
?>

<main class="w-full pt-20">

    <div class="relative h-[250px] md:h-[300px] w-full overflow-hidden bg-gray-200">
        <div class="absolute inset-0">
             <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/graphic-hero.webp" alt="Graphic Hero" class="w-full h-full object-cover">
        </div>
        
        <div class="bg-black/70 absolute inset-0 flex flex-col items-center justify-center text-white">
            <div class="border-2 border-white px-20 py-2 backdrop-blur-[2px]">
                <h1 class="font-outfit text-3xl md:text-4xl font-bold tracking-[0.2em]">GRAPHIC</h1>
            </div>
            <p class="font-noto text-sm md:text-base tracking-[0.2em] mt-4">印刷・グラフィック制作</p>
        </div>
    </div>

    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto max-w-5xl px-8 lg:px-6">
            
            <div class="text-center mb-16">
                <div class="w-30 mx-auto mb-4">
                    <img 
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-graphic.svg" 
                        alt="" 
                        class="js-scroll-anim w-full h-auto object-contain"
                    >
                </div>
                <h2 class="font-outfit text-3xl font-bold tracking-[0.2em] text-gray-800 mb-1">SERVICE</h2>
                <p class="font-noto text-base tracking-widest text-gray-800">提供サービス</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-12">
                
                <div>
                    <div class="flex items-center gap-4 border-b-2 border-black pb-4 mb-4">
                        <div class="w-10 flex-shrink-0">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-service-item.svg" alt="" class="w-full h-auto">
                        </div>
                        <h3 class="font-bold text-lg md:text-xl text-gray-800">ポスター</h3>
                    </div>
                    <p class="text-base text-gray-800 leading-7">イベント告知や商品PRなど、視覚的インパクトで注目を集めるデザインを制作します</p>
                </div>

                <div>
                    <div class="flex items-center gap-4 border-b-2 border-black pb-4 mb-4">
                        <div class="w-10 flex-shrink-0">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-service-item.svg" alt="" class="w-full h-auto">
                        </div>
                        <h3 class="font-bold text-lg md:text-xl text-gray-800">チラシ・フライヤー</h3>
                    </div>
                    <p class="text-base text-gray-800 leading-7">サービスや商品情報を分かりやすく伝え、集客や認知拡大につなげるデザインを作成します </p>
                </div>

                <div>
                    <div class="flex items-center gap-4 border-b-2 border-black pb-4 mb-4">
                        <div class="w-10 flex-shrink-0">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-service-item.svg" alt="" class="w-full h-auto">
                        </div>
                        <h3 class="font-bold text-lg md:text-xl text-gray-800">流通業チラシ</h3>
                    </div>
                    <p class="text-base text-gray-800 leading-7">スーパーや小売向けの販促チラシを、売り場で目を引く構成とデザインで制作します</p>
                </div>

                <div>
                    <div class="flex items-center gap-4 border-b-2 border-black pb-4 mb-4">
                        <div class="w-10 flex-shrink-0">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-service-item.svg" alt="" class="w-full h-auto">
                        </div>
                        <h3 class="font-bold text-lg md:text-xl text-gray-800">会社案内・カタログ</h3>
                    </div>
                    <p class="text-base text-gray-800 leading-7">企業や商品の魅力を整理し、読み手に伝わる形で表現する印刷物を制作します</p>
                </div>

                <div>
                    <div class="flex items-center gap-4 border-b-2 border-black pb-4 mb-4">
                        <div class="w-10 flex-shrink-0">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-service-item.svg" alt="" class="w-full h-auto">
                        </div>
                        <h3 class="font-bold text-lg md:text-xl text-gray-800">ロゴデザイン</h3>
                    </div>
                    <p class="text-base text-gray-800 leading-7">企業やブランドの個性・理念を反映した、覚えやすく印象に残るロゴを制作します</p>
                </div>

                <div>
                    <div class="flex items-center gap-4 border-b-2 border-black pb-4 mb-4">
                        <div class="w-10 flex-shrink-0">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-service-item.svg" alt="" class="w-full h-auto">
                        </div>
                        <h3 class="font-bold text-lg md:text-xl text-gray-800">販促用ツール</h3>
                    </div>
                    <p class="text-base text-gray-800 leading-7">POPやノベルティなど、販売促進やブランディングに活用できる各種ツールを制作します</p>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-gray-50 pb-16 md:pb-24">
        <div class="bg-gray-300 py-6 md:py-8 text-center mb-16">
            <h3 class="font-outfit text-4xl font-bold tracking-[0.2em] text-gray-700">WORK FLOW</h3>
            <p class="font-noto text-xl font-semibold tracking-[0.2em] text-gray-600 mt-1">制作の流れ</p>
        </div>

        <div class="container mx-auto max-w-5xl px-8 lg:px-6">
            
            <div class="flex flex-col md:grid md:grid-cols-2 gap-0 md:gap-x-20 mb-16 js-fade-stagger">

                <div class="relative flex flex-col gap-12 pb-12 md:pb-0">
                    <div class="absolute left-[52px] top-0 bottom-0 w-[8px] bg-[#333333]"></div>

                    <div class="relative z-10 flex gap-6 md:gap-8 opacity-0 translate-y-8 transition-all duration-700 ease-out stagger-item">
                         <div class="flex-shrink-0 bg-white border-2 border-[#333333] w-28 py-3 flex items-center justify-center h-fit">
                             <span class="text-sm font-outfit font-bold whitespace-nowrap tracking-wider">STEP 01</span>
                         </div>
                         <div class="pt-2">
                             <h4 class="font-bold text-lg mb-3">お問い合わせ</h4>
                             <p class="text-sm text-gray-800 leading-7">まずはお気軽にご要望やご相談内容をお聞かせください。目的や課題を伺い、お見積りまでは無料で対応いたします。</p>
                         </div>
                    </div>

                    <div class="relative z-10 flex gap-6 md:gap-8 opacity-0 translate-y-8 transition-all duration-700 ease-out delay-200 stagger-item">
                         <div class="flex-shrink-0 bg-white border-2 border-[#333333] w-28 py-3 flex items-center justify-center h-fit">
                             <span class="text-sm font-outfit font-bold whitespace-nowrap tracking-wider">STEP 02</span>
                         </div>
                         <div class="pt-2">
                             <h4 class="font-bold text-lg mb-3">ヒアリング</h4>
                             <p class="text-sm text-gray-800 leading-7">課題や目的を共有し、ターゲットや配布シーン、媒体の仕様などを伺い、伝えたい内容と方向性を明確にします。</p>
                         </div>
                    </div>

                    <div class="relative z-10 flex gap-6 md:gap-8 opacity-0 translate-y-8 transition-all duration-700 ease-out delay-400 stagger-item">
                         <div class="flex-shrink-0 bg-white border-2 border-[#333333] w-28 py-3 flex items-center justify-center h-fit">
                             <span class="text-sm font-outfit font-bold whitespace-nowrap tracking-wider">STEP 03</span>
                         </div>
                         <div class="pt-2">
                             <h4 class="font-bold text-lg mb-3">企画・構成</h4>
                             <p class="text-sm text-gray-800 leading-7">ヒアリング結果をもとに紙面構成とコンセプトを設計し、目的に沿ったレイアウトやビジュアルの方向性を検討します。</p>
                         </div>
                    </div>
                </div>

                <div class="relative flex flex-col gap-12 pt-0">
                    <div class="relative z-10 flex gap-6 md:gap-8 opacity-0 translate-y-8 transition-all duration-700 ease-out delay-600 stagger-item">
                         <div class="absolute left-[52px] top-0 h-[calc(100%+3rem)] w-[8px] bg-[#333333] -z-10"></div>

                         <div class="flex-shrink-0 bg-white border-2 border-[#333333] w-28 py-3 flex items-center justify-center h-fit">
                             <span class="text-sm font-outfit font-bold whitespace-nowrap tracking-wider">STEP 04</span>
                         </div>
                         <div class="pt-2">
                             <h4 class="font-bold text-lg mb-3">デザイン提案</h4>
                             <p class="text-sm text-gray-800 leading-7">構成案に基づき、レイアウト・コピー・ビジュアルなどを制作します。媒体の特性を活かした効果的なデザインに仕上げます。</p>
                         </div>
                    </div>

                    <div class="relative z-10 flex gap-6 md:gap-8 opacity-0 translate-y-8 transition-all duration-700 ease-out delay-800 stagger-item">
                         <div class="absolute left-[52px] top-0 h-[calc(100%+3rem)] w-[8px] bg-[#333333] -z-10"></div>

                         <div class="flex-shrink-0 bg-white border-2 border-[#333333] w-28 py-3 flex items-center justify-center h-fit">
                             <span class="text-sm font-outfit font-bold whitespace-nowrap tracking-wider">STEP 05</span>
                         </div>
                         <div class="pt-2">
                             <h4 class="font-bold text-lg mb-3">確認・修正  </h4>
                             <p class="text-sm text-gray-800 leading-7">デザイン案をご確認いただき、内容やデザインの修正を行います。ご要望に応じて調整し、仕上がりを整えていきます。</p>
                         </div>
                    </div>

                    <div class="relative z-10 flex gap-6 md:gap-8 opacity-0 translate-y-8 transition-all duration-700 ease-out delay-1000 stagger-item">
                         <div class="flex-shrink-0 bg-white border-2 border-[#333333] w-28 py-3 flex items-center justify-center h-fit">
                             <span class="text-sm font-outfit font-bold whitespace-nowrap tracking-wider">STEP 06</span>
                         </div>
                         <div class="pt-2">
                             <h4 class="font-bold text-lg mb-3">納品・運用</h4>
                             <p class="text-sm text-gray-800 leading-7">色校正や検品を経て、責任をもって印刷・加工し、ご指定の場所に納品いたします。データ納品にも対応可能です。</p>
                         </div>
                    </div>
                </div>

            </div>

            <div class="w-full js-reveal-mask">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/graphic-workflow.webp" alt="Graphic Work Flow" class="w-full h-[250px] md:h-[400px] object-cover shadow-lg">
            </div>

        </div>
    </section>

    <section class="bg-white">
        <div class="bg-gray-300 py-6 md:py-8 text-center">
            <h3 class="font-outfit text-4xl font-bold tracking-[0.2em] text-gray-700">SOLUTION</h3>
            <p class="font-noto text-xl font-semibold tracking-[0.2em] text-gray-600 mt-1">課題解決</p>
        </div>

        <div class="container mx-auto max-w-5xl px-6 lg:px-6 py-6 md:py-24">
            
            <p class="text-center text-base md:text-lg font-bold mb-12 tracking-widest">このようなお悩みを解決します</p>

            <div class="flex flex-col-reverse md:flex-row items-center gap-12">
                
                <div class="w-full md:w-1/2 flex justify-center js-reveal-mask">
                     <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/graphic-solution.svg   " alt="Solution" class="w-3/4 md:w-3/4 h-auto object-contain">
                </div>

                <div class="w-full md:w-1/2">
                    <ul class="space-y-6">
                        
                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-400 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm md:text-base font-bold text-gray-800">新しい商品・サービスの魅力を効果的に伝えたい</span>
                        </li>

                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-400 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm md:text-base font-bold text-gray-800">ブランディングが出来ていない</span>
                        </li>

                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-400 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm md:text-base font-bold text-gray-800">既存のパンフレットやカタログを刷新したい</span>
                        </li>

                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-400 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm md:text-base font-bold text-gray-800">折り込みチラシの効果を実感できない</span>
                        </li>

                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-400 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm md:text-base font-bold text-gray-800">手間のかかるデザイン・印刷作業に悩んでいる</span>
                        </li>

                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-400 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm md:text-base font-bold text-gray-800">複数媒体で統一感のあるデザインにしたい</span>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section class="bg-gray-200">
        <div class="bg-gray-300 py-6 md:py-8 text-center">
            <h3 class="font-outfit text-4xl font-bold tracking-[0.2em] text-gray-700">Q & A</h3>
            <p class="font-noto text-xl font-semibold tracking-[0.2em] text-gray-600 mt-1">よくある質問</p>
        </div>

        <div class="container mx-auto max-w-5xl px-6 lg:px-6 py-16 md:py-24">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-16">
                
                <div>
                    <div class="relative bg-white border border-gray-400 rounded-full py-6 px-8 mb-6 shadow-sm">
                        <p class="font-bold text-gray-800 text-sm md:text-base flex items-start gap-3">
                            <span class="font-outfit text-xl font-bold leading-none mt-[2px]">Q.</span>
                            <span>費用を教えてください</span>
                        </p>
                        <div class="absolute -bottom-[12px] left-1/2 -translate-x-1/2 w-5 h-5 bg-white border-b border-r border-gray-400 rotate-45"></div>
                    </div>
                    <div class="flex items-start gap-3 px-8">
                        <span class="font-outfit text-xl font-bold text-gray-800 leading-none mt-[2px]">A.</span>
                        <p class="text-sm text-gray-800 leading-7">
                            ツールの種類（パンフレット、ポスター、カタログなど）やボリュームによって幅があります。デザインの内容、ボリューム、納期などがわかりましたら概算を提示することもできます。お気軽にお問い合わせください。
                        </p>
                    </div>
                </div>

                <div>
                    <div class="relative bg-white border border-gray-400 rounded-full py-6 px-8 mb-6 shadow-sm">
                        <p class="font-bold text-gray-800 text-sm md:text-base flex items-start gap-3">
                            <span class="font-outfit text-xl font-bold leading-none mt-[2px]">Q.</span>
                            <span>デザインのことは素人ですが大丈夫ですか？</span>
                        </p>
                        <div class="absolute -bottom-[12px] left-1/2 -translate-x-1/2 w-5 h-5 bg-white border-b border-r border-gray-400 rotate-45"></div>
                    </div>
                    <div class="flex items-start gap-3 px-8">
                        <span class="font-outfit text-xl font-bold text-gray-800 leading-none mt-[2px]">A.</span>
                        <p class="text-sm text-gray-800 leading-7">
                            お客様に納得していただけるよう、可能な限り言語化してお伝えしております。印刷物であれば使用・展示されるシーンを考慮し、市場調査をした上でデザイン案を組み立てていきます。お客様のご要望に耳を傾け、その過程を共有しながら進行いたします。
                        </p>
                    </div>
                </div>

                <div class="qa-hidden-item hidden md:block">
                    <div class="relative bg-white border border-gray-400 rounded-full py-6 px-8 mb-6 shadow-sm">
                        <p class="font-bold text-gray-800 text-sm md:text-base flex items-start gap-3">
                            <span class="font-outfit text-xl font-bold leading-none mt-[2px]">Q.</span>
                            <span>どんなクライアントが多いですか?</span>
                        </p>
                        <div class="absolute -bottom-[12px] left-1/2 -translate-x-1/2 w-5 h-5 bg-white border-b border-r border-gray-400 rotate-45"></div>
                    </div>
                    <div class="flex items-start gap-3 px-8">
                        <span class="font-outfit text-xl font-bold text-gray-800 leading-none mt-[2px]">A.</span>
                        <p class="text-sm text-gray-800 leading-7">
                            企業、個人事業主（士業など含む）や個人のお客様などさまざまなお客様がいらっしゃいます。ロゴの作成から、印刷物、ホームページ、動画までデザインに関するものに幅広く対応いたします。
                        </p>
                    </div>
                </div>

                <div class="qa-hidden-item hidden md:block">
                    <div class="relative bg-white border border-gray-400 rounded-full py-6 px-8 mb-6 shadow-sm">
                        <p class="font-bold text-gray-800 text-sm md:text-base flex items-start gap-3">
                            <span class="font-outfit text-xl font-bold leading-none mt-[2px]">Q.</span>
                            <span>撮影やイラストもお願いできますか？</span>
                        </p>
                        <div class="absolute -bottom-[12px] left-1/2 -translate-x-1/2 w-5 h-5 bg-white border-b border-r border-gray-400 rotate-45"></div>
                    </div>
                    <div class="flex items-start gap-3 px-8">
                        <span class="font-outfit text-xl font-bold text-gray-800 leading-none mt-[2px]">A.</span>
                        <p class="text-sm text-gray-800 leading-7">
                            はい、対応いたします。撮影はスタッフが行うか、ジャンルによっては専門のフォトグラファーを手配いたします。イラストはテイストを教えていただければ、それにあわせて描き起こします。
                        </p>
                    </div>
                </div>

                <div class="qa-hidden-item hidden md:block">
                    <div class="relative bg-white border border-gray-400 rounded-full py-6 px-8 mb-6 shadow-sm">
                        <p class="font-bold text-gray-800 text-sm md:text-base flex items-start gap-3">
                            <span class="font-outfit text-xl font-bold leading-none mt-[2px]">Q.</span>
                            <span>デザイン案を複数見せてもらうと費用がかかりますか？</span>
                        </p>
                        <div class="absolute -bottom-[12px] left-1/2 -translate-x-1/2 w-5 h-5 bg-white border-b border-r border-gray-400 rotate-45"></div>
                    </div>
                    <div class="flex items-start gap-3 px-8">
                        <span class="font-outfit text-xl font-bold text-gray-800 leading-none mt-[2px]">A.</span>
                        <p class="text-sm text-gray-800 leading-7">
                            最初から1案でデザインが決定するということはまずありません。数案をご提案させていただき、その中から良い要素を集めて最終のデザインを制作していきます。これらは全て通常費用に含まれています。（カタログのデータ流し込みや定型の決まったチラシなどはこの限りではありません）
                        </p>
                    </div>
                </div>

                <div class="qa-hidden-item hidden md:block">
                    <div class="relative bg-white border border-gray-400 rounded-full py-6 px-8 mb-6 shadow-sm">
                        <p class="font-bold text-gray-800 text-sm md:text-base flex items-start gap-3">
                            <span class="font-outfit text-xl font-bold leading-none mt-[2px]">Q.</span>
                            <span>印刷も含めて依頼できますか？</span>
                        </p>
                        <div class="absolute -bottom-[12px] left-1/2 -translate-x-1/2 w-5 h-5 bg-white border-b border-r border-gray-400 rotate-45"></div>
                    </div>
                    <div class="flex items-start gap-3 px-8">
                        <span class="font-outfit text-xl font-bold text-gray-800 leading-none mt-[2px]">A.</span>
                        <p class="text-sm text-gray-800 leading-7">
                            はい、大丈夫です。印刷会社と提携し、品質を管理し印刷物で納品いたします。紙・印刷方法などもご予算、ご要望に応じて最適な形をご提案します。
                        </p>
                    </div>
                </div>

                <div class="qa-hidden-item hidden md:block">
                    <div class="relative bg-white border border-gray-400 rounded-full py-6 px-8 mb-6 shadow-sm">
                        <p class="font-bold text-gray-800 text-sm md:text-base flex items-start gap-3">
                            <span class="font-outfit text-xl font-bold leading-none mt-[2px]">Q.</span>
                            <span>個人からの制作依頼も可能ですか?</span>
                        </p>
                        <div class="absolute -bottom-[12px] left-1/2 -translate-x-1/2 w-5 h-5 bg-white border-b border-r border-gray-400 rotate-45"></div>
                    </div>
                    <div class="flex items-start gap-3 px-8">
                        <span class="font-outfit text-xl font-bold text-gray-800 leading-none mt-[2px]">A.</span>
                        <p class="text-sm text-gray-800 leading-7">
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
                        <p class="text-sm text-gray-800 leading-7">
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