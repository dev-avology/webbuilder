@extends('layouts.frontend.app')

@section('title','HomePage')

@section('content')

<!-- hero area start -->
<section>
  <div class="hero-area">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-5">
                  <div class="hero-content">
                      <h2>Coming Soon..</h2>
                      <p>Coming Soon is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                       
                        <div class="hero-small-message">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                  </div>
              </div>
              <div class="col-lg-7">
                  <div class="hero-img">
                      @php
                      $hero_img=$info->hero_img ?? '';
                      @endphp
                      <!--img class="img-fluid" src="{{ asset('uploads/'.$hero_img) }}" alt=""-->
					  <img class="img-fluid" src="{{ asset('uploads/main-page-image-section-1-mobile.webp') }}" alt="">
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- hero area end -->

@endsection