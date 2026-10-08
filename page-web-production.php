<?php
/**
 * Template Name: Webサイト制作・リニューアル LP
 */

$asset_url = get_stylesheet_directory_uri() . '/images/';
$lp_asset_url = $asset_url . 'web-production/';
$contact_url = home_url('/contact/');

$problems = [
    ['title' => '事業内容が反映されていない', 'description' => '事業内容や強みが変わっているのに、webサイトが以前のままになっている。', 'image' => 'problem_01.svg'],
    ['title' => 'リニューアルしたいが何を載せるか整理できていない', 'description' => '掲載する情報や優先順位を社内だけでは整理できていない。', 'image' => 'problem_02.svg'],
    ['title' => '企業・事業の転換点に合わせて、見せ方を整えたい。', 'description' => '新事業・新施設・周年事業継承などを機に、企業やブランドの見せ方を整えたい。', 'image' => 'problem_03.svg'],
    ['title' => '情報が増え、誰に何をどう見せるべきか分からない', 'description' => '事業やサービス、対象ユーザーが増えサイト全体の情報や導線が複雑になっている。', 'image' => 'problem_04.svg'],
];

$approaches = [
    ['title' => '目的・課題を整理', 'description' => 'なぜサイトを作る／刷新するのか。', 'image' => 'concept_01.png', 'width' => 1471, 'height' => 1069, 'items' => ['事業課題', '制作目的', 'webサイトに求める役割']],
    ['title' => '誰に・何を伝えるのかを整理', 'description' => '誰に、どのような価値を伝えるべきか。', 'image' => 'concept_02.png', 'width' => 1000, 'height' => 705, 'items' => ['ターゲット', '企業／事業の強み', '訴求内容', '優先メッセージ']],
    ['title' => 'コンセプト・表現方針を整理', 'description' => 'どのような方向性・世界観で伝えるのか。', 'image' => 'concept_03.png', 'width' => 1000, 'height' => 603, 'items' => ['コンセプト', 'アイデア', 'トーン＆マナー', 'デザイン方針']],
    ['title' => '情報設計・サイト構成へ落とす', 'description' => '整理した内容をwebサイトの形にする。', 'image' => 'concept_04.png', 'width' => 1560, 'height' => 1008, 'items' => ['必要な情報の整理', '情報の優先順位', 'ページ構成', 'ユーザー導線']],
];

$services = [
    ['title' => 'コーポレートサイト新規制作・リニューアル', 'description' => '会社や事業の価値が正しく伝わるコーポレートサイトを企画・制作いたします。', 'icon' => 'icon-web.svg', 'items' => ['企画／構成', '情報設計', 'webデザイン', 'WordPress制作', 'プロジェクト管理']],
    ['title' => '新事業・新施設サイト', 'description' => '新しい事業やブランドの価値・世界観を、一貫したwebサイトとして形にします。', 'icon' => 'icon-graphic.svg', 'items' => ['コンセプト／企画', 'サイト構成', 'コンテンツ設計', 'webデザイン／制作', 'プロジェクト管理']],
];

$cases = [
    ['number' => '01', 'label' => 'コーポレートサイト刷新'],
    ['number' => '02', 'label' => '新事業・新施設サイト'],
    ['number' => '03', 'label' => '学校法人サイト刷新'],
];

$flows = [
    ['title' => 'お問い合わせ・ご相談', 'description' => 'webサイトの新規制作・リニューアル、新事業・新施設サイトなど、検討中の内容をお聞かせください。'],
    ['title' => 'ヒアリング・目標整理', 'description' => '現状や目的、ご要望をお伺いし、webサイトに求める役割や達成したいゴールを整理します。必要に応じて、成果を確認するためのKPIも設定します。'],
    ['title' => '企画・構成・ご提案', 'description' => 'ヒアリング内容をもとに、必要な情報やサイト構成、表現方針、制作内容などをご提案します。'],
    ['title' => 'デザイン・制作', 'description' => '合意した企画・構成をもとに、webデザイン、WordPress制作、必要な機能実装などを進めます。'],
    ['title' => '確認・公開', 'description' => '表示・動作・掲載内容をご確認いただき、必要な調整を行ったうえでwebサイトを公開します。'],
    ['title' => '公開後の保守・運用', 'description' => '公開後の更新・保守をはじめ、必要に応じてブログ、SEO・AIO、SNS等の情報発信についても継続してご相談いただけます。'],
];

$faqs = [
    [
        'question' => '企画や掲載内容がまだ決まっていなくても相談できますか？',
        'answer' => 'はい、具体的に決まっていない段階からご相談いただけます。「誰に、何を伝えたいか」「どのような課題を解決したいか」をお伺いし、サイトの方向性や掲載内容を一緒に整理します。まずは現在のお悩みや、実現したいことをお聞かせください。',
    ],
    [
        'question' => '自社の強みやサービス内容の整理から相談できますか？',
        'answer' => 'はい、ご相談いただけます。事業やサービスの特徴、お客様に選ばれている理由などを丁寧にお伺いし、伝えるべき強みを整理します。そのうえで、訪問者に分かりやすく伝わる構成や表現をご提案します。会社案内や既存の営業資料があれば、そちらも参考に進められます。',
    ],
    [
        'question' => 'ホームページの制作費はどのくらいですか？',
        'answer' => 'ページ数やワードプレスを使用するかなどにもよりますが、平均すると30万〜70万程度の受注をいただいております。ランディングページ（LP）1ページからお受けいたしますので、その場合の費用はよりお安くなります。まずはお気軽にお問い合わせください。',
    ],
    [
        'question' => '納期はどれくらいですか？',
        'answer' => 'サイト規模にもよりますが、ワードプレスなどを使わない静的なページでしたら2週間〜、ワードプレスを使用の場合は1カ月〜となります。お急ぎの場合も状況次第でお受けすることができますので、お気軽にお問い合わせください。',
    ],
    [
        'question' => '月額やランニング費用はかかりますか？',
        'answer' => '通常のページ制作依頼でしたら追加の費用は一切かかりません。一方で、SEOやセキュリティの観点からホームページは更新し、アップデートし続けることが重要です。制作と更新・運用は別物と考え、両方ともにサービスを提供しております。',
    ],
    [
        'question' => 'ホームページを作りたいが画像や文章が用意できない',
        'answer' => 'このようなお客様は多くいらっしゃいます。打ち合わせの中で聞き取りさせていただき、コピーや原稿を作成いたします。画像についても既存の写真素材や新規で撮影するなどいかようにでも対応可能です。費用も含めてお気軽にお問い合わせください。',
    ],
    [
        'question' => '現在のサイトをスマホ対応にしたいです。',
        'answer' => 'はい、対応可能です。現在のサイトを確認し、スマートフォンでも文字や画像が見やすく、操作しやすい表示になるよう改善をご提案します。既存の内容を活かした改修から、サイト全体のリニューアルまで、ご要望やご予算に合わせてご相談いただけます。',
    ],
    [
        'question' => '広告の飛び先として使うLPだけ制作できますか？',
        'answer' => 'はい、LP（ランディングページ）1ページから制作を承ります。広告で紹介する商品・サービスや想定するお客様、問い合わせなどの目的をお伺いし、広告の内容とつながる構成やデザインをご提案します。企画や掲載内容が決まっていない段階でも、お気軽にご相談ください。',
    ],
    [
        'question' => 'すでに契約済みのドメインやサーバは利用できますか？',
        'answer' => 'はい、そのまま使用可能です。契約情報を教えていただく必要がございますので、契約書を締結の上で継続使用を前提にご対応いたします。10年以上前のサーバなどの場合、借り換えることでサーバの性能が上がり月額費用が安くなる場合もございます。適宜、最適なものをご提案させていただきます。',
    ],
    [
        'question' => '納品の方法を教えて欲しい',
        'answer' => 'お客様により様々です。html/css/jsなどのファイル一式の納品はもちろん、お客様が契約済みのサーバへのアップロード、記録メディアでの納品などどのような形式でも極力対応いたします。',
    ],
    [
        'question' => '個人からの制作依頼も可能ですか？',
        'answer' => 'はい、承ります。小売店様や個人様の制作も行っており、ご予算に応じたプランをご提案いたします。お気軽にお問い合わせください。',
    ],
    [
        'question' => '遠方からの依頼はできますか？',
        'answer' => 'はい、可能です。Zoomなどを使用したオンラインでの打ち合わせを基本として進行させていただきます。',
    ],
];

get_header();
?>

<main id="main" data-web-production class="amt-web-production w-full pt-20 font-noto">
    <section aria-labelledby="lp-title" class="lp-hero relative flex items-center bg-gray-800 text-white">
        <img src="<?php echo esc_url($lp_asset_url . 'web-production-hero.webp'); ?>" alt="" width="5000" height="2813" fetchpriority="high" decoding="async" class="absolute inset-0 h-full w-full object-cover">
        <div aria-hidden="true" class="absolute inset-0 bg-black/65"></div>
        <div class="lp-container relative py-12 md:py-24">
            <p class="inline-block border-2 border-white px-4 py-3 text-sm font-bold tracking-wider md:px-6 md:text-2xl">webサイト制作・リニューアル</p>
            <h1 id="lp-title" class="mt-6 text-[clamp(1.75rem,3vw,2.75rem)] font-bold leading-[1.7] tracking-wider">「何を、どう伝えるべきか」<br class="hidden sm:block">から相談できる。</h1>
            <p class="mt-6 text-sm leading-8 tracking-wider md:mt-8 md:text-lg md:leading-9">目的やターゲット、伝えるべき価値の整理から、<br class="hidden md:block">サイト構成・デザイン・WordPress制作まで。<br>企画や要件が固まっていない段階からWebサイトづくりを支援します。</p>
        </div>
    </section>

    <section aria-labelledby="lp-problem-title" class="lp-section bg-white">
        <div class="lp-container">
            <p class="lp-eyebrow">PROBLEM</p>
            <h2 id="lp-problem-title" class="lp-heading">webサイトについて、<br>こんな課題を感じていませんか？</h2>
            <div class="mt-16 grid gap-x-6 gap-y-14 sm:grid-cols-2 lg:grid-cols-4">
                <?php foreach ($problems as $problem): ?>
                    <div class="flex min-w-0 flex-col">
                        <div class="lp-problem-card grow">
                            <img src="<?php echo esc_url($lp_asset_url . 'problem_question.svg'); ?>" alt="" width="62" height="60" loading="lazy" decoding="async" class="lp-question-mark">
                            <h3 class="flex min-h-24 items-center justify-center text-base font-bold leading-7"><?php echo esc_html($problem['title']); ?></h3>
                            <img src="<?php echo esc_url($lp_asset_url . $problem['image']); ?>" alt="" loading="lazy" decoding="async" class="mt-6 h-40 w-full object-contain">
                        </div>
                        <p class="lp-problem-description min-h-36"><img src="<?php echo esc_url($lp_asset_url . 'problem_triangle.svg'); ?>" alt="" width="44" height="22" loading="lazy" decoding="async" class="lp-problem-triangle"><?php echo esc_html($problem['description']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section aria-labelledby="lp-concept-title" class="lp-section lp-gray">
        <div class="lp-container">
            <p class="lp-eyebrow">CONCEPT / APPROACH</p>
            <h2 id="lp-concept-title" class="lp-heading">サイトを作る前に、<br>「何を、誰に、どう伝えるか」を整理します。</h2>
            <p class="lp-intro">webサイトは、デザインやページ制作に入る前に、<br class="hidden md:block">事業やサービスの目的、伝えたい相手、企業やブランドの価値を<br class="hidden md:block">整理することが重要です。AMTでは、企画や要件が固まっていない段階から、<br class="hidden md:block">一緒に整理するところから支援します。</p>
            <ol class="lp-approach-grid mt-14 grid gap-x-6 gap-y-12 sm:grid-cols-2 md:mt-20 lg:grid-cols-4">
                <?php foreach ($approaches as $index => $approach): ?>
                    <li class="min-w-0">
                        <div class="lp-approach-step">
                            <span class="lp-step-label">STEP <?php echo esc_html(sprintf('%02d', $index + 1)); ?></span>
                            <?php if ($index === count($approaches) - 1): ?>
                                <svg aria-hidden="true" focusable="false" class="lp-approach-arrow" width="36" height="52" viewBox="0 0 36 52" fill="none" stroke="#393f3b" stroke-width="6">
                                    <path d="M0 26H32" stroke-linecap="butt" />
                                    <path d="M11 5L32 26L11 47" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            <?php endif; ?>
                        </div>
                        <div class="border-2 border-[#555b56] bg-white p-4 text-center">
                            <img src="<?php echo esc_url($lp_asset_url . $approach['image']); ?>" alt="" width="<?php echo esc_attr($approach['width']); ?>" height="<?php echo esc_attr($approach['height']); ?>" loading="lazy" decoding="async" class="aspect-[1.4] w-full rounded-md object-contain">
                            <h3 class="flex min-h-24 items-center justify-center border-b-2 border-[#393f3b] py-4 text-base font-bold leading-7"><?php echo esc_html($approach['title']); ?></h3>
                            <p class="flex min-h-24 items-center justify-center pt-4 text-sm leading-7"><?php echo esc_html($approach['description']); ?></p>
                        </div>
                        <ul class="mt-4 space-y-2 pl-5 text-sm leading-6">
                            <?php foreach ($approach['items'] as $item): ?>
                                <li class="list-disc"><?php echo esc_html($item); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endforeach; ?>
            </ol>
            <div class="mt-12 rounded-2xl border-2 border-[#555b56] bg-white p-6 md:mt-16 md:p-8">
                <p class="flex items-start gap-3 text-lg font-bold leading-8 md:text-xl"><span aria-hidden="true" class="shrink-0">✓</span><span>整理した内容をもとに、webデザイン・WordPress制作へ進みます。</span></p>
                <p class="mt-3 text-sm leading-7 text-[#626962]">※案件内容や、すでに整理されている情報に応じて必要な工程から柔軟に対応します。</p>
            </div>
        </div>
    </section>

    <section aria-labelledby="lp-service-title" class="lp-section bg-white">
        <div class="lp-container">
            <p class="lp-eyebrow">SERVICE</p>
            <h2 id="lp-service-title" class="lp-heading">企業や事業の価値を<br>伝えるwebサイトを制作します。</h2>
            <p class="lp-intro">コーポレートサイトをはじめ、新事業・新施設、採用・販促・ECなど、目的に応じたwebサイト制作に対応しています。必要に応じて、関連するクリエイティブや公開後の運用まで一貫してご相談いただけます。</p>
            <div class="mt-12 space-y-10">
                <?php foreach ($services as $index => $service): ?>
                    <div class="lp-service-card grid gap-6 md:grid-cols-[180px_1fr] md:gap-10">
                        <div class="flex items-center gap-6 md:block">
                            <p class="lp-service-number"><span class="font-outfit text-[10px] font-bold tracking-wider">SERVICE</span><span class="font-outfit text-4xl font-bold leading-none"><?php echo esc_html($index + 1); ?></span></p>
                            <img src="<?php echo esc_url($asset_url . $service['icon']); ?>" alt="" width="120" height="120" loading="lazy" decoding="async" class="h-24 w-28 object-contain md:mx-auto md:mt-3 md:h-28">
                        </div>
                        <div class="min-w-0">
                            <h3 class="border-b-2 border-[#393f3b] pb-4 text-xl font-bold leading-8 md:text-2xl"><?php echo esc_html($service['title']); ?></h3>
                            <p class="mt-4 text-base leading-8 tracking-wider"><?php echo esc_html($service['description']); ?></p>
                            <ul class="mt-5 flex flex-wrap gap-2">
                                <?php foreach ($service['items'] as $item): ?>
                                    <li class="lp-pill"><?php echo esc_html($item); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="lp-service-card">
                    <h3 class="text-xl font-bold md:text-2xl">その他のweb制作</h3>
                    <div class="mt-6 flex flex-wrap items-center gap-4 rounded-2xl bg-[#393f3b] p-6 text-white">
                        <ul class="flex flex-wrap gap-3 text-sm">
                            <?php foreach (['採用サイト', 'LP', 'ECサイト'] as $item): ?>
                                <li class="border border-white px-5 py-2"><?php echo esc_html($item); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <p class="text-sm leading-7">等は目的に応じてご相談いただけます。</p>
                    </div>
                    <h3 class="mt-10 border-b-2 border-[#393f3b] pb-5 text-lg font-bold md:text-xl">web制作とあわせて対応できること</h3>
                    <div class="mt-8 grid gap-4 md:grid-cols-[180px_1fr]">
                        <h4 class="font-outfit text-lg font-semibold tracking-wider">【CREATIVE】</h4>
                        <div>
                            <p class="text-sm leading-8 tracking-wider">webサイトで整理したコンセプトや表現方法を起点に、必要に応じてロゴ・グラフィック・印刷物・動画まで、一貫したブランド表現として展開します。</p>
                            <div class="mt-4 flex flex-wrap gap-3">
                                <a href="<?php echo esc_url(home_url('/works/graphic/')); ?>" class="!no-underline inline-flex min-h-12 items-center gap-3 border border-[#555b56] px-4 py-3 text-xs leading-6 hover:bg-white">印刷・グラフィックについて詳しく見る<span aria-hidden="true">〉</span></a>
                                <a href="<?php echo esc_url(home_url('/works/movie/')); ?>" class="!no-underline inline-flex min-h-12 items-center gap-3 border border-[#555b56] px-4 py-3 text-xs leading-6 hover:bg-white">映像・動画制作について詳しく見る<span aria-hidden="true">〉</span></a>
                            </div>
                        </div>
                        <h4 class="mt-4 font-outfit text-lg font-semibold tracking-wider">【OPERATION】</h4>
                        <p class="text-sm leading-8 tracking-wider md:mt-4">公開後も、保守・更新やwebサイト改善に加え、ブログ・SEO／AIO・SNSなどの情報発信まで、継続的な運用を支援します。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section aria-labelledby="lp-case-title" class="lp-section lp-gray">
        <div class="lp-container">
            <p class="lp-eyebrow">CASE / PROJECT</p>
            <h2 id="lp-case-title" class="lp-heading">課題を整理し、形にしたプロジェクト</h2>
            <p class="lp-intro">どのような課題があり、何を整理し、どのような考え方でサイトへ落とし込んだのか。AMTが企画・構成段階から携わったプロジェクトを、事例を通してご紹介します。</p>
            <div role="tablist" aria-label="制作事例" data-case-tabs class="mt-12 grid grid-cols-3 md:mt-20">
                <?php foreach ($cases as $index => $case): ?>
                    <button type="button" role="tab" id="lp-case-tab-<?php echo esc_attr($case['number']); ?>" aria-controls="lp-case-panel-<?php echo esc_attr($case['number']); ?>" aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>" tabindex="<?php echo $index === 0 ? '0' : '-1'; ?>" class="lp-case-tab">
                        <span>CASE <?php echo esc_html($case['number']); ?></span>
                        <span class="mt-3 block text-[11px] font-bold leading-5 md:text-sm"><?php echo esc_html($case['label']); ?></span>
                    </button>
                <?php endforeach; ?>
            </div>
            <div class="mt-14 grid md:mt-20">
                <?php foreach ($cases as $index => $case): ?>
                    <div role="tabpanel" id="lp-case-panel-<?php echo esc_attr($case['number']); ?>" aria-labelledby="lp-case-tab-<?php echo esc_attr($case['number']); ?>" tabindex="0" class="lp-case-panel min-w-0 [grid-area:1/1]" <?php echo $index === 0 ? '' : 'hidden'; ?>>
                        <div class="border-b-2 border-[#393f3b] pb-8 text-center">
                            <h3 class="text-2xl font-bold tracking-wider md:text-3xl"><?php echo $index === 0 ? '兼高会計事務所' : 'CASE ' . esc_html($case['number']) . '（準備中）'; ?></h3>
                            <p class="mt-5 text-sm leading-7 tracking-wider md:text-lg"><?php echo $index === 0 ? '50年以上の歴史を、これからの「信頼」へつなげるサイトへ。' : '事例情報は準備中です。'; ?></p>
                        </div>
                        <div class="lp-case-images mt-10 md:mt-14">
                            <figure class="min-w-0">
                                <div class="lp-case-before-visual">
                                    <?php if ($index === 0): ?>
                                        <img src="<?php echo esc_url($lp_asset_url . 'case_01.png'); ?>" alt="兼高会計事務所のリニューアル前のWebサイト" width="458" height="418" loading="lazy" decoding="async" class="lp-case-image lp-case-before">
                                    <?php else: ?>
                                        <div role="img" aria-label="リニューアル前の画像は準備中" class="lp-case-image lp-case-before"><span class="px-2 text-center text-xs">画像準備中</span></div>
                                    <?php endif; ?>
                                    <span aria-hidden="true" class="lp-case-arrows">
                                        <img src="<?php echo esc_url($lp_asset_url . 'case_arrow_01.svg'); ?>" alt="" width="22" height="44" loading="lazy" decoding="async">
                                        <img src="<?php echo esc_url($lp_asset_url . 'case_arrow_02.svg'); ?>" alt="" width="22" height="44" loading="lazy" decoding="async">
                                    </span>
                                </div>
                                <figcaption class="mt-3 min-h-10 text-xs leading-5">● リニューアル前</figcaption>
                            </figure>
                            <figure class="min-w-0">
                                <?php if ($index === 0): ?>
                                    <img src="<?php echo esc_url($lp_asset_url . 'case_02.png'); ?>" alt="街のイラストで地元密着を表現した兼高会計事務所のリニューアル後のWebサイト" width="1412" height="802" loading="lazy" decoding="async" class="lp-case-image lp-case-after">
                                <?php else: ?>
                                    <div role="img" aria-label="リニューアル後の画像は準備中" class="lp-case-image lp-case-after"><span class="px-2 text-center text-xs">画像準備中</span></div>
                                <?php endif; ?>
                                <figcaption class="mt-3 min-h-10 text-xs leading-5">● リニューアル後　刷新サイト</figcaption>
                            </figure>
                        </div>
                        <?php if ($index === 0): ?>
                            <dl class="mt-10 grid gap-1 text-sm leading-7 md:mt-14 md:grid-cols-[220px_1fr]">
                                <dt class="flex items-center bg-[#d0d3d0] px-6 py-4 font-bold tracking-wider">課題・背景</dt>
                                <dd class="bg-white px-6 py-4">50年以上の歴史を持つ事務所の転換点にあわせたWebサイトリニューアル。<br>旧サイトは、スマートフォンへの対応やデザイン、業務内容の伝え方などに見直しの余地がありました。</dd>
                                <dt class="flex items-center bg-[#d0d3d0] px-6 py-4 font-bold tracking-wider">整理・構築・制作</dt>
                                <dd class="bg-white px-6 py-4">税理士事務所から会計事務所への変更を転機として、「50年という歴史を信頼に変換する」というコンセプトをもとに全面リニューアルを提案。<br>スマートフォン対応とWordPress導入に加え、業務範囲を正確に伝えられる内容へ再構成しました。</dd>
                                <dt class="flex items-center bg-[#d0d3d0] px-6 py-4 font-bold tracking-wider">実現した状態</dt>
                                <dd class="bg-white px-6 py-4"><ul class="list-disc pl-5"><li>地元密着のコンセプトをイラストで表現</li><li>業務範囲を正確に伝える内容へ再構成</li><li>スマートフォンへ対応</li><li>WordPress導入により更新しやすいサイトへ</li></ul></dd>
                                <dt class="flex items-center bg-[#d0d3d0] px-6 py-4 font-bold tracking-wider">対応範囲</dt>
                                <dd class="bg-white px-6 py-4">コンセプト設計 ／ Webデザイン ／ WordPress制作</dd>
                            </dl>
                        <?php else: ?>
                            <p class="mt-10 bg-white p-6 text-sm leading-7 md:mt-14">この事例の画像・掲載内容は準備中です。</p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section aria-labelledby="lp-flow-title" class="lp-section bg-white">
        <div class="lp-container">
            <p class="lp-eyebrow">FLOW</p>
            <h2 id="lp-flow-title" class="lp-heading">ご相談から公開までの流れ</h2>
            <p class="lp-intro">企画や要件が固まっていない段階からご相談いただけます。<br>お客様の状況や目的を整理しながら、企画・構成、デザイン・制作、公開まで一つの窓口で進行します。</p>
            <ol class="lp-gray mt-10 grid rounded-2xl p-5 md:grid-flow-col md:grid-cols-2 md:grid-rows-3 md:gap-x-10 md:p-8">
                <?php foreach ($flows as $index => $flow): ?>
                    <li class="lp-flow-item">
                        <span class="lp-step-label !px-2">STEP <?php echo esc_html(sprintf('%02d', $index + 1)); ?></span>
                        <div class="min-w-0">
                            <h3 class="text-base font-bold leading-7 tracking-wider md:text-lg"><?php echo esc_html($flow['title']); ?></h3>
                            <p class="mt-3 text-sm leading-7"><?php echo esc_html($flow['description']); ?></p>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>
    </section>

    <section aria-labelledby="lp-faq-title" class="lp-section lp-gray lp-faq relative">
        <div class="lp-container">
            <p class="lp-eyebrow">Q&amp;A</p>
            <h2 id="lp-faq-title" class="lp-heading">よくあるご質問</h2>
            <dl class="mt-10 grid gap-x-10 gap-y-12 md:mt-16 md:grid-cols-2">
                <?php foreach ($faqs as $faq): ?>
                    <div class="min-w-0">
                        <dt class="lp-faq-question"><span aria-hidden="true" class="shrink-0 font-outfit text-2xl">Q.</span><span><?php echo esc_html($faq['question']); ?></span></dt>
                        <dd class="mt-7 flex items-start gap-3 px-3 text-sm leading-7"><span aria-hidden="true" class="shrink-0 font-outfit text-2xl font-bold">A.</span><p><?php echo esc_html($faq['answer']); ?></p></dd>
                    </div>
                <?php endforeach; ?>
            </dl>
        </div>
    </section>

    <section id="contact" aria-labelledby="lp-contact-title" class="lp-section bg-white">
        <div class="lp-container">
            <p class="lp-eyebrow !text-[#393f3b]">CONTACT</p>
            <h2 id="lp-contact-title" class="lp-heading">webサイト制作について、<br>お気軽にご相談ください。</h2>
            <p class="lp-intro">新規作成・リニューアル、新事業・新施設サイトなど、企画や掲載内容が固まっていない段階からご相談いただけます。現在の状況をお伺いしながら、必要な進め方を一緒に整理します。</p>
            <div class="mt-10 rounded-3xl bg-black px-6 py-10 text-center text-white md:mt-14 md:px-12 md:py-14">
                <p class="text-sm leading-7 md:text-base">＼　webサイト制作について　／</p>
                <div class="mx-auto mt-6 flex max-w-3xl flex-wrap justify-center gap-4 md:gap-8">
                    <a href="<?php echo esc_url($contact_url); ?>" class="lp-contact-button !no-underline amt-cta-slide amt-cta-slide--dark inline-flex min-h-16 w-full md:w-[calc(50%_-_1rem)] items-center justify-center rounded-full border-2 border-white px-6 py-4 text-base font-bold">
                        <span>相談する</span>
                    </a>

                    <?php /*
                    <a href="<?php echo esc_url($contact_url); ?>" class="lp-contact-button !no-underline amt-cta-slide amt-cta-slide--dark inline-flex min-h-16 w-full md:w-[calc(50%_-_1rem)] items-center justify-center rounded-full border-2 border-white px-6 py-4 text-base font-bold">
                        <span>見積り依頼する</span>
                    </a>
                    */ ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
