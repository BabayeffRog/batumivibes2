@extends('layout.layout')

@section('content')

    <!-- Hero -->
    <x-hero
        subTitle="{{ __('contact.get_in_touch') }}"
        title="{{ __('contact.title') }}"
        img="assets/images/batum/batumi3.png"
    />

    <!-- Contact Info -->
    <section>
        <div class="cs_height_140 cs_height_lg_80"></div>
        <div class="container">
            <div class="row cs_gap_y_40">

                <div class="col-lg-3 col-md-6">
                    <div class="cs_iconbox cs_style_5 cs_gray_bg cs_radius_5 text-center">
                        <div class="cs_iconbox_icon cs_accent_bg cs_white_color cs_center cs_radius_5">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <h2 class="cs_iconbox_title cs_fs_24 cs_semibold">{{ __('contact.office_address') }}</h2>
                        <p class="cs_iconbox_subtitle mb-0">
                            25 Rustaveli Ave<br>Batumi, Georgia
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="cs_iconbox cs_style_5 cs_gray_bg cs_radius_5 text-center">
                        <div class="cs_iconbox_icon cs_accent_bg cs_white_color cs_center cs_radius_5">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <h2 class="cs_iconbox_title cs_fs_24 cs_semibold">{{ __('contact.phone') }}</h2>
                        <p class="cs_iconbox_subtitle mb-0">
                            +995 599 123 456<br>+995 599 654 321
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="cs_iconbox cs_style_5 cs_gray_bg cs_radius_5 text-center">
                        <div class="cs_iconbox_icon cs_accent_bg cs_white_color cs_center cs_radius_5">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <h2 class="cs_iconbox_title cs_fs_24 cs_semibold">{{ __('contact.email') }}</h2>
                        <p class="cs_iconbox_subtitle mb-0">
                            contact@batumivibes.com<br>support@batumivibes.com
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="cs_iconbox cs_style_5 cs_gray_bg cs_radius_5 text-center">
                        <div class="cs_iconbox_icon cs_accent_bg cs_white_color cs_center cs_radius_5">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                        <h2 class="cs_iconbox_title cs_fs_24 cs_semibold">{{ __('contact.support') }}</h2>
                        <p class="cs_iconbox_subtitle mb-0">
                            {{ __('contact.support_description') }}
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="cs_height_140 cs_height_lg_80"></div>
    </section>

    <!-- Contact Form -->
    <section class="cs_gray_bg">
        <div class="cs_height_135 cs_height_lg_75"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1 text-center">
                <h3 class="cs_section_title_up cs_accent_color cs_fs_24">{{ __('contact.title') }}</h3>
                <h2 class="cs_section_title cs_semibold cs_fs_56 mb-0">{{ __('contact.send_us_message') }}</h2>
            </div>
            <div class="cs_height_55 cs_height_lg_40"></div>
            <form class="cs_contact_form row cs_gap_y_24">
                <div class="col-lg-6">
                    <div class="cs_input_field">
                        <input type="text" placeholder="{{ __('contact.enter_your_name') }}" class="cs_form_field cs_radius_5">
                        <span><i class="fa-regular fa-user"></i></span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cs_input_field">
                        <input type="email" placeholder="{{ __('contact.enter_your_email') }}" class="cs_form_field cs_radius_5 cs_white_bg">
                        <span><i class="fa-regular fa-envelope"></i></span>
                    </div>
                </div>
                <div class="col-lg-12">
                    <input type="text" placeholder="{{ __('contact.subject') }}" class="cs_form_field cs_radius_5 cs_white_bg">
                </div>
                <div class="col-lg-12">
                    <textarea rows="5" placeholder="{{ __('contact.message') }}" class="cs_form_field cs_radius_5 cs_white_bg"></textarea>
                </div>
                <div class="col-lg-12 text-center">
                    <button type="submit" class="cs_btn cs_style_1 cs_fs_18 cs_medium cs_radius_4">
                        <i class="fa-regular fa-envelope"></i> {{ __('contact.send_message') }}
                    </button>
                </div>
            </form>
        </div>
        <div class="cs_height_100 cs_height_lg_60"></div>
    </section>

    <!-- Google Map -->
    <div class="cs_google_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.2317573682853!2d41.6340985762618!3d41.65097307125369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406787d6abbd9015%3A0x257a5e2144e18ad5!2zQmF0dW1pLCDQkdGA0LDQstC40YfQvdCw!5e0!3m2!1sen!2sge!4v1687777777777!5m2!1sen!2sge" allowfullscreen="" loading="lazy"></iframe>
    </div>

@endsection
