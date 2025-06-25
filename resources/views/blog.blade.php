@extends('layout.layout')

@section('content')

    <!-- Start Hero Section -->
    <x-hero
        :subTitle="__('blog.latest_blog')"
        img="assets/images/batum/batumi.jpeg"
        :title="__('blog.latest_blog')"
    />
    <!-- End Hero Section -->

    <div class="cs_height_140 cs_height_lg_80"></div>
    <div class="container">
        <div class="row cs_gap_y_50">

            <!-- Blog Posts -->
            <div class="col-lg-8">
                @foreach ($blogs as $blog)
                    <article class="cs_post cs_style_5">
                        <a href="{{ route('blogdetails', $blog->slug) }}" class="cs_post_thumb cs_zoom">
                            <img src="{{ asset('storage/' . $blog->image[0]) }}" alt="Post Thumb" class="w-100 h-100 cs_zoom_in">
                            <span class="cs_link_hover"><i class="fas fa-link"></i></span>
                        </a>
                        <ul class="cs_post_meta cs_mp0 cs_primary_color">
                            <li class="cs_accent_color">{{ \Carbon\Carbon::parse($blog->published_at)->format('F d, Y') }}</li>
                            <li>{{ __('blog.by') }} <a href="#" class="cs_accent_color">{{ $blog->author ?? 'Admin' }}</a></li>
                        </ul>
                        <h2 class="cs_post_title cs_fs_35 cs_semibold">
                            <a href="{{ route('blogdetails', $blog->slug) }}">
                                {{ $blog->{'title_' . app()->getLocale()} }}
                            </a>
                        </h2>
                        <div class="cs_post_subtitle">
                            {{ Str::limit($blog->{'excerpt_' . app()->getLocale()}, 250) }}
                        </div>
                        <a href="{{ route('blogdetails', $blog->slug) }}" class="cs_post_btn cs_fs_18 cs_medium cs_primary_color">
                            <span>{{ __('blog.continue_reading') }}</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </article>
                @endforeach


            </div>

            <!-- Sidebar -->
            <aside class="col-lg-4">
                <div class="cs_sidebar cs_right_sidebar">

                    <!-- Search -->
                    <div class="cs_sidebar_item cs_gray_bg widget_search">
                        <form class="cs_sidebar_search cs_white_bg" action="#">
                            <input type="text" placeholder="{{ __('blog.search_placeholder') }}">
                            <button class="cs_sidebar_search_btn cs_accent_bg cs_white_color">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Fake Categories -->
                    <div class="cs_sidebar_item cs_gray_bg widget_categories">
                        <h3 class="cs_sidebar_widget_title cs_fs_24 cs_semibold">{{ __('blog.category') }}</h3>
                        <hr>
                        <ul class="cs_mp0">
                            <li class="cs_cat_item cs_primary_color"><a href="#">Travel Tips</a> <span>(12)</span></li>
                            <li class="cs_cat_item cs_primary_color"><a href="#">Batumi Life</a> <span>(8)</span></li>
                            <li class="cs_cat_item cs_primary_color"><a href="#">Local Cuisine</a> <span>(5)</span></li>
                            <li class="cs_cat_item cs_primary_color"><a href="#">Guides</a> <span>(7)</span></li>
                        </ul>
                    </div>

                    <!-- Popular Posts -->
                    <div class="cs_sidebar_item cs_gray_bg">
                        <h3 class="cs_sidebar_widget_title cs_fs_24 cs_semibold">{{ __('blog.popular_post') }}</h3>
                        <hr>
                        <ul class="cs_recent_posts cs_mp0">
                            @foreach ($blogs->take(3) as $fakePopular)
                                <li>
                                    <article class="cs_recent_post">
                                        <a href="{{ route('blogdetails', $fakePopular->slug) }}" class="cs_recent_post_thumb cs_zoom">
                                            <img src="{{ asset('storage/' . $fakePopular->image[0]) }}" alt="Post Thumb" class="cs_zoom_in w-100 h-100 object-fit-cover">
                                        </a>
                                        <div class="cs_recent_post_info">
                                            <h3 class="cs_recent_post_title cs_fs_16 cs_medium cs_secondary_font">
                                                <a href="{{ route('blogdetails', $fakePopular->slug) }}">
                                                    {{ $fakePopular->{'title_' . app()->getLocale()} }}
                                                </a>
                                            </h3>
                                            <div class="cs_recent_post_date cs_fs_14">
                                                {{ \Carbon\Carbon::parse($fakePopular->published_at)->format('F d, Y') }}
                                            </div>
                                        </div>
                                    </article>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Fake Tags -->
                    <div class="cs_sidebar_item cs_gray_bg widget_tag_cloud">
                        <h3 class="cs_sidebar_widget_title cs_fs_24 cs_semibold">{{ __('blog.tag_cloud') }}</h3>
                        <hr>
                        <div class="cs_tag_cloud">
                            <a href="#" class="cs_tag_link cs_radius_5 cs_white_bg cs_primary_color">Beach</a>
                            <a href="#" class="cs_tag_link cs_radius_5 cs_white_bg cs_primary_color">Food</a>
                            <a href="#" class="cs_tag_link cs_radius_5 cs_white_bg cs_primary_color">Nightlife</a>
                            <a href="#" class="cs_tag_link cs_radius_5 cs_white_bg cs_primary_color">Culture</a>
                            <a href="#" class="cs_tag_link cs_radius_5 cs_white_bg cs_primary_color">Yacht</a>
                        </div>
                    </div>

                    <!-- Newsletter -->
                    <div class="cs_sidebar_item cs_gray_bg">
                        <h3 class="cs_sidebar_widget_title cs_fs_24 cs_semibold">{{ __('blog.newsletter') }}</h3>
                        <hr>
                        <form class="cs_subscribe_form" action="#">
                            <div class="cs_input_field">
                                <input type="email" placeholder="{{ __('blog.email_placeholder') }}">
                                <span><i class="fa-regular fa-envelope"></i></span>
                            </div>
                            <button type="submit" class="cs_btn cs_style_1 cs_fs_18 cs_medium cs_radius_4">
                                {{ __('blog.subscribe_now') }}
                            </button>
                        </form>
                    </div>

                </div>
            </aside>

        </div>
    </div>

    <div class="cs_height_140 cs_height_lg_80"></div>

@endsection
