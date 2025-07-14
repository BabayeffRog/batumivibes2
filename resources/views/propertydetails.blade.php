@extends('layout.layout')

@section('content')

    <!-- Start Hero Section -->
    <x-hero
        :subTitle="__('property.hero_subtitle')"
        img="/assets/images/batum/batumi2.png"
        :title="$property->{'title_' . app()->getLocale()}"
    />
    <!-- End Hero Section -->

    <!-- Start Property Details Section -->
    <section>
        <div class="cs_height_140 cs_height_lg_80"></div>
        <div class="container">
            <div class="row cs_gap_y_50">
                <div class="col-lg-8">
                    <div class="cs_post_details">
                        <div class="row mb-4">
                            @foreach ($property->gallery as $image)
                                <div class="col-lg-6 mb-3">
                                    <img src="{{ asset('storage/' . $image) }}" alt="Property Image" class="img-fluid">
                                </div>
                            @endforeach
                        </div>


                        <h2>{{ $property->localized_title }}</h2>
                        <p>{!! nl2br(e($property->localized_description)) !!}</p>

                        <div class="cs_list_wrapper cs_gray_bg mt-4">
                            <h3 class="cs_fs_20 cs_medium">{{ __('property.good_to_know') }}</h3>
                            <ul class="cs_list cs_style_2 cs_fs_18 cs_primary_color">
                                <li><i><img src="/assets/images/icons/location.svg" alt=""></i> {{ __('property.location') }}: {{ $property->location }}</li>
                                <li><i><img src="/assets/images/icons/area.svg" alt=""></i> {{ __('property.area') }}: {{ $property->area }} m²</li>
                                <li><i><img src="/assets/images/icons/bed.svg" alt=""></i> {{ __('property.bedrooms') }}: {{ $property->bedrooms }}</li>
                                <li><i><img src="/assets/images/icons/price.svg" alt=""></i> {{ __('property.price') }}: ${{ $property->price }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="cs_social_btns mt-4">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>

                    <!-- Property Parameters Section -->
                    <section class="mt-5">
                        <div class="container px-0">
                            <h3 class="cs_fs_20 cs_medium mb-4">{{ __('property.project_parameters') }}</h3>
                            <div class="row row-cols-1 row-cols-md-2 g-4">

                                @php
                                    $parameters = [
                                        ['icon' => 'apartments.png', 'label' => __('property.apartments'), 'value' => '56'],
                                        ['icon' => 'buildings.png', 'label' => __('property.buildings'), 'value' => '1'],
                                        ['icon' => 'area.png', 'label' => __('property.area_range'), 'value' => '36 – 90.1 m²'],
                                        ['icon' => 'flooring.png', 'label' => __('property.flooring'), 'value' => '1 – 10'],
                                        ['icon' => 'construction-type.png', 'label' => __('property.construction_type'), 'value' => 'Monolithic'],
                                        ['icon' => 'parking-types.png', 'label' => __('property.parking'), 'value' => 'Parking'],
                                        ['icon' => 'security-types.png', 'label' => __('property.security'), 'value' => '24/7, Video Control'],
                                        ['icon' => 'delivery-condition.png', 'label' => __('property.delivery_condition'), 'value' => 'Black, White, Green frame'],
                                    ];
                                @endphp

                                @foreach($parameters as $item)
                                    <div class="col d-flex align-items-start">
                                        <img src="{{ asset('assets/images/propertyicons/' . $item['icon']) }}"
                                             alt="{{ $item['label'] }}" width="28" height="28"
                                             class="me-3 mt-1 flex-shrink-0" style="object-fit: contain;">
                                        <div>
                                            <div class="fw-semibold">{{ $item['label'] }}</div>
                                            <div>{{ $item['value'] }}</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>

                    <!-- Infrastructure Section -->
                    <section class="mt-5">
                        <div class="container px-0">
                            <h3 class="cs_fs_20 cs_medium mb-4">{{ __('property.infrastructure') }}</h3>
                            <div class="row row-cols-1 row-cols-md-2 g-4">

                                @php
                                    $infra = [
                                        ['icon' => 'elevator.png', 'label' => __('property.elevator'), 'value' => __('property.passenger_elevator')],
                                        ['icon' => 'playground.png', 'label' => __('property.playground'), 'value' => __('property.childrens_playground')],
                                    ];
                                @endphp

                                @foreach($infra as $item)
                                    <div class="col d-flex align-items-start">
                                        <img src="{{ asset('assets/images/propertyicons/' . $item['icon']) }}"
                                             alt="{{ $item['label'] }}" width="28" height="28"
                                             class="me-3 mt-1 flex-shrink-0" style="object-fit: contain;">
                                        <div>
                                            <div class="fw-semibold">{{ $item['label'] }}</div>
                                            <div>{{ $item['value'] }}</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>

                </div>

                <!-- Sidebar -->
                <aside class="col-lg-4">
                    <div class="cs_sidebar cs_style_1 cs_white_bg cs_right_sidebar">
                        <div class="cs_info_widget cs_white_bg">
                            <h3 class="cs_widget_title cs_fs_24 cs_medium">{{ __('property.basic_info') }}</h3>
                            <ul class="cs_info_list cs_mp0">
                                <li><strong>{{ __('property.type') }}:</strong> {{ $property->type }}</li>
                                <li><strong>{{ __('property.status') }}:</strong> {{ $property->status }}</li>
                                <li><strong>{{ __('property.floor') }}:</strong> {{ $property->floor }}</li>
                                <li><strong>{{ __('property.bathrooms') }}:</strong> {{ $property->bathrooms }}</li>
                            </ul>
                        </div>

                        <div class="cs_booking_widget cs_gray_bg">
                            <h3 class="cs_widget_title cs_fs_24 cs_medium">{{ __('property.contact_agent') }}</h3>
                            <form method="POST" action="{{ route('index', $property) }}" class="cs_booking_form">
                                @csrf
                                <input type="text" name="name" placeholder="{{ __('property.name') }}*" required class="cs_form_field cs_radius_5">
                                <input type="email" name="email" placeholder="{{ __('property.email') }}*" required class="cs_form_field cs_radius_5">
                                <textarea name="message" rows="5" placeholder="{{ __('property.message') }}" class="cs_form_field cs_radius_5"></textarea>
                                <button type="submit" class="cs_btn cs_style_1 w-100">{{ __('property.send_message') }}</button>
                            </form>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
        <div class="cs_height_140 cs_height_lg_80"></div>
    </section>
    <!-- End Property Details Section -->

@endsection
