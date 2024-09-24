<!-- +++++++++++  Footer  +++++++++++ -->
<footer class="footerbgC  ">
    <div class="footerBgImg">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-4 mb-5 col-12">
                    <div class="p-1 p-lg-4">
                        <ul class="pyit-yesimg ">
                            <li> <p class=""> <a href="#" class="footetTextp text-decoration-none"> Latest Properties</a> </p> </li>
                        </ul>
                        <div class="d-flex align-items-center footerCard  ">
                            <div class="flex-shrink-0 p-3"> <img src="{{ asset('assets/frontend/img/footerImg.png') }}" width="58px" alt="..."> </div>
                            <div class="flex-grow-1 ms-3">
                                <h2 class="footerTexth2 "> Retail Store Southwest 186th Street <br> </h2>
                                <h3 class="GoldC footerTexth2">From $120/month</h3>
                            </div>
                        </div>
                        <div class="d-flex align-items-center footerCard  mt-3">
                            <div class="flex-shrink-0 p-3"> <img src="{{ asset('assets/frontend/img/footerImg.png') }}" width="58px" alt="..."> </div>
                            <div class="flex-grow-1 ms-3">
                                <h2 class="footerTexth2 "> Retail Store Southwest 186th Street <br> </h2>
                                <h3 class="GoldC footerTexth2">From $120/month</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5 col-md-6 footerC2B">
                    <div class="p-1 p-lg-4">
                        <ul class="pyit-yesimg ">
                            <li>
                                <p class="footetTextp  "> <a href="#" class="footetTextp text-decoration-none "> Contact Us</a> </p>
                            </li>
                        </ul>
                        <div class="d-flex">
                            <h5><a href="#"> <img src="{{ asset('assets/frontend/img/Phone.svg') }}" alt=""> </a> </h5>
                            <h5 class="ps-3 "><a class="footerCol2 text-decoration-none" href="tel:+911-800-700-6200"> 1-800-700-6200 </a> </h5>
                        </div>
                        <div class="d-flex">
                            <h5><a href="#"> <img src="{{ asset('assets/frontend/img/Email.svg') }}" alt=""></a></h5>
                            <h5 class="ps-3 "><a class="footerCol2 text-decoration-none" href="mailto:info@demolink.org"> info@demolink.org </a></h5>
                        </div>
                        <div class="d-flex">
                            <h5><a href="#"> <img src="{{ asset('assets/frontend/img/Location.svg') }}" alt=""></a> </h5>
                            <h5 class="ps-3 "><a class="footerCol2 text-decoration-none" href="#"> Lorem Ipsum is simply dummy text of the printing and </a> </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5 col-md-6 footerBB">
                    <div class="p-1 p-lg-4">
                        <ul class="pyit-yesimg ">
                            <li>
                                <p class="footetTextp  "> <a href="#" class="footetTextp text-decoration-none"> Newsletter Signup</a> </p>
                            </li>
                        </ul>
                        <p class="footerTexth2">Enter your e-mail to get the latest news of i-Dreamer</p>
                        <form action="{{ route('subscribe') }}" method="POST">
                            @csrf
                            <div class="input-group mb-3 py-4">
                                <input type="email" name="email" class="form-control py-3 footerInputC" placeholder="Your e-mail" aria-label="Recipient's username" aria-describedby="button-addon2" required>
                                <button class="btn footerbtnC px-3" type="submit" id="button-addon2">Subscribe</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 footerBorder"></div>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-4  d-flex justify-content-lg-start justify-content-center mb-4">
                    <img src="{{ asset('assets/frontend/img/logo.webp') }}" class="footerlogoImg" alt="">
                </div>
                <div class="col-md-4 mb-4   d-flex justify-content-center  align-items-center">
                    <p class="footerCol2 mb-0"> © Copyright 2020 All Rights Reserved PROPY HOME</p>
                </div>
                <div class="col-md-4 mb-4 d-flex justify-content-center align-items-center justify-content-lg-end">
                    <div class="">
                        <img src="{{ asset('assets/frontend/img/fb.svg') }}" alt="">
                        <img src="{{ asset('assets/frontend/img/twitter.svg') }}" alt="">
                        <img src="{{ asset('assets/frontend/img/instragram.svg') }}" alt="">
                        <img src="{{ asset('assets/frontend/img/YouTube.svg') }}" alt="">
                        <img src="{{ asset('assets/frontend/img/in.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://wa.me/917058669996" class  ="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<!-- ========  Footer   END  ======== -->
<!-- ======= Owl + JQiery ========== -->
<!-- ======= OC- initialisation ========== -->
<script src="{{ asset('assets/frontend/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
<!-- swiper slider -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- slick -->
<script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
<!--  -->
<script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>
<!-- ======= JS (always at end) ========== -->
<script src="{{ asset('assets/frontend/js/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/frontend/js/app1.js') }}" type="text/javascript"></script>
<!-- ======= BS 5.3.2 ========== -->

</body>
</html>
