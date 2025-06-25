<footer class="cs_footer cs_style_1 cs_white_color cs_bg_filed cs_primary_bg" data-src="{{ asset('assets/images/footer_bg.jpeg') }}">
    <div class="cs_newsletter_1_wrap">
        <div class="container-fluid">
            <div class="cs_newsletter cs_style_1 cs_accent_bg">
                <div class="cs_newsletter_icon"><img src="{{ asset('assets/images/icons/envlop.png') }}" alt="Icon"></div>
                <h2 class="cs_newsletter_title cs_fs_40 cs_bold mb-0 cs_white_color">{{ __('footer.subscribe_title') }}</h2>
                <form action="#" class="cs_newsletter_form">
                    <input type="text" class="cs_newsletter_form_field" placeholder="{{ __('footer.subscribe_placeholder') }}">
                    <button type="submit" class="cs_btn cs_style_1 cs_fs_18 cs_medium">
                        {{ __('footer.subscribe_button') }}
                        <svg>...icon... (eyni qalır)</svg>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="cs_footer_main">
            <!-- Logo + Contact -->
            <div class="cs_footer_main_col">
                <div class="cs_footer_widget">
                    <div class="cs_text_widget">
                        <img src="{{ asset('assets/images/batum/logo.svg') }}" alt="Logo">
                    </div>
                    <ul class="cs_contact_widget mb-0">
                        <li>
                            <p>{{ __('footer.call_us') }}</p>
                            <p class="cs_fs_20">+995 591 123 456</p>
                        </li>
                        <li>
                            <p>{{ __('footer.mail_us') }}</p>
                            <p class="cs_fs_20">hello@batumivibes.com</p>
                        </li>
                        <li>
                            <p>{{ __('footer.follow_us') }}</p>
                            <div class="cs_social_btn cs_style_1 d-flex">
                                <a href="https://t.me/batumivibes" target="_blank" class="cs_center"><i class="fa-brands fa-telegram"></i></a>
                                <a href="https://instagram.com/batumivibes" target="_blank" class="cs_center"><i class="fa-brands fa-instagram"></i></a>
                                <a href="https://youtube.com/@batumivibes" target="_blank" class="cs_center"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Useful Links -->
            <div class="cs_footer_main_col">
                <div class="cs_footer_widget">
                    <h3 class="cs_footer_widget_title cs_fs_24 cs_semibold cs_white_color">{{ __('footer.useful_links') }}</h3>
                    <ul class="cs_menu_widget">
                        <li><a href="{{ route('index') }}">{{ __('footer.home') }}</a></li>
                        <li><a href="{{ route('about') }}">{{ __('footer.about') }}</a></li>
                        <li><a href="#">{{ __('footer.villas') }}</a></li>
                        <li><a href="#">{{ __('footer.yachts') }}</a></li>
                        <li><a href="#">{{ __('footer.apartments') }}</a></li>
                        <li><a href="#">{{ __('footer.transfer') }}</a></li>
                        <li><a href="{{ route('contact') }}">{{ __('footer.contact') }}</a></li>
                    </ul>
                </div>
            </div>

            <!-- Location Info -->
            <div class="cs_footer_main_col">
                <div class="cs_footer_widget">
                    <h3 class="cs_footer_widget_title cs_fs_24 cs_semibold cs_white_color">{{ __('footer.our_locations') }}</h3>
                    <ul class="cs_menu_widget">
                        <li><a href="#">{{ __('footer.batumi_center') }}</a></li>
                        <li><a href="#">{{ __('footer.gonio') }}</a></li>
                        <li><a href="#">{{ __('footer.makhinjauri') }}</a></li>
                        <li><a href="#">{{ __('footer.old_boulevard') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom -->
    <div class="container">
        <div class="cs_footer_bottom">
            <div class="cs_copyright">{{ __('footer.copyright') }}</div>
            <ul class="cs_menu_widget_2 cs_mp0">
                <li><a href="#">{{ __('footer.terms') }}</a></li>
            </ul>
        </div>
    </div>
</footer>
