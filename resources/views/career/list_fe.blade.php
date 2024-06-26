@extends('fe.main')
@section('content')

<section class="banner__inner-page bg-image pt-180 pb-180 bg-image" data-background="assets/images/banner/banner-inner-page.jpg" style="background-image: url(&quot;assets/images/banner/banner-inner-page.jpg&quot;);">
    <div class="shape2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInLeft;">
        <img src="assets/images/banner/inner-banner-shape2.png" alt="shape">
    </div>
    <div class="shape1 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: slideInLeft;">
        <img src="assets/images/banner/inner-banner-shape1.png" alt="shape">
    </div>
    <div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: slideInRight;">
        <img class="sway__animationX" src="assets/images/banner/inner-banner-shape3.png" alt="shape">
    </div>
    <div class="container">
        <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">Careers</h2>
        <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
            <a href="/">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Careers
                </span>
        </div>
    </div>
</section>
@endsection