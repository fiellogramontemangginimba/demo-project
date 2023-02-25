@extends('templates.default')

{{-- <h1>{{ $title }}</h1>
<h2>{{ $heading }}</h2>
@foreach ($about as $list)
    <h3>{{ $list['flavor'] }}</h3>
    <p>{{ $list['desc'] }}</p>
@endforeach --}}
@section('content')
@foreach ($about as $list)
    <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{ $list['coffee_image'] }}" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">{{ $list['lead'] }}</span>
                                    <span class="section-heading-lower">{{ $list['heading'] }}</span>
                                </h2>
                                <p>{{ $list['desc'] }}</p>
                                <p class="mb-0">
                                    We guarantee that you will fall in
                                    <em>lust</em>
                                    with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
@endsection
