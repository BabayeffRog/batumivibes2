@extends('layout.layout')

@section('content')

    <!-- Start Hero Section -->
    <x-hero
        :subTitle="__('about.hero_subtitle')"
        img="assets/images/about_header_bg.png"
        :title="__('about.hero_title')"
    />
    <!-- End Hero Section -->

    <!-- Start About Section -->
    <section class="cs_about cs_style_1">
        <div class="cs_height_140 cs_height_lg_80"></div>
        <div class="container">
            <div class="row align-items-center cs_gap_y_40 cs_mobile_reverse">
                <div class="col-lg-6">
                    <div class="cs_section_heading cs_style_1">
                        <h3 class="cs_section_title_up cs_ternary_font cs_accent_color cs_normal cs_fs_24">{{ __('about.about_us') }}</h3>
                        <h2 class="cs_section_title cs_semibold cs_fs_56 mb-0">{{ __('about.professional_planners') }}</h2>
                    </div>
                    <div class="cs_about_text">
                        <p>{{ __('about.description_1') }}</p>
                        <p class="mb-0 cs_accent_color cs_medium cs_fs_18">{{ __('about.contact_text') }}</p>
                    </div>
                    <ul class="cs_list cs_style_1 cs_mp0 cs_fs_18">
                        <li><i class="fa-solid fa-circle-check cs_accent_color"></i> {{ __('about.feature_1') }}</li>
                        <li><i class="fa-solid fa-circle-check cs_accent_color"></i> {{ __('about.feature_2') }}</li>
                        <li><i class="fa-solid fa-circle-check cs_accent_color"></i> {{ __('about.feature_3') }}</li>
                        <li><i class="fa-solid fa-circle-check cs_accent_color"></i> {{ __('about.feature_4') }}</li>
                    </ul>
                    <a href="#" class="cs_btn cs_style_1 cs_fs_18 cs_medium">
                        {{ __('about.read_more') }}
                        <svg width="20" height="10" viewBox="0 0 20 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.5866 5.69629H0.41235C0.184269 5.69629 0 5.46776 0 5.1849C0 4.90204 0.184269 4.67352 0.41235 4.67352H18.5906L16.0881 1.57004C15.927 1.37028 15.927 1.04587 16.0881 0.846109C16.2492 0.646349 16.5108 0.646349 16.6718 0.846109L19.8792 4.82374C19.9977 4.97076 20.0325 5.1897 19.9681 5.38147C19.9036 5.57164 19.7529 5.69629 19.5866 5.69629Z" fill="currentColor"/>
                            <path d="M16.3435 9.11986C16.2384 9.11986 16.1333 9.08012 16.0538 8.99935C15.8935 8.83909 15.8935 8.57884 16.0538 8.41858L19.2487 5.22371C19.4089 5.06345 19.6692 5.06345 19.8294 5.22371C19.9897 5.38396 19.9897 5.64422 19.8294 5.80448L16.6346 8.99935C16.5538 9.08012 16.4487 9.11986 16.3435 9.11986Z" fill="currentColor"/>
                        </svg>
                    </a>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <img src="assets/images/about_img.png" alt="About Image">
                </div>
            </div>
        </div>
        <div class="cs_height_140 cs_height_lg_80"></div>
    </section>
    <!-- End About Section -->

    <!-- Start Why Choose Us Section -->
    <section>
        <div class="cs_height_135 cs_height_lg_75"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1 text-center">
                <h3 class="cs_section_title_up cs_ternary_font cs_accent_color cs_normal cs_fs_24">{{ __('about.why_choose_us') }}</h3>
                <h2 class="cs_section_title cs_semibold cs_fs_56 mb-0">{{ __('about.best_experience') }}</h2>
            </div>
            <div class="cs_height_55 cs_height_lg_40"></div>
            <div class="cs_iconbox_4_wrap">
                <div>
                    <div class="row cs_gap_y_45">
                        <div class="col-lg-12 col-6">
                            <div class="cs_iconbox cs_style_4">
                                <div class="cs_iconbox_icon cs_center">
                                    <img src="assets/images/icons/calendar_icon_2.svg" alt="Calendar Icon">
                                </div>
                                <h2 class="cs_iconbox_title cs_fs_24 cs_semibold">{{ __('about.plan_title') }}</h2>
                                <p class="cs_iconbox_subtitle mb-0">{{ __('about.plan_text') }}</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-6">
                            <div class="cs_iconbox cs_style_4">
                                <div class="cs_iconbox_icon cs_center">
                                    <img src="assets/images/icons/hotel-icon.svg" alt="Hotel Icon">
                                </div>
                                <h2 class="cs_iconbox_title cs_fs_24 cs_semibold">{{ __('about.hotel_title') }}</h2>
                                <p class="cs_iconbox_subtitle mb-0">{{ __('about.hotel_text') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="cs_iconbox_4_thumb cs_center">
                        <img src="assets/images/about_4.png" alt="About Thumb">
                    </div>
                </div>
                <div>
                    <div class="row cs_gap_y_45">
                        <div class="col-lg-12 col-6">
                            <div class="cs_iconbox cs_style_4">
                                <div class="cs_iconbox_icon cs_center">
                                    <img src="assets/images/icons/compass_icon.svg" alt="Compass Icon">
                                </div>
                                <h2 class="cs_iconbox_title cs_fs_24 cs_semibold">{{ __('about.explore_title') }}</h2>
                                <p class="cs_iconbox_subtitle mb-0">{{ __('about.explore_text') }}</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-6">
                            <div class="cs_iconbox cs_style_4">
                                <div class="cs_iconbox_icon cs_center">
                                    <img src="assets/images/icons/headset_icon.svg" alt="Support Icon">
                                </div>
                                <h2 class="cs_iconbox_title cs_fs_24 cs_semibold">{{ __('about.support_title') }}</h2>
                                <p class="cs_iconbox_subtitle mb-0">{{ __('about.support_text') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_135 cs_height_lg_75"></div>
    </section>
    <!-- End Why Choose Us Section -->

    <!-- Start Brands Section -->
    <div>
        <div class="cs_height_76 cs_height_lg_40"></div>
        <div class="container">
            <div class="cs_brand_list cs_style_1">
                <div class="cs_brand"><img src="assets/images/brand_1.svg" alt="Brand"></div>
                <div class="cs_brand"><img src="assets/images/brand_2.svg" alt="Brand"></div>
                <div class="cs_brand"><img src="assets/images/brand_3.svg" alt="Brand"></div>
                <div class="cs_brand"><img src="assets/images/brand_4.svg" alt="Brand"></div>
                <div class="cs_brand"><img src="assets/images/brand_5.svg" alt="Brand"></div>
            </div>
        </div>
        <div class="cs_height_135 cs_height_lg_80"></div>
    </div>
    <!-- End Brands Section -->

@endsection
