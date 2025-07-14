@extends('layout.layout')

@section('content')
    <!-- Start Hero Section -->
    <x-hero
        subTitle="{{ __('blog.sub_title') }}"
        img="{{ asset('assets/images/batum/batumi3.png') }}"
        title="{{ $blog->{'title_' . app()->getLocale()} }}"
    />
    <!-- End Hero Section -->

    <!-- Start Blog Section -->
    <section>
        <div class="cs_height_140 cs_height_lg_80"></div>
        <div class="container">
            <div class="row cs_gap_y_50">
                <!-- Blog content -->
                <div class="col-lg-8">
                    <article class="cs_post_details">
                        <div class="position-relative">
                            <img src="{{ asset('storage/' . $blog->image[0]) }}" alt="{{ $blog->slug }}">
                            <span class="cs_post_label">{{ $blog->category ?? 'Blog' }}</span>
                        </div>

                        <ul class="cs_post_meta cs_mp0 cs_primary_color">
                            <li><i class="fa-solid fa-calendar-days cs_accent_color"></i> {{ \Carbon\Carbon::parse($blog->published_at)->translatedFormat('F d, Y')}}</li>
                            <li><i class="fa-regular fa-user cs_accent_color"></i> {{ $blog->author ?? 'Admin' }}</li>
                        </ul>

                        <h2>{{ $blog->{'title_' . app()->getLocale()} }}</h2>
                        @php
                            $content = $blog->content[app()->getLocale()] ?? $blog->content['en'];
                        @endphp
                        <p>{!! nl2br(e($content)) !!}</p>




                    @if(!empty($blog->image[1]) || !empty($blog->image[2]))
                            <div class="row mt-4">
                                @if(!empty($blog->image[1]))
                                    <div class="col-sm-5">
                                        <img src="{{ asset('storage/' . $blog->image[1]) }}" alt="Blog Image">
                                    </div>
                                @endif
                                @if(!empty($blog->image[2]))
                                    <div class="col-sm-7">
                                        <img src="{{ asset('storage/' . $blog->image[2]) }}" alt="Blog Image">
                                    </div>
                                @endif
                            </div>
                        @endif
                    </article>

                    <!-- Optional: Social Links -->
                    <div class="cs_social_btns cs_primary_color mt-4">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
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

                        <!-- Popular Posts -->
                        @if(isset($popularBlogs) && $popularBlogs->count())
                            <div class="cs_sidebar_item cs_gray_bg">
                                <h3 class="cs_sidebar_widget_title cs_fs_24 cs_semibold">{{ __('blog.popular_posts') }}</h3>
                                <hr>
                                <ul class="cs_recent_posts cs_mp0">
                                    @foreach ($popularBlogs as $popular)
                                        <li>
                                            <article class="cs_recent_post">
                                                <a href="{{ route('blogdetails', ['slug' => $popular->slug]) }}" class="cs_recent_post_thumb cs_zoom">
                                                    <img src="{{ asset('storage/' . $popular->image[0]) }}" alt="{{ $popular->slug }}" class="cs_zoom_in w-100 h-100 object-fit-cover">
                                                </a>
                                                <div class="cs_recent_post_info">
                                                    <h3 class="cs_recent_post_title cs_fs_16 cs_medium cs_secondary_font">
                                                        <a href="{{ route('blogdetails', ['slug' => $popular->slug]) }}">
                                                            {{ $popular->{'title_' . app()->getLocale()} }}
                                                        </a>
                                                    </h3>
                                                    <div class="cs_recent_post_date cs_fs_14">
                                                        {{ \Carbon\Carbon::parse($popular->published_at)->format('F d, Y') }}
                                                    </div>
                                                </div>
                                            </article>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Categories -->
                        <div class="cs_sidebar_item cs_gray_bg widget_categories">
                            <h3 class="cs_sidebar_widget_title cs_fs_24 cs_semibold">Category</h3>
                            <hr>
                            <ul class="cs_mp0">
                                <li class="cs_cat_item cs_primary_color"><a href="#">Travels</a> <span>(20)</span></li>
                                <li class="cs_cat_item cs_primary_color"><a href="#">Camping</a> <span>(35)</span></li>
                                <li class="cs_cat_item cs_primary_color"><a href="#">Life Style</a> <span>(10)</span></li>
                                <li class="cs_cat_item cs_primary_color"><a href="#">Sight Seeing</a> <span>(25)</span></li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
        <div class="cs_height_140 cs_height_lg_80"></div>
    </section>
    <!-- End Blog Section -->
@endsection
