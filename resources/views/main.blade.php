@extends('fe.main')
@section('content')

<style>
    .reduced-height {
        height: 70vh; /* Set to 50% of the viewport height */
        background-color: lightgrey;
    }
</style>


<main>
        <!-- Banner area start here -->
        <section class="banner-two-area reduced-height">
            <div class="banner-two__line">
                <img class="sway_Y__animation" src="assets/images/banner/banner-line.png" alt="shape">
            </div>
            <div class="swiper banner__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="banner-two__line-left" data-animation="slideInLeft" data-duration="3s"
                            data-delay=".3s">
                            <img src="assets/images/banner/banner-two-left-line.png" alt="shape">
                        </div>
                        <div class="banner-two__shape2" data-animation="slideInRight" data-duration="2s"
                            data-delay=".3s">
                            <img src="assets/images/banner/banner-two-solid-right-down.png" alt="shape">
                        </div>
                        <div class="banner-two__shape1" data-animation="slideInRight" data-duration="2s"
                            data-delay=".5s">
                            <img src="assets/images/banner/banner-two-solid-right-up.png" alt="shape">
                        </div>
                        <div class="banner-two__right-shape wow slideInRight" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <img class="sway_Y__animation" src="assets/images/banner/banner-two-right-shape.png"
                                alt="shape">
                        </div>
                        <div class="banner-two__circle-solid">
                            <img class="animation__rotate" src="assets/images/banner/banner-two-circle-solid.png"
                                alt="shape">
                        </div>
                        <div class="banner-two__circle-regular">
                            <img class="animation__rotateY" src="assets/images/banner/banner-two-circle-regular.png"
                                alt="shape">
                        </div>
                        <div class="slide-bg" data-background="https://konvergenz.co.ke/wp-content/uploads/2021/11/hooded-computer-hacker-stealing-information-with-laptop.jpg"></div>
                        <div class="container">
                            <div class="banner-two__content text-left">
                                
                                <h1 style="font-family: Avenir;" data-animation="fadeInUp" data-delay=".5s" class="text-white">
                                    Trust No One <span class="text-light" style="display:block">Verify Everyone</span>
                                </h1>
                                <p data-animation="fadeInUp" data-delay=".7s" class="mt-20">
                                    We provide the foundation necessary to protect your organization’s data, network and critical assets from outside intruders and threats. 
                                </p>
                                <a data-animation="fadeInUp" data-delay="1s" href="about.html"
                                    class="btn-one mt-50">Explore
                                    More <i class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-two__line-left" data-animation="slideInLeft" data-duration="3s"
                            data-delay=".3s">
                            <img src="assets/images/banner/banner-two-left-line.png" alt="shape">
                        </div>
                        <div class="banner-two__shape2" data-animation="slideInRight" data-duration="2s"
                            data-delay=".3s">
                            <img src="assets/images/banner/banner-two-solid-right-down.png" alt="shape">
                        </div>
                        <div class="banner-two__shape1" data-animation="slideInRight" data-duration="2s"
                            data-delay=".5s">
                            <img src="assets/images/banner/banner-two-solid-right-up.png" alt="shape">
                        </div>
                        <div class="banner-two__right-shape wow slideInRight" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <img class="sway_Y__animation" src="assets/images/banner/banner-two-right-shape.png"
                                alt="shape">
                        </div>
                        <div class="banner-two__circle-solid">
                            <img class="animation__rotate" src="assets/images/banner/banner-two-circle-solid.png"
                                alt="shape">
                        </div>
                        <div class="banner-two__circle-regular">
                            <img class="animation__rotateY" src="assets/images/banner/banner-two-circle-regular.png"
                                alt="shape">
                        </div>
                        <div class="slide-bg image-container" data-background="https://konvergenz.co.ke/wp-content/uploads/2021/12/IKRAN.jpg"></div>
                        <div class="container">
                            <div class="banner-two__content text-left">
                               
                                <h1 data-animation="fadeInUp" data-delay=".5s" class="text-light">
                                    Your Trusted Digital<span class="text-light" style="display:block">Partner</span>
                                </h1>
                                <p data-animation="fadeInUp" data-delay=".7s" class="mt-20">
                                    Proud to be part of your digital transformation journey.
                                </p>
                                <a data-animation="fadeInUp" data-delay="1s" href="about.html"
                                    class="btn-one mt-50">Explore
                                    More <i class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-two__line-left" data-animation="slideInLeft" data-duration="3s"
                            data-delay=".3s">
                            <img src="assets/images/banner/banner-two-left-line.png" alt="shape">
                        </div>
                        <div class="banner-two__shape2" data-animation="slideInRight" data-duration="2s"
                            data-delay=".3s">
                            <img src="assets/images/banner/banner-two-solid-right-down.png" alt="shape">
                        </div>
                        <div class="banner-two__shape1" data-animation="slideInRight" data-duration="2s"
                            data-delay=".5s">
                            <img src="assets/images/banner/banner-two-solid-right-up.png" alt="shape">
                        </div>
                        <div class="banner-two__right-shape wow slideInRight" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <img class="sway_Y__animation" src="assets/images/banner/banner-two-right-shape.png"
                                alt="shape">
                        </div>
                        <div class="banner-two__circle-solid">
                            <img class="animation__rotate" src="assets/images/banner/banner-two-circle-solid.png"
                                alt="shape">
                        </div>
                        <div class="banner-two__circle-regular">
                            <img class="animation__rotateY" src="assets/images/banner/banner-two-circle-regular.png"
                                alt="shape">
                        </div>
                        <div class="slide-bg image-container" style="background: rgba(0, 0, 0, 0.5);" data-background="assets/images/banner/now-banner.jpeg"></div>
                        <div class="container">
                            <div class="banner-two__content text-left">
                                <!-- <h4 style="font-family: Avenir;" data-animation="fadeInUp" data-delay=".3s" class="text-white mb-20">
                                    TECHNOLOGY RELETED CONSULTANCY
                                </h4> -->
                                <h1 data-animation="fadeInUp" data-delay=".5s" class="text-white">
                                    We Convert Concepts Into Technology
                                </h1>
                                <p data-animation="fadeInUp" data-delay=".7s" class="mt-20">
                                We specialize in translating abstract ideas and concepts into tangible technological solutions, harnessing innovation to bring visions to life.
                                </p>
                                <a data-animation="fadeInUp" data-delay="1s" href="about.html"
                                    class="btn-one mt-50">Explore
                                    More <i class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner__dot-wrp banner-two__dot-wrp">
                <div class="dot-light banner__dot"></div>
            </div>
        </section>
        <!-- Banner area end here -->

        <!-- Brand area start here -->
        <!-- <div class="brand-area">
            <div class="container">
                <div class="brand__wrp">
                    <div class="brand__shape">
                        <img src="assets/images/shape/brand-shape.png" alt="">
                    </div>
                    <div class="swiper brand__slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand__image image">
                                    <img src="assets/images/clients/icta.png" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__image image">
                                    <img src="assets/images/clients/mrm.png" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__image image">
                                    <img src="assets/images/clients/equity.png" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__image image">
                                    <img src="assets/images/clients/safaricom.svg" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__image image">
                                    <img src="assets/images/clients/nrb.svg" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Brand area end here -->

        <!-- About area start here -->
        <section class="about-two-area pt-120">
            <div class="about-two__shape">
                <img src="assets/images/shape/about-two-shape.png" alt="shape">
            </div>
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="about-two__left-item">
                            <div class="dots">
                                <img class="sway_Y__animation" src="assets/images/shape/about-two-dot.png" alt="shape">
                            </div>
                            <div class="shape-halper">
                                <img class="sway__animation" src="assets/images/shape/about-circle-helper.png"
                                    alt="shape">
                            </div>
                            <div class="image big-image">
                                <img src="assets/images/about/about-two-image1.jpg" alt="image">
                            </div>
                            <div class="image sm-image">
                                <img src="assets/images/about/about-two-image2.png" alt="image">
                            </div>
                            <div class="circle-shape">
                                <img class="animation__rotate" src="assets/images/shape/about-two-circle.png"
                                    alt="shape">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="section-header mb-40">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <svg class="me-1" width="20" height="12" viewBox="0 0 20 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="18.5" height="10.5" rx="5.25" stroke="#3C72FC"
                                        stroke-width="1.5" />
                                    <mask id="path-2-inside-1_668_146" fill="white">
                                        <path
                                            d="M3 6C3 3.79086 4.79086 2 7 2H13C15.2091 2 17 3.79086 17 6C17 8.20914 15.2091 10 13 10H7C4.79086 10 3 8.20914 3 6Z" />
                                    </mask>
                                    <path
                                        d="M3 6C3 2.96243 5.46243 0.5 8.5 0.5H11.5C14.5376 0.5 17 2.96243 17 6C17 4.61929 15.2091 3.5 13 3.5H7C4.79086 3.5 3 4.61929 3 6ZM17 6C17 9.03757 14.5376 11.5 11.5 11.5H8.5C5.46243 11.5 3 9.03757 3 6C3 7.38071 4.79086 8.5 7 8.5H13C15.2091 8.5 17 7.38071 17 6ZM3 10V2V10ZM17 2V10V2Z"
                                        fill="#3C72FC" mask="url(#path-2-inside-1_668_146)" />
                                </svg>
                                WHO WE ARE
                            </h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Your Trusted Digital Transformation Partner</h2>
                            <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">Konvergenz Network Solutions (KNS) is  an East African-based local technology firm.  Our experienced and skilled expert team, founded in 2014, offers ICT solutions that ensure customer satisfaction in every project we deliver. In 2020, we launched our 2.0 journey gearing Konvergenz as the champion for Digital Transformational in the region. </p>
                        </div>
                        <div class="about-two__right-item wow fadeInDown" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <ul>
                                <li><i class="fa-solid fa-check"></i>Technology Consultancy</li>
                                <li><i class="fa-solid fa-check"></i>We Provide best services</li>
                            </ul>
                            <ul>
                                <li><i class="fa-solid fa-check"></i>Maintenance And Support</li>
                                <li><i class="fa-solid fa-check"></i>Requirements Gathering</li>
                            </ul>
                        </div>
                        <div class="about__info mt-50 wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <a href="/about-us" class="btn-one">About Us <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                            <img src="assets/images/about/singature.png" alt="singature">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About area end here -->

        <!-- Service area start here -->
        <section class="service-two-area secondary-bg pt-120 pb-120">
            <div class="service-two__shape-left sway_Y__animationY">
                <img src="assets/images/shape/service-two-shape-left.png" alt="shape">
            </div>
            <div class="service-two__shape-right sway_Y__animation">
                <img src="assets/images/shape/service-two-shape-right.png" alt="shape">
            </div>
            <div class="container">
                <div class="d-flex gap-4 flex-wrap align-items-center justify-content-between mb-60">
                    <div class="section-header">
                        <h5 class="wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <svg class="me-1" width="20" height="12" viewBox="0 0 20 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.75" y="0.750061" width="18.5" height="10.5" rx="5.25" stroke="#3C72FC"
                                    stroke-width="1.5" />
                                <mask id="path-2-inside-1_670_477" fill="white">
                                    <path
                                        d="M3 6.00006C3 3.79092 4.79086 2.00006 7 2.00006H13C15.2091 2.00006 17 3.79092 17 6.00006C17 8.2092 15.2091 10.0001 13 10.0001H7C4.79086 10.0001 3 8.2092 3 6.00006Z" />
                                </mask>
                                <path
                                    d="M3 6.00006C3 2.96249 5.46243 0.500061 8.5 0.500061H11.5C14.5376 0.500061 17 2.96249 17 6.00006C17 4.61935 15.2091 3.50006 13 3.50006H7C4.79086 3.50006 3 4.61935 3 6.00006ZM17 6.00006C17 9.03763 14.5376 11.5001 11.5 11.5001H8.5C5.46243 11.5001 3 9.03763 3 6.00006C3 7.38077 4.79086 8.50006 7 8.50006H13C15.2091 8.50006 17 7.38077 17 6.00006ZM3 10.0001V2.00006V10.0001ZM17 2.00006V10.0001V2.00006Z"
                                    fill="#3C72FC" mask="url(#path-2-inside-1_670_477)" />
                            </svg>
                            SERVICES WE’RE OFFERING
                        </h5>
                        <h2 class="text-white wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                            Exclusive IT Services</h2>
                    </div>
                    <div class="arry-btn  d-flex gap-3 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <button class="arry-prev service__arry-prev"><i class="fa-light fa-chevron-left"></i></button>
                        <button class="arry-next service__arry-next active"><i
                                class="fa-light fa-chevron-right"></i></button>
                    </div>
                </div>
                <div class="swiper service-two__slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-two__item">
                                <div class="image">
                                    <img src="assets/images/service/service-image1.jpg" alt="image">
                                </div>
                                <div class="service-two__content">
                                    <div class="icon">
                                        <img src="assets/images/icon/service-two-icon1.png" alt="icon">
                                    </div>
                                    <div class="shape"><img src="assets/images/shape/service-two-item-shape.png"
                                            alt="shape"></div>
                                    <h4><a href="service-details.html" class="primary-hover">Database Security</a></h4>
                                    <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac
                                        iaculis.</p>
                                    <a class="read-more-btn" href="service-details.html">Read More <i
                                            class="fa-regular fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-two__item">
                                <div class="image">
                                    <img src="assets/images/service/service-image2.jpg" alt="image">
                                </div>
                                <div class="service-two__content">
                                    <div class="icon">
                                        <img src="assets/images/icon/service-two-icon2.png" alt="icon">
                                    </div>
                                    <div class="shape"><img src="assets/images/shape/service-two-item-shape.png"
                                            alt="shape"></div>
                                    <h4><a href="service-details.html" class="primary-hover">IT Consultancy</a></h4>
                                    <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac
                                        iaculis.</p>
                                    <a class="read-more-btn" href="service-details.html">Read More <i
                                            class="fa-regular fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-two__item">
                                <div class="image">
                                    <img src="assets/images/service/service-image3.jpg" alt="image">
                                </div>
                                <div class="service-two__content">
                                    <div class="icon">
                                        <img src="assets/images/icon/service-two-icon3.png" alt="icon">
                                    </div>
                                    <div class="shape"><img src="assets/images/shape/service-two-item-shape.png"
                                            alt="shape"></div>
                                    <h4><a href="service-details.html" class="primary-hover">App Development</a></h4>
                                    <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac
                                        iaculis.</p>
                                    <a class="read-more-btn" href="service-details.html">Read More <i
                                            class="fa-regular fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-two__item">
                                <div class="image">
                                    <img src="assets/images/service/service-image1.jpg" alt="image">
                                </div>
                                <div class="service-two__content">
                                    <div class="icon">
                                        <img src="assets/images/icon/service-two-icon1.png" alt="icon">
                                    </div>
                                    <div class="shape"><img src="assets/images/shape/service-two-item-shape.png"
                                            alt="shape"></div>
                                    <h4><a href="service-details.html" class="primary-hover">Database Security</a></h4>
                                    <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac
                                        iaculis.</p>
                                    <a class="read-more-btn" href="service-details.html">Read More <i
                                            class="fa-regular fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-two__item">
                                <div class="image">
                                    <img src="assets/images/service/service-image2.jpg" alt="image">
                                </div>
                                <div class="service-two__content">
                                    <div class="icon">
                                        <img src="assets/images/icon/service-two-icon2.png" alt="icon">
                                    </div>
                                    <div class="shape"><img src="assets/images/shape/service-two-item-shape.png"
                                            alt="shape"></div>
                                    <h4><a href="service-details.html" class="primary-hover">IT Consultancy</a></h4>
                                    <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac
                                        iaculis.</p>
                                    <a class="read-more-btn" href="service-details.html">Read More <i
                                            class="fa-regular fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-two__item">
                                <div class="image">
                                    <img src="assets/images/service/service-image3.jpg" alt="image">
                                </div>
                                <div class="service-two__content">
                                    <div class="icon">
                                        <img src="assets/images/icon/service-two-icon3.png" alt="icon">
                                    </div>
                                    <div class="shape"><img src="assets/images/shape/service-two-item-shape.png"
                                            alt="shape"></div>
                                    <h4><a href="service-details.html" class="primary-hover">App Development</a></h4>
                                    <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac
                                        iaculis.</p>
                                    <a class="read-more-btn" href="service-details.html">Read More <i
                                            class="fa-regular fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service area end here -->

        <!-- Choose area start here -->
        <section class="choose-area sub-bg pt-120 pb-120">
            <div class="choose__video-btn">
                <div class="video-btn video-pulse wow fadeIn" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a class="video-popup" href="https://www.youtube.com/watch?v=iVqz_4M5mA0"><i
                            class="fa-solid fa-play"></i></a>
                </div>
            </div>
            <div class="choose__shape-right1 wow slideInRight d-none d-lg-block" data-wow-delay="200ms"
                data-wow-duration="1500ms">
                <img src="assets/images/shape/choose-shape-right.png" alt="shape">
            </div>
            <div class="choose__shape-right2 wow slideInRight d-none d-lg-block" data-wow-delay="200ms"
                data-wow-duration="1000ms">
                <img src="assets/images/shape/choose-shape-right2.png" alt="shape">
            </div>
            <div class="choose__shape-left sway__animation">
                <img src="assets/images/shape/choose-shape-left.png" alt="shape">
            </div>
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6 d-block d-lg-none">
                        <div class="image">
                            <img src="assets/images/choose/choose-image1.png" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header mb-40">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <svg class="me-1" width="20" height="12" viewBox="0 0 20 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="18.5" height="10.5" rx="5.25" stroke="#3C72FC"
                                        stroke-width="1.5" />
                                    <mask id="path-2-inside-1_682_455" fill="white">
                                        <path
                                            d="M3 6C3 3.79086 4.79086 2 7 2H13C15.2091 2 17 3.79086 17 6C17 8.20914 15.2091 10 13 10H7C4.79086 10 3 8.20914 3 6Z" />
                                    </mask>
                                    <path
                                        d="M3 6C3 2.96243 5.46243 0.5 8.5 0.5H11.5C14.5376 0.5 17 2.96243 17 6C17 4.61929 15.2091 3.5 13 3.5H7C4.79086 3.5 3 4.61929 3 6ZM17 6C17 9.03757 14.5376 11.5 11.5 11.5H8.5C5.46243 11.5 3 9.03757 3 6C3 7.38071 4.79086 8.5 7 8.5H13C15.2091 8.5 17 7.38071 17 6ZM3 10V2V10ZM17 2V10V2Z"
                                        fill="#3C72FC" mask="url(#path-2-inside-1_682_455)" />
                                </svg>
                                WHY Choose US
                            </h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Elevate Your
                                Achievements Using Premier IT Solutions</h2>
                        </div>
                        <div class="row g-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="col-md-6">
                                <div class="about__right-item">
                                    <div class="icon">
                                        <img src="assets/images/icon/about-icon1.png" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h4 class="mb-1">Best Services</h4>
                                        <p>Scelerisque augue the consequat sodales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about__right-item">
                                    <div class="icon">
                                        <img src="assets/images/icon/about-icon2.png" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h4 class="mb-1">24/7 Call Support</h4>
                                        <p>Scelerisque augue the consequat sodales</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-area wow fadeInDown mt-40" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="progress__title mb-10">
                                <h5>Information Technology</h5>
                                <span><span class="progress-count">80</span>%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow slideInLeft" data-wow-duration=".86s" role="progressbar"
                                    style="width: 86%;" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <div class="progress-area wow fadeInDown mt-20" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <div class="progress__title mb-10">
                                <h5>Technology Consultant</h5>
                                <span><span class="progress-count">95</span>%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow slideInLeft" data-wow-duration=".95s" role="progressbar"
                                    style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="choose__image image">
                            <img src="assets/images/choose/choose-image1.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Choose area end here -->


        <!-- Client’s Section -->

        <section class="choose-area sub-bg pt-120 pb-120">
                <div class="section-header text-center mb-60">
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">We are trusted by</h2>
                </div>
            <div class="brand-three-area bg-image pt-100 pb-100" data-background="assets/images/bg/case-three-bg.jpg" style="background-image: url(&quot;assets/images/bg/case-three-bg.jpg&quot;);">
                <div class="brand-three__line1">
                    <img src="assets/images/shape/brand-three-line1.png" alt="shape">
                </div>
                <div class="brand-three__shape1">
                    <img src="assets/images/shape/brand-three-shape1.png" alt="shape">
                </div>
                <div class="brand-three__line2">
                    <img src="assets/images/shape/brand-three-line2.png" alt="shape">
                </div>
                <div class="brand-three__shape2">
                    <img src="assets/images/shape/brand-three-shape2.png" alt="shape">
                </div>
                <div class="container">
                    <div class="swiper brand__slider swiper-initialized swiper-horizontal swiper-pointer-events">
                        <div class="swiper-wrapper" id="swiper-wrapper-7b61c6a1c0d44134" aria-live="off" style="transform: translate3d(-1920px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 210px; margin-right: 30px;" role="group" aria-label="1 / 5">
                                <div class="brand__image image">
                                    <img src="assets/images/brand/brand-image1.png" alt="image">
                                </div>
                            </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 210px; margin-right: 30px;" role="group" aria-label="2 / 5">
                                <div class="brand__image image">
                                    <img src="assets/images/brand/brand-image2.png" alt="image">
                                </div>
                            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="width: 210px; margin-right: 30px;" role="group" aria-label="3 / 5">
                                <div class="brand__image image">
                                    <img src="assets/images/brand/brand-image3.png" alt="image">
                                </div>
                            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" style="width: 210px; margin-right: 30px;" role="group" aria-label="4 / 5">
                                <div class="brand__image image">
                                    <img src="assets/images/brand/brand-image4.png" alt="image">
                                </div>
                            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="4" style="width: 210px; margin-right: 30px;" role="group" aria-label="5 / 5">
                                <div class="brand__image image">
                                    <img src="assets/images/brand/brand-image5.png" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="0" style="width: 210px; margin-right: 30px;" role="group" aria-label="1 / 5">
                                <div class="brand__image image">
                                    <img src="assets/images/brand/brand-image1.png" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="1" style="width: 210px; margin-right: 30px;" role="group" aria-label="2 / 5">
                                <div class="brand__image image">
                                    <img src="assets/images/brand/brand-image2.png" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" style="width: 210px; margin-right: 30px;" role="group" aria-label="3 / 5">
                                <div class="brand__image image">
                                    <img src="assets/images/brand/brand-image3.png" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="3" style="width: 210px; margin-right: 30px;" role="group" aria-label="4 / 5">
                                <div class="brand__image image">
                                    <img src="assets/images/brand/brand-image4.png" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="4" style="width: 210px; margin-right: 30px;" role="group" aria-label="5 / 5">
                                <div class="brand__image image">
                                    <img src="assets/images/brand/brand-image5.png" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__image image">
                                    <img src="assets/images/clients/icta.png" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__image image">
                                    <img src="assets/images/clients/mrm.png" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__image image">
                                    <img src="assets/images/clients/equity.png" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__image image">
                                    <img src="assets/images/clients/safaricom.svg" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__image image">
                                    <img src="assets/images/clients/nrb.svg" alt="image">
                                </div>
                            </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 210px; margin-right: 30px;" role="group" aria-label="1 / 5">
                                <div class="brand__image image">
                                    <img src="assets/images/brand/brand-image1.png" alt="image">
                                </div>
                            </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 210px; margin-right: 30px;" role="group" aria-label="2 / 5">
                                <div class="brand__image image">
                                    <img src="assets/images/brand/brand-image2.png" alt="image">
                                </div>
                            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="width: 210px; margin-right: 30px;" role="group" aria-label="3 / 5">
                                <div class="brand__image image">
                                    <img src="assets/images/brand/brand-image3.png" alt="image">
                                </div>
                            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" style="width: 210px; margin-right: 30px;" role="group" aria-label="4 / 5">
                                <div class="brand__image image">
                                    <img src="assets/images/brand/brand-image4.png" alt="image">
                                </div>
                            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="4" role="group" aria-label="5 / 5" style="width: 210px; margin-right: 30px;">
                                <div class="brand__image image">
                                    <img src="assets/images/brand/brand-image5.png" alt="image">
                                </div>
                            </div></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </div>
        </section>

        <!-- End Client’s Section -->

        <!-- Team area start here -->
        <section class="team-area pt-120 pb-120">
            <div class="container">
                <div class="section-header text-center mb-60">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <svg class="me-1" width="20" height="12" viewBox="0 0 20 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.75" y="0.747803" width="18.5" height="10.5" rx="5.25" stroke="#3C72FC"
                                stroke-width="1.5" />
                            <mask id="path-2-inside-1_687_602" fill="white">
                                <path
                                    d="M3 5.9978C3 3.78866 4.79086 1.9978 7 1.9978H13C15.2091 1.9978 17 3.78866 17 5.9978C17 8.20694 15.2091 9.9978 13 9.9978H7C4.79086 9.9978 3 8.20694 3 5.9978Z" />
                            </mask>
                            <path
                                d="M3 5.9978C3 2.96024 5.46243 0.497803 8.5 0.497803H11.5C14.5376 0.497803 17 2.96024 17 5.9978C17 4.61709 15.2091 3.4978 13 3.4978H7C4.79086 3.4978 3 4.61709 3 5.9978ZM17 5.9978C17 9.03537 14.5376 11.4978 11.5 11.4978H8.5C5.46243 11.4978 3 9.03537 3 5.9978C3 7.37851 4.79086 8.4978 7 8.4978H13C15.2091 8.4978 17 7.37851 17 5.9978ZM3 9.9978V1.9978V9.9978ZM17 1.9978V9.9978V1.9978Z"
                                fill="#3C72FC" mask="url(#path-2-inside-1_687_602)" />
                        </svg>
                        OUR team
                    </h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Our Leadership Team</h2>
                </div>
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="team__item">
                            <div class="image">
                                <img src="assets/images/team/team-image1.jpg" alt="image">
                            </div>
                            <div class="team__content">
                                <h4><a class="text-white" href="team-details.html">Kawser Ahmed</a></h4>
                                <span class="text-white">Web Designer</span>
                            </div>
                            <div class="team__share">
                                <ul>
                                    <li>
                                        <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/konvergenz-network-solutions/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                                <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <div class="team__item">
                            <div class="image">
                                <img src="assets/images/team/team-image2.jpg" alt="image">
                            </div>
                            <div class="team__content">
                                <h4><a class="text-white" href="team-details.html">Karniz Fatema</a></h4>
                                <span class="text-white">Customer Support</span>
                            </div>
                            <div class="team__share">
                                <ul>
                                    <li>
                                        <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/konvergenz-network-solutions/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                                <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms"
                        data-wow-duration="1500ms">
                        <div class="team__item">
                            <div class="image">
                                <img src="assets/images/team/team-image3.jpg" alt="image">
                            </div>
                            <div class="team__content">
                                <h4><a class="text-white" href="team-details.html">Alex Pranto</a></h4>
                                <span class="text-white">UI/UX Designer</span>
                            </div>
                            <div class="team__share">
                                <ul>
                                    <li>
                                        <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/konvergenz-network-solutions/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                                <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team area end here -->

        <!-- Faq area start here -->
        <section class="faq-area sub-bg pt-120 pb-120">
            <div class="faq__shape">
                <img class="sway__animationX" src="assets/images/shape/faq-shape.png" alt="shape">
            </div>
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-5 pe-2 pe-lg-5">
                        <div class="faq__image image wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="faq__line sway__animation">
                                <img src="assets/images/shape/faq-line.png" alt="image">
                            </div>
                            <img src="assets/images/faq/faq-image.png" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-7 mt-60">
                        <div class="section-header mb-40">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <svg class="me-1" width="20" height="12" viewBox="0 0 20 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.747803" width="18.5" height="10.5" rx="5.25" stroke="#3C72FC"
                                        stroke-width="1.5" />
                                    <mask id="path-2-inside-1_1120_294" fill="white">
                                        <path
                                            d="M3 5.9978C3 3.78866 4.79086 1.9978 7 1.9978H13C15.2091 1.9978 17 3.78866 17 5.9978C17 8.20694 15.2091 9.9978 13 9.9978H7C4.79086 9.9978 3 8.20694 3 5.9978Z" />
                                    </mask>
                                    <path
                                        d="M3 5.9978C3 2.96024 5.46243 0.497803 8.5 0.497803H11.5C14.5376 0.497803 17 2.96024 17 5.9978C17 4.61709 15.2091 3.4978 13 3.4978H7C4.79086 3.4978 3 4.61709 3 5.9978ZM17 5.9978C17 9.03537 14.5376 11.4978 11.5 11.4978H8.5C5.46243 11.4978 3 9.03537 3 5.9978C3 7.37851 4.79086 8.4978 7 8.4978H13C15.2091 8.4978 17 7.37851 17 5.9978ZM3 9.9978V1.9978V9.9978ZM17 1.9978V9.9978V1.9978Z"
                                        fill="#3C72FC" mask="url(#path-2-inside-1_1120_294)" />
                                </svg>
                                FAQ
                            </h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Most Common
                                Question?</h2>
                        </div>
                        <div class="faq__item">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="00ms"
                                    data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Where should I incorporate my business?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>It is a long established fact that a reader be distracted by
                                                the readable content of a page when looking a its layout.
                                                Many desktop publishing packages and web page editors now use Lorem
                                                Ipsum
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="200ms"
                                    data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            What happens my free trial?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>It is a long established fact that a reader be distracted by
                                                the readable content of a page when looking a its layout.
                                                Many desktop publishing packages and web page editors now use Lorem
                                                Ipsum
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="400ms"
                                    data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingthree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsethree"
                                            aria-expanded="false" aria-controls="collapsethree">
                                            What is included in your services?
                                        </button>
                                    </h2>
                                    <div id="collapsethree" class="accordion-collapse collapse"
                                        aria-labelledby="headingthree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>It is a long established fact that a reader be distracted by
                                                the readable content of a page when looking a its layout.
                                                Many desktop publishing packages and web page editors now use Lorem
                                                Ipsum
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="600ms"
                                    data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            What type of company is measured?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>It is a long established fact that a reader be distracted by
                                                the readable content of a page when looking a its layout.
                                                Many desktop publishing packages and web page editors now use Lorem
                                                Ipsum
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Faq area end here -->

        <!-- Case area start here -->
        <section class="case-two-area secondary-bg pt-120">
            <div class="case-two__bg">
                <img src="assets/images/bg/case-two-bg.png" alt="image">
            </div>
            <div class="container">
                <div class="d-flex gap-4 flex-wrap align-items-center justify-content-between mb-60">
                    <div class="section-header">
                        <h5 class="wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <svg class="me-1" width="20" height="12" viewBox="0 0 20 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.75" y="0.747803" width="18.5" height="10.5" rx="5.25" stroke="#3C72FC"
                                    stroke-width="1.5" />
                                <mask id="path-2-inside-1_1120_297" fill="white">
                                    <path
                                        d="M3 5.9978C3 3.78866 4.79086 1.9978 7 1.9978H13C15.2091 1.9978 17 3.78866 17 5.9978C17 8.20694 15.2091 9.9978 13 9.9978H7C4.79086 9.9978 3 8.20694 3 5.9978Z" />
                                </mask>
                                <path
                                    d="M3 5.9978C3 2.96024 5.46243 0.497803 8.5 0.497803H11.5C14.5376 0.497803 17 2.96024 17 5.9978C17 4.61709 15.2091 3.4978 13 3.4978H7C4.79086 3.4978 3 4.61709 3 5.9978ZM17 5.9978C17 9.03537 14.5376 11.4978 11.5 11.4978H8.5C5.46243 11.4978 3 9.03537 3 5.9978C3 7.37851 4.79086 8.4978 7 8.4978H13C15.2091 8.4978 17 7.37851 17 5.9978ZM3 9.9978V1.9978V9.9978ZM17 1.9978V9.9978V1.9978Z"
                                    fill="#3C72FC" mask="url(#path-2-inside-1_1120_297)" />
                            </svg>
                            FROM OUR CASE studies
                        </h5>
                        <h2 class="text-white wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                            We Delivered Best Solution</h2>
                    </div>
                    <div class="arry-btn  d-flex gap-3 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <button class="arry-prev case__arry-prev"><i class="fa-light fa-chevron-left"></i></button>
                        <button class="arry-next case__arry-next active"><i
                                class="fa-light fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="case-two__container">
                <div class="swiper case-two__slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="case-two__item">
                                <div class="image case-two__image">
                                    <img src="assets/images/case/case-two-image1.jpg" alt="image">
                                </div>
                                <div class="case-two__content">
                                    <span>Solution</span>
                                    <h4><a href="case-details.html" class="text-white">IT Management</a></h4>
                                </div>
                                <a href="case-details.html" class="case-two__btn">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="case-two__item">
                                <div class="image case-two__image">
                                    <img src="assets/images/case/case-two-image2.jpg" alt="image">
                                </div>
                                <div class="case-two__content">
                                    <span>Technology</span>
                                    <h4><a href="case-details.html" class="text-white">Web Development</a></h4>
                                </div>
                                <a href="case-details.html" class="case-two__btn">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="case-two__item">
                                <div class="image case-two__image">
                                    <img src="assets/images/case/case-two-image3.jpg" alt="image">
                                </div>
                                <div class="case-two__content">
                                    <span>Security</span>
                                    <h4><a href="case-details.html" class="text-white">Network Security</a></h4>
                                </div>
                                <a href="case-details.html" class="case-two__btn">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="case-two__item">
                                <div class="image case-two__image">
                                    <img src="assets/images/case/case-two-image4.jpg" alt="image">
                                </div>
                                <div class="case-two__content">
                                    <span>Technology</span>
                                    <h4><a href="case-details.html" class="text-white">Platform Integration</a></h4>
                                </div>
                                <a href="case-details.html" class="case-two__btn">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Case area end here -->

        <!-- Testimonial area start here -->
        <section class="testimonial-two-area pb-120">
            <div class="container">
                <div class="section-header text-center mb-40">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <svg class="me-1" width="20" height="12" viewBox="0 0 20 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.75" y="0.75" width="18.5" height="10.5" rx="5.25" stroke="#3C72FC"
                                stroke-width="1.5" />
                            <mask id="path-2-inside-1_869_295" fill="white">
                                <path
                                    d="M3 6C3 3.79086 4.79086 2 7 2H13C15.2091 2 17 3.79086 17 6C17 8.20914 15.2091 10 13 10H7C4.79086 10 3 8.20914 3 6Z" />
                            </mask>
                            <path
                                d="M3 6C3 2.96243 5.46243 0.5 8.5 0.5H11.5C14.5376 0.5 17 2.96243 17 6C17 4.61929 15.2091 3.5 13 3.5H7C4.79086 3.5 3 4.61929 3 6ZM17 6C17 9.03757 14.5376 11.5 11.5 11.5H8.5C5.46243 11.5 3 9.03757 3 6C3 7.38071 4.79086 8.5 7 8.5H13C15.2091 8.5 17 7.38071 17 6ZM3 10V2V10ZM17 2V10V2Z"
                                fill="#3C72FC" mask="url(#path-2-inside-1_869_295)" />
                        </svg>
                        Testimonials
                    </h5>
                    <h2 class="wow fadeInUp text-white" data-wow-delay="200ms" data-wow-duration="1500ms">What Our
                        Client’s Say
                        About Us</h2>
                </div>
                <div class="swiper testimonial-two__slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-two__item">
                                <div class="star mb-10">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star disable"></i>
                                </div>
                                <p class="mb-30">“ Consectetur adipiscing elit. Integer nunc viverra laoreet est the is
                                    porta
                                    pretium metus
                                    aliquam eget maecenas porta
                                    is nunc nul viverra Aenean pulvinar maximus leo ”</p>
                                <div class="d-flex align-items-center gap-3">
                                    <img src="assets/images/testimonial/testimonial-two-image1.png" alt="image">
                                    <div class="con">
                                        <h4>Alex Rony</h4>
                                        <span>Engineering</span>
                                    </div>
                                </div>
                                <svg class="coma" width="50" height="37" viewBox="0 0 50 37" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0V37L18.75 18.5V0H0ZM31.25 0V37L50 18.5V0H31.25Z" fill="#3C72FC" />
                                </svg>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-two__item">
                                <div class="star mb-10">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star disable"></i>
                                </div>
                                <p class="mb-30">“ Consectetur adipiscing elit. Integer nunc viverra laoreet est the is
                                    porta
                                    pretium metus
                                    aliquam eget maecenas porta
                                    is nunc nul viverra Aenean pulvinar maximus leo ”</p>
                                <div class="d-flex align-items-center gap-3">
                                    <img src="assets/images/testimonial/testimonial-two-image2.png" alt="image">
                                    <div class="con">
                                        <h4>Suborna Tarchera</h4>
                                        <span>UI/UX Designer</span>
                                    </div>
                                </div>
                                <svg class="coma" width="50" height="37" viewBox="0 0 50 37" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0V37L18.75 18.5V0H0ZM31.25 0V37L50 18.5V0H31.25Z" fill="#3C72FC" />
                                </svg>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-two__item">
                                <div class="star mb-10">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star disable"></i>
                                </div>
                                <p class="mb-30">“ Consectetur adipiscing elit. Integer nunc viverra laoreet est the is
                                    porta
                                    pretium metus
                                    aliquam eget maecenas porta
                                    is nunc nul viverra Aenean pulvinar maximus leo ”</p>
                                <div class="d-flex align-items-center gap-3">
                                    <img src="assets/images/testimonial/testimonial-two-image3.png" alt="image">
                                    <div class="con">
                                        <h4>Kawser Ahmed</h4>
                                        <span>Web Designer</span>
                                    </div>
                                </div>
                                <svg class="coma" width="50" height="37" viewBox="0 0 50 37" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0V37L18.75 18.5V0H0ZM31.25 0V37L50 18.5V0H31.25Z" fill="#3C72FC" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-40">
                    <div class="dot testimonial__dot"></div>
                </div>
            </div>
        </section>
        <!-- Testimonial area end here -->

        <!-- Blog area start here -->
        <section class="blog-two-area pb-120">
            <div class="container">
                <div class="d-flex flex-wrap gap-4 align-items-center justify-content-between mb-60">
                    <div class="section-header">
                        <h5 class="wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <svg class="me-1" width="20" height="12" viewBox="0 0 20 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.75" y="0.748047" width="18.5" height="10.5" rx="5.25" stroke="#3C72FC"
                                    stroke-width="1.5" />
                                <mask id="path-2-inside-1_1120_300" fill="white">
                                    <path
                                        d="M3 5.99805C3 3.78891 4.79086 1.99805 7 1.99805H13C15.2091 1.99805 17 3.78891 17 5.99805C17 8.20719 15.2091 9.99805 13 9.99805H7C4.79086 9.99805 3 8.20719 3 5.99805Z" />
                                </mask>
                                <path
                                    d="M3 5.99805C3 2.96048 5.46243 0.498047 8.5 0.498047H11.5C14.5376 0.498047 17 2.96048 17 5.99805C17 4.61734 15.2091 3.49805 13 3.49805H7C4.79086 3.49805 3 4.61734 3 5.99805ZM17 5.99805C17 9.03561 14.5376 11.498 11.5 11.498H8.5C5.46243 11.498 3 9.03561 3 5.99805C3 7.37876 4.79086 8.49805 7 8.49805H13C15.2091 8.49805 17 7.37876 17 5.99805ZM3 9.99805V1.99805V9.99805ZM17 1.99805V9.99805V1.99805Z"
                                    fill="#3C72FC" mask="url(#path-2-inside-1_1120_300)" />
                            </svg>
                            Blog & news
                        </h5>
                        <h2 class="wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">Explore Blogs and
                            News</h2>
                    </div>
                    <a href="blog.html" class="btn-one wow fadeInUp" data-wow-delay="200ms"
                        data-wow-duration="1500ms">View All
                        News <i class="fa-regular fa-arrow-right-long"></i></a>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="blog-two__grid-item">
                            <a href="blog-details.html" class="blog__image d-block image">
                                <img src="assets/images/blog/blog-two-grid-image1.jpg" alt="image">
                                <div class="blog-tag">
                                    <h3 class="text-white">10</h3>
                                    <span class="text-white">Dec</span>
                                </div>
                            </a>
                            <div class="blog__content">
                                <ul class="blog-info mb-20">
                                    <li>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_880_270)">
                                                <path
                                                    d="M8.05666 18.75H8.05504C7.46832 18.7495 6.91657 18.5207 6.50187 18.1052L0.660341 12.2553C-0.194072 11.3994 -0.194072 10.0065 0.660341 9.15058L8.53478 1.26102C9.3463 0.44792 10.426 0 11.575 0H16.5709C17.7824 0 18.7682 0.985546 18.7682 2.19726V7.17785C18.7682 8.32602 18.3208 9.40532 17.5084 10.2167L9.60951 18.1074C9.19455 18.5218 8.64306 18.75 8.05666 18.75ZM11.575 1.46484C10.8179 1.46484 10.1064 1.75998 9.57163 2.29579L1.69707 10.1853C1.41222 10.4708 1.41222 10.9349 1.69707 11.2203L7.53857 17.0702C7.6767 17.2086 7.86051 17.285 8.05619 17.2851H8.05677C8.1529 17.2854 8.24812 17.2666 8.33694 17.2299C8.42577 17.1931 8.50643 17.1391 8.57427 17.071L16.4732 9.18046C17.0086 8.6458 17.3034 7.93447 17.3034 7.17788V2.19726C17.3034 1.79341 16.9748 1.46484 16.5709 1.46484H11.575ZM13.458 7.43408C12.2465 7.43408 11.2608 6.44853 11.2608 5.23681C11.2608 4.0251 12.2465 3.03955 13.458 3.03955C14.6696 3.03955 15.6553 4.0251 15.6553 5.23681C15.6553 6.44853 14.6696 7.43408 13.458 7.43408ZM13.458 4.50439C13.0542 4.50439 12.7256 4.83296 12.7256 5.23681C12.7256 5.64067 13.0542 5.96924 13.458 5.96924C13.862 5.96924 14.1905 5.64067 14.1905 5.23681C14.1905 4.83296 13.862 4.50439 13.458 4.50439Z"
                                                    fill="#3C72FC" />
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <a href="#0">Technology</a>
                                    </li>
                                    <li>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_615_71)">
                                                <path
                                                    d="M18.752 14.443C20.6847 11.7314 20.3893 8.01637 17.7495 5.59641C16.5434 4.49074 15.0057 3.80242 13.3448 3.6102C13.3344 3.59727 13.3236 3.58479 13.3122 3.57277C11.8673 2.0718 9.79133 1.21094 7.61672 1.21094C3.47848 1.21094 0 4.29426 0 8.24219C0 9.62637 0.429961 10.9533 1.24672 12.0993L0.105742 15.6815C0.0706615 15.7916 0.0689221 15.9096 0.100743 16.0207C0.132563 16.1318 0.196522 16.231 0.284576 16.3058C0.37263 16.3807 0.480845 16.4278 0.595611 16.4413C0.710377 16.4548 0.826568 16.434 0.92957 16.3816L4.39937 14.6173C5.11195 14.9241 5.86758 15.1255 6.65008 15.2171C8.15953 16.8044 10.2467 17.6172 12.382 17.6172C13.492 17.6172 14.598 17.391 15.5992 16.961L19.0692 18.7254C19.1514 18.7673 19.2424 18.7891 19.3346 18.7891C19.73 18.7891 20.0135 18.4037 19.893 18.0253L18.752 14.443ZM4.63586 13.4383C4.5549 13.3999 4.46621 13.3805 4.37659 13.3817C4.28697 13.3829 4.19883 13.4047 4.11895 13.4453L1.64758 14.702L2.45461 12.1681C2.48356 12.0773 2.48989 11.9807 2.47305 11.8869C2.45622 11.793 2.41673 11.7047 2.35801 11.6295C1.58199 10.6362 1.1718 9.46488 1.1718 8.24219C1.1718 5.01133 4.06297 2.38281 7.61672 2.38281C9.04781 2.38281 10.4255 2.81637 11.543 3.59711C7.77945 3.97555 4.76531 6.91516 4.76531 10.5859C4.76531 11.7277 5.05797 12.8268 5.60973 13.8116C5.276 13.7123 4.95042 13.5876 4.63586 13.4383ZM15.8798 15.789C15.7999 15.7484 15.7118 15.7267 15.6222 15.7254C15.5325 15.7242 15.4438 15.7436 15.3629 15.7821C14.4494 16.216 13.4187 16.4453 12.382 16.4453C8.82828 16.4453 5.93711 13.8168 5.93711 10.5859C5.93711 7.35508 8.82828 4.72656 12.382 4.72656C15.9358 4.72656 18.827 7.35508 18.827 10.5859C18.827 11.8086 18.4168 12.9799 17.6407 13.9732C17.582 14.0484 17.5425 14.1367 17.5257 14.2306C17.5089 14.3244 17.5152 14.421 17.5441 14.5118L18.3511 17.0457L15.8798 15.789Z"
                                                    fill="#3C72FC" />
                                                <path
                                                    d="M9.99939 11.1719C10.323 11.1719 10.5853 10.9095 10.5853 10.5859C10.5853 10.2623 10.323 10 9.99939 10C9.67579 10 9.41345 10.2623 9.41345 10.5859C9.41345 10.9095 9.67579 11.1719 9.99939 11.1719Z"
                                                    fill="#3C72FC" />
                                                <path
                                                    d="M12.343 11.1719C12.6666 11.1719 12.929 10.9095 12.929 10.5859C12.929 10.2623 12.6666 10 12.343 10C12.0194 10 11.7571 10.2623 11.7571 10.5859C11.7571 10.9095 12.0194 11.1719 12.343 11.1719Z"
                                                    fill="#3C72FC" />
                                                <path
                                                    d="M14.6866 11.1719C15.0102 11.1719 15.2726 10.9095 15.2726 10.5859C15.2726 10.2623 15.0102 10 14.6866 10C14.363 10 14.1007 10.2623 14.1007 10.5859C14.1007 10.9095 14.363 11.1719 14.6866 11.1719Z"
                                                    fill="#3C72FC" />
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <a href="#0">0 Comments</a>
                                    </li>
                                </ul>
                                <h3><a href="blog-details.html" class="primary-hover">Keep Your Business Safe & Ensure
                                        High
                                        Availability.</a></h3>
                                <p class="mt-10">Consequat Quisque eget congue velit in OF cursus leo sodales IS the
                                    euismod quis
                                    sapien euismod</p>
                                <div class="about__info justify-content-between flex-wrap gap-3 mt-25">
                                    <div class="d-flex gap-2 align-items-center">
                                        <img src="assets/images/blog/admin1.png" alt="image">
                                        <div class="info">
                                            <a href="#0" class="primary-color">By Admin</a>
                                            <h5>Alex Rony</h5>
                                        </div>
                                    </div>
                                    <a href="blog-details-2.html" class="btn-one">Read More <i
                                            class="fa-regular fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog-two__list-item mb-30 wow fadeInUp" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <a href="blog-details.html" class="blog__image d-block image">
                                <img src="assets/images/blog/blog-two-list-image1.jpg" alt="image">
                                <div class="blog-tag">
                                    <h3 class="text-white">15</h3>
                                    <span class="text-white">Dec</span>
                                </div>
                            </a>
                            <div class="blog__content">
                                <ul class="blog-info mb-20">
                                    <li>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_880_270)">
                                                <path
                                                    d="M8.05666 18.75H8.05504C7.46832 18.7495 6.91657 18.5207 6.50187 18.1052L0.660341 12.2553C-0.194072 11.3994 -0.194072 10.0065 0.660341 9.15058L8.53478 1.26102C9.3463 0.44792 10.426 0 11.575 0H16.5709C17.7824 0 18.7682 0.985546 18.7682 2.19726V7.17785C18.7682 8.32602 18.3208 9.40532 17.5084 10.2167L9.60951 18.1074C9.19455 18.5218 8.64306 18.75 8.05666 18.75ZM11.575 1.46484C10.8179 1.46484 10.1064 1.75998 9.57163 2.29579L1.69707 10.1853C1.41222 10.4708 1.41222 10.9349 1.69707 11.2203L7.53857 17.0702C7.6767 17.2086 7.86051 17.285 8.05619 17.2851H8.05677C8.1529 17.2854 8.24812 17.2666 8.33694 17.2299C8.42577 17.1931 8.50643 17.1391 8.57427 17.071L16.4732 9.18046C17.0086 8.6458 17.3034 7.93447 17.3034 7.17788V2.19726C17.3034 1.79341 16.9748 1.46484 16.5709 1.46484H11.575ZM13.458 7.43408C12.2465 7.43408 11.2608 6.44853 11.2608 5.23681C11.2608 4.0251 12.2465 3.03955 13.458 3.03955C14.6696 3.03955 15.6553 4.0251 15.6553 5.23681C15.6553 6.44853 14.6696 7.43408 13.458 7.43408ZM13.458 4.50439C13.0542 4.50439 12.7256 4.83296 12.7256 5.23681C12.7256 5.64067 13.0542 5.96924 13.458 5.96924C13.862 5.96924 14.1905 5.64067 14.1905 5.23681C14.1905 4.83296 13.862 4.50439 13.458 4.50439Z"
                                                    fill="#3C72FC" />
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <a href="#0">Technology</a>
                                    </li>
                                    <li>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_615_71)">
                                                <path
                                                    d="M18.752 14.443C20.6847 11.7314 20.3893 8.01637 17.7495 5.59641C16.5434 4.49074 15.0057 3.80242 13.3448 3.6102C13.3344 3.59727 13.3236 3.58479 13.3122 3.57277C11.8673 2.0718 9.79133 1.21094 7.61672 1.21094C3.47848 1.21094 0 4.29426 0 8.24219C0 9.62637 0.429961 10.9533 1.24672 12.0993L0.105742 15.6815C0.0706615 15.7916 0.0689221 15.9096 0.100743 16.0207C0.132563 16.1318 0.196522 16.231 0.284576 16.3058C0.37263 16.3807 0.480845 16.4278 0.595611 16.4413C0.710377 16.4548 0.826568 16.434 0.92957 16.3816L4.39937 14.6173C5.11195 14.9241 5.86758 15.1255 6.65008 15.2171C8.15953 16.8044 10.2467 17.6172 12.382 17.6172C13.492 17.6172 14.598 17.391 15.5992 16.961L19.0692 18.7254C19.1514 18.7673 19.2424 18.7891 19.3346 18.7891C19.73 18.7891 20.0135 18.4037 19.893 18.0253L18.752 14.443ZM4.63586 13.4383C4.5549 13.3999 4.46621 13.3805 4.37659 13.3817C4.28697 13.3829 4.19883 13.4047 4.11895 13.4453L1.64758 14.702L2.45461 12.1681C2.48356 12.0773 2.48989 11.9807 2.47305 11.8869C2.45622 11.793 2.41673 11.7047 2.35801 11.6295C1.58199 10.6362 1.1718 9.46488 1.1718 8.24219C1.1718 5.01133 4.06297 2.38281 7.61672 2.38281C9.04781 2.38281 10.4255 2.81637 11.543 3.59711C7.77945 3.97555 4.76531 6.91516 4.76531 10.5859C4.76531 11.7277 5.05797 12.8268 5.60973 13.8116C5.276 13.7123 4.95042 13.5876 4.63586 13.4383ZM15.8798 15.789C15.7999 15.7484 15.7118 15.7267 15.6222 15.7254C15.5325 15.7242 15.4438 15.7436 15.3629 15.7821C14.4494 16.216 13.4187 16.4453 12.382 16.4453C8.82828 16.4453 5.93711 13.8168 5.93711 10.5859C5.93711 7.35508 8.82828 4.72656 12.382 4.72656C15.9358 4.72656 18.827 7.35508 18.827 10.5859C18.827 11.8086 18.4168 12.9799 17.6407 13.9732C17.582 14.0484 17.5425 14.1367 17.5257 14.2306C17.5089 14.3244 17.5152 14.421 17.5441 14.5118L18.3511 17.0457L15.8798 15.789Z"
                                                    fill="#3C72FC" />
                                                <path
                                                    d="M9.99939 11.1719C10.323 11.1719 10.5853 10.9095 10.5853 10.5859C10.5853 10.2623 10.323 10 9.99939 10C9.67579 10 9.41345 10.2623 9.41345 10.5859C9.41345 10.9095 9.67579 11.1719 9.99939 11.1719Z"
                                                    fill="#3C72FC" />
                                                <path
                                                    d="M12.343 11.1719C12.6666 11.1719 12.929 10.9095 12.929 10.5859C12.929 10.2623 12.6666 10 12.343 10C12.0194 10 11.7571 10.2623 11.7571 10.5859C11.7571 10.9095 12.0194 11.1719 12.343 11.1719Z"
                                                    fill="#3C72FC" />
                                                <path
                                                    d="M14.6866 11.1719C15.0102 11.1719 15.2726 10.9095 15.2726 10.5859C15.2726 10.2623 15.0102 10 14.6866 10C14.363 10 14.1007 10.2623 14.1007 10.5859C14.1007 10.9095 14.363 11.1719 14.6866 11.1719Z"
                                                    fill="#3C72FC" />
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <a href="#0">Comments</a>
                                    </li>
                                </ul>
                                <h3><a href="blog-details.html" class="primary-hover">What’s the Holding Back the It
                                        Solution</a></h3>
                                <div class="about__info mt-30">
                                    <div class="d-flex gap-2 align-items-center">
                                        <img src="assets/images/blog/admin2.png" alt="image">
                                        <div class="info">
                                            <a href="#0" class="primary-color">By Admin</a>
                                            <h5>Haven Richards</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-two__list-item wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <a href="blog-details.html" class="blog__image d-block image">
                                <img src="assets/images/blog/blog-two-list-image2.jpg" alt="image">
                                <div class="blog-tag">
                                    <h3 class="text-white">20</h3>
                                    <span class="text-white">Dec</span>
                                </div>
                            </a>
                            <div class="blog__content">
                                <ul class="blog-info mb-20">
                                    <li>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_880_270)">
                                                <path
                                                    d="M8.05666 18.75H8.05504C7.46832 18.7495 6.91657 18.5207 6.50187 18.1052L0.660341 12.2553C-0.194072 11.3994 -0.194072 10.0065 0.660341 9.15058L8.53478 1.26102C9.3463 0.44792 10.426 0 11.575 0H16.5709C17.7824 0 18.7682 0.985546 18.7682 2.19726V7.17785C18.7682 8.32602 18.3208 9.40532 17.5084 10.2167L9.60951 18.1074C9.19455 18.5218 8.64306 18.75 8.05666 18.75ZM11.575 1.46484C10.8179 1.46484 10.1064 1.75998 9.57163 2.29579L1.69707 10.1853C1.41222 10.4708 1.41222 10.9349 1.69707 11.2203L7.53857 17.0702C7.6767 17.2086 7.86051 17.285 8.05619 17.2851H8.05677C8.1529 17.2854 8.24812 17.2666 8.33694 17.2299C8.42577 17.1931 8.50643 17.1391 8.57427 17.071L16.4732 9.18046C17.0086 8.6458 17.3034 7.93447 17.3034 7.17788V2.19726C17.3034 1.79341 16.9748 1.46484 16.5709 1.46484H11.575ZM13.458 7.43408C12.2465 7.43408 11.2608 6.44853 11.2608 5.23681C11.2608 4.0251 12.2465 3.03955 13.458 3.03955C14.6696 3.03955 15.6553 4.0251 15.6553 5.23681C15.6553 6.44853 14.6696 7.43408 13.458 7.43408ZM13.458 4.50439C13.0542 4.50439 12.7256 4.83296 12.7256 5.23681C12.7256 5.64067 13.0542 5.96924 13.458 5.96924C13.862 5.96924 14.1905 5.64067 14.1905 5.23681C14.1905 4.83296 13.862 4.50439 13.458 4.50439Z"
                                                    fill="#3C72FC" />
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <a href="#0">Technology</a>
                                    </li>
                                    <li>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_615_71)">
                                                <path
                                                    d="M18.752 14.443C20.6847 11.7314 20.3893 8.01637 17.7495 5.59641C16.5434 4.49074 15.0057 3.80242 13.3448 3.6102C13.3344 3.59727 13.3236 3.58479 13.3122 3.57277C11.8673 2.0718 9.79133 1.21094 7.61672 1.21094C3.47848 1.21094 0 4.29426 0 8.24219C0 9.62637 0.429961 10.9533 1.24672 12.0993L0.105742 15.6815C0.0706615 15.7916 0.0689221 15.9096 0.100743 16.0207C0.132563 16.1318 0.196522 16.231 0.284576 16.3058C0.37263 16.3807 0.480845 16.4278 0.595611 16.4413C0.710377 16.4548 0.826568 16.434 0.92957 16.3816L4.39937 14.6173C5.11195 14.9241 5.86758 15.1255 6.65008 15.2171C8.15953 16.8044 10.2467 17.6172 12.382 17.6172C13.492 17.6172 14.598 17.391 15.5992 16.961L19.0692 18.7254C19.1514 18.7673 19.2424 18.7891 19.3346 18.7891C19.73 18.7891 20.0135 18.4037 19.893 18.0253L18.752 14.443ZM4.63586 13.4383C4.5549 13.3999 4.46621 13.3805 4.37659 13.3817C4.28697 13.3829 4.19883 13.4047 4.11895 13.4453L1.64758 14.702L2.45461 12.1681C2.48356 12.0773 2.48989 11.9807 2.47305 11.8869C2.45622 11.793 2.41673 11.7047 2.35801 11.6295C1.58199 10.6362 1.1718 9.46488 1.1718 8.24219C1.1718 5.01133 4.06297 2.38281 7.61672 2.38281C9.04781 2.38281 10.4255 2.81637 11.543 3.59711C7.77945 3.97555 4.76531 6.91516 4.76531 10.5859C4.76531 11.7277 5.05797 12.8268 5.60973 13.8116C5.276 13.7123 4.95042 13.5876 4.63586 13.4383ZM15.8798 15.789C15.7999 15.7484 15.7118 15.7267 15.6222 15.7254C15.5325 15.7242 15.4438 15.7436 15.3629 15.7821C14.4494 16.216 13.4187 16.4453 12.382 16.4453C8.82828 16.4453 5.93711 13.8168 5.93711 10.5859C5.93711 7.35508 8.82828 4.72656 12.382 4.72656C15.9358 4.72656 18.827 7.35508 18.827 10.5859C18.827 11.8086 18.4168 12.9799 17.6407 13.9732C17.582 14.0484 17.5425 14.1367 17.5257 14.2306C17.5089 14.3244 17.5152 14.421 17.5441 14.5118L18.3511 17.0457L15.8798 15.789Z"
                                                    fill="#3C72FC" />
                                                <path
                                                    d="M9.99939 11.1719C10.323 11.1719 10.5853 10.9095 10.5853 10.5859C10.5853 10.2623 10.323 10 9.99939 10C9.67579 10 9.41345 10.2623 9.41345 10.5859C9.41345 10.9095 9.67579 11.1719 9.99939 11.1719Z"
                                                    fill="#3C72FC" />
                                                <path
                                                    d="M12.343 11.1719C12.6666 11.1719 12.929 10.9095 12.929 10.5859C12.929 10.2623 12.6666 10 12.343 10C12.0194 10 11.7571 10.2623 11.7571 10.5859C11.7571 10.9095 12.0194 11.1719 12.343 11.1719Z"
                                                    fill="#3C72FC" />
                                                <path
                                                    d="M14.6866 11.1719C15.0102 11.1719 15.2726 10.9095 15.2726 10.5859C15.2726 10.2623 15.0102 10 14.6866 10C14.363 10 14.1007 10.2623 14.1007 10.5859C14.1007 10.9095 14.363 11.1719 14.6866 11.1719Z"
                                                    fill="#3C72FC" />
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <a href="#0">Comments</a>
                                    </li>
                                </ul>
                                <h3><a href="blog-details.html" class="primary-hover">Powerful Server and Platform</a>
                                </h3>
                                <div class="about__info mt-30">
                                    <div class="d-flex gap-2 align-items-center">
                                        <img src="assets/images/blog/admin3.png" alt="image">
                                        <div class="info">
                                            <a href="#0" class="primary-color">By Admin</a>
                                            <h5>Prince Sakib</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog area end here -->

        <!-- Quote area start here -->
        <section class="quote-area">
            <div class="container">
                <div class="quote__wrp gradient-bg">
                    <div class="counter__shape wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <img src="assets/images/shape/quote-shape.png" alt="shape">
                    </div>
                    <div class="quote__shape bobble__animation">
                        <img src="assets/images/shape/quote-shape2.png" alt="shape">
                    </div>
                    <div class="d-flex flex-wrap gap-4 align-items-center justify-content-between">
                        <div class="section-header">
                            <h5 class="wow fadeInLeft text-white" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <svg class="me-1" width="28" height="12" viewBox="0 0 28 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.75" width="18.5" height="10.5" rx="5.25" stroke="white"
                                        stroke-width="1.5" />
                                    <rect x="8.75" y="0.75" width="18.5" height="10.5" rx="5.25" fill="white"
                                        stroke="white" stroke-width="1.5" />
                                </svg>
                                GET IN TOUCH
                            </h5>
                            <h2 class="wow fadeInLeft text-white" data-wow-delay="200ms" data-wow-duration="1500ms">We
                                Take Care of
                                Your <br> Technology</h2>
                        </div>
                        <a href="contact.html" class="btn-one wow fadeInUp" data-wow-delay="200ms"
                            data-wow-duration="1500ms">get A
                            Quote <i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Quote area end here -->
    </main>


    
@endsection