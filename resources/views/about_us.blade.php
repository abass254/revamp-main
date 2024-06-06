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

<section class="service-area pt-120 pb-120">
    <div class="section-header text-center mb-60">
        <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">Who we are</h2>
    </div>
    <div class="service__shape wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
        <img class="sway_Y__animation" src="assets/images/shape/service-bg-shape.png" alt="shape">
    </div>
    <div class="container">
        <div class="row g-4">
        <p class="mb-20 text-center" style="margin-bottom:100px;">Konvergenz Network Solutions (KNS) is  an East African-based local technology firm.  Our experienced and skilled expert team, founded in 2014, offers ICT solutions that ensure customer satisfaction in every project we deliver. In 2020, we launched our 2.0 journey gearing Konvergenz as the champion for Digital Transformational in the region. </p><br>
            <div class="col-lg-5 col-md-4 col-sm-6 wow bounceInUp" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: bounceInUp;">
                <div class="offer__item">
                    <div class="shape-top">
                        <img src="assets/images/shape/offter-item-shape-top.png" alt="shape">
                    </div>
                    <div class="shape-bottom">
                        <img src="assets/images/shape/offter-item-shape-bottom.png" alt="shape">
                    </div>
                    <div class="offer__icon">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 0C10.3961 0 0 5.74724 0 18C0 29.9409 9.99921 36 18 36C31.7268 36 36 23.974 36 18C36 9.18425 29.2535 0 18 0ZM13.826 1.6937C11.948 3.29528 10.389 5.94567 9.38268 9.23386C8.07874 8.46142 6.8811 7.50472 5.81811 6.39213C8.01496 4.08898 10.7929 2.47323 13.826 1.6937ZM5.04567 7.25669C6.23622 8.49685 7.58976 9.55276 9.06378 10.389C8.51102 12.5362 8.18504 14.9173 8.14252 17.4189H1.17638C1.30394 13.6843 2.66457 10.1197 5.04567 7.25669ZM5.04567 28.7433C2.65748 25.8803 1.30394 22.3158 1.17638 18.5811H8.14252C8.18504 21.0898 8.51102 23.4638 9.06378 25.611C7.59685 26.4543 6.24331 27.5032 5.04567 28.7433ZM5.81811 29.615C6.8811 28.5024 8.07874 27.5457 9.38268 26.7732C10.389 30.0543 11.948 32.7118 13.826 34.3134C10.7929 33.5268 8.01496 31.911 5.81811 29.615ZM17.4189 34.7953C14.4 34.4126 11.7992 31.0394 10.3961 26.2063C12.5646 25.1079 14.9598 24.4913 17.4189 24.3992V34.7953ZM17.4189 23.2441C14.8535 23.3291 12.3591 23.9598 10.0984 25.0654C9.62362 23.0811 9.34016 20.8913 9.29764 18.5811H17.4189V23.2441ZM17.4189 17.4189H9.29764C9.34016 15.1087 9.62362 12.9189 10.0984 10.9346C12.3661 12.0402 14.8606 12.6709 17.4189 12.7559V17.4189ZM17.4189 11.6008C14.9528 11.5157 12.5646 10.8921 10.3961 9.7937C11.7992 4.95354 14.4 1.5874 17.4189 1.20472V11.6008ZM30.9543 7.25669C33.3354 10.1197 34.6961 13.6843 34.8236 17.4189H27.8646C27.8221 14.9102 27.4961 12.5362 26.9433 10.389C28.4102 9.54567 29.7638 8.49685 30.9543 7.25669ZM30.1819 6.38504C29.1189 7.49764 27.9213 8.45433 26.6173 9.22677C25.611 5.94567 24.052 3.29528 22.174 1.68661C25.2071 2.47323 27.985 4.08898 30.1819 6.38504ZM18.5811 1.20472C21.6 1.5874 24.2008 4.96063 25.6039 9.7937C23.4354 10.8921 21.0472 11.5087 18.5811 11.6008V1.20472ZM18.5811 12.7559C21.1465 12.6709 23.6409 12.0402 25.9016 10.9346C26.3764 12.9189 26.6598 15.1087 26.7024 17.4189H18.5811V12.7559ZM18.5811 18.5811H26.7024C26.6598 20.8913 26.3764 23.0811 25.9016 25.0654C23.6195 23.9424 21.1233 23.3213 18.5811 23.2441V18.5811ZM18.5811 34.7953V24.3992C21.0472 24.4843 23.4354 25.1079 25.6039 26.2063C24.2008 31.0465 21.6 34.4126 18.5811 34.7953ZM22.174 34.3063C24.052 32.7047 25.611 30.0543 26.6173 26.7661C27.9213 27.5386 29.1189 28.4953 30.1819 29.6079C27.985 31.911 25.2071 33.5268 22.174 34.3063ZM30.9543 28.7433C29.7638 27.5032 28.4102 26.4543 26.9433 25.611C27.4961 23.4638 27.8221 21.0827 27.8646 18.5811H34.8236C34.6961 22.3158 33.3354 25.8803 30.9543 28.7433Z" fill="#3C72FC"></path>
                        </svg>
                    </div>
                    <h4 class="text-dark mt-20">Our Mission</h4>
                    <p>To deliver value to our customers by providing the most reliable ICT solutions, skills and expertise</p>
                </div>
            </div>
            <!-- <div class="col-lg-4 col-md-4 col-sm-6 wow bounceInUp" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: bounceInUp;">
                <div class="offer__item">
                    <div class="shape-top">
                        <img src="assets/images/shape/offter-item-shape-top.png" alt="shape">
                    </div>
                    <div class="shape-bottom">
                        <img src="assets/images/shape/offter-item-shape-bottom.png" alt="shape">
                    </div>
                    <div class="offer__icon">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 0C10.3961 0 0 5.74724 0 18C0 29.9409 9.99921 36 18 36C31.7268 36 36 23.974 36 18C36 9.18425 29.2535 0 18 0ZM13.826 1.6937C11.948 3.29528 10.389 5.94567 9.38268 9.23386C8.07874 8.46142 6.8811 7.50472 5.81811 6.39213C8.01496 4.08898 10.7929 2.47323 13.826 1.6937ZM5.04567 7.25669C6.23622 8.49685 7.58976 9.55276 9.06378 10.389C8.51102 12.5362 8.18504 14.9173 8.14252 17.4189H1.17638C1.30394 13.6843 2.66457 10.1197 5.04567 7.25669ZM5.04567 28.7433C2.65748 25.8803 1.30394 22.3158 1.17638 18.5811H8.14252C8.18504 21.0898 8.51102 23.4638 9.06378 25.611C7.59685 26.4543 6.24331 27.5032 5.04567 28.7433ZM5.81811 29.615C6.8811 28.5024 8.07874 27.5457 9.38268 26.7732C10.389 30.0543 11.948 32.7118 13.826 34.3134C10.7929 33.5268 8.01496 31.911 5.81811 29.615ZM17.4189 34.7953C14.4 34.4126 11.7992 31.0394 10.3961 26.2063C12.5646 25.1079 14.9598 24.4913 17.4189 24.3992V34.7953ZM17.4189 23.2441C14.8535 23.3291 12.3591 23.9598 10.0984 25.0654C9.62362 23.0811 9.34016 20.8913 9.29764 18.5811H17.4189V23.2441ZM17.4189 17.4189H9.29764C9.34016 15.1087 9.62362 12.9189 10.0984 10.9346C12.3661 12.0402 14.8606 12.6709 17.4189 12.7559V17.4189ZM17.4189 11.6008C14.9528 11.5157 12.5646 10.8921 10.3961 9.7937C11.7992 4.95354 14.4 1.5874 17.4189 1.20472V11.6008ZM30.9543 7.25669C33.3354 10.1197 34.6961 13.6843 34.8236 17.4189H27.8646C27.8221 14.9102 27.4961 12.5362 26.9433 10.389C28.4102 9.54567 29.7638 8.49685 30.9543 7.25669ZM30.1819 6.38504C29.1189 7.49764 27.9213 8.45433 26.6173 9.22677C25.611 5.94567 24.052 3.29528 22.174 1.68661C25.2071 2.47323 27.985 4.08898 30.1819 6.38504ZM18.5811 1.20472C21.6 1.5874 24.2008 4.96063 25.6039 9.7937C23.4354 10.8921 21.0472 11.5087 18.5811 11.6008V1.20472ZM18.5811 12.7559C21.1465 12.6709 23.6409 12.0402 25.9016 10.9346C26.3764 12.9189 26.6598 15.1087 26.7024 17.4189H18.5811V12.7559ZM18.5811 18.5811H26.7024C26.6598 20.8913 26.3764 23.0811 25.9016 25.0654C23.6195 23.9424 21.1233 23.3213 18.5811 23.2441V18.5811ZM18.5811 34.7953V24.3992C21.0472 24.4843 23.4354 25.1079 25.6039 26.2063C24.2008 31.0465 21.6 34.4126 18.5811 34.7953ZM22.174 34.3063C24.052 32.7047 25.611 30.0543 26.6173 26.7661C27.9213 27.5386 29.1189 28.4953 30.1819 29.6079C27.985 31.911 25.2071 33.5268 22.174 34.3063ZM30.9543 28.7433C29.7638 27.5032 28.4102 26.4543 26.9433 25.611C27.4961 23.4638 27.8221 21.0827 27.8646 18.5811H34.8236C34.6961 22.3158 33.3354 25.8803 30.9543 28.7433Z" fill="#3C72FC"></path>
                        </svg>
                    </div>
                    <h4 class="text-dark mt-20">Our Mission</h4>
                </div>
            </div> -->
            <div class="col-lg-6 col-md-4 col-sm-6 wow bounceInUp" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: bounceInUp;">
                <div class="offer__item">
                    <div class="shape-top">
                        <img src="assets/images/shape/offter-item-shape-top.png" alt="shape">
                    </div>
                    <div class="shape-bottom">
                        <img src="assets/images/shape/offter-item-shape-bottom.png" alt="shape">
                    </div>
                    <div class="offer__icon">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.1903 18.0102C25.192 17.882 25.2001 17.7544 25.2001 17.626C25.2001 10.7685 22.7292 4.40667 18.4208 0.171803C18.3084 0.0616816 18.1574 0 18 0C17.8427 0 17.6917 0.0616816 17.5793 0.171803C13.2709 4.40667 10.8 10.7685 10.8 17.626C10.8 17.7544 10.8081 17.882 10.8098 18.0102C7.91877 19.5144 6 23.5346 6 28.1996C6 28.3587 6.06321 28.5113 6.17573 28.6238C6.28825 28.7364 6.44085 28.7996 6.59998 28.7996H13.5941C13.5948 28.7996 13.5954 28.7999 13.5961 28.7999H13.9297L12.6759 30.8884C12.6212 30.9795 12.5917 31.0834 12.5904 31.1896C12.589 31.2958 12.6159 31.4005 12.6683 31.4928C12.7206 31.5852 12.7965 31.6621 12.8882 31.7156C12.9799 31.7691 13.0842 31.7972 13.1904 31.7972H22.7925C22.8986 31.7972 23.0029 31.7691 23.0946 31.7156C23.1863 31.6621 23.2622 31.5852 23.3145 31.4928C23.3669 31.4005 23.3938 31.2958 23.3925 31.1896C23.3911 31.0834 23.3616 30.9795 23.3069 30.8884L22.053 28.7999H22.404C22.4047 28.7999 22.4053 28.7996 22.406 28.7996H29.4001C29.5592 28.7996 29.7118 28.7364 29.8243 28.6238C29.9369 28.5113 30.0001 28.3587 30.0001 28.1996C30.0001 23.5347 28.0814 19.5144 25.1903 18.0102ZM18.0001 1.45473C19.2677 2.78406 20.3501 4.32033 21.2367 6.00572H14.7634C15.6501 4.32026 16.7325 2.78399 18.0001 1.45473ZM7.21177 27.5996C7.35472 23.9749 8.78488 20.794 10.8614 19.374C11.0423 22.2454 11.6673 25.0445 12.6977 27.5996H7.21177ZM14.2504 30.5973L15.3293 28.7999H20.6533L21.7325 30.5973H14.2504ZM22.0117 27.5999H13.9884C12.6868 24.5589 12.0001 21.1194 12.0001 17.626C12.0001 13.8965 12.767 10.3296 14.1786 7.20568H21.8216C23.2332 10.3296 24.0001 13.8965 24.0001 17.626C24.0001 21.1195 23.3134 24.5589 22.0117 27.5999ZM23.3024 27.5996C24.3329 25.0445 24.9579 22.2454 25.1387 19.374C27.2153 20.794 28.6454 23.9749 28.7884 27.5996H23.3024ZM18.0001 32.4005C17.9213 32.4005 17.8433 32.416 17.7705 32.4462C17.6977 32.4763 17.6315 32.5205 17.5758 32.5762C17.5201 32.632 17.4759 32.6981 17.4458 32.7709C17.4156 32.8437 17.4001 32.9217 17.4001 33.0005V35.3999C17.4001 35.559 17.4633 35.7116 17.5758 35.8242C17.6883 35.9367 17.8409 35.9999 18.0001 35.9999C18.1592 35.9999 18.3118 35.9367 18.4243 35.8242C18.5368 35.7116 18.6001 35.559 18.6001 35.3999V33.0006C18.6001 32.9218 18.5845 32.8437 18.5544 32.7709C18.5243 32.6981 18.4801 32.632 18.4243 32.5763C18.3686 32.5205 18.3025 32.4763 18.2297 32.4462C18.1569 32.416 18.0789 32.4005 18.0001 32.4005ZM14.9969 32.4005C14.9181 32.4005 14.8401 32.416 14.7673 32.4462C14.6945 32.4763 14.6283 32.5205 14.5726 32.5762C14.5169 32.632 14.4727 32.6981 14.4426 32.7709C14.4124 32.8437 14.3969 32.9217 14.3969 33.0005V34.1993C14.3969 34.3584 14.4601 34.5111 14.5726 34.6236C14.6851 34.7361 14.8377 34.7993 14.9969 34.7993C15.156 34.7993 15.3086 34.7361 15.4211 34.6236C15.5336 34.5111 15.5969 34.3584 15.5969 34.1993V33.0005C15.5968 32.8414 15.5336 32.6888 15.4211 32.5763C15.3086 32.4637 15.156 32.4005 14.9969 32.4005ZM21.0033 32.4005C20.9246 32.4005 20.8465 32.416 20.7737 32.4462C20.7009 32.4763 20.6348 32.5205 20.5791 32.5762C20.5234 32.632 20.4792 32.6981 20.449 32.7709C20.4189 32.8437 20.4034 32.9217 20.4034 33.0005V34.1993C20.4034 34.3584 20.4666 34.5111 20.5791 34.6236C20.6916 34.7361 20.8442 34.7993 21.0033 34.7993C21.1625 34.7993 21.3151 34.7361 21.4276 34.6236C21.5401 34.5111 21.6033 34.3584 21.6033 34.1993V33.0005C21.6033 32.8414 21.5401 32.6888 21.4276 32.5763C21.3151 32.4637 21.1625 32.4005 21.0033 32.4005Z" fill="#3C72FC"></path>
                        </svg>
                    </div>
                    <h4 class="text-dark mt-20">Our Vision</h4>
                    <p>To be the most respected digital transformational partner in our markets by providing state of the art fully integrated end-to-end ICT services.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-area pt-120 pb-120">
    <div class="section-header text-center mb-60">
        <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">The Konvergenz Experience</h2>
    </div>
    <div class="service__shape wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
        <img class="sway_Y__animation" src="assets/images/shape/service-bg-shape.png" alt="shape">
    </div>
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow bounceInUp" data-wow-delay="00ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: bounceInUp;">
                <div class="service__item active">
                    <div class="service-shape">
                        <img src="assets/images/shape/service-item-shape.png" alt="shape">
                    </div>
                    <div class="service__icon">
                        <img src="assets/images/icon/service-icon1.png" alt="icon">
                    </div>
                    <h4><a href="service-details.html">Best Solution</a></h4>
                    <p>Experience best of breed, best of class enterprise solutions that bring efficiency, effectiveness, and return on investments. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: bounceInUp;">
                <div class="service__item">
                    <div class="service-shape">
                        <img src="assets/images/shape/service-item-shape.png" alt="shape">
                    </div>
                    <div class="service__icon">
                        <img src="assets/images/icon/service-icon2.png" alt="icon">
                    </div>
                    <h4><a href="service-details.html">Best Delivery</a></h4>
                    <p>Experience the best industry service delivery from our top of class specialized and experienced technical teams</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow bounceInUp" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 400ms; animation-name: bounceInUp;">
                <div class="service__item"> 
                    <div class="service-shape">
                        <img src="assets/images/shape/service-item-shape.png" alt="shape">
                    </div>
                    <div class="service__icon">
                        <img src="assets/images/icon/service-icon3.png" alt="icon">
                    </div>
                    <h4><a href="service-details.html">Best Relationship</a></h4>
                    <p>Experience our dedicated and customer focused business engagement pre and post project implementation across the organization</p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="choose-area sub-bg pt-120 pb-120">
                <div class="section-header text-center mb-60">
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">We are trusted by</h2>
                </div>
            <div class="brand-three-area bg-image pt-100 pb-6" data-background="assets/images/bg/case-thre-bg.jpg" style="background-image: url(&quot;assets/images/bg/case-three-bg.jpg&quot;);">
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
                                @for($i=1;$i < 7;$i++)
                                        <div class="image">
                                            <img src="assets/images/copy.png" alt="image">
                                        </div>
                                        <div class="service-two__content">
                                            <div class="icon-bg-circle">
                                                <img src="assets/images/icon/service-two-icon1.png" alt="icon">
                                            </div>
                                            <div class="shape"><img src="assets/images/shape/service-two-item-shape.png" alt="shape"></div>
                                            <h4><a href="service-details.html" class="primary-hover">Cisco Certified CCIE</a></h4>
                                            <!-- <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac
                                                iaculis.</p> 
                                            <a class="read-more-btn" href="service-details.html">Read More <i class="fa-regular fa-arrow-right-long"></i></a>-->
                                        </div>
                                @endfor
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 210px; margin-right: 30px;" role="group" aria-label="2 / 5">
                                <div class="brand__image image">
                                    <img src="assets/images/brand/brand-image2.png" alt="image">
                                </div>
                            </div>
                            <!-- <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="width: 210px; margin-right: 30px;" role="group" aria-label="3 / 5">
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
                            <div class="swiper-slide" data-swiper-slide-index="0" style="width: 210px; margin-right: 30px;" role="group" aria-label="1 / 10">
                                <div class="brand__image image">
                                    <img src="assets/images/brand/brand-image1.png" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="1" style="width: 210px; margin-right: 30px;" role="group" aria-label="2 / 10">
                                <div class="brand__image image">
                                    <img src="assets/images/brand/brand-image2.png" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" style="width: 210px; margin-right: 30px;" role="group" aria-label="3 / 10">
                                <div class="brand__image image">
                                    <img src="assets/images/brand/brand-image3.png" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="3" style="width: 210px; margin-right: 30px;" role="group" aria-label="4 / 5">
                                <div class="brand__image image">
                                    <img src="assets/images/brand/brand-image4.png" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="4" style="width: 210px; margin-right: 30px;" role="group" aria-label="5 / 10">
                                <div class="brand__image image">
                                    <img src="assets/images/brand/brand-image5.png" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="4" style="width: 210px; margin-right: 30px;" role="group" aria-label="6 / 10">
                                <div class="brand__image image">
                                    <img src="assets/images/clients/icta.png" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="4" style="width: 210px; margin-right: 30px;" role="group" aria-label="7 / 10">
                                <div class="brand__image image">
                                    <img src="assets/images/clients/mrm.png" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="4" style="width: 210px; margin-right: 30px;" role="group" aria-label="8 / 10">
                                <div class="brand__image image">
                                    <img src="assets/images/clients/equity.png" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="4" style="width: 210px; margin-right: 30px;" role="group" aria-label="9 / 10">
                                <div class="brand__image image">
                                    <img src="assets/images/clients/safaricom.svg" alt="image">
                                </div>
                            </div> -->
                            <!-- <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="4" style="width: 210px; margin-right: 30px;" role="group" aria-label="10 / 10">
                                <div class="brand__image image">
                                    <img src="assets/images/clients/nrb.svg" alt="image">
                                </div>
                            </div> -->
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
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </section>


<section class="service-area pt-120 pb-120">
    <div class="section-header text-center mb-60">
        <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">Certificates and Accolades</h2>
    </div>
    <div class="service__shape wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
        <img class="sway_Y__animation" src="assets/images/shape/service-bg-shape.png" alt="shape">
    </div>
    <div class="container">
        <div class="row g-4">
            <!-- <div class="slider">
                <div class="slides"> -->
                    @for($i=1;$i < 7;$i++)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="assets/images/copy.png" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon-bg-circle">
                                    <img src="assets/images/icon/service-two-icon1.png" alt="icon">
                                </div>
                                <div class="shape"><img src="assets/images/shape/service-two-item-shape.png" alt="shape"></div>
                                <h4><a href="service-details.html" class="primary-hover">Cisco Certified CCIE</a></h4>
                                <!-- <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac
                                    iaculis.</p> 
                                <a class="read-more-btn" href="service-details.html">Read More <i class="fa-regular fa-arrow-right-long"></i></a>-->
                            </div>
                        </div>
                    </div>
                <!-- </div>
            </div> -->
            @endfor
        </div>
    </div>
</section>


<section class="team-area pt-120 pb-120">
    <div class="container">
        <div class="section-header text-center mb-60">
            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">Our Partners</h2>
        </div>
        <div class="row">
            <!-- <div class="col-lg-4 col-md-6">
                <div class="service-two__item">
                    <div class="image pt-20">
                        <img src="assets/images/partners/sailpoint.svg" alt="image">
                    </div>
                    <div class="service-two__content">
                        <div class="icon-bg-circle">
                            <img src="assets/images/icon/service-two-icon1.png" alt="icon">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" style="max-height:170px;">
                <div class="service-two__item">
                    <div class="image pt-2">
                        <img src="assets/images/partners/redred.png" alt="image">
                    </div>
                    <div class="service-two__content">
                        <div class="icon-bg-circle">
                            <img src="assets/images/icon/service-two-icon1.png" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6">
                <div class="tea__item">
                    <div class="image">
                        <img src="assets/images/partners/avaya.svg" class="square" alt="image">
                    </div>
                </div>
            </div> -->
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
            <div class="col-xl-6 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                <div class="team__item">
                    <div class="image">
                        <img src="assets/images/team/team-image1.jpg" alt="image">
                    </div>
                    <div class="team__content">
                        <h4><a class="text-white" href="team-details.html">Issa Mohammed</a></h4>
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
            <div style="height=50px;"  class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                <div class="team__item">
                    <div class="image">
                        <img src="assets/images/team/team-image3.jpg" alt="image">
                    </div>
                    <div class="team__content">
                        <h4><a class="text-white" href="team-details.html">Abubakar Irungu</a></h4>
                        <span class="text-white">Chief Business Officer</span>
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
            
        </div>
    </div>
</section>
@endsection