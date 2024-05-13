@extends('fe.main')
@section('content')

<style>
.square {
    height: 100px;
    width: 100px;
}
</style>

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
        <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">About Us</h2>
        <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
            <a href="/">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>About Us 
                </span>
        </div>
    </div>
</section>


<section class="team-area pt-120 pb-120">
    <div class="container">
        <div class="section-header text-center mb-60">
            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">Our Partnerships</h2>
        </div>
        <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-6">
                <div class="tea__item">
                    <div class="image">
                        <img src="assets/images/partners/sailpoint.svg" class="square" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6">
                <div class="tea__item">
                    <div class="image">
                        <img src="assets/images/partners/redhat.svg" class="square" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6">
                <div class="tea__item">
                    <div class="image">
                        <img src="assets/images/partners/avaya.svg" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6">
                <div class="tea__item">
                    <div class="image">
                        <img src="assets/images/partners/dell.svg" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6">
                <div class="tea__item">
                    <div class="image">
                        <img src="assets/images/partners/ibm.svg" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" style="margin-bottom: 3px;">
                <div class="tea__item">
                    <div class="image">
                        <img src="assets/images/partners/huawei.svg" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" style="margin-bottom: 3px;">
                <div class="tea__item">
                    <div class="image">
                        <img src="assets/images/partners/check-point.svg" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" style="margin-bottom: 3px;">
                <div class="tea__item">
                    <div class="image">
                        <img src="assets/images/partners/zscaler-logo.svg" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" style="margin-bottom: 3px;">
                <div class="tea__item">
                    <div class="image">
                        <img src="assets/images/partners/microsoft.svg" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="team-area pt-120 pb-120">
    <div class="container">
        <div class="section-header text-center mb-60">
            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">Our Leadership Team</h2>
        </div>
        <div class="row g-4">
            <div class="col-xl-6 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                <div class="team__item">
                    <div class="image">
                        <img src="assets/images/team/team-image1.jpg" alt="image">
                    </div>
                    <div class="team__content">
                        <h4><a class="text-white" href="team-details.html">Issa Sheikh</a></h4>
                        <span class="text-white">Commercial Director</span>
                    </div>
                    <div class="team__share">
                        <ul>
                            <li>
                                <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                        <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                <div class="team__item">
                    <div class="image">
                        <img src="assets/images/team/team-image3.jpg" alt="image">
                    </div>
                    <div class="team__content">
                        <h4><a class="text-white" href="team-details.html">Abdullahi Sheikh</a></h4>
                        <span class="text-white">Chief Executive Officer</span>
                    </div>
                    <div class="team__share">
                        <ul>
                            <li>
                                <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                        <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                    </div>
                </div>
            </div>
            <div style="height=50px;"  class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                <div class="team__item">
                    <div class="image">
                        <img src="assets/images/team/team-image3.jpg" alt="image">
                    </div>
                    <div class="team__content">
                        <h4><a class="text-white" href="team-details.html">Gerald Similu</a></h4>
                        <span class="text-white">Chief Technology Officer</span>
                    </div>
                    <div class="team__share">
                        <ul>
                            <li>
                                <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                        <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                <div class="team__item">
                    <div class="image">
                        <img src="assets/images/team/team-image3.jpg" alt="image">
                    </div>
                    <div class="team__content">
                        <h4><a class="text-white" href="team-details.html">Khamis Dhiriye</a></h4>
                        <span class="text-white">Chief Finance Officer</span>
                    </div>
                    <div class="team__share">
                        <ul>
                            <li>
                                <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                        <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                <div class="team__item">
                    <div class="image">
                        <img src="assets/images/team/team-image3.jpg" alt="image">
                    </div>
                    <div class="team__content">
                        <h4><a class="text-white" href="team-details.html">Ali Hassan</a></h4>
                        <span class="text-white">Chief Operational Officer</span>
                    </div>
                    <div class="team__share">
                        <ul>
                            <li>
                                <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                        <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                <div class="team__item">
                    <div class="image">
                        <img src="assets/images/team/team-image3.jpg" alt="image">
                    </div>
                    <div class="team__content">
                        <h4><a class="text-white" href="team-details.html">Gerald Similu</a></h4>
                        <span class="text-white">Chief Technology Officer</span>
                    </div>
                    <div class="team__share">
                        <ul>
                            <li>
                                <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                        <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection