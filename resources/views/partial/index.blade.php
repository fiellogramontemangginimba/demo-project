@extends('templates.default')

{{-- <h1>{{ $title }}</h1>
<h2>{{ $heading }}</h2>
@foreach ($estate1 as $list)
    <h3>{{ $list['flavor'] }}</h3>
    <p>{{ $list['desc'] }}</p>
@endforeach --}}
@section('content')
    @foreach ($estate1 as $list)

<!-- ======= Intro Section ======= -->
<div class="intro intro-carousel swiper position-relative">

<div class="swiper-wrapper">

  <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-1.jpg)">
    <div class="overlay overlay-a"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="intro-body">
                <p class="intro-title-top">{{ $list['head'] }}
                  <br> {{ $list['body'] }}
                </p>
                <h1 class="intro-title mb-4 ">
                  <span class="color-b">{{ $list['section'] }} </span> Mount
                  <br> Olive Road Two
                </h1>
                <p class="intro-subtitle intro-price">
                  <a href="#"><span class="price-a">{{ $list['description'] }}</span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-2.jpg)">
    <div class="overlay overlay-a"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="intro-body">
                <p class="intro-title-top">{{ $list['head'] }}
                  <br> {{ $list['body'] }}
                </p>
                <h1 class="intro-title mb-4">
                  <span class="color-b">{{ $list['section'] }} </span> Rino
                  <br> Venda Road Five
                </h1>
                <p class="intro-subtitle intro-price">
                  <a href="#"><span class="price-a">{{ $list['description'] }}</span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-3.jpg)">
    <div class="overlay overlay-a"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="intro-body">
                <p class="intro-title-top">{{ $list['head'] }}
                  <br> {{ $list['body'] }}
                </p>
                <h1 class="intro-title mb-4">
                  <span class="color-b">{{ $list['section'] }} </span> Alira
                  <br> Roan Road One
                </h1>
                <p class="intro-subtitle intro-price">
                  <a href="#"><span class="price-a">{{ $list['description'] }}</span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="swiper-pagination"></div>
</div><!-- End Intro Section -->

    @endforeach
@endsection