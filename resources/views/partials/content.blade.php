@extends('layouts.master')

@section('content')

@include('partials.header_content')
<div class="row row-col-border-white" data-gutter="0">
        <div class="col-md-3 ">
          <div class="banner banner-">
            <img class="banner-img" src="{{asset('frontend/img/600x413.png')}}" alt="Image Alternative text" title="Image Title"/>
            <a class="banner-link" href="#"></a>
          </div>
        </div>
        <div class="col-md-3 ">
          <div class="banner banner-">
            <img class="banner-img" src="{{asset('frontend/img/600x413.png')}}" alt="Image Alternative text" title="Image Title"/>
            <a class="banner-link" href="#"></a>
          </div>
        </div>
        <div class="col-md-3 ">
          <div class="banner banner-">
            <img class="banner-img" src="{{asset('frontend/img/600x413.png')}}" alt="Image Alternative text" title="Image Title"/>
            <a class="banner-link" href="#"></a>
          </div>
        </div>
        <div class="col-md-3 ">
          <div class="banner banner-">
            <img class="banner-img" src="{{asset('frontend/img/600x413.png')}}" alt="Image Alternative text" title="Image Title"/>
            <a class="banner-link" href="#"></a>
          </div>
        </div>
      </div>
      <div class="theme-hero-area">
        <div class="theme-hero-area-bg-wrap">
          <div class="theme-hero-area-bg-pattern theme-hero-area-bg-pattern-ultra-light" style="background-image:url(frontend/img/patterns/travel/2.png);"></div>
          <div class="theme-hero-area-grad-mask"></div>
          <div class="theme-hero-area-inner-shadow theme-hero-area-inner-shadow-light"></div>
        </div>
        <div class="theme-hero-area-body">
          <div class="theme-page-section theme-page-section-xxl">
            <div class="container">
              <div class="theme-page-section-header theme-page-section-header-white">
                <h5 class="theme-page-section-title">Cities to Travel</h5>
                <p class="theme-page-section-subtitle">The most searched cities in March</p>
              </div>
              <div class="theme-inline-slider row" data-gutter="10">
                <div class="owl-carousel owl-carousel-nav-white" data-items="5" data-loop="true" data-nav="true">
                  <div class="theme-inline-slider-item">
                    <div class="banner _h-40vh _br-3 _bsh-xs banner-animate banner-animate-mask-in banner-animate-slow">
                      <div class="banner-bg" style="background-image:url(frontend/img/400x500.png);"></div>
                      <div class="banner-mask"></div>
                      <a class="banner-link" href="#"></a>
                      <div class="banner-caption _p-20 _bg-w banner-caption-bottom banner-caption-dark">
                        <h5 class="banner-title _fs _fw-b">Bangkok</h5>
                        <p class="banner-subtitle _fw-n _mt-5">Amet malesuada placerat</p>
                      </div>
                    </div>
                  </div>
                  <div class="theme-inline-slider-item">
                    <div class="banner _h-40vh _br-3 _bsh-xs banner-animate banner-animate-mask-in banner-animate-slow">
                      <div class="banner-bg" style="background-image:url(frontend/img/400x500.png);"></div>
                      <div class="banner-mask"></div>
                      <a class="banner-link" href="#"></a>
                      <div class="banner-caption _p-20 _bg-w banner-caption-bottom banner-caption-dark">
                        <h5 class="banner-title _fs _fw-b">San Francisco</h5>
                        <p class="banner-subtitle _fw-n _mt-5">Vehicula volutpat porta</p>
                      </div>
                    </div>
                  </div>
                  <div class="theme-inline-slider-item">
                    <div class="banner _h-40vh _br-3 _bsh-xs banner-animate banner-animate-mask-in banner-animate-slow">
                      <div class="banner-bg" style="background-image:url(frontend/img/400x500.png);"></div>
                      <div class="banner-mask"></div>
                      <a class="banner-link" href="#"></a>
                      <div class="banner-caption _p-20 _bg-w banner-caption-bottom banner-caption-dark">
                        <h5 class="banner-title _fs _fw-b">Paris</h5>
                        <p class="banner-subtitle _fw-n _mt-5">Commodo mattis id</p>
                      </div>
                    </div>
                  </div>
                  <div class="theme-inline-slider-item">
                    <div class="banner _h-40vh _br-3 _bsh-xs banner-animate banner-animate-mask-in banner-animate-slow">
                      <div class="banner-bg" style="background-image:url(frontend/img/400x500.png);"></div>
                      <div class="banner-mask"></div>
                      <a class="banner-link" href="#"></a>
                      <div class="banner-caption _p-20 _bg-w banner-caption-bottom banner-caption-dark">
                        <h5 class="banner-title _fs _fw-b">London</h5>
                        <p class="banner-subtitle _fw-n _mt-5">Adipiscing metus quis</p>
                      </div>
                    </div>
                  </div>
                  <div class="theme-inline-slider-item">
                    <div class="banner _h-40vh _br-3 _bsh-xs banner-animate banner-animate-mask-in banner-animate-slow">
                      <div class="banner-bg" style="background-image:url(frontend/img/400x500.png);"></div>
                      <div class="banner-mask"></div>
                      <a class="banner-link" href="#"></a>
                      <div class="banner-caption _p-20 _bg-w banner-caption-bottom banner-caption-dark">
                        <h5 class="banner-title _fs _fw-b">New York</h5>
                        <p class="banner-subtitle _fw-n _mt-5">Donec nam placerat</p>
                      </div>
                    </div>
                  </div>
                  <div class="theme-inline-slider-item">
                    <div class="banner _h-40vh _br-3 _bsh-xs banner-animate banner-animate-mask-in banner-animate-slow">
                      <div class="banner-bg" style="background-image:url(frontend/img/400x500.png);"></div>
                      <div class="banner-mask"></div>
                      <a class="banner-link" href="#"></a>
                      <div class="banner-caption _p-20 _bg-w banner-caption-bottom banner-caption-dark">
                        <h5 class="banner-title _fs _fw-b">Dubai</h5>
                        <p class="banner-subtitle _fw-n _mt-5">Curabitur habitasse porttitor</p>
                      </div>
                    </div>
                  </div>
                  <div class="theme-inline-slider-item">
                    <div class="banner _h-40vh _br-3 _bsh-xs banner-animate banner-animate-mask-in banner-animate-slow">
                      <div class="banner-bg" style="background-image:url(frontend/img/400x500.png);"></div>
                      <div class="banner-mask"></div>
                      <a class="banner-link" href="#"></a>
                      <div class="banner-caption _p-20 _bg-w banner-caption-bottom banner-caption-dark">
                        <h5 class="banner-title _fs _fw-b">Tokyo</h5>
                        <p class="banner-subtitle _fw-n _mt-5">Feugiat lobortis tortor</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="theme-page-section theme-page-section-xxl">
        <div class="container">
          <div class="theme-page-section-header">
            <h5 class="theme-page-section-title">Top Destinations</h5>
            <p class="theme-page-section-subtitle">The most searched countries in March</p>
          </div>
          <div class="row row-col-gap" data-gutter="10">
            <div class="col-md-4 ">
              <div class="banner _h-40vh _br-3 banner-animate banner-animate-mask-in banner-animate-very-slow banner-animate-zoom-in">
                <div class="banner-bg" style="background-image:url(frontend/img/550x360.png);"></div>
                <div class="banner-mask"></div>
                <a class="banner-link" href="#"></a>
                <div class="banner-caption _pt-100 banner-caption-bottom banner-caption-grad">
                  <h5 class="banner-title">India</h5>
                  <p class="banner-subtitle">Incredeble !india</p>
                </div>
              </div>
            </div>
            <div class="col-md-8 ">
              <div class="banner _h-40vh _br-3 banner-animate banner-animate-mask-in banner-animate-very-slow banner-animate-zoom-in">
                <div class="banner-bg" style="background-image:url(frontend/img/860x360.png);"></div>
                <div class="banner-mask"></div>
                <a class="banner-link" href="#"></a>
                <div class="banner-caption _pt-100 banner-caption-bottom banner-caption-grad">
                  <h5 class="banner-title">China</h5>
                  <p class="banner-subtitle">China like never before</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 ">
              <div class="banner _h-33vh _br-3 banner-animate banner-animate-mask-in banner-animate-very-slow banner-animate-zoom-in">
                <div class="banner-bg" style="background-image:url(frontend/img/800x800.png);"></div>
                <div class="banner-mask"></div>
                <a class="banner-link" href="#"></a>
                <div class="banner-caption _pt-100 banner-caption-bottom banner-caption-grad">
                  <h5 class="banner-title">Morocco</h5>
                  <p class="banner-subtitle">Much mor</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 ">
              <div class="banner _h-33vh _br-3 banner-animate banner-animate-mask-in banner-animate-very-slow banner-animate-zoom-in">
                <div class="banner-bg" style="background-image:url(../frontend/img/800x800.png);"></div>
                <div class="banner-mask"></div>
                <a class="banner-link" href="#"></a>
                <div class="banner-caption _pt-100 banner-caption-bottom banner-caption-grad">
                  <h5 class="banner-title">Canada</h5>
                  <p class="banner-subtitle">Keep exploring</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 ">
              <div class="banner _h-33vh _br-3 banner-animate banner-animate-mask-in banner-animate-very-slow banner-animate-zoom-in">
                <div class="banner-bg" style="background-image:url(../frontend/img/400x360.png);"></div>
                <div class="banner-mask"></div>
                <a class="banner-link" href="#"></a>
                <div class="banner-caption _pt-100 banner-caption-bottom banner-caption-grad">
                  <h5 class="banner-title">Portugal</h5>
                  <p class="banner-subtitle">Europe's west coast</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 ">
              <div class="banner _h-33vh _br-3 banner-animate banner-animate-mask-in banner-animate-very-slow banner-animate-zoom-in">
                <div class="banner-bg" style="background-image:url(../frontend/img/400x360.png);"></div>
                <div class="banner-mask"></div>
                <a class="banner-link" href="#"></a>
                <div class="banner-caption _pt-100 banner-caption-bottom banner-caption-grad">
                  <h5 class="banner-title">Malasia</h5>
                  <p class="banner-subtitle">Truly asia</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="theme-hero-area">
        <div class="theme-hero-area-bg-wrap">
          <div class="theme-hero-area-bg" style="background-image:url(../frontend/img/1500x800.png);"></div>
          <div class="theme-hero-area-inner-shadow theme-hero-area-inner-shadow-light"></div>
        </div>
        <div class="theme-hero-area-body">
          <div class="container">
            <div class="theme-page-section _p-0">
              <div class="row">
                <div class="col-md-10 col-md-offset-1">
                  <div class="theme-mobile-app">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="theme-mobile-app-section">
                          <div class="theme-mobile-app-body">
                            <div class="theme-mobile-app-header">
                              <h2 class="theme-mobile-app-title">Download our app</h2>
                              <p class="theme-mobile-app-subtitle">Book and manage your trips on the go. Be notified of our hot deals and offers.</p>
                            </div>
                            <ul class="theme-mobile-app-btn-list">
                              <li>
                                <a class="btn btn-dark theme-mobile-app-btn" href="#">
                                  <i class="theme-mobile-app-logo">
                                    <img src="{{asset('frontend/img/brands/apple.png')}}" alt="Image Alternative text" title="Image Title"/>
                                  </i>
                                  <span>Download on
                                    <br/>
                                    <span>App Store</span>
                                  </span>
                                </a>
                              </li>
                              <li>
                                <a class="btn btn-dark theme-mobile-app-btn" href="#">
                                  <i class="theme-mobile-app-logo">
                                    <img src="{{asset('frontend/img/brands/play-market.png')}}" alt="Image Alternative text" title="Image Title"/>
                                  </i>
                                  <span>Download on
                                    <br/>
                                    <span>Play Market</span>
                                  </span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="theme-mobile-app-section"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection