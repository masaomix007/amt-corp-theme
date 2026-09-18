<?php
/**
 * Floating Contact CTA
 */

if (is_page('contact') || is_page_template('page-contact.php')) {
    return;
}

$contact_url = esc_url(home_url('/contact/'));
?>

<div data-floating-contact-cta aria-label="固定お問い合わせ導線">
    <a
        href="<?php echo $contact_url; ?>"
        data-floating-contact-cta-pc
        data-hide-translate="translate-x-4"
        class="!no-underline fixed right-0 top-1/2 z-[55] hidden -translate-y-1/2 flex-col items-center justify-center gap-2 rounded-l-2xl border border-black bg-black px-6 py-6 text-center font-noto text-base font-bold leading-relaxed tracking-wider text-white shadow-lg transition-all duration-300 hover:bg-white hover:text-black focus-visible:bg-white focus-visible:text-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black motion-reduce:transition-none lg:flex"
    >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-8 w-8 shrink-0">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
        </svg>
        <span aria-hidden="true" class="h-px w-8 bg-current"></span>
        <span>今すぐ<br>ご相談<br>お見積り</span>
    </a>

    <a
        href="<?php echo $contact_url; ?>"
        data-floating-contact-cta-sp
        data-hide-translate="translate-y-4"
        class="!no-underline fixed bottom-0 left-0 z-40 flex min-h-16 w-full items-center justify-center gap-5 bg-black px-5 pb-[calc(1rem+env(safe-area-inset-bottom))] pt-4 font-noto text-lg font-bold tracking-wider text-white shadow-[0_-4px_16px_rgba(0,0,0,0.18)] transition-all duration-300 hover:bg-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-[-4px] focus-visible:outline-white active:bg-black motion-reduce:transition-none lg:hidden"
    >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-8 w-8 shrink-0">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
        </svg>
        <span>制作について相談する</span>
    </a>
</div>
