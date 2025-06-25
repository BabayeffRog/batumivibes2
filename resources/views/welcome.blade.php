<!DOCTYPE html>
<html class="no-js" lang="en">

<x-head/>

<body>

<x-preloader/>

<!-- Start Header Section -->
<x-header/>
<x-header_search/>
<!-- End Header Section cs_ripple_activate -->

<!-- Hero Section -->
<section class="cs_hero cs_style_1 cs_center  cs_primary_bg" data-src="assets/images/popular_destination_5.jpeg">
{{--<section class="cs_hero cs_style_1 cs_center cs_ripple_activate  cs_primary_bg" data-src="assets/images/batum/batumi3.png">--}}
    <div class="container">
        <div class="cs_hero_text text-center">
            <h3 class="cs_hero_subtitle cs_white_color cs_ternary_font cs_fs_25 cs_normal text-uppercase">
                {{ __('home.hero_subtitle') }}
            </h3>
            <h1 class="cs_hero_title cs_white_color cs_fs_100 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                {{ __('home.hero_title') }}
            </h1>
        </div>
        <div class="cs_find_form_wrap">
            <form action="#" class="cs_find_form">
                <div>
                    <h2 class="cs_fs_18 cs_normal mb-0">{{ __('home.hero_search_label') }}</h2>
                </div>
                <div>
                    <select name="service" class="st_select">
                        <option value="">{{ __('home.hero_search_destination') }}</option>
                        <!-- Dynamic options here -->
                    </select>
                </div>
                <div>
                    <select name="guests" class="st_select">
                        <option value="">{{ __('home.hero_search_guests') }}</option>
                        @for ($i = 1; $i <= 10; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div>
                    <button class="cs_find_btn cs_bold cs_primary_font cs_center">
                        <i class="fa-solid fa-magnifying-glass"></i> {{ __('home.hero_search_button') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="cs_hero_shape_2"></div>
    <div class="cs_hero_shape_3"></div>
</section>

<!-- About Section -->
<section class="cs_about cs_style_1">
    <div class="cs_height_140 cs_height_lg_80"></div>
    <div class="container">
        <div class="row align-items-center cs_gap_y_40">
            <div class="col-lg-5">
                <img src="assets/images/about_img.png" alt="">
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="cs_section_heading cs_style_1">
                    <h3 class="cs_section_title_up">{{ __('home.about_title_up') }}</h3>
                    <h2 class="cs_section_title cs_semibold cs_fs_56 mb-0 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        {{ __('home.about_main_title') }}
                    </h2>
                </div>
                <div class="cs_about_text">
                    <p>{{ __('home.about_p1') }}</p>
                    <p class="mb-0 cs_accent_color cs_medium cs_fs_18">{{ __('home.about_p2') }}</p>
                </div>
                <ul class="cs_list cs_style_1 cs_mp0 cs_fs_18">
                    <li><i class="fa-solid fa-circle-check cs_accent_color"></i> {{ __('home.about_li_1') }}</li>
                    <li><i class="fa-solid fa-circle-check cs_accent_color"></i> {{ __('home.about_li_2') }}</li>
                    <li><i class="fa-solid fa-circle-check cs_accent_color"></i> {{ __('home.about_li_3') }}</li>
                    <li><i class="fa-solid fa-circle-check cs_accent_color"></i> {{ __('home.about_li_4') }}</li>
                </ul>
                <a href="{{ route('about') }}" class="cs_btn cs_style_1 cs_fs_18 cs_medium">
                    {{ __('home.about_button') }}
                </a>
            </div>
        </div>
    </div>
    <div class="cs_height_140 cs_height_lg_80"></div>
</section>


<!-- Start featured section -->
<section class="cs_featured cs_style_1 cs_bg_filed" data-src="assets/images/feature_bg.jpeg">
    <div class="cs_height_140 cs_height_lg_80"></div>
    <div class="container">
        <div class="row cs_gap_y_40 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">

            @foreach ([
                ['icon' => '1.png', 'title' => 'villa_rental_title', 'text' => 'villa_rental_text'],
                ['icon' => '2.png', 'title' => 'luxury_transfer_title', 'text' => 'luxury_transfer_text'],
                ['icon' => '3.png', 'title' => 'real_estate_title', 'text' => 'real_estate_text'],
                ['icon' => '4.png', 'title' => 'multilang_support_title', 'text' => 'multilang_support_text'],
            ] as $feature)
                <div class="col-lg-3 col-sm-6">
                    <div class="cs_iconbox cs_style_1">
                        <div class="cs_iconbox_icon cs_radius_15 cs_center">
                            <img src="{{ asset('assets/images/batum/icons/' . $feature['icon']) }}" alt="">
                        </div>
                        <h2 class="cs_iconbox_title cs_fs_24 cs_semibold">{{ __('home.' . $feature['title']) }}</h2>
                        <p class="cs_iconbox_subtitle mb-0">{{ __('home.' . $feature['text']) }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="cs_height_133 cs_height_lg_80"></div>
</section>

<!-- End featured section -->
<!-- End featured section -->




<!-- Start Real Estate Stats Section -->
<section>
    <div class="cs_height_135 cs_height_lg_75"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1 text-center">
            <h3 class="cs_section_title_up cs_ternary_font cs_accent_color cs_normal cs_fs_24">
                DISCOVER BATUMI
            </h3>
            <h2 class="cs_section_title cs_semibold cs_fs_56 mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                Featured Real Estate Listings
            </h2>
        </div>
        <div class="cs_height_55 cs_height_lg_40"></div>
    </div>

    <div class="container-fluid">
        <div class="row cs_gap_y_24">
            @foreach($featuredProperties as $property)
                <div class="col-lg-3 col-sm-6">
                    <div class="cs_card cs_style_1 cs_bg_filed cs_radius_5 position-relative"
                         data-src="{{ asset('storage/' . $property->gallery[0]) }}"
                         style="background-image: url('{{ asset('storage/' . $property->gallery[0]) }}');">

                    <div class="cs_card_overlay cs_radius_5 position-absolute w-100 h-100"></div>
                        <div class="cs_card_content position-absolute">
                            <div class="cs_card_meta cs_white_color">
                                <div>
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span>{{ $property->location }}</span>
                                </div>
                                <div>
                                    <i class="fa-solid fa-bed"></i>
                                    <span>{{ $property->bedrooms }} Bedroom</span>
                                </div>
                                <div>
                                    <i class="fa-solid fa-ruler-combined"></i>
                                    <span>{{ $property->area }} m²</span>
                                </div>
                            </div>
                            <h2 class="cs_card_title cs_fs_24 cs_medium cs_white_color">
                                <a href="{{ route('index', $property->slug) }}">
                                    {{ $property->title }}
                                </a>
                            </h2>
                            <div class="cs_card_action">
                                <a href="{{ route('index', $property->slug) }}" class="cs_btn cs_style_1 cs_fs_18 cs_medium">
                                    View Details
                                    <svg width="20" height="10" viewBox="0 0 20 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.5866 5.69629H0.41235C0.184269 5.69629 0 5.46776 0 5.1849C0 4.90204 0.184269 4.67352 0.41235 4.67352H18.5906L16.0881 1.57004C15.927 1.37028 15.927 1.04587 16.0881 0.846109C16.2492 0.646349 16.5108 0.646349 16.6718 0.846109L19.8792 4.82374C19.9977 4.97076 20.0325 5.1897 19.9681 5.38147C19.9036 5.57164 19.7529 5.69629 19.5866 5.69629Z" fill="currentColor"/>
                                        <path d="M16.3435 9.11986C16.2384 9.11986 16.1333 9.08012 16.0538 8.99935C15.8935 8.83909 15.8935 8.57884 16.0538 8.41858L19.2487 5.22371C19.4089 5.06345 19.6692 5.06345 19.8294 5.22371C19.9897 5.38396 19.9897 5.64422 19.8294 5.80448L16.6346 8.99935C16.5538 9.08012 16.4487 9.11986 16.3435 9.11986Z" fill="currentColor"/>
                                    </svg>
                                </a>
                                <span class="cs_card_price cs_fs_24 cs_medium cs_white_color mb-0">
                                    ${{ number_format($property->price, 0) }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- End Real Estate Stats Section -->


<!-- Start destination Section -->
<section>
    <div class="cs_height_135 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1 text-center">
            <h3 class="cs_section_title_up cs_ternary_font cs_accent_color cs_normal cs_fs_24">POPULAR DESTINATION</h3>
            <h2 class="cs_section_title cs_semibold cs_fs_56 mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Popular Destinations</h2>
        </div>
        <div class="cs_height_55 cs_height_lg_40"></div>
        <div class="cs_grid_1">
            <div class="cs_grid_item">
                <a href="{{ route('destinationdetails') }}" class="cs_card cs_style_2 cs_zoom position-relative cs_radius_8">
                    <div class="cs_card_thumb w-100 h-100">
                        <img src="assets/images/popular_destination_1.jpeg" alt="Card Image" class="w-100 h-100 cs_zoom_in">
                    </div>
                    <div class="cs_card_content position-absolute">
                        <h2 class="cs_card_title cs_fs_35 cs_medium cs_white_color">Martvili</h2>
                        <p class="cs_card_subtitle cs_fs_18 cs_medium cs_white_color mb-0">Batum, 24 Trips</p>
                    </div>
                </a>
            </div>
            <div class="cs_grid_item">
                <a href="{{ route('destinationdetails') }}" class="cs_card cs_style_2 cs_zoom position-relative cs_radius_8">
                    <div class="cs_card_thumb w-100 h-100">
                        <img src="assets/images/popular_destination_5.jpeg" alt="Card Image" class="w-100 h-100 cs_zoom_in">
                    </div>
                    <div class="cs_card_content position-absolute">
                        <h2 class="cs_card_title cs_fs_35 cs_medium cs_white_color">
                            Apartments </h2>
                        <p class="cs_card_subtitle cs_fs_18 cs_medium cs_white_color mb-0">
                            Batumi, 100+ Trips</p>
                    </div>
                </a>
            </div>
            <div class="cs_grid_item">
                <a href="{{ route('destinationdetails') }}" class="cs_card cs_style_2 cs_zoom position-relative cs_radius_8">
                    <div class="cs_card_thumb w-100 h-100">
                        <img src="assets/images/popular_destination_3.jpeg" alt="Card Image" class="w-100 h-100 cs_zoom_in">
                    </div>
                    <div class="cs_card_content position-absolute">
                        <h2 class="cs_card_title cs_fs_35 cs_medium cs_white_color">Sea Scooter</h2>
                        <p class="cs_card_subtitle cs_fs_18 cs_medium cs_white_color mb-0">Batumi, 12 Trips</p>
                    </div>
                </a>
            </div>
            <div class="cs_grid_item">
                <a href="{{ route('destinationdetails') }}" class="cs_card cs_style_2 cs_zoom position-relative cs_radius_8">
                    <div class="cs_card_thumb w-100 h-100">
                        <img src="assets/images/popular_destination_4.jpeg" alt="Card Image" class="w-100 h-100 cs_zoom_in">
                    </div>
                    <div class="cs_card_content position-absolute">
                        <h2 class="cs_card_title cs_fs_35 cs_medium cs_white_color">Ton Kwen Temple</h2>
                        <p class="cs_card_subtitle cs_fs_18 cs_medium cs_white_color mb-0">Thailand, 20 Trips</p>
                    </div>
                </a>
            </div>
            <div class="cs_grid_item">
                <a href="{{ route('destinationdetails') }}" class="cs_card cs_style_2 cs_zoom position-relative cs_radius_8">
                    <div class="cs_card_thumb w-100 h-100">
                        <img src="assets/images/batum/parachute2.jpg" alt="Card Image" class="w-100 h-100 cs_zoom_in">
                    </div>
                    <div class="cs_card_content position-absolute">
                        <h2 class="cs_card_title cs_fs_35 cs_medium cs_white_color">Parachute Trip</h2>
                        <p class="cs_card_subtitle cs_fs_18 cs_medium cs_white_color mb-0">Batumi, 2+ Trips</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="cs_height_140 cs_height_lg_80"></div>
</section>

<!-- Start FunFact Section -->
<section>
    <div class="cs_height_135 cs_height_lg_80"></div>
    <div class="container">
        <div class="row cs_gap_y_40">
            <div class="col-lg-6">
                <div class="cs_image_box cs_style_1">
                    <img src="assets/images/funfact_img.png" alt="FunFact">
                    <div class="cs_image_box_shape" data-src="assets/images/funfact_shape.png"></div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="cs_section_heading cs_style_1">
                    <h3 class="cs_section_title_up cs_ternary_font cs_accent_color cs_normal cs_fs_24">{{ __('funfact.section_title_up') }}</h3>
                    <h2 class="cs_section_title cs_semibold cs_fs_56 mb-0">{{ __('funfact.section_title') }}</h2>
                    <p class="cs_section_subtitle">{{ __('funfact.section_subtitle') }}</p>
                </div>
                <div class="cs_height_55 cs_height_lg_40"></div>
                <div class="row cs_gap_y_24 position-relative">
                    <div class="cs_funfact_1_icon cs_accent_bg cs_center rounded-circle">
                        <!-- SVG remains unchanged -->
                        <!-- your SVG code here -->
                    </div>
                    <div class="col-sm-6">
                        <div class="cs_funfact cs_style_1 text-center">
                            <h3 class="cs_funfact_title cs_fs_40 cs_semibold cs_accent_color">
                                <span class="odometer" data-count-to="502"></span>+
                            </h3>
                            <p class="cs_funfact_subtitle mb-0 cs_fs_18">{{ __('funfact.package') }}</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cs_funfact cs_style_1 text-center">
                            <h3 class="cs_funfact_title cs_fs_40 cs_semibold cs_accent_color">
                                <span class="odometer" data-count-to="100"></span>+
                            </h3>
                            <p class="cs_funfact_subtitle mb-0 cs_fs_18">{{ __('funfact.hotel') }}</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cs_funfact cs_style_1 text-center">
                            <h3 class="cs_funfact_title cs_fs_40 cs_semibold cs_accent_color">
                                <span class="odometer" data-count-to="77"></span>k
                            </h3>
                            <p class="cs_funfact_subtitle mb-0 cs_fs_18">{{ __('funfact.airlines') }}</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cs_funfact cs_style_1 text-center">
                            <h3 class="cs_funfact_title cs_fs_40 cs_semibold cs_accent_color">
                                <span class="odometer" data-count-to="2"></span>k+
                            </h3>
                            <p class="cs_funfact_subtitle mb-0 cs_fs_18">{{ __('funfact.customers') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End FunFact Section -->
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

<!-- End destination Section -->

<!-- Start Banner Section -->
{{--<section class="cs_banner cs_style_1 cs_bg_filed cs_primary_bg" data-src="assets/images/batum/Batum2.png">--}}
{{--    <div class="cs_height_125 cs_height_lg_70"></div>--}}
{{--    <div class="container">--}}
{{--        <div class="cs_banner_text cs_white_color">--}}
{{--            <h2 class="cs_banner_title cs_white_color cs_fs_56 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">A Truly Wonderful Experience</h2>--}}
{{--            <p class="cs_banner_subtitle cs_fs_18">Brilliant for anyone looking to get away from the hustle and bustle of city life or detox from their tech for a few days. I could have stayed another week!<br><br>--}}
{{--                They really have thought about everything here down to the finest details.</p>--}}
{{--            <div class="cs_banner_review cs_medium">--}}
{{--                <svg width="110" height="22" viewBox="0 0 110 22" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                    <path d="M0 0H20.7736V21.309H0V0Z" fill="#1BB580"/>--}}
{{--                    <path d="M22.1582 0H42.9318V21.309H22.1582V0Z" fill="#1BB580"/>--}}
{{--                    <path d="M44.3164 0H65.09V21.309H44.3164V0Z" fill="#1BB580"/>--}}
{{--                    <path d="M66.4746 0H87.2482V21.309H66.4746V0Z" fill="#1BB580"/>--}}
{{--                    <path d="M88.6328 0H109.406V21.309H88.6328V0Z" fill="#1BB580"/>--}}
{{--                    <path d="M10.5865 13.8223L13.0471 13.1743L14.0752 16.4669L10.5865 13.8223ZM16.2493 9.56647H11.918L10.5865 5.32812L9.25513 9.56647H4.92383L8.42932 12.1935L7.09791 16.4319L10.6034 13.8048L12.7606 12.1935L16.2493 9.56647Z" fill="white"/>--}}
{{--                    <path d="M32.7447 13.8223L35.2053 13.1743L36.2334 16.4669L32.7447 13.8223ZM38.4075 9.56647H34.0762L32.7447 5.32812L31.4133 9.56647H27.082L30.5875 12.1935L29.2561 16.4319L32.7616 13.8048L34.9188 12.1935L38.4075 9.56647Z" fill="white"/>--}}
{{--                    <path d="M54.9049 13.8223L57.3655 13.1743L58.3935 16.4669L54.9049 13.8223ZM60.5676 9.56647H56.2363L54.9049 5.32812L53.5735 9.56647H49.2422L52.7477 12.1935L51.4163 16.4319L54.9218 13.8048L57.079 12.1935L60.5676 9.56647Z" fill="white"/>--}}
{{--                    <path d="M77.0631 13.8223L79.5237 13.1743L80.5517 16.4669L77.0631 13.8223ZM82.7258 9.56647H78.3945L77.0631 5.32812L75.7317 9.56647H71.4004L74.9059 12.1935L73.5745 16.4319L77.08 13.8048L79.2372 12.1935L82.7258 9.56647Z" fill="white"/>--}}
{{--                    <path d="M99.2213 13.8223L101.682 13.1743L102.71 16.4669L99.2213 13.8223ZM104.884 9.56647H100.553L99.2213 5.32812L97.8899 9.56647H93.5586L97.0641 12.1935L95.7327 16.4319L99.2382 13.8048L101.395 12.1935L104.884 9.56647Z" fill="white"/>--}}
{{--                </svg>--}}
{{--                01 Jan 2024--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="cs_height_140 cs_height_lg_80"></div>--}}
{{--</section>--}}
<!-- End Banner Section -->



<!-- Start Video Section -->
<section>
    <div class="container">
        <div class="cs_video_block cs_style_1 cs_bg_filed position-relative" data-src="assets/images/batum/kanyon.png">
            <a href="https://www.youtube.com/embed/eSUmkFPln_U" class="cs_player_btn cs_center cs_accent_bg cs_video_open">
                <svg width="40" height="47" viewBox="0 0 40 47" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M36.9921 17.8114L9.63992 0.951019C7.66105 -0.267256 5.26855 -0.317908 3.23984 0.815524C1.21113 1.94878 0 4.01294 0 6.3367V39.9039C0 43.4175 2.83109 46.2914 6.31071 46.3104C6.32021 46.3104 6.32971 46.3105 6.33902 46.3105C7.42642 46.3104 8.55958 45.9696 9.61794 45.3238C10.4693 44.8043 10.7384 43.693 10.219 42.8417C9.69952 41.9902 8.58807 41.7212 7.73693 42.2407C7.2419 42.5426 6.75844 42.6988 6.33016 42.6987C5.01727 42.6916 3.61159 41.5669 3.61159 39.904V6.33679C3.61159 5.33994 4.13113 4.4547 5.00127 3.96853C5.87149 3.48236 6.89764 3.50407 7.74543 4.02606L35.0977 20.8864C35.9198 21.3926 36.3902 22.2366 36.3882 23.2021C36.3862 24.1674 35.9124 25.0095 35.0857 25.514L15.31 37.6224C14.4594 38.1432 14.192 39.2549 14.7128 40.1054C15.2335 40.956 16.3453 41.2234 17.1959 40.7026L36.9693 28.5956C38.8625 27.4407 39.9955 25.4272 40 23.2093C40.0045 20.9916 38.8797 18.9735 36.9921 17.8114Z" fill="currentColor" />
                </svg>
            </a>
            <h2 class="cs_video_title cs_fs_60 cs_semibold cs_white_color position-absolute mb-0">Our Journey <br> in Videos</h2>
            <span class="cs_location cs_fs_20 cs_white_color">
            <i class="fa-solid fa-location-dot"></i> Location Martvili Kanyon</span>
        </div>
    </div>
</section>
<!-- End Video Section -->


<!-- Start Blog Section -->
<section>
    <div class="container-fluid mt-5">
        <div class="cs_section_heading cs_style_1 text-center">
            <h3 class="cs_section_title_up cs_ternary_font cs_accent_color cs_normal cs_fs_24">
                {{ __('News & Blogs') }}
            </h3>
            <h2 class="cs_section_title cs_semibold cs_fs_56 mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                {{ __('Last Minute Amazing Deals') }}
            </h2>
        </div>

        <div class="cs_height_55 cs_height_lg_40"></div>

        <div class="row cs_gap_y_24">
            @foreach ($blogs as $blog)
                <div class="col-lg-6">
                    <article class="cs_post cs_style_1">
                        <a href="{{ route('blogdetails', $blog->slug) }}" class="cs_post_thumb cs_zoom overflow-hidden position-relative">

                            <img src="{{ asset('storage/' . ($blog->image[0] ?? 'default.jpg')) }}" alt="{{ $blog->title[app()->getLocale()] ?? $blog->title['en'] }}" class="cs_zoom_in">

                            <div class="cs_posted_by position-absolute">
                                <span class="cs_accent_bg cs_white_color">
                                    {{ \Carbon\Carbon::parse($blog->published_at)->format('d') }}
                                </span>
                                                        <span class="cs_primary_bg cs_white_color">
                                    {{ \Carbon\Carbon::parse($blog->published_at)->translatedFormat('F Y') }}
                                </span>
                            </div>
                        </a>
                        <div class="cs_post_info">
                            <div class="cs_post_info_in">
                                <div class="cs_post_avatar">
                                    <div class="cs_avatar_thumb">
                                        <img src="{{ asset('assets/images/avatar_1.png') }}" alt="Avatar">
                                    </div>
                                    <div class="cs_avatar_info">By. <br>Admin</div>
                                </div>
                                <h2 class="cs_post_title cs_fs_24 cs_semibold">
                                    <a href="{{ route('blogdetails', $blog->slug) }}">
                                        {{ $blog->title[app()->getLocale()] ?? $blog->title['en'] }}
                                    </a>
                                </h2>
                                <p class="cs_post_subtitle">
                                    {{ Str::limit(strip_tags($blog->content[app()->getLocale()] ?? $blog->content['en']), 120) }}
                                </p>
                                <div class="cs_post_btns cs_gray_bg_1">
                                    <a href="#">
                                        <svg width="20" height="20" ...> ... </svg> Comment(5)
                                    </a>
                                    <a href="{{ route('blogdetails', $blog->slug) }}" class="cs_post_btn cs_primary_bg">
                                        {{ __('More') }}
                                        <svg width="10" height="10" ...> ... </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
    <div class="cs_height_140 cs_height_lg_80"></div>
</section>
<!-- End Blog Section -->

<!-- Start footer -->
<x-footer/>
<!-- End footer -->

<!-- Script -->
<x-script/>

</body>
</html>
