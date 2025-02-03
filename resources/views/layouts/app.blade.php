<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    
    <!--=============== FAVICON ===============-->
    <link rel="icon" href="{{asset('asset/img/favicon.png')}}" type="image/x-icon">
          
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
        
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">

    <!--=============== Boxicons CSS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        
    <!--=============== Swiper CSS ===============-->
    <link rel="stylesheet" href="{{asset('asset/css/swiper-bundle.min.css')}}">
    

    
    <!--=============== GSAP ===============-->
    <script src="https://cdn.tailwindcss.com"></script>
        
    <!--=============== Libraries Stylesheet ===============-->
    <link href="{{asset('asset/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet"/>


    <title>Travel and Tourism</title>


</head>
<body>

    @include('layouts.nav')
    @yield('content')

    @include('layouts.footer')


     <!--=============== SCROLL UP  ===============-->
     <a href="#" class="scroll-up" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>

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


        
    <!--=============== SCROLLREVEAL  ===============-->
    <script src="{{asset('asset/js/scrollreveal.min.js')}}"></script>

    <!--=============== MAIN JS  ===============-->

    <script src="{{asset('asset/js/script.js')}}"></script>
        
    <!--=============== JavaScript Libraries ===============-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('asset/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('asset/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('asset/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('asset/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('asset/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('asset/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('asset/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery-3.6.4.min.js')}}"></script>
</body>
</html>