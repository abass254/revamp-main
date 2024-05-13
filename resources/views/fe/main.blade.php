<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from gramentheme.com/html/gratech/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 03:31:05 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revamp</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="https://konvergenz.co.ke/wp-content/uploads/2021/04/cropped-Konvergenz-Icon-01-32x32.png">
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Mean menu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- All min css -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">



    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6LZP4NC9JW"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-6LZP4NC9JW');
    </script>

</head>

<style>
    .image-container::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Adjust the alpha value to make it darker or lighter */
    }
</style>

<body>

    <!-- Preloader area start -->
    <div class="loading">
        <span class="text-capitalize">K</span>
        <span>a</span>
        <span>r</span>
        <span>i</span>
        <span>b</span>
        <span>u</span>
    </div>
    <div id="preloader">
    </div>
    <!-- Preloader area end -->

    <!-- Mouse cursor area start here -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Mouse cursor area end here -->

    <!-- Header area start here -->
    @include('fe.nav')
    <!-- Header area end here -->

    <!-- Sidebar area start here -->
    <div id="targetElement" class="sidebar-area sidebar__hide">
        <div class="sidebar__overlay"></div>
        <a href="index.html" class="logo mb-40">
            <img src="assets/images/logo/logo.svg" alt="logo">
        </a>
        <div class="sidebar__search mb-30">
            <input type="text" placeholder="Search...">
            <i class="fa-regular fa-magnifying-glass"></i>
        </div>
        <div class="mobile-menu overflow-hidden"></div>
        <ul class="info pt-40">
            <li><i class="fa-solid primary-color fa-location-dot"></i> <a href="#0">example@example.com</a>
            </li>
            <li class="py-2"><i class="fa-solid primary-color fa-phone-volume"></i> <a
                    href="tel:+208-6666-0112">+208-6666-0112</a>
            </li>
            <li><i class="fa-solid primary-color fa-paper-plane"></i> <a href="#0">info@example.com</a></li>
        </ul>
        <div class="social-icon mt-20">
            <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#0"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.linkedin.com/company/konvergenz-network-solutions/"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#0"><i class="fa-brands fa-youtube"></i></a>
        </div>
        <button id="closeButton" class="text-white"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <!-- Sidebar area end here -->

    <!-- Fullscreen search area start here -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fullscreen search area end here -->

    @yield('content')

    <!-- Footer area start here -->
    <footer class="footer-two-area secondary-bg">
        <div class="footer__shape-regular-left wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
            <img src="assets/images/shape/footer-regular-left.png" alt="shape">
        </div>
        <div class="footer__shape-solid-left wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
            <img class="sway_Y__animation" src="assets/images/shape/footer-solid-left.png" alt="shape">
        </div>
        <div class="footer__shape-solid-right wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
            <img class="sway_Y__animation" src="assets/images/shape/footer-regular-right.png" alt="shape">
        </div>
        <div class="footer__shape-regular-right wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
            <img src="assets/images/shape/footer-solid-right.png" alt="shape">
        </div>
        <div class="footer__shadow-shape">
            <img src="assets/images/shape/footer-shadow-shape.png" alt="shodow">
        </div>
        <div class="container">
            <div class="footer__wrp pt-100 pb-100">
                <div class="footer__item item-big wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <a href="index.html" class="logo mb-30">
                        <img height="60" width="35" src="https://konvergenz.co.ke/wp-content/uploads/2021/11/Konvergenz-Official-Logo.png" alt="logo">
                    </a>
                    <p style="font-size: 20px;">Your Trusted Transformation Partner</p>
                    <div class="case-challenge-list mt-30">
                        <ul class="case-challenge">
                            <li class="mb-3"><i class="fa-solid fa-link"></i> Zero Trust Networks</li>
                            <li class="mb-3"><i class="fa-solid fa-link"></i> Cybersecurity & Resiliency</li>
                            <li class="mb-3"><i class="fa-solid fa-link"></i> Unified Clouds</li>
                            <li class="mb-3"><i class="fa-solid fa-link"></i> Applications & Analytics</li>
                    </div>
                    <div class="social-icon">
                        <a target="_blank" href="https://www.facebook.com/konvergenzke/"><i class="fa-brands fa-facebook-f"></i></a>
                        <a target="_blank" href="https://twitter.com/konvergenz_ke"><i class="fa-brands fa-x"></i></a>
                        <a target="_blank" href="https://www.linkedin.com/company/konvergenz-network-solutions/"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <!-- <div class="footer__item item-sm wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <h3 class="footer-title">IT Solution</h3>
                    <ul>
                        <li><a href="service-details.html"><i class="fa-regular fa-angles-right me-1"></i> IT
                                Management</a></li>
                        <li><a href="service-details.html"><i class="fa-regular fa-angles-right me-1"></i> SEO
                                Optimization</a>
                        </li>
                        <li><a href="service-details.html"><i class="fa-regular fa-angles-right me-1"></i> Web
                                Development</a>
                        </li>
                        <li><a href="service-details.html"><i class="fa-regular fa-angles-right me-1"></i> Cyber
                                Security</a></li>
                        <li><a href="service-details.html"><i class="fa-regular fa-angles-right me-1"></i> Data
                                Security</a></li>
                    </ul>
                </div> -->
                <div class="footer__item item-sm wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <h3 class="footer-title">Quick Link</h3>
                    <ul>
                        <li><a href="/about-us"><i class="fa-regular fa-angles-right me-1"></i>About Konvergenz</a></li>
                        <li><a href="/careers"><i class="fa-regular fa-angles-right me-1"></i>Careers</a>
                        </li>
                        <li><a target="blank" href="https://academy.kns.co.ke"><i class="fa-regular fa-angles-right me-1"></i>Teedu Academy</a>
                        </li>
                        <li><a href="service.html"><i class="fa-regular fa-anges-right me-1"></i></a>
                        </li>
                        <li><a href="service.html"><i class="fa-regular fa-anges-right me-1"></i></a>
                        </li>
                        <li><a href="service.html"><i class="fa-regular fa-anges-right me-1"></i></a>
                        </li>
                        <li><a href="service.html"><i class="fa-regular fa-anges-right me-1"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer__item item-big wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <h3 class="footer-title">Contact Us</h3>
                    <p class="mb-20">18th Floor, 4th Ngong Ave Towers, UpperHill, Nairobi, Kenya 39495</p>
                    <ul class="footer-contact">
                        <li>
                            <i class="fa-regular fa-clock"></i>
                            <div class="info">
                                <h5>
                                    Opening Hours:
                                </h5>
                                <p>Mon - Fri: 8.00 AM - 4.00 PM</p>
                            </div>
                        </li>
                        <li>
                            <i class="fa-duotone fa-phone"></i>
                            <div class="info">
                                <h5>
                                    Phone Call:
                                </h5>
                                <p>+254-709-208000</p>
                            </div>
                        </li>
                        <li>
                            <i class="fa-duotone fa-envelope"></i>
                            <div class="info">
                                <h5>
                                    Mail:
                                </h5>
                                <p>info@kns.co.ke</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="container">
                <div
                    class="d-flex gap-1 flex-wrap align-items-center justify-content-md-between justify-content-center">
                    <p class="wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms">&copy;2024
                        Konvergenz Network Solutions Limited - All rights Reserved</p>
                    <ul class="d-flex align-items-center gap-4 wow fadeInDown" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <li><a href="#0">Terms & Condition</a></li>
                        <li><a href="#0">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer area end here -->

    <!-- Back to top area start here -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to top area end here -->

    <!-- Jquery 3.7.0 Min Js -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap min Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Mean menu Js -->
    <script src="assets/js/meanmenu.js"></script>
    <!-- Swiper bundle min Js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Counterup min Js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Wow min Js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Pace min Js -->
    <script src="assets/js/pace.min.js"></script>
    <!-- Magnific popup min Js -->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!-- Nice select min Js -->
    <script src="assets/js/nice-select.min.js"></script>
    <!-- Isotope pkgd min Js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Waypoints Js -->
    <script src="assets/js/jquery.waypoints.js"></script>
    <!-- Script Js -->
    <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from gramentheme.com/html/gratech/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 03:31:05 GMT -->
</html>