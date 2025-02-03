@extends('layouts.app')

@section('content')

    <!--=============== MAIN  ===============-->
    <main class="main">
                
                <!--=============== HOME  ===============-->
                <section class="home section" id="home">
                    <img src="{{asset('asset/img/home-bg.jpg')}}" alt="home image" class="home__bg">
                    <div class="home__shadow"></div>
        
                    <div class="home__container container grid">
                        <div class="home__data">
                            <h3 class="home__subtitle">
                                Welcome To Travel
                            </h3>
        
                            <h1 class="home__title">
                                Explore <br>
                                The World
                            </h1>
                            <p class="home__description">
                                Live the trips exploring the world ,discover paradises,islands,mountains and much more,get your trip now.
                            </p>
                            <a href="#" class="button">
                                Start Your Journey <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
        
                        <div class="home__cards grid">
        
                            <article class="home__card">
                                <img src="{{asset('asset/img/home-trees.jpg')}}" alt="" class="home__cards-img">
                                <h3 class="home__card-title">Croatia</h3>
                                <div class="home__card-shadow"></div>
                            </article>
        
                            <article class="home__card">
                                <img src="{{asset('asset/img/home-lake.jpg')}}" alt="" class="home__cards-img">
                                <h3 class="home__card-title">Iceland</h3>
                                <div class="home__card-shadow"></div>
                            </article>
        
                            <article class="home__card">
                                <img src="{{asset('asset/img/home-mountain.jpg')}}" alt="" class="home__cards-img">
                                <h3 class="home__card-title">Italy</h3>
                                <div class="home__card-shadow"></div>
                            </article>
        
                            <article class="home__card">
                                <img src="{{asset('asset/img/home-beach.jpg')}}" alt="" class="home__cards-img">
                                <h3 class="home__card-title">Spain</h3>
                                <div class="home__card-shadow"></div>
                            </article>
        
                        </div>
                    </div>
                </section>
            
              
        
        
            <!--=============== SERVICE ===============-->
        
                <div class="service category section" id="service__category">
                    <div class="service-category__container container grid">
                        <div class="service-category__data">
                            <h2 class="service-category__title">
                                Service Category
                            </h2>
                        </div>  
                    </div>
                </div>
        
        
                 
                
                <div class="service-container">
                    <div class="box-card">
                        <div class="service__card-image worldwide-travel" data-wow-delay="0.1s"></div>
                        <h2>Tours</h2>
                        <p>Explore our curated selection of exciting tours to diverse destinations. From cultural experiences to adventure tours, we have something for every traveler.</p>
                        <a href="" class="button">READ MORE</a>
                    </div>
                    <div class="box-card">
                        <div class="service__card-image hotel-reservation"></div>
                        <h2>Hotel Reservations</h2>
                        <p>Book comfortable accommodations with our seamless hotel reservation services. Choose from a variety of options that suit your preferences and budget.</p>
                        <a href="" class="button">READ MORE</a>
                    </div>
                    <div class="box-card">
                        <div class="service__card-image event-management"></div>
                        <h2>Event Managements</h2>
                        <p>Plan and host memorable events with our expert event management services. From destination weddings to corporate retreats, we handle every detail for you.</p>
                        <a href="" class="button">READ MORE</a>
                    </div>
                    <div class="box-card">
                        <div class="service__card-image travel-guide"></div>
                        <h2>Travel Guides</h2>
                        <p>Enhance your travel experience with our knowledgeable travel guides. Gain insights into local culture, history, and hidden gems to make the most of your journey.</p>
                        <a href="">READ MORE</a>
                    </div>
        
                </div>
        
        
            <!--=============== SERVICE END ===============-->
        
            <!--=============== Testimonial ===============-->
            
            <section class="testimonial__container">
                <div class="testimonial mySwiper">
                    <div class="testimonial__data">
        
                        <h2 class="testimonial__title">
                            Travel Guides
                        </h2>
                    </div>
                    <div class="testi-content swiper-wrapper">
                        <div class="slide swiper-slide">
                            <img src="{{asset('asset/img/img/team-1.jpg')}}" alt="" class="image">
                            <p>
                                I have travel countries lllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll
                            </p>
                            <i class="bx bxs-quote-alt-left quote-icon"></i>
        
                            <div class="details">
                                <span class="name">Akeel Shihab</span>
                                <span class="job">Travel Guide</span>
                            </div>
                        </div>
        
                        <div class="slide swiper-slide">
                            <img src="{{asset('asset/img/img/team-1.jpg')}}" alt="" class="image">
                            <p>
                                I have travel countries 
                            </p>
                            <i class="bx bxs-quote-alt-left quote-icon"></i>
        
                            <div class="details">
                                <span class="name">Akeel Shihab</span>
                                <span class="job">Travel Guide</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next nav-btn"></div>
                    <div class="swiper-button-prev nav-btn"></div>
                    <div class="swiper-pagination-bullet"></div>
                </div>
            </section>




    </main>

        
    <!--=============== JOIN ===============-->
    <section class="join section">
        <div class="join__container grid" id="container">
            <div class="join__data">
                <h2 class="section__title">
                    Your Journey<br>
                    Starts Here
                </h2>

                <p class="join__description">
                    Get up to date with the latest 
                    travel and information from us.
                </p>

                <form action="" class="join__form">
                    <input type="email" placeholder="Enter your email"class="join__input">

                    <button class="join__button button">
                        Subscribe Our Newsletter <i class="ri-arrow-right-line"></i>
                    </button>
                </form>
            </div>

            <div class="join__image">
                <img src="{{asset('asset/img/join-island.jpg')}}" alt="join image" class="join__img">
                <div class="join__shadow"></div>
            </div>
        </div>
    </section>
     <!--=============== Swiper JS ===============-->
    <script src="{{asset('asset/js/swiper-bundle.min.js')}}"></script>

    <!--=============== Initialize Swiper ===============-->
    <script>
        var swiper = new Swiper(".mySwiper",{
            slidesPerView:1,
            grabCursor:true,
            spaceBetween:30,
            loop:true,
            pagination:{
                el:".swiper-pagination",
                elicable:true,
            },
            navigation:{
                nextEl:".swiper-button-next",
                prevEl:".swiper-button-prev",
            },
        });
    </script>

@endsection
