<?php
/**
 * Template Name: ホームページ制作
 */
get_header(); 
?>

<main class="w-full pt-20">

    <div class="relative h-[250px] md:h-[300px] w-full overflow-hidden bg-gray-200">
        <div class="absolute inset-0">
             <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/website-hero.webp" alt="Website Hero" class="w-full h-full object-cover">
        </div>
        
        <div class="bg-black/70 absolute inset-0 flex flex-col items-center justify-center text-white">
            <div class="border-2 border-white px-20 py-2 backdrop-blur-[2px]">
                <h1 class="font-outfit text-3xl md:text-4xl font-bold tracking-[0.2em]">WEBSITE</h1>
            </div>
            <p class="font-noto text-sm md:text-base tracking-[0.2em] mt-4">ホームページ制作・運用支援</p>
        </div>
    </div>

    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto max-w-5xl px-8 lg:px-6">
            
            <div class="text-center mb-16">
                <div class="w-30 mx-auto mb-4">
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-web.svg" alt="" class="w-full h-auto object-contain">
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
                        <h3 class="font-bold text-lg md:text-xl text-gray-800">企業向けサイト</h3>
                    </div>
                    <p class="text-base text-gray-800 leading-7">コーポレートサイトや採用サイト等、企業価値の向上に繋がるサイトを構築</p>
                </div>

                <div>
                    <div class="flex items-center gap-4 border-b-2 border-black pb-4 mb-4">
                        <div class="w-10 flex-shrink-0">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-service-item.svg" alt="" class="w-full h-auto">
                        </div>
                        <h3 class="font-bold text-lg md:text-xl text-gray-800">EC（通販）サイト</h3>
                    </div>
                    <p class="text-base text-gray-800 leading-7">人気のネットショップサービスに対応した通販サイトを構築します</p>
                </div>

                <div>
                    <div class="flex items-center gap-4 border-b-2 border-black pb-4 mb-4">
                        <div class="w-10 flex-shrink-0">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-service-item.svg" alt="" class="w-full h-auto">
                        </div>
                        <h3 class="font-bold text-lg md:text-xl text-gray-800">LP(ランディングページ)</h3>
                    </div>
                    <p class="text-base text-gray-800 leading-7">広告や検索で集客したお客様を成果につなげるページとして構築</p>
                </div>

                <div>
                    <div class="flex items-center gap-4 border-b-2 border-black pb-4 mb-4">
                        <div class="w-10 flex-shrink-0">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-service-item.svg" alt="" class="w-full h-auto">
                        </div>
                        <h3 class="font-bold text-lg md:text-xl text-gray-800">サイト運用支援</h3>
                    </div>
                    <p class="text-base text-gray-800 leading-7">社内にWeb担当がいなくても安心、専任が更新・解析・改善を一括代行</p>
                </div>

                <div>
                    <div class="flex items-center gap-4 border-b-2 border-black pb-4 mb-4">
                        <div class="w-10 flex-shrink-0">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-service-item.svg" alt="" class="w-full h-auto">
                        </div>
                        <h3 class="font-bold text-lg md:text-xl text-gray-800">SNS運用サポート</h3>
                    </div>
                    <p class="text-base text-gray-800 leading-7">戦略と手間が必要なSNS運用は、専任が企画からコンテンツ制作までサポート</p>
                </div>

                <div>
                    <div class="flex items-center gap-4 border-b-2 border-black pb-4 mb-4">
                        <div class="w-10 flex-shrink-0">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-service-item.svg" alt="" class="w-full h-auto">
                        </div>
                        <h3 class="font-bold text-lg md:text-xl text-gray-800">サイトリニューアル</h3>
                    </div>
                    <p class="text-base text-gray-800 leading-7">スマホ対応を含め、サイトを使いやすく、成果につながる形にリニューアルします</p>
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
            
            <div class="flex flex-col md:grid md:grid-cols-2 gap-0 md:gap-x-20 mb-16">

                <div class="relative flex flex-col gap-12 pb-12 md:pb-0">
                    <div class="absolute left-[52px] top-0 bottom-0 w-[8px] bg-[#333333]"></div>

                    <div class="relative z-10 flex gap-6 md:gap-8">
                         <div class="flex-shrink-0 bg-white border-2 border-[#333333] w-28 py-3 flex items-center justify-center h-fit">
                             <span class="text-sm font-outfit font-bold whitespace-nowrap tracking-wider">STEP 01</span>
                         </div>
                         <div class="pt-2">
                             <h4 class="font-bold text-lg mb-3">お問い合わせ</h4>
                             <p class="text-sm text-gray-800 leading-7">まずはお気軽にご要望やご相談内容をお聞かせください。目的や課題を伺い、お見積りまでは無料で対応いたします。</p>
                         </div>
                    </div>

                    <div class="relative z-10 flex gap-6 md:gap-8">
                         <div class="flex-shrink-0 bg-white border-2 border-[#333333] w-28 py-3 flex items-center justify-center h-fit">
                             <span class="text-sm font-outfit font-bold whitespace-nowrap tracking-wider">STEP 02</span>
                         </div>
                         <div class="pt-2">
                             <h4 class="font-bold text-lg mb-3">ヒアリング</h4>
                             <p class="text-sm text-gray-800 leading-7">課題を整理し、目的・ターゲット・競合・ブランドイメージ等を伺い、サイトの方向性を明確にします。</p>
                         </div>
                    </div>

                    <div class="relative z-10 flex gap-6 md:gap-8">
                         <div class="flex-shrink-0 bg-white border-2 border-[#333333] w-28 py-3 flex items-center justify-center h-fit">
                             <span class="text-sm font-outfit font-bold whitespace-nowrap tracking-wider">STEP 03</span>
                         </div>
                         <div class="pt-2">
                             <h4 class="font-bold text-lg mb-3">目標設定</h4>
                             <p class="text-sm text-gray-800 leading-7">ヒアリング結果をもとにゴール（KPI）やデザイン方針を策定し、Webサイト全体の構成や戦略を設計します。</p>
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
                             <h4 class="font-bold text-lg mb-3">デザイン提案</h4>
                             <p class="text-sm text-gray-800 leading-7">戦略とコンセプトをもとに、サイト構成とビジュアル案をご提案。ご了承後、デザイン制作へ進みます。</p>
                         </div>
                    </div>

                    <div class="relative z-10 flex gap-6 md:gap-8">
                         <div class="absolute left-[52px] top-0 h-[calc(100%+3rem)] w-[8px] bg-[#333333] -z-10"></div>

                         <div class="flex-shrink-0 bg-white border-2 border-[#333333] w-28 py-3 flex items-center justify-center h-fit">
                             <span class="text-sm font-outfit font-bold whitespace-nowrap tracking-wider">STEP 05</span>
                         </div>
                         <div class="pt-2">
                             <h4 class="font-bold text-lg mb-3">制作・構築</h4>
                             <p class="text-sm text-gray-800 leading-7">ご提案内容をもとに、キービジュアルや各ページのデザインを制作します。その後、動作確認と管理機能の設定を行います。</p>
                         </div>
                    </div>

                    <div class="relative z-10 flex gap-6 md:gap-8">
                         <div class="flex-shrink-0 bg-white border-2 border-[#333333] w-28 py-3 flex items-center justify-center h-fit">
                             <span class="text-sm font-outfit font-bold whitespace-nowrap tracking-wider">STEP 06</span>
                         </div>
                         <div class="pt-2">
                             <h4 class="font-bold text-lg mb-3">納品・運用</h4>
                             <p class="text-sm text-gray-800 leading-7">公開前に最終確認を行い、問題がなければサイトを公開します。納品後も安心して運用できるよう、管理環境を整えます。</p>
                         </div>
                    </div>
                </div>

            </div>

            <div class="w-full">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/website-workflow.webp" alt="Work Flow" class="w-full h-[250px] md:h-[400px] object-cover shadow-lg">
            </div>

        </div>
    </section>

    <section class="bg-white">
        <div class="bg-gray-300 py-6 md:py-8 text-center">
            <h3 class="font-outfit text-4xl font-bold tracking-[0.2em] text-gray-700">SOLUTION</h3>
            <p class="font-noto text-xl font-semibold tracking-[0.2em] text-gray-600 mt-1">課題解決</p>
        </div>

        <div class="container mx-auto max-w-5xl px-6 lg:px-6 py-16 md:py-24">
            
            <p class="text-center text-base md:text-lg font-bold mb-12 tracking-widest">このようなお悩みを解決します</p>

            <div class="flex flex-col-reverse md:flex-row items-center gap-12">
                
                <div class="w-full md:w-1/2 flex justify-center">
                     <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/website-solution.svg" alt="Solution" class="w-3/4 md:w-3/4 h-auto object-contain">
                </div>

                <div class="w-full md:w-1/2">
                    <ul class="space-y-6">
                        
                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-400 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm md:text-base font-bold text-gray-800">スマホに最適化されていない為、文字が小さく見づらい</span>
                        </li>

                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-400 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm md:text-base font-bold text-gray-800">限られた予算で効果的なサイトを作りたい</span>
                        </li>

                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-400 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm md:text-base font-bold text-gray-800">訪問者が少なく、問い合わせにつながらない</span>
                        </li>

                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-400 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm md:text-base font-bold text-gray-800">更新や管理に手間がかかる</span>
                        </li>

                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-400 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm md:text-base font-bold text-gray-800">SEO や SNS との連携が不十分</span>
                        </li>

                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-400 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm md:text-base font-bold text-gray-800">社内にWebの専門知識を持つ専任担当がいない</span>
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
                            <span>ホームページの制作費はどのくらいですか？</span>
                        </p>
                        <div class="absolute -bottom-[12px] left-1/2 -translate-x-1/2 w-5 h-5 bg-white border-b border-r border-gray-400 rotate-45"></div>
                    </div>
                    <div class="flex items-start gap-3 px-8">
                        <span class="font-outfit text-xl font-bold text-gray-800 leading-none mt-[2px]">A.</span>
                        <p class="text-sm text-gray-800 leading-7">
                            ページ数やワードプレスを使用するかなどにもよりますが、平均すると30万〜70万程度の受注をいただいております。ランディングページ（LP）1ページからお受けいたしますので、その場合の費用はよりお安くなります。まずはお気軽にお問い合わせください。
                        </p>
                    </div>
                </div>

                <div>
                    <div class="relative bg-white border border-gray-400 rounded-full py-6 px-8 mb-6 shadow-sm">
                        <p class="font-bold text-gray-800 text-sm md:text-base flex items-start gap-3">
                            <span class="font-outfit text-xl font-bold leading-none mt-[2px]">Q.</span>
                            <span>納期はどれくらいですか？</span>
                        </p>
                        <div class="absolute -bottom-[12px] left-1/2 -translate-x-1/2 w-5 h-5 bg-white border-b border-r border-gray-400 rotate-45"></div>
                    </div>
                    <div class="flex items-start gap-3 px-8">
                        <span class="font-outfit text-xl font-bold text-gray-800 leading-none mt-[2px]">A.</span>
                        <p class="text-sm text-gray-800 leading-7">
                            サイト規模にもよりますが、ワードプレスなどを使わない静的なページでしたら2週間〜、ワードプレスを使用の場合は1カ月〜となります。お急ぎの場合も状況次第でお受けすることができますので、お気軽にお問い合わせください。
                        </p>
                    </div>
                </div>

                <div class="qa-hidden-item hidden md:block">
                    <div class="relative bg-white border border-gray-400 rounded-full py-6 px-8 mb-6 shadow-sm">
                        <p class="font-bold text-gray-800 text-sm md:text-base flex items-start gap-3">
                            <span class="font-outfit text-xl font-bold leading-none mt-[2px]">Q.</span>
                            <span>月額やランニング費用はかかりますか？</span>
                        </p>
                        <div class="absolute -bottom-[12px] left-1/2 -translate-x-1/2 w-5 h-5 bg-white border-b border-r border-gray-400 rotate-45"></div>
                    </div>
                    <div class="flex items-start gap-3 px-8">
                        <span class="font-outfit text-xl font-bold text-gray-800 leading-none mt-[2px]">A.</span>
                        <p class="text-sm text-gray-800 leading-7">
                            通常のページ制作依頼でしたら追加の費用は一切かかりません。一方で、SEOやセキュリティの観点からホームページは更新し、アップデートし続けることが重要です。制作と更新・運用は別物と考え、両方ともにサービスを提供しております。
                        </p>
                    </div>
                </div>

                <div class="qa-hidden-item hidden md:block">
                    <div class="relative bg-white border border-gray-400 rounded-full py-6 px-8 mb-6 shadow-sm">
                        <p class="font-bold text-gray-800 text-sm md:text-base flex items-start gap-3">
                            <span class="font-outfit text-xl font-bold leading-none mt-[2px]">Q.</span>
                            <span>ホームページを作りたいが画像や文章が用意できない</span>
                        </p>
                        <div class="absolute -bottom-[12px] left-1/2 -translate-x-1/2 w-5 h-5 bg-white border-b border-r border-gray-400 rotate-45"></div>
                    </div>
                    <div class="flex items-start gap-3 px-8">
                        <span class="font-outfit text-xl font-bold text-gray-800 leading-none mt-[2px]">A.</span>
                        <p class="text-sm text-gray-800 leading-7">
                            このようなお客様は多くいらっしゃいます。打ち合わせの中で聞き取りさせていただき、コピーや原稿を作成いたします。画像についても既存の写真素材や新規で撮影するなどいかようにでも対応可能です。費用も含めてお気軽にお問い合わせください。
                        </p>
                    </div>
                </div>

                <div class="qa-hidden-item hidden md:block">
                    <div class="relative bg-white border border-gray-400 rounded-full py-6 px-8 mb-6 shadow-sm">
                        <p class="font-bold text-gray-800 text-sm md:text-base flex items-start gap-3">
                            <span class="font-outfit text-xl font-bold leading-none mt-[2px]">Q.</span>
                            <span>すでに契約済みのドメインやサーバは利用できますか？</span>
                        </p>
                        <div class="absolute -bottom-[12px] left-1/2 -translate-x-1/2 w-5 h-5 bg-white border-b border-r border-gray-400 rotate-45"></div>
                    </div>
                    <div class="flex items-start gap-3 px-8">
                        <span class="font-outfit text-xl font-bold text-gray-800 leading-none mt-[2px]">A.</span>
                        <p class="text-sm text-gray-800 leading-7">
                            はい、そのまま使用可能です。契約情報を教えていただく必要がございますので、契約書を締結の上で継続使用を前提にご対応いたします。10年以上前のサーバなどの場合、借り換えることでサーバの性能が上がり月額費用が安くなる場合もございます。適宜、最適なものをご提案させていただきます。
                        </p>
                    </div>
                </div>

                <div class="qa-hidden-item hidden md:block">
                    <div class="relative bg-white border border-gray-400 rounded-full py-6 px-8 mb-6 shadow-sm">
                        <p class="font-bold text-gray-800 text-sm md:text-base flex items-start gap-3">
                            <span class="font-outfit text-xl font-bold leading-none mt-[2px]">Q.</span>
                            <span>納品の方法を教えて欲しい</span>
                        </p>
                        <div class="absolute -bottom-[12px] left-1/2 -translate-x-1/2 w-5 h-5 bg-white border-b border-r border-gray-400 rotate-45"></div>
                    </div>
                    <div class="flex items-start gap-3 px-8">
                        <span class="font-outfit text-xl font-bold text-gray-800 leading-none mt-[2px]">A.</span>
                        <p class="text-sm text-gray-800 leading-7">
                            お客様により様々です。html/css/jsなどのファイル一式の納品はもちろん、お客様が契約済みのサーバへのアップロード、記録メディアでの納品などどのような形式でも極力対応いたします。
                        </p>
                    </div>
                </div>

                <div class="qa-hidden-item hidden md:block">
                    <div class="relative bg-white border border-gray-400 rounded-full py-6 px-8 mb-6 shadow-sm">
                        <p class="font-bold text-gray-800 text-sm md:text-base flex items-start gap-3">
                            <span class="font-outfit text-xl font-bold leading-none mt-[2px]">Q.</span>
                            <span>個人からの制作依頼も可能ですか？</span>
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
                            <span>遠方からの依頼はできますか？</span>
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