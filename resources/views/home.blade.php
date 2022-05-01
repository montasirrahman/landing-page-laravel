<html lang="en">
<head>
    @include('meta')
</head>
<body>
		@include('header')
        <!-- main-area -->
        <main>
            <!-- slider-area -->
            <section id="parallax" class="slider-area slider-bg2 second-slider-bg d-flex fix" style="background-image: url({{ URL ('public/img/bg/pink-header-bg.png') }}); background-position:right 0; background-repeat: no-repeat; background-size: 65%;">
                
                <div class="slider-shape ss-one layer" data-depth="0.10"><img src="{{ URL ('public/img/shape/header-sape.png') }}" alt="shape"></div>
               
     			 <div class="slider-shape ss-eight layer" data-depth="0.50"></div>
                
                
               
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="slider-content second-slider-content left-center">         
                                        <ul class="small-title mb-30">
                                            <li>New</li>
                                            <li>Best Mobile App</li>                                            
                                        </ul>
                                        <h2 data-animation="fadeInUp" data-delay=".4s">Best Mobile App <span>Veganists</span></h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">From the heart of London, two founders emerged to create an amazing yet highly demanded, all-encompassing Vegan Food app which became The Veganists.</p>
                                        <div class="slider-btn mt-30 mb-30">
											<a href="https://apps.apple.com/gb/app/veganists/id1412432125" class="btn ss-btn" data-animation="fadeInUp" data-delay=".8s"><img src="{{ URL ('public/img/icon/apple-icon.png') }}" alt="apple-icon"> App Store</a>
                                            <a href="https://play.google.com/store/apps/details?id=com.veganists" class="btn ss-btn" data-animation="fadeInUp" data-delay=".8s"><img src="{{ URL ('public/img/icon/g-play-icon.png') }}" alt="apple-icon"> Google Play Store</a>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                     <img src="{{ URL ('public/img/bg/mobile.png') }}" alt="shape" class="s-img">
                                </div>
                            </div>
                    
                </div>
            </section>
            <!-- slider-area-end -->
			 <!-- services-area -->
            <section id="about" class="services-area services-bg pt-25 pb-20" style="background-image: url({{ URL ('public/img/shape/header-sape2.png') }}); background-position: right top; background-size: auto;background-repeat: no-repeat;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-10">
                            <div class="section-title text-center pl-40 pr-40 mb-45">
                                <h2>Our Features</h2>
                                <p>The Veganists | a digital platform via app and website, made for users around the world who want to order vegan/vegetarian food or cook recipes in their house from our wide range of HD videos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-12 mb-30">
                            <div class="s-single-services active text-center">
                                <div class="services-icon">
                                   <img src="{{ URL ('public/img/icon/f-icon1.png') }}"/>
                                </div>
                                <div class="second-services-content">
                                    <h5>Platform</h5>
                                    <p>The app itself, provides a platform for users to have access to an array of HD cooking videos that display a chef making various vegan or vegetarian meals. The ingredients list and cooking time as well as preparation instructions, are all included. </p>
                                    <a href="#"><span>1</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 mb-30">
                            <div class="s-single-services text-center">
                                 <div class="services-icon">
                                  <img src="{{ URL ('public/img/icon/f-icon3.png') }}"/>
                                </div>
                                <div class="second-services-content">
                                    <h5>Community</h5>
                                    <p>To make it fun, the app allows users the chance to film and upload their own recipes and meals to the community page.</p>
                                    <a href="#"><span>2</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 mb-30">
                           <div class="s-single-services text-center">
                                <div class="services-icon">
                                  <img src="{{ URL ('public/img/icon/f-icon2.png') }}"/>
                                </div>
                                <div class="second-services-content">
                                    <h5>Users</h5>
									<p>On a more conventional note, users can use the app as a click and collect tool for local restaurants and use the app for food delivery at which the customer can track on their phone.</p>
                                    <a href="#"><span>3</span></a>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                  
                </div>
            </section>
            <!-- services-area-end -->
			<!-- choose-area -->
            <section class="choose-area pt-100 pb-60 p-relative" style="background-image: url({{ URL ('public/img/shape/header-sape3.png') }}); background-position: right center; background-size: auto;background-repeat: no-repeat;">
                <div class="chosse-img" style="background-image:url({{ URL ('public/img/bg/easy-m-bg.png') }})"></div>
                <div class="chosse-img2"><img src="{{ URL ('public/img/bg/mobile2.png') }}" alt="mobile"/></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5">
                        </div>
                        <div class="col-xl-7">
                            <div class="choose-wrap">
                                <div class="section-title w-title left-align mb-25">
                                    <h2>Easy And Perfect Solution For Vegan/Vegetarian Food or Cook Recipes App</h2>
                                </div>
                                <div class="choose-content">
                                    <p>The Veganists | a digital platform via app and website, made for users around the world who want to order vegan/vegetarian food or cook recipes in their house from our wide range of HD videos.</p>
                                     <p>Registered in London but online App so it's global, international, and worldwide. </p>
                                   
                                    <div class="choose-btn mt-30">
                                        <a href="https://apps.apple.com/gb/app/veganists/id1412432125"><span class="icon"><img src="{{ URL ('public/img/icon/apple-icon.png') }}" alt="apple-icon"></span> 
                                            <span class="text"> Available on <strong>APP STORE</strong></span></a>
                                        <a href="https://play.google.com/store/apps/details?id=com.veganists" class="g-btn"><span class="icon"><img src="{{ URL ('public/img/icon/g-play-icon2.png') }}" alt="apple-icon"></span> 
                                            <span class="text"> Available on <strong>GOOGLE PLAY</strong></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- choose-area-end -->
            <!-- how-app-work -->
            <section id="features" class="app-work pt-70 pb-100 p-relative" style="background-image: url({{ URL ('public/img/shape/header-sape4.png') }}); background-position: right center; background-size: auto;background-repeat: no-repeat;">            
                <div class="container">
                    <div class="row align-items-center ">
                       
                        <div class="col-xl-6">
                            <div class="choose-wrap">
                                <div class="section-title w-title left-align mb-15">
                                    <h2>How does This App Work?</h2>
                                </div>
                                <div class="app-work-content mt-20">
                                    <ul>
                                        
                                        <li>
                                            <div class="icon"><img src="{{ URL ('public/img/icon/apw-Icon2.png') }}"></div> 
                                            <div class="text">
                                                <h4>Download It For Free</h4>
                                                <p>From Google Play Store</p>
                                            </div>
                                        </li>
										<li>
                                            <div class="icon"><img src="{{ URL ('public/img/icon/apw-Icon1.png') }}"></div> 
                                            <div class="text">
                                                <h4>Make A Profile</h4>
                                                <p>Fill-up your name, email and password</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"><img src="{{ URL ('public/img/icon/apw-Icon3.png') }}"></div> 
                                            <div class="text">
                                                <h4>Enjoy This App</h4>
                                                <p>Watch chef making various vegan or vegetarian meals. The ingredients list and cooking time as well as preparation instructions, are all included.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                         <div class="col-xl-6">
                            <img src="{{ URL ('public/img/bg/app-work-img.png') }}" alt="app-work-img" class="img">
                        </div>
                    </div>
                </div>
            </section>
            <!-- how-app-work -->
            <!-- video-area -->
            <section class="video-area pt-100 pb-100 p-relative">                
                <div class="video-img2">
                    
                    <img src="{{ URL ('public/img/bg/video-img.png') }}" alt="mobile"/>
                
                    <a href="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Fveganists%2Fvideos%2F1262547587227802%2F&show_text=false&width=476&t=0" class="popup-video"><img src="{{ URL ('public/img/bg/play-btn.png') }}" alt="play-btn.png"></a>
                </div>
                <div class="video-img3">
                    <img src="{{ URL ('public/img/shape/header-sape5.png') }}" alt="header-sape4">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                        </div>
                        <div class="col-xl-6">
                            <div class="video-wrap">
                                <div class="section-title w-title left-align mb-25">
                                    <h2>Veganists The App That Everyonee Love</h2>
                                </div>
                                <div class="video-content">
                                    <p>The Veganists have made it their personal mission to bring the best local and international restaurants direct to peopleâ€™s homes </p>
                                     <ul>
                                        <li>
                                            <div class="icon"><img src="{{ URL ('public/img/icon/vs-icon.png') }}"></div> 
                                            <div class="text">Feature: The app itself, provides a platform for users to have access to an array of HD cooking videos that display a chef making various vegan or vegetarian meals. The ingredients list and cooking time as well as preparation instructions, are all included.
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"><img src="{{ URL ('public/img/icon/vs-icon.png') }}"></div> 
                                            <div class="text">Feature: To make it fun, the app allows users the chance to film and upload their own recipes and meals to the community page.
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"><img src="{{ URL ('public/img/icon/vs-icon.png') }}"></div> 
                                            <div class="text">Feature: On a more conventional note, users can use the app as a click and collect tool for local restaurants and use the app for food delivery at which the customer can track on their phone.
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- video-area-end -->
            <!-- screen-area -->
            <section id="screen" class="screen-area services-bg services-two pt-100 pb-70"  style="background-image: url({{ URL ('public/img/shape/header-sape4.png') }}); background-position: right center; background-size: auto;background-repeat: no-repeat;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="section-title text-center pl-40 pr-40 mb-50">                               
                                <h2>Our App ScreenShots</h2>
                                <p>Sharing recipes for foodies 🍽🤤</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                         <!-- Swiper -->
                          <div class="swiper-container">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide"><img src="{{ URL ('public/img/gallery/screen-img01.png') }}" alt="slide 1"></div>
                              <div class="swiper-slide"><img src="{{ URL ('public/img/gallery/screen-img02.png') }}" alt="slide 1"></div>
                              <div class="swiper-slide"><img src="{{ URL ('public/img/gallery/screen-img03.png') }}" alt="slide 1"></div>
                              <div class="swiper-slide"><img src="{{ URL ('public/img/gallery/screen-img04.png') }}" alt="slide 1"></div>
                              <div class="swiper-slide"><img src="{{ URL ('public/img/gallery/screen-img05.png') }}" alt="slide 1"></div>

                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                          </div>

					</div>
                </div>
                    

            </section>
            <!-- screen-area-end -->     
            

		
        </main>
        <!-- main-area-end -->
		@include('footer')
</body>
</html>