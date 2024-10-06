<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> موقع المسليه التعليمي</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
    <script src="{{ asset('user/js/main.js') }}"></script>
    <link rel="icon" href="assets/OBJECTS.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="path/to/lightbox.css" rel="stylesheet">
    <script src="path/to/lightbox-plus-jquery.js"></script>
</head>

<body>
    <div class="overlay" id="loadingOverlay">
        <div class="loading-text">
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
                type="module"></script>

            <dotlottie-player src="https://lottie.host/d955b503-a90c-471b-9b12-7b53a9755bed/GKU0GZX6PC.json"
                background="transparent" speed="1" style="width: 200px; height: 200px;" loop
                autoplay></dotlottie-player>
        </div>
    </div>
    <header>
        <div class="sidebar-icon" onclick="openSidebar()">
            <img class="sidebar-icon" src="{{ asset('user/images/menu-3-line.png') }}" id="point">
        </div>

        <div id="sidebar">
            <div class="sidebar-content">
                <img src="{{ asset('user/images/OBJECTS.png') }}" alt="Company Logo" class="sidebar-logo">
                <center>
                    <img src="{{ asset("uploads/" . auth()->user()->image_path) }}" alt="Company Logo" class="sidebar-logo">
                </center>
                <h2>{{ auth()->user()->name }}</h2>
                <p>رقم الهوية : {{ auth()->user()->national_id }} </p>
                <p>{{ auth()->user()->grade }}</p>
            </div>



            <div class="sidebar-bottom">
                 <form action="{{ route('logout') }}" method="post">
                    @csrf
                     <button type="submit" style="background-color: transparent; border: none; outline: none;
                     position: absolute; right: 0px; bottom: 10px;">
                     <div class="logout-icon">
                   <img onclick="logout()" src="{{ asset('user/images/Sign_out_squre.png') }}" alt="">
               </div>

                 </button>
                 </form>
            </div>
            <div class="close-icon">
                <img onclick="closeSidebar()" src="{{ asset('user/images/close-line.png') }}" alt="">
            </div>
        </div>




        <h3 style=" color: #000;"> موقع المسليه التعليمي</h3>
        <img src="{{ asset('user/images/OBJECTS.png') }}" alt="Company Logo">
    </header>
<body>


</body>
</html>
