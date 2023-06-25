@extends('layouts.app')

@section('title')
  Homepage Bikestore
@endsection

@section('content')
<!-- Hero Banner -->
<section class="pt-5 hero-banner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 pr-5">
          <h1 class="mb-3">
            It's Your World, <br> Ride It!
          </h1>
          <p class="mb-5 w-100">
            there is no day without cycling
          </p>
          <img src="frontend/images/bicycle-logo.svg" alt="logo bikestore" class="banner-logo">
          <button class="btn btn-cta p-2">Order Your Bike</button>
        </div>
  
        <div class="col-md-6 pl-6 mt-5">
          <div>
            <img src="frontend/images/bannfer-full.png" alt="" class="img-fluid ">
            <!-- <img src="frontend/images/banner-frame.png" alt="" class="img-fluid position-absolute banner-img-frame">
            <img src="frontend/images/banner-frame-1.png" alt="" class="img-fluid position-absolute banner-img-frame-1"> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trend Categories -->
  <section class="container categories">
    <h4 class="mb-5">Trend Categories</h4>
    <div class="row">
      <div class="col-6 col-md-5 component-categories d-block">
        <div class="tag">
          <span>Mountain</span>
        </div>
        <a href="pages/detail.html">
          <div class="categories-thumbnail">
            <div class="categories-image" style="background-image: url('frontend/images/categories-mountain.jpg');">
            </div>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-3 component-categories d-block">
        <div class="tag">
          <span>Road</span>
        </div>
        <a href="pages/detail.html">
          <div class="categories-thumbnail">
            <div class="categories-image" style="background-image: url('frontend/images/categories-road.jpg');">

            </div>
          </div>
        </a>
        <!-- <div class="card">card</div> -->
      </div>
      <div class="col-12 col-md-4">
        <div class="row">
          <div class="col-12 col-md-12 component-categories d-block">
            <div class="tag">
              <span>Urban</span>
            </div>
            <a href="pages/detail.html">
              <div class="categories-thumbnail-small">
                <div class="categories-image" style="background-image: url('frontend/images/categories-urban.jpg');">
    
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-12 col-md-12 component-categories d-block">
            <div class="tag">
              <span>Junior</span>
            </div>
            <a href="pages/detail.html">
              <div class="categories-thumbnail-small">
                <div class="categories-image" style="background-image: url('frontend/images/categories-junior.jpg');">
    
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Popular Products -->
  <section class="popular-products">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h4 class="mb-5 mt-5">Popular Products</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-md-4 col-lg-3">
          <a href="pages/detail.html" class="component-products d-block"> 
            <div class="products-image mb-4">
              <img src="frontend/images/speach-stealth.png" alt="" class="w-100">
            </div>
            <div class="products-text mb-2">
              Speach Stealth
            </div>
            <div class="products-price">
              $333,33
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <a href="pages/detail.html" class="component-products d-block"> 
            <div class="products-image mb-4">
              <img src="frontend/images/spectral-mountain.png" alt="" class="w-100">
            </div>
            <div class="products-text mb-2">
              Spectral Mountain
            </div>
            <div class="products-price">
              $350
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <a href="pages/detail.html" class="component-products d-block"> 
            <div class="products-image mb-4">
              <img src="frontend/images/spectral-mountain.png" alt="" class="w-100">
            </div>
            <div class="products-text mb-2">
              lixada-ultra
            </div>
            <div class="products-price">
              $50
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <a href="pages/detail.html" class="component-products d-block"> 
            <div class="products-image mb-4">
              <img src="frontend/images/noriss.png" alt="" class="w-100">
            </div>
            <div class="products-text mb-2">
              Norus Nexx 3.0
            </div>
            <div class="products-price">
              $250
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <a href="pages/detail.html" class="component-products d-block"> 
            <div class="products-image mb-4">
              <img src="frontend/images/speach-stealth.png" alt="" class="w-100">
            </div>
            <div class="products-text mb-2">
              Speach Stealth
            </div>
            <div class="products-price">
              $333,33
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <a href="pages/detail.html" class="component-products d-block"> 
            <div class="products-image mb-4">
              <img src="frontend/images/spectral-mountain.png" alt="" class="w-100">
            </div>
            <div class="products-text mb-2">
              Spectral Mountain
            </div>
            <div class="products-price">
              $350
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <a href="pages/detail.html" class="component-products d-block"> 
            <div class="products-image mb-4">
              <img src="frontend/images/spectral-mountain.png" alt="" class="w-100">
            </div>
            <div class="products-text mb-2">
              lixada-ultra
            </div>
            <div class="products-price">
              $50
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <a href="pages/detail.html" class="component-products d-block"> 
            <div class="products-image mb-4">
              <img src="frontend/images/noriss.png" alt="" class="w-100">
            </div>
            <div class="products-text mb-2">
              Norus Nexx 3.0
            </div>
            <div class="products-price">
              $250
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonial -->
  <section class="testimonial">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-auto">
          <div class="testimonial-hero">
            <img src="frontend/images/testimonial-hero.png" alt="Testimonial" class="position-absolute testimonial-hero-image">
            <img src="frontend/images/testimonial-frame.png" alt="Testimonial" class="testimonial-frame">
          </div>
        </div>
        <div class="colfa-rotate-180 col-md-4 ml-5">
          <div class="stars align-items-center">
            <img src="frontend/images/stars.png" alt="">
          </div>
          <h2 class="testimonial-text">BIKESTORE "GOES TO CAMPUS" X UIR....</h2>
          <p class="testimonial-name
          ">Johan, Programmer</p>
          
          <a href="#" class="btn btn-testimonial mt-5">
            Read Story
          </a>
        </div>
      </div>
    </div><br><br><br>
  </section>
@endsection