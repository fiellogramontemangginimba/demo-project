@extends('templates.default')

{{-- <h1>{{ $title }}</h1>
<h2>{{ $heading }}</h2>
@foreach ($home as $list)
    <h3>{{ $list['flavor'] }}</h3>
    <p>{{ $list['desc'] }}</p>
@endforeach --}}
@section('content')
    @foreach ($home as $list)
    @if ($loop->odd)
<section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{ $list['coffee_image'] }}" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">{{ $list['lead'] }}</span>
                            <span class="section-heading-lower">{{ $list['heading'] }}</span>
                        </h2>
                        <p class="mb-3">{{ $list['desc'] }}</p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="#!">Visit Us Today!</a></div>
                    </div>
                </div>
            </div>
        </section>
        @else
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">{{ $list['lead'] }}</span>
                                <span class="section-heading-lower">{{ $list['heading'] }}</span>
                            </h2>
                            <p class="mb-0">{{ $list['desc'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
    @endforeach
@endsection