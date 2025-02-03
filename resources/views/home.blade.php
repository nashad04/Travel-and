@extends('layouts.app')

@section('content')

    <!--=============== MAIN  ===============-->
    <main class="main">
                
        <!--=============== HOME  ===============-->
        <section class="home section" id="home">
            <img src="{{asset('asset/img/background.png')}}" alt="home image" class="home__bg">
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

                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <form class="search-form">  
                            <div class="input-wrapper">
                                <span class="icon">
                                    <i class="bi bi-geo-alt"></i>
                                </span>
                                <input type="text" placeholder="Starting From">
                            </div>
                            
                            <div class="input-wrapper">
                                <span class="icon">
                                    <i class="bi bi-geo-alt"></i>
                                </span>
                                <input type="text" placeholder="Starting From">
                            </div>
                            
                            <div class="input-wrapper">
                                <span class="icon">
                                    <i class="bi bi-person"></i>
                                </span>
                                <input type="text" placeholder="who">
                            </div>
                            
                            <button class="search-button" type="submit">
                                <i class="bi bi-search"></i>
                                Search
                            </button>
                        </form>
                    </div>
                </nav>
            </div>
        </section>

          <!-- packages -->
        <section class="popular section" id="popular">
            <h2 class="section__title">
                Our Packages
            </h2>


      
            <div class="popular__container container grid">
                <article class="popular__card">
                    <div class="popular__image">
                        <img src="{{asset('asset/img/popular-mountain.jpg')}}" alt="popular image" class="popular__img">
                        <div class="popular__shadow"></div>
                    </div>
                    <h2 class="popular__title">
                        Logan Mountain
                    </h2>

                    <div class="popular__image">
                        <img src="{{asset('asset/img/popular-mountain.jpg')}}" alt="popular image" class="popular__img">
                        <div class="popular__shadow"></div>
                    </div>
                    <h2 class="popular__title">
                        Logan Mountain
                    </h2>

                    <div class="popular__image">
                        <img src="{{asset('asset/img/popular-mountain.jpg')}}" alt="popular image" class="popular__img">
                        <div class="popular__shadow"></div>
                    </div>
                    <h2 class="popular__title">
                        Logan Mountain
                    </h2>

                    <div class="popular__image">
                        <img src="{{asset('asset/img/popular-mountain.jpg')}}" alt="popular image" class="popular__img">
                        <div class="popular__shadow"></div>
                    </div>
                    <h2 class="popular__title">
                        Logan Mountain
                    </h2>

                    <div class="popular__image">
                        <img src="{{asset('asset/img/popular-mountain.jpg')}}" alt="popular image" class="popular__img">
                        <div class="popular__shadow"></div>
                    </div>
                    <h2 class="popular__title">
                        Logan Mountain
                    </h2>

                    <div class="popular__location">
                        <i class="ri-map-pin-line"></i>
                        <span>Canada</span>
                    </div>
                </article>

                <article class="popular__card">
                    <div class="popular__image">
                        <img src="{{asset('asset/img/popular-forest.jpg')}}" alt="popular image" class="popular__img">
                        <div class="popular__shadow"></div>
                    </div>
                    <h2 class="popular__title">
                        Spike Forest
                    </h2>

                    <div class="popular__location">
                        <i class="ri-map-pin-line"></i>
                        <span>IreLand</span>
                    </div>
                </article>

                <article class="popular__card">
                    <div class="popular__image">
                        <img src="{{asset('asset/img/popular-lake.jpg')}}" alt="popular image" class="popular__img">
                        <div class="popular__shadow"></div>
                    </div>
                    <h2 class="popular__title">
                        Garda Lake
                    </h2>

                    <div class="popular__location">
                        <i class="ri-map-pin-line"></i>
                        <span>Italy</span>
                    </div>
                </article>
            </div>
        </section>

        <!--=============== ABOUT ===============-->

        <section class="about section " id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    
                    <h3 class="section__title">
                        Learn More <br>
                        About Travel
                    </h3>

                    <p class="about__description">
                        All the trips around the world are a great 
                        pleasure and happiness for anyone, enjoy 
                        the sights when you travel the world. Travel 
                        safely and without worries, get your trip and 
                        explore the paradises of the world.
                    </p>

                    <a href="service.html" class="button">
                        Explore Travel <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
                <div class="about__image">
                    <img src="{{asset('asset/img/about-beach.jpg')}}" alt="about image" class="about__img">
                    <div class="about__shadow"></div>
                </div>
            </div>
        </section>

        <!--=============== ABOUT END ===============-->


        <!--=============== SERVICE ===============-->

        <section class="service section" id="service">
            <div class="service__container container grid">
                <div class="service__data">

                    <h2 class="service__title">
                        Check Our Service
                    </h2>

                    <a href="service.html" class="button">
                        Explore Our Service  <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <div class="service__cards grid">

                    <article class="service__card">
                        <h2 class="service__card-title">WorldWide Tours</h2>    
                        <img src="{{asset('asset/img/World_Travel___Tourism_.jpg')}}" alt="service image" class="service__cards-img">
                        <div class="service__shadow"></div>
                    </article>

                    <article class="service__card">
                        <h2 class="service__card-title">Hotel Reservation</h2>    
                        <img src="{{asset('asset/img/booking.jpg')}}" alt="service image" class="service__cards-img">
                        <div class="service__shadow"></div>
                    </article>

                    <article class="service__card">
                        <h2 class="service__card-title">Event Management</h2>    
                        <img src="{{asset('asset/img/Event-planners.jpg')}}" alt="service image" class="service__cards-img">
                        <div class="service__shadow"></div>
                    </article>

                    <article class="service__card">
                        <h2 class="service__card-title">Travel Guides</h2>    
                        <img src="{{asset('asset/img/Travel-guides.jpg')}}" alt="service image" class="service__cards-img">
                        <div class="service__shadow"></div>
                    </article>
                </div>
            </div>  
        </section>
        
        <!--=============== SERVICE END ===============-->

        
                
        <!--=============== POPULAR ===============-->
        <section class="popular section" id="popular">
            <h2 class="section__title">
                Enjoy the Beauty <br>
                of the World
            </h2>

            <div class="popular__container container grid">
                <article class="popular__card">
                    <div class="popular__image">
                        <img src="{{asset('asset/img/popular-mountain.jpg')}}" alt="popular image" class="popular__img">
                        <div class="popular__shadow"></div>
                    </div>
                    <h2 class="popular__title">
                        Logan Mountain
                    </h2>

                    <div class="popular__location">
                        <i class="ri-map-pin-line"></i>
                        <span>Canada</span>
                    </div>
                </article>

                <article class="popular__card">
                    <div class="popular__image">
                        <img src="{{asset('asset/img/popular-forest.jpg')}}" alt="popular image" class="popular__img">
                        <div class="popular__shadow"></div>
                    </div>
                    <h2 class="popular__title">
                        Spike Forest
                    </h2>

                    <div class="popular__location">
                        <i class="ri-map-pin-line"></i>
                        <span>IreLand</span>
                    </div>
                </article>

                <article class="popular__card">
                    <div class="popular__image">
                        <img src="{{asset('asset/img/popular-lake.jpg')}}" alt="popular image" class="popular__img">
                        <div class="popular__shadow"></div>
                    </div>
                    <h2 class="popular__title">
                        Garda Lake
                    </h2>

                    <div class="popular__location">
                        <i class="ri-map-pin-line"></i>
                        <span>Italy</span>
                    </div>
                </article>
            </div>
        </section>
                
        <!--=============== EXPLORE ===============-->
        <section class="explore section" id="Booking">
            <div class="explore__container">
                <div class="explore__image">
                    <img src="{{asset('asset/img/explore-beach.jpg')}}" alt="explore image" class="explore__img">
                    <div class="explore__shadow"></div>
                </div>

                <div class="explore__content container grid">
                    <div class="explore__data">
                        <h2 class="section__title">
                            Explore The<br>
                            Best Paradises
                        </h2>

                        <p class="explore__description">
                            Exploring paradises such as islands and 
                            valleys when traveling the world is one of 
                            the greatest experiences when you travel, it 
                            offers you harmony and peace and you 
                            can enjoy it with great comfort.
                        </p>
                        
                    </div>
                    <div class="explore__user">
                        <img src="{{asset('asset/img/explore-perfil.png')}}" alt="explore image" class="explore__perfil">
                        <span class="explore__name">Paul Jeams</span>
                    </div>
                </div>
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

@endsection
