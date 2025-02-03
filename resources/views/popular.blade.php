@extends('layouts.app')

@section('content')

     <!--=============== MAIN  ===============-->
     <main class="main">
            
    <!-- carousel -->
    <div class="carousel prev">
        <!-- list item -->
        <div class="list">
            <div class="item">
                <img src="{{asset('asset/img/home-bg.jpg')}}">
                <div class="content">
                    <div class="author">CROTIA</div>
                    <div class="title">BEST COUNTRY</div>
                    <div class="topic">COUNTRY</div>
                    <div class="des">
                        <!-- lorem 50 -->
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('asset/img/home-bg.jpg')}}">
                <div class="content">
                    <div class="author">CROTIA</div>
                    <div class="title">BEST COUNTRY</div>
                    <div class="topic">COUNTRY</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('asset/img/home-bg.jpg')}}">
                <div class="content">
                    <div class="author">CROTIA</div>
                    <div class="title">BEST COUNTRY</div>
                    <div class="topic">COUNTRY</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('asset/img/home-bg.jpg')}}">
                <div class="content">
                    <div class="author">CROTIA</div>
                    <div class="title">BEST COUNTRY</div>
                    <div class="topic">COUNTRY</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- list thumnail -->
        <div class="thumbnail">
            <div class="item">
                <img src="{{asset('asset/img/home-bg.jpg')}}">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('asset/img/home-bg.jpg')}}">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('asset/img/home-bg.jpg')}}">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('asset/img/home-bg.jpg')}}">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
        </div>
        <!-- next prev -->

        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- time running -->
        <div class="time"></div>
    </div>
            
    
      



        <!--=============== POPULAR PLACES ===============-->
        <div class="popular category section" id="service__category">
            <div class="popular-category__container container grid">
                <div class="popular-category__data">
                    <h2 class="popular-category__title">
                        Travel To India
                    </h2>
                </div>  
            </div>
        </div>


         
        
        <div class="service-container">
            <div class="box-card">
                <div class="popular__card-image" data-wow-delay="0.1s"><img src="{{asset('asset/img/popular/indianhotels.jpg')}}" alt=""></div>
                <h2>INDIAN HOTEL</h2>
                <p>Explore our curated selection of exciting tours to diverse destinations. From cultural experiences to adventure tours, we have something for every traveler.</p>
                <a href="" class="button">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image"><img src="{{asset('asset/img/popular/boat.jpg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Hotel Reservations</h2>
                <p>Book comfortable accommodations with our seamless hotel reservation services. Choose from a variety of options that suit your preferences and budget.</p>
                <a href="" class="button">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image"><img src="{{asset('asset/img/popular/food.jpg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Event Managements</h2>
                <p>Plan and host memorable events with our expert event management services. From destination weddings to corporate retreats, we handle every detail for you.</p>
                <a href="" class="button">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image "><img src="{{asset('asset/img/popular/places.jpeg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Travel Guides</h2>
                <p>Enhance your travel experience with our knowledgeable travel guides. Gain insights into local culture, history, and hidden gems to make the most of your journey.</p>
                <a href="">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image "><img src="{{asset('asset/img/popular/stadium.jpg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Travel Guides</h2>
                <p>Enhance your travel experience with our knowledgeable travel guides. Gain insights into local culture, history, and hidden gems to make the most of your journey.</p>
                <a href="">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image "><img src="{{asset('asset/img/popular/dance.jpg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Travel Guides</h2>
                <p>Enhance your travel experience with our knowledgeable travel guides. Gain insights into local culture, history, and hidden gems to make the most of your journey.</p>
                <a href="">READ MORE</a>
            </div>

        </div>

         <!--=============== POPULAR PLACES ===============-->
         <div class="popular category section" id="service__category">
            <div class="popular-category__container container grid">
                <div class="popular-category__data">
                    <h2 class="popular-category__title">
                        Travel To India
                    </h2>
                </div>  
            </div>
        </div>


         
        
        <div class="service-container">
            <div class="box-card">
                <div class="popular__card-image" data-wow-delay="0.1s"><img src="{{asset('asset/img/popular/indianhotels.jpg')}}" alt=""></div>
                <h2>INDIAN HOTEL</h2>
                <p>Explore our curated selection of exciting tours to diverse destinations. From cultural experiences to adventure tours, we have something for every traveler.</p>
                <a href="" class="button">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image"><img src="{{asset('asset/img/popular/boat.jpg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Hotel Reservations</h2>
                <p>Book comfortable accommodations with our seamless hotel reservation services. Choose from a variety of options that suit your preferences and budget.</p>
                <a href="" class="button">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image"><img src="{{asset('asset/img/popular/food.jpg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Event Managements</h2>
                <p>Plan and host memorable events with our expert event management services. From destination weddings to corporate retreats, we handle every detail for you.</p>
                <a href="" class="button">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image "><img src="{{asset('asset/img/popular/places.jpeg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Travel Guides</h2>
                <p>Enhance your travel experience with our knowledgeable travel guides. Gain insights into local culture, history, and hidden gems to make the most of your journey.</p>
                <a href="">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image "><img src="{{asset('asset/img/popular/stadium.jpg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Travel Guides</h2>
                <p>Enhance your travel experience with our knowledgeable travel guides. Gain insights into local culture, history, and hidden gems to make the most of your journey.</p>
                <a href="">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image "><img src="{{asset('asset/img/popular/dance.jpg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Travel Guides</h2>
                <p>Enhance your travel experience with our knowledgeable travel guides. Gain insights into local culture, history, and hidden gems to make the most of your journey.</p>
                <a href="">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image "><img src="{{asset('asset/img/popular/dance.jpg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Travel Guides</h2>
                <p>Enhance your travel experience with our knowledgeable travel guides. Gain insights into local culture, history, and hidden gems to make the most of your journey.</p>
                <a href="">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image "><img src="{{asset('asset/img/popular/dance.jpg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Travel Guides</h2>
                <p>Enhance your travel experience with our knowledgeable travel guides. Gain insights into local culture, history, and hidden gems to make the most of your journey.</p>
                <a href="">READ MORE</a>
            </div>

        </div>

         <!--=============== POPULAR PLACES ===============-->
        <div class="popular category section" id="service__category">
            <div class="popular-category__container container grid">
                <div class="popular-category__data">
                    <h2 class="popular-category__title">
                        Travel To India
                    </h2>
                </div>  
            </div>
        </div>


         
        
        <div class="service-container">
            <div class="box-card">
                <div class="popular__card-image" data-wow-delay="0.1s"><img src="{{asset('asset/img/popular/indianhotels.jpg')}}" alt=""></div>
                <h2>INDIAN HOTEL</h2>
                <p>Explore our curated selection of exciting tours to diverse destinations. From cultural experiences to adventure tours, we have something for every traveler.</p>
                <a href="" class="button">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image"><img src="{{asset('asset/img/popular/boat.jpg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Hotel Reservations</h2>
                <p>Book comfortable accommodations with our seamless hotel reservation services. Choose from a variety of options that suit your preferences and budget.</p>
                <a href="" class="button">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image"><img src="{{asset('asset/img/popular/food.jpg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Event Managements</h2>
                <p>Plan and host memorable events with our expert event management services. From destination weddings to corporate retreats, we handle every detail for you.</p>
                <a href="" class="button">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image "><img src="{{asset('asset/img/popular/places.jpeg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Travel Guides</h2>
                <p>Enhance your travel experience with our knowledgeable travel guides. Gain insights into local culture, history, and hidden gems to make the most of your journey.</p>
                <a href="">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image "><img src="{{asset('asset/img/popular/stadium.jpg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Travel Guides</h2>
                <p>Enhance your travel experience with our knowledgeable travel guides. Gain insights into local culture, history, and hidden gems to make the most of your journey.</p>
                <a href="">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image "><img src="{{asset('asset/img/popular/dance.jpg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Travel Guides</h2>
                <p>Enhance your travel experience with our knowledgeable travel guides. Gain insights into local culture, history, and hidden gems to make the most of your journey.</p>
                <a href="">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image "><img src="{{asset('asset/img/popular/dance.jpg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Travel Guides</h2>
                <p>Enhance your travel experience with our knowledgeable travel guides. Gain insights into local culture, history, and hidden gems to make the most of your journey.</p>
                <a href="">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image "><img src="{{asset('asset/img/popular/dance.jpg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Travel Guides</h2>
                <p>Enhance your travel experience with our knowledgeable travel guides. Gain insights into local culture, history, and hidden gems to make the most of your journey.</p>
                <a href="">READ MORE</a>
            </div>

        </div>

         <!--=============== POPULAR PLACES ===============-->
        <div class="popular category section" id="service__category">
            <div class="popular-category__container container grid">
                <div class="popular-category__data">
                    <h2 class="popular-category__title">
                        Travel To India
                    </h2>
                </div>  
            </div>
        </div>


         
        
        <div class="service-container">
            <div class="box-card">
                <div class="popular__card-image" data-wow-delay="0.1s"><img src="{{asset('asset/img/popular/indianhotels.jpg')}}" alt=""></div>
                <h2>INDIAN HOTEL</h2>
                <p>Explore our curated selection of exciting tours to diverse destinations. From cultural experiences to adventure tours, we have something for every traveler.</p>
                <a href="" class="button">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image"><img src="{{asset('asset/img/popular/boat.jpg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Hotel Reservations</h2>
                <p>Book comfortable accommodations with our seamless hotel reservation services. Choose from a variety of options that suit your preferences and budget.</p>
                <a href="" class="button">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image"><img src="{{asset('asset/img/popular/food.jpg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Event Managements</h2>
                <p>Plan and host memorable events with our expert event management services. From destination weddings to corporate retreats, we handle every detail for you.</p>
                <a href="" class="button">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image "><img src="{{asset('asset/img/popular/places.jpeg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Travel Guides</h2>
                <p>Enhance your travel experience with our knowledgeable travel guides. Gain insights into local culture, history, and hidden gems to make the most of your journey.</p>
                <a href="">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image "><img src="{{asset('asset/img/popular/stadium.jpg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Travel Guides</h2>
                <p>Enhance your travel experience with our knowledgeable travel guides. Gain insights into local culture, history, and hidden gems to make the most of your journey.</p>
                <a href="">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image "><img src="{{asset('asset/img/popular/dance.jpg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Travel Guides</h2>
                <p>Enhance your travel experience with our knowledgeable travel guides. Gain insights into local culture, history, and hidden gems to make the most of your journey.</p>
                <a href="">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image "><img src="{{asset('asset/img/popular/dance.jpg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Travel Guides</h2>
                <p>Enhance your travel experience with our knowledgeable travel guides. Gain insights into local culture, history, and hidden gems to make the most of your journey.</p>
                <a href="">READ MORE</a>
            </div>
            <div class="box-card">
                <div class="popular__card-image "><img src="{{asset('asset/img/popular/dance.jpg')}}" alt="" class="popular-category__cards-img"></div>
                <h2>Travel Guides</h2>
                <p>Enhance your travel experience with our knowledgeable travel guides. Gain insights into local culture, history, and hidden gems to make the most of your journey.</p>
                <a href="">READ MORE</a>
            </div>

        </div>
                
        
                
       




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
