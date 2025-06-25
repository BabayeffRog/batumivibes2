<header class="cs_site_header cs_style_1 cs_fs_18 cs_sticky_header">
    <div class="cs_main_header">
        <div class="cs_main_header_in">
            <div class="cs_main_header_left">
                <a class="cs_site_branding" href="{{ route('index') }}">
                    <img src="{{ asset('assets/images/batum/logo.svg') }}" alt="Logo">
                </a>
            </div>

            <div class="cs_main_header_center">
                <div class="cs_nav cs_medium cs_primary_font">
                    <ul class="cs_nav_list">
                        <li><a href="{{ route('index') }}">{{ __('home.home') }}</a></li>
                        <li><a href="{{ route('about') }}">{{ __('home.about_us') }}</a></li>
                        <li class="menu-item-has-children">
                            <a href="#">{{ __('home.services') }}</a>
                            <ul>
                                <li><a href="{{ route('index') }}">{{ __('home.villa_rent') }}</a></li>
                                <li><a href="{{ route('index') }}">{{ __('home.apartment_rent') }}</a></li>
                                <li><a href="{{ route('index') }}">{{ __('home.apartment_sale') }}</a></li>
                                <li><a href="{{ route('index') }}">{{ __('home.yacht_rental') }}</a></li>
                                <li><a href="{{ route('index') }}">{{ __('home.airport_transfer') }}</a></li>
                                <li><a href="{{ route('index') }}">{{ __('home.legal_support') }}</a></li>
                                <li><a href="{{ route('index') }}">{{ __('home.adventure_tours') }}</a></li>
                                <li><a href="{{ route('index') }}">{{ __('home.property_management') }}</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ route('tour') }}">{{ __('home.tours') }}</a>
                            <ul>
                                <li><a href="{{ route('tour') }}">{{ __('home.tour') }}</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('blog') }}">{{ __('home.blog') }}</a></li>
                        <li><a href="{{ route('contact') }}">{{ __('home.contact') }}</a></li>


                    </ul>

                </div>
            </div>

            <div class="cs_main_header_right">
                <div class="cs_header_toolbox">
                    <div>
                        <button class="cs_search_btn cs_fs_24" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                    <div class="cs_fs_20 cs_medium">
                        <a href="{{ route('change.lang', 'en') }}"> EN </a> |
                        <a href="{{ route('change.lang', 'tr') }}"> TR </a> |
                        <a href="{{ route('change.lang', 'ru') }}"> RU </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
