@if ($user->user_type == 'معلم')
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> مدرسة مسلية الابتدائية</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
    <script src="{{ asset('user/js/main.js') }}"></script>
     <link rel="icon" href="/public/user/images/OBJECTS.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="path/to/lightbox.css" rel="stylesheet">
    <script src="path/to/lightbox-plus-jquery.js"></script>

    <style>
        .btn-conteiner {
      display: flex;
      justify-content: center;
      transform: translateY(70%);
      --color-text: #ffffff;
      --color-background: #369224;
      --color-outline: #ff145b80;
      --color-shadow: #00000080;
    }
    
    .btn-content {
      display: flex;
      align-items: center;
      padding: 5px 20px;
      text-decoration: none;
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      font-size: 25px;
      color: var(--color-text);
      background:  #1ebc7a;
      transition: 1s;
      border-radius: 100px;
      box-shadow: 0 0 0.2em 0 var(--color-background);
    }
    
    .btn-content:hover, .btn-content:focus {
      transition: 0.5s;
      -webkit-animation: btn-content 1s;
      animation: btn-content 1s;
      outline: 0.1em solid transparent;
      outline-offset: 0.2em;
      box-shadow: 0 0 0.4em 0 var(--color-background);
    }
    
    .btn-content .icon-arrow {
      transition: 0.5s;
      margin-right: 0px;
      transform: scale(0.6);
    }
    
    .btn-content:hover .icon-arrow {
      transition: 0.5s;
      margin-right: 25px;
    }
    
    .icon-arrow {
      width: 15px;
      margin-left: 15px;
      position: relative;
      top: 6%;
    }
    
    /* SVG */
    #arrow-icon-one {
      transition: 0.4s;
      transform: translateX(-60%);
    }
    
    #arrow-icon-two {
      transition: 0.5s;
      transform: translateX(-30%);
    }
    
    .btn-content:hover #arrow-icon-three {
      animation: color_anim 1s infinite 0.2s;
    }
    
    .btn-content:hover #arrow-icon-one {
      transform: translateX(0%);
      animation: color_anim 1s infinite 0.6s;
    }
    
    .btn-content:hover #arrow-icon-two {
      transform: translateX(0%);
      animation: color_anim 1s infinite 0.4s;
    }
    
    /* SVG animations */
    @keyframes color_anim {
      0% {
        fill: white;
      }
    
      50% {
        fill: var(--color-background);
      }
    
      100% {
        fill: white;
      }
    }
    
    /* Button animations */
    @-webkit-keyframes btn-content {
      0% {
        outline: 0.2em solid var(--color-background);
        outline-offset: 0;
      }
    }
    
    @keyframes btn-content {
      0% {
        outline: 0.2em solid var(--color-background);
        outline-offset: 0;
      }
    }
    </style>

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
                    <img src="{{ asset("uploads/" . $user->image_path) }}" alt="Company Logo" class="sidebar-logo">
                </center>
                <h2>{{$user->name }}</h2>
                <p>رقم الهوية : {{ $user->national_id }} </p>
                <p>{{ $user->grade }}</p>
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
            <div class="btn-conteiner">
                <a class="btn-content" href="{{ route('admin.home') }}">
                  <span class="btn-title">رجوع</span>
                  <span class="icon-arrow">
                    <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                      </g>
                    </svg>
                  </span>
                </a>
              </div>
            <div class="close-icon">
                <img onclick="closeSidebar()" src="{{ asset('user/images/close-line.png') }}" alt="">
            </div>
        </div>




        <h3 style=" color: #000;"> مدرسة مسلية الابتدائية </h3>
        <img src="{{ asset('user/images/OBJECTS.png') }}" alt="Company Logo">
    </header>
<body>




<section>
    <div class="card">
        <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
        <p>التكاليف</p>
        <div class="arrow-icon">

        <a href=""  class="event">
                <!------------------------------------------------------------------------>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                id="toggleIconSvg" onclick="showSectionAndChangeIcon()" id="chevron-down">
                <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>
            <!------------------------------------------------------------------------>
        </a>


       <a href="" class="evento">
             <!------------------------------------------------------------------------>
             <svg id="toggleIconPng" onclick="hideSectionAndChangeIcon()" style="display: none;"
             xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
             <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round" />
         </svg>
         <!------------------------------------------------------------------------>
       </a>
        </div>
    </div>
    <div class="card">
        <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
        <p>السيرة الذاتية </p>
        <div class="arrow-icon">

            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                id="toggleIconSvga" onclick="showSectionAndChangeIcona()" <g id="chevron-down">
                <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>
           <!------------------------------------------------------------------------>
           <svg id="toggleIconPnga" onclick="hideSectionAndChangeIcona()" style="display: none;"
           xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
           <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
               stroke-linejoin="round" />
       </svg>
       <!------------------------------------------------------------------------>
        </div>
    </div>
    <div class="card">
        <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
        <p>جدول الحصص</p>
        <div class="arrow-icon">

            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                id="toggleIconSvgb" onclick="showSectionAndChangeIconb()" <g id="chevron-down">
                <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>

            <svg id="toggleIconPngb" onclick="hideSectionAndChangeIconb()" style="display: none;"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
        </div>
    </div>
</section>

<div id="section">




    <section class="image-gallery">
        @foreach ($homeworks as $homework)
        @foreach (json_decode($homework->file_path) as $index => $file)


        <div class="image-container">
            @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

            <img src="{{ asset('user/images/images.png') }}"  alt="">
            <div class="icons">
                <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                    <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                    <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                    </i>
                </a>


            </div>

            @endif

            @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

            <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
             <div class="icons">
                <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                    <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($homework->file_path)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


               
            </div>

             @endif

        </div>
        @endforeach
        @endforeach

    </section>
</div>
<div id="sectiona">



    <section class="image-gallery">
        @foreach ($cvs as $cv)
        @foreach (json_decode($cv->file_path) as $index =>  $file)

        <div class="image-container">
            @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

            <img src="{{ asset('user/images/images.png') }}"  alt="">
            <div class="icons">
                <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                    <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                    </a>

              
            </div>

            @endif

            @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

            <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
            <div class="icons">
                <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                    <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                    </a>

               
            </div>

            @endif

        </div>

        @endforeach
        @endforeach

    </section>
</div>

<div id="sectionb">



    <section class="image-gallery">
        @foreach ($tables as $table)
        @foreach (json_decode($table->file_path) as $index => $file)

        <div class="image-container">
            @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

            <img src="{{ asset('user/images/images.png') }}" alt="">
            <div class="icons">
                <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                    <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                        <i class="fa fa-download" style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                    </a>

               
            </div>

            @endif

            @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

            <img src="{{ asset("uploads/$file") }}" alt="Image 1">
            <div class="icons">
                <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                    <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                        <i class="fa fa-download" style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                    </a>

                
            </div>

            @endif

        </div>

        @endforeach
        @endforeach

    </section>
</div>



<section>
    <div class="card">
        <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
        <p>الدورات التدريبية</p>
        <div class="arrow-icon">

        <a href=""  class="events">
                <!------------------------------------------------------------------------>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                id="toggleIconSvg2" onclick="showSectionAndChangeIcon2()" id="chevron-down">
                <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>
            <!------------------------------------------------------------------------>
        </a>


       <a href="" class="eventr">
             <!------------------------------------------------------------------------>
             <svg id="toggleIconPng2" onclick="hideSectionAndChangeIcon2()" style="display: none;"
             xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
             <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round" />
         </svg>
         <!------------------------------------------------------------------------>
       </a>
        </div>
    </div>
    <div class="card">
        <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
        <p>اوراق العمل </p>
        <div class="arrow-icon">

            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                id="toggleIconSvgc" onclick="showSectionAndChangeIconc()" <g id="chevron-down">
                <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>
             <!------------------------------------------------------------------------>
             <svg id="toggleIconPngc" onclick="hideSectionAndChangeIconc()" style="display: none;"
             xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
             <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round" />
         </svg>
         <!------------------------------------------------------------------------>
        </div>
    </div>
    <div class="card">
        <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
                   <p>الرؤية والرسالة</p>
        <div class="arrow-icon">

            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                id="toggleIconSvgd" onclick="showSectionAndChangeIcond()" <g id="chevron-down">
                <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>
                    <!------------------------------------------------------------------------>
             <svg id="toggleIconPngd" onclick="hideSectionAndChangeIcond()" style="display: none;"
             xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
             <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round" />
         </svg>
         <!------------------------------------------------------------------------>

        </div>
    </div>
</section>
<div id="section2">




    <section class="image-gallery">
        @foreach ($avtivities as $activity)
        @foreach (json_decode($activity->file_path) as $index => $file)

        <div class="image-container">
            @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

            <img src="{{ asset('user/images/images.png') }}"  alt="">
            <div class="icons">
                <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                    <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                    <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                    </i>
                </a>


                
            </div>

            @endif

            @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

            <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
             <div class="icons">
                <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                    <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                    <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                    </i>
                </a>


               
            </div>

             @endif

        </div>

        @endforeach
        @endforeach

    </section>
</div>
<div id="sectionc">




    <section class="image-gallery">
        @foreach ($paperworks as $paperwork)
        @foreach (json_decode($paperwork->file_path) as $index => $file)

        <div class="image-container">
            @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

            <img src="{{ asset('user/images/images.png') }}"  alt="">
            <div class="icons">
                <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                    <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                    <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                    </i>
                </a>


               
            </div>

            @endif

            @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

            <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
             <div class="icons">
                <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                    <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                    <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                    </i>
                </a>


                
            </div>

             @endif

        </div>

        @endforeach
        @endforeach

    </section>
</div>
<div id="sectiond">




    <section class="image-gallery">
        @foreach ($visions as $vision)
        @foreach (json_decode($vision->file_path) as $index => $file)

        <div class="image-container">
            @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

            <img src="{{ asset('user/images/images.png') }}"  alt="">
            <div class="icons">
                <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                    <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                    <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                    </i>
                </a>


              
            </div>

            @endif

            @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

            <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
             <div class="icons">
                <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                    <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                    <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                    </i>
                </a>


                
            </div>

             @endif

        </div>

        @endforeach
        @endforeach

    </section>
</div>

<section>
    <div class="card">
        <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
      <p>الأهداف العامة للتعليم</p>

        <div class="arrow-icon">

        <a href=""  class="eventp">
                <!------------------------------------------------------------------------>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                id="toggleIconSvg3" onclick="showSectionAndChangeIcon3()" id="chevron-down">
                <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>
            <!------------------------------------------------------------------------>
        </a>


       <a href="" class="eventh">
             <!------------------------------------------------------------------------>
             <svg id="toggleIconPng3" onclick="hideSectionAndChangeIcon3()" style="display: none;"
             xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
             <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round" />
         </svg>
         <!------------------------------------------------------------------------>
       </a>
        </div>
    </div>
    <div class="card">
        <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
        <p>شهادات الشكر</p>
        <div class="arrow-icon">

            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                id="toggleIconSvge" onclick="showSectionAndChangeIcone()" <g id="chevron-down">
                <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>
                <!------------------------------------------------------------------------>
                <svg id="toggleIconPnge" onclick="hideSectionAndChangeIcone()" style="display: none;"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <!------------------------------------------------------------------------>
        </div>
    </div>
    <div class="card">
        <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
        <p> الخطط العلاجية</p>
        <div class="arrow-icon">

            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                id="toggleIconSvgf" onclick="showSectionAndChangeIconf()" <g id="chevron-down">
                <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>
                <!------------------------------------------------------------------------>
                <svg id="toggleIconPngf" onclick="hideSectionAndChangeIconf()" style="display: none;"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <!------------------------------------------------------------------------>

        </div>
    </div>
</section>
<div id="section3">




    <section class="image-gallery">
        @foreach ($goals as $goal)
        @foreach (json_decode($goal->file_path) as $index => $file)

        <div class="image-container">
            @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

            <img src="{{ asset('user/images/images.png') }}"  alt="">
            <div class="icons">
                <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                    <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                    <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                    </i>
                </a>


                
            </div>

            @endif

            @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

            <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
             <div class="icons">
                <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                    <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                    <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                    </i>
                </a>


               
            </div>

             @endif

        </div>

        @endforeach
        @endforeach

    </section>
</div>
<div id="sectione">




    <section class="image-gallery">
        @foreach ($sciences as $science)
        @foreach (json_decode($science->file_path) as $index => $file)

        <div class="image-container">
            @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

            <img src="{{ asset('user/images/images.png') }}"  alt="">
            <div class="icons">
                <a style="text-decoration: none;"  href="{{ asset("uploads/$file") }}" target="_blank">
                    <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                    <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                    </i>
                </a>


              
            </div>

            @endif

            @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

            <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
             <div class="icons">
                <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                    <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                    <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                    </i>
                </a>


                
            </div>

             @endif

        </div>

        @endforeach
        @endforeach

    </section>
</div>
<div id="sectionf">




    <section class="image-gallery">
        @foreach ($plains as $plain)
        @foreach (json_decode($plain->file_path) as $index => $file)

        <div class="image-container">
            @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

            <img src="{{ asset('user/images/images.png') }}"  alt="">
            <div class="icons">
                <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                    <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                    <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                    </i>
                </a>


              
            </div>

            @endif

            @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

            <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
             <div class="icons">
                <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                    <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                    <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                    </i>
                </a>


                
            </div>

             @endif

        </div>

        @endforeach
        @endforeach

    </section>
</div>
<section>
    <div class="card">
        <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
      <p>نماذج الاختبارات</p>

        <div class="arrow-icon">

        <a href=""  class="eventk">
                <!------------------------------------------------------------------------>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                id="toggleIconSvg4" onclick="showSectionAndChangeIcon4()" id="chevron-down">
                <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>
            <!------------------------------------------------------------------------>
        </a>


       <a href="" class="eventf">
             <!------------------------------------------------------------------------>
             <svg id="toggleIconPng4" onclick="hideSectionAndChangeIcon4()" style="display: none;"
             xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
             <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round" />
         </svg>
         <!------------------------------------------------------------------------>
       </a>
        </div>
    </div>
    <div class="card">
        <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
        <p>اخرى</p>
        <div class="arrow-icon">

        <a href=""  class="eve">
                <!------------------------------------------------------------------------>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                id="toggleIconSvg8" onclick="showSectionAndChangeIcon8()" id="chevron-down">
                <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>
            <!------------------------------------------------------------------------>
        </a>


       <a href="" class="evew">
             <!------------------------------------------------------------------------>
             <svg id="toggleIconPng8" onclick="hideSectionAndChangeIcon8()" style="display: none;"
             xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
             <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round" />
         </svg>
         <!------------------------------------------------------------------------>
       </a>
        </div>
    </div>
</section>
<div id="section4">




    <section class="image-gallery">
        @foreach ($englishes as $english)
        @foreach (json_decode($english->file_path) as $index => $file)

        <div class="image-container">
            @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

            <img src="{{ asset('user/images/images.png') }}"  alt="">
            <div class="icons">
                <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                    <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                    <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                    </i>
                </a>


                
            </div>

            @endif

            @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

            <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
             <div class="icons">
                <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                    <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                    <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                    </i>
                </a>


              
            </div>

             @endif

        </div>

        @endforeach
        @endforeach

    </section>
</div>
<div id="section8">




    <section class="image-gallery">
        @foreach ($others as $other)
        @foreach (json_decode($other->file_path) as $index => $file)

        <div class="image-container">
            @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

            <img src="{{ asset('user/images/images.png') }}"  alt="">
            <div class="icons">
                <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                    <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                    <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                    </i>
                </a>


               
            </div>

            @endif

            @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

            <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
             <div class="icons">
                <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                    <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                    <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                    </i>
                </a>


            </div>

             @endif

        </div>

        @endforeach
        @endforeach

    </section>
</div>

</body>
</html>
@endif



@if($user->user_type == 'طالب')

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
   <link rel="icon" href="/public/user/images/OBJECTS.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="path/to/lightbox.css" rel="stylesheet">
    <script src="path/to/lightbox-plus-jquery.js"></script>

    <style>
        .btn-conteiner {
      display: flex;
      justify-content: center;
      transform: translateY(70%);
      --color-text: #ffffff;
      --color-background: #369224;
      --color-outline: #ff145b80;
      --color-shadow: #00000080;
    }
    
    .btn-content {
      display: flex;
      align-items: center;
      padding: 5px 20px;
      text-decoration: none;
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      font-size: 25px;
      color: var(--color-text);
      background:  #1ebc7a;
      transition: 1s;
      border-radius: 100px;
      box-shadow: 0 0 0.2em 0 var(--color-background);
    }
    
    .btn-content:hover, .btn-content:focus {
      transition: 0.5s;
      -webkit-animation: btn-content 1s;
      animation: btn-content 1s;
      outline: 0.1em solid transparent;
      outline-offset: 0.2em;
      box-shadow: 0 0 0.4em 0 var(--color-background);
    }
    
    .btn-content .icon-arrow {
      transition: 0.5s;
      margin-right: 0px;
      transform: scale(0.6);
    }
    
    .btn-content:hover .icon-arrow {
      transition: 0.5s;
      margin-right: 25px;
    }
    
    .icon-arrow {
      width: 15px;
      margin-left: 15px;
      position: relative;
      top: 6%;
    }
    
    /* SVG */
    #arrow-icon-one {
      transition: 0.4s;
      transform: translateX(-60%);
    }
    
    #arrow-icon-two {
      transition: 0.5s;
      transform: translateX(-30%);
    }
    
    .btn-content:hover #arrow-icon-three {
      animation: color_anim 1s infinite 0.2s;
    }
    
    .btn-content:hover #arrow-icon-one {
      transform: translateX(0%);
      animation: color_anim 1s infinite 0.6s;
    }
    
    .btn-content:hover #arrow-icon-two {
      transform: translateX(0%);
      animation: color_anim 1s infinite 0.4s;
    }
    
    /* SVG animations */
    @keyframes color_anim {
      0% {
        fill: white;
      }
    
      50% {
        fill: var(--color-background);
      }
    
      100% {
        fill: white;
      }
    }
    
    /* Button animations */
    @-webkit-keyframes btn-content {
      0% {
        outline: 0.2em solid var(--color-background);
        outline-offset: 0;
      }
    }
    
    @keyframes btn-content {
      0% {
        outline: 0.2em solid var(--color-background);
        outline-offset: 0;
      }
    }
    </style>
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
                    <img src="{{ asset("uploads/" . $user->image_path) }}" alt="Company Logo" class="sidebar-logo">
                </center>
                <h2>{{ $user->name }}</h2>
                <p>رقم الهوية : {{ $user->national_id }} </p>
                <p>{{ $user->grade }}</p>
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
            <div class="btn-conteiner">
                <a class="btn-content" href="{{ route('admin.home') }}">
                  <span class="btn-title">رجوع</span>
                  <span class="icon-arrow">
                    <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                      </g>
                    </svg>
                  </span>
                </a>
              </div>
            <div class="close-icon">
                <img onclick="closeSidebar()" src="{{ asset('user/images/close-line.png') }}" alt="">
            </div>
        </div>




                <h3 style=" color: #000;"> مدرسة مسلية الابتدائية </h3>
        <img src="{{ asset('user/images/OBJECTS.png') }}" alt="Company Logo">
    </header>
<body>


    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>الواجبات</p>
            <div class="arrow-icon">

            <a href=""  class="event">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg" onclick="showSectionAndChangeIcon()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="evento">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng" onclick="hideSectionAndChangeIcon()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p>السيرة الذاتية </p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvga" onclick="showSectionAndChangeIcona()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
               <!------------------------------------------------------------------------>
               <svg id="toggleIconPnga" onclick="hideSectionAndChangeIcona()" style="display: none;"
               xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
               <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round" />
           </svg>
           <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p>جدول الحصص</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgb" onclick="showSectionAndChangeIconb()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>

                <svg id="toggleIconPngb" onclick="hideSectionAndChangeIconb()" style="display: none;"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
            </div>
        </div>
    </section>

    <div id="section">



        <section class="image-gallery">
            @foreach ($homeworks as $homework)
            @foreach (json_decode($homework->file_path) as $index => $file)


            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>



                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($homework->file_path)) }}">
                            <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                            </i>
                        </a>



                </div>

                 @endif

            </div>
            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectiona">




        <section class="image-gallery">
            @foreach ($cvs as $cv)
            @foreach (json_decode($cv->file_path) as $index =>  $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                  
                </div>

                @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionb">




        <section class="image-gallery">
            @foreach ($tables as $table)
            @foreach (json_decode($table->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}" alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download" style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                  
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img src="{{ asset("uploads/$file") }}" alt="Image 1">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download" style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                    
                </div>

                @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>


    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>الانشطة</p>
            <div class="arrow-icon">

            <a href=""  class="events">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg2" onclick="showSectionAndChangeIcon2()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="eventr">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng2" onclick="hideSectionAndChangeIcon2()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p>اوراق العمل </p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgc" onclick="showSectionAndChangeIconc()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPngc" onclick="hideSectionAndChangeIconc()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p>لغتي</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgd" onclick="showSectionAndChangeIcond()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                        <!------------------------------------------------------------------------>
                 <svg id="toggleIconPngd" onclick="hideSectionAndChangeIcond()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>

            </div>
        </div>
    </section>
    <div id="section2">




        <section class="image-gallery">
            @foreach ($avtivities as $activity)
            @foreach (json_decode($activity->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                  
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionc">




        <section class="image-gallery">
            @foreach ($paperworks as $paperwork)
            @foreach (json_decode($paperwork->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                  
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectiond">




        <section class="image-gallery">
            @foreach ($languages as $language)
            @foreach(json_decode($language->file_path) as $index => $file)
            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                  
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>الرياضيات</p>
            <div class="arrow-icon">

            <a href=""  class="eventp">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg3" onclick="showSectionAndChangeIcon3()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="eventh">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng3" onclick="hideSectionAndChangeIcon3()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p>العلوم</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvge" onclick="showSectionAndChangeIcone()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                    <!------------------------------------------------------------------------>
                    <svg id="toggleIconPnge" onclick="hideSectionAndChangeIcone()" style="display: none;"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
               <p>الدراسات الاسلامية</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgf" onclick="showSectionAndChangeIconf()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                    <!------------------------------------------------------------------------>
                    <svg id="toggleIconPngf" onclick="hideSectionAndChangeIconf()" style="display: none;"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <!------------------------------------------------------------------------>

            </div>
        </div>
    </section>
    <div id="section3">




        <section class="image-gallery">
            @foreach ($maths as $math)
            @foreach (json_decode($math->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectione">




        <section class="image-gallery">
            @foreach ($sciences as $science)
            @foreach (json_decode($science->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;"  href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                  
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionf">




        <section class="image-gallery">
            @foreach ($islamics as $islamic)
            @foreach (json_decode($islamic->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>انجليزي</p>
            <div class="arrow-icon">

            <a href=""  class="eventk">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg4" onclick="showSectionAndChangeIcon4()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="eventf">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng4" onclick="hideSectionAndChangeIcon4()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p>مهارات رقمية </p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgg" onclick="showSectionAndChangeIcong()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
                <svg id="toggleIconPngg" onclick="hideSectionAndChangeIcong()" style="display: none;"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
           <p> الدراسات الاجتماعية </p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgh" onclick="showSectionAndChangeIconh()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
              <!------------------------------------------------------------------------>
              <svg id="toggleIconPngh" onclick="hideSectionAndChangeIconh()" style="display: none;"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
          </svg>
          <!------------------------------------------------------------------------>

            </div>
        </div>
    </section>
    <div id="section4">




        <section class="image-gallery">
            @foreach ($englishes as $english)
            @foreach (json_decode($english->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectiong">




        <section class="image-gallery">
            @foreach ($skills as $skill)
            @foreach (json_decode($skill->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionh">




        <section class="image-gallery">
            @foreach ($socials as $social)
            @foreach (json_decode($social->file_path) as $index => $social)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>



    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>اخرى</p>
            <div class="arrow-icon">

            <a href=""  class="eve">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg8" onclick="showSectionAndChangeIcon8()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="evew">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng8" onclick="hideSectionAndChangeIcon8()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
    </section>
    <div id="section8">




        <section class="image-gallery">
            @foreach ($others as $other)
            @foreach (json_decode($other->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>

</body>
</html>

@endif



@if($user->user_type == 'اداري')

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
    <link rel="icon" href="/public/user/images/OBJECTS.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="path/to/lightbox.css" rel="stylesheet">
    <script src="path/to/lightbox-plus-jquery.js"></script>

    <style>
        .btn-conteiner {
      display: flex;
      justify-content: center;
      transform: translateY(70%);
      --color-text: #ffffff;
      --color-background: #369224;
      --color-outline: #ff145b80;
      --color-shadow: #00000080;
    }
    
    .btn-content {
      display: flex;
      align-items: center;
      padding: 5px 20px;
      text-decoration: none;
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      font-size: 25px;
      color: var(--color-text);
      background:  #1ebc7a;
      transition: 1s;
      border-radius: 100px;
      box-shadow: 0 0 0.2em 0 var(--color-background);
    }
    
    .btn-content:hover, .btn-content:focus {
      transition: 0.5s;
      -webkit-animation: btn-content 1s;
      animation: btn-content 1s;
      outline: 0.1em solid transparent;
      outline-offset: 0.2em;
      box-shadow: 0 0 0.4em 0 var(--color-background);
    }
    
    .btn-content .icon-arrow {
      transition: 0.5s;
      margin-right: 0px;
      transform: scale(0.6);
    }
    
    .btn-content:hover .icon-arrow {
      transition: 0.5s;
      margin-right: 25px;
    }
    
    .icon-arrow {
      width: 15px;
      margin-left: 15px;
      position: relative;
      top: 6%;
    }
    
    /* SVG */
    #arrow-icon-one {
      transition: 0.4s;
      transform: translateX(-60%);
    }
    
    #arrow-icon-two {
      transition: 0.5s;
      transform: translateX(-30%);
    }
    
    .btn-content:hover #arrow-icon-three {
      animation: color_anim 1s infinite 0.2s;
    }
    
    .btn-content:hover #arrow-icon-one {
      transform: translateX(0%);
      animation: color_anim 1s infinite 0.6s;
    }
    
    .btn-content:hover #arrow-icon-two {
      transform: translateX(0%);
      animation: color_anim 1s infinite 0.4s;
    }
    
    /* SVG animations */
    @keyframes color_anim {
      0% {
        fill: white;
      }
    
      50% {
        fill: var(--color-background);
      }
    
      100% {
        fill: white;
      }
    }
    
    /* Button animations */
    @-webkit-keyframes btn-content {
      0% {
        outline: 0.2em solid var(--color-background);
        outline-offset: 0;
      }
    }
    
    @keyframes btn-content {
      0% {
        outline: 0.2em solid var(--color-background);
        outline-offset: 0;
      }
    }
    </style>
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
                    <img src="{{ asset("uploads/" . $user->image_path) }}" alt="Company Logo" class="sidebar-logo">
                </center>
                <h2>{{ $user->name }}</h2>
                <p>رقم الهوية : {{ $user->national_id }} </p>
                <p>{{ $user->grade }}</p>
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
            <div class="btn-conteiner">
                <a class="btn-content" href="{{ route('admin.home') }}">
                  <span class="btn-title">رجوع</span>
                  <span class="icon-arrow">
                    <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                      </g>
                    </svg>
                  </span>
                </a>
              </div>
            <div class="close-icon">
                <img onclick="closeSidebar()" src="{{ asset('user/images/close-line.png') }}" alt="">
            </div>
        </div>




       <h3 style=" color: #000;"> مدرسة مسلية الابتدائية </3>
        <img src="{{ asset('user/images/OBJECTS.png') }}" alt="Company Logo">
    </header>
<body>

    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>التكاليف</p>
            <div class="arrow-icon">

            <a href=""  class="event">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg" onclick="showSectionAndChangeIcon()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="evento">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng" onclick="hideSectionAndChangeIcon()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
                <p>السيرة الذاتية </p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvga" onclick="showSectionAndChangeIcona()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
               <!------------------------------------------------------------------------>
               <svg id="toggleIconPnga" onclick="hideSectionAndChangeIcona()" style="display: none;"
               xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
               <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round" />
           </svg>
           <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p>الأعمال التطوعيه</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgb" onclick="showSectionAndChangeIconb()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>

                <svg id="toggleIconPngb" onclick="hideSectionAndChangeIconb()" style="display: none;"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
            </div>
        </div>
    </section>

    <div id="section">




        <section class="image-gallery">
            @foreach ($homeworks as $homework)
            @foreach (json_decode($homework->file_path) as $index => $file)


            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($homework->file_path)) }}">
                            <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                            </i>
                        </a>


                    
                </div>

                 @endif

            </div>
            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectiona">



        <section class="image-gallery">
            @foreach ($cvs as $cv)
            @foreach (json_decode($cv->file_path) as $index =>  $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                    
                </div>

                @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionb">



        <section class="image-gallery">
            @foreach ($tables as $table)
            @foreach (json_decode($table->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}" alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download" style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img src="{{ asset("uploads/$file") }}" alt="Image 1">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download" style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                    
                </div>

                @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>


    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
           <p>الدورات التدريبية</p>
            <div class="arrow-icon">

            <a href=""  class="events">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg2" onclick="showSectionAndChangeIcon2()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="eventr">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng2" onclick="hideSectionAndChangeIcon2()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p> ميثاق الاداء الوظيفي </p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgc" onclick="showSectionAndChangeIconc()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPngc" onclick="hideSectionAndChangeIconc()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p>الرؤية والرسالة</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgd" onclick="showSectionAndChangeIcond()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                        <!------------------------------------------------------------------------>
                 <svg id="toggleIconPngd" onclick="hideSectionAndChangeIcond()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>

            </div>
        </div>
    </section>
    <div id="section2">




        <section class="image-gallery">
            @foreach ($avtivities as $activity)
            @foreach (json_decode($activity->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionc">




        <section class="image-gallery">
            @foreach ($paperworks as $paperwork)
            @foreach (json_decode($paperwork->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectiond">




        <section class="image-gallery">
            @foreach ($visions as $vision)
            @foreach (json_decode($vision->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>الأهداف</p>
            <div class="arrow-icon">

            <a href=""  class="eventp">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg3" onclick="showSectionAndChangeIcon3()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="eventh">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng3" onclick="hideSectionAndChangeIcon3()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p>شهادات الشكر</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvge" onclick="showSectionAndChangeIcone()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                    <!------------------------------------------------------------------------>
                    <svg id="toggleIconPnge" onclick="hideSectionAndChangeIcone()" style="display: none;"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
                 <p>اخرى</p>
            <div class="arrow-icon">

            <a href=""  class="eve">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg8" onclick="showSectionAndChangeIcon8()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="evew">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng8" onclick="hideSectionAndChangeIcon8()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
    </section>
    <div id="section3">



        <section class="image-gallery">
            @foreach ($goals as $goal)
            @foreach (json_decode($goal->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectione">




        <section class="image-gallery">
            @foreach ($sciences as $science)
            @foreach (json_decode($science->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;"  href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="section8">


        <section class="image-gallery">
            @foreach ($others as $other)
            @foreach (json_decode($other->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>




</body>
</html>




@endif

@if($user->user_type == 'المدير')

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
   <link rel="icon" href="/public/user/images/OBJECTS.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="path/to/lightbox.css" rel="stylesheet">
    <script src="path/to/lightbox-plus-jquery.js"></script>

    <style>
        .btn-conteiner {
      display: flex;
      justify-content: center;
      transform: translateY(70%);
      --color-text: #ffffff;
      --color-background: #369224;
      --color-outline: #ff145b80;
      --color-shadow: #00000080;
    }
    
    .btn-content {
      display: flex;
      align-items: center;
      padding: 5px 20px;
      text-decoration: none;
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      font-size: 25px;
      color: var(--color-text);
      background:  #1ebc7a;
      transition: 1s;
      border-radius: 100px;
      box-shadow: 0 0 0.2em 0 var(--color-background);
    }
    
    .btn-content:hover, .btn-content:focus {
      transition: 0.5s;
      -webkit-animation: btn-content 1s;
      animation: btn-content 1s;
      outline: 0.1em solid transparent;
      outline-offset: 0.2em;
      box-shadow: 0 0 0.4em 0 var(--color-background);
    }
    
    .btn-content .icon-arrow {
      transition: 0.5s;
      margin-right: 0px;
      transform: scale(0.6);
    }
    
    .btn-content:hover .icon-arrow {
      transition: 0.5s;
      margin-right: 25px;
    }
    
    .icon-arrow {
      width: 15px;
      margin-left: 15px;
      position: relative;
      top: 6%;
    }
    
    /* SVG */
    #arrow-icon-one {
      transition: 0.4s;
      transform: translateX(-60%);
    }
    
    #arrow-icon-two {
      transition: 0.5s;
      transform: translateX(-30%);
    }
    
    .btn-content:hover #arrow-icon-three {
      animation: color_anim 1s infinite 0.2s;
    }
    
    .btn-content:hover #arrow-icon-one {
      transform: translateX(0%);
      animation: color_anim 1s infinite 0.6s;
    }
    
    .btn-content:hover #arrow-icon-two {
      transform: translateX(0%);
      animation: color_anim 1s infinite 0.4s;
    }
    
    /* SVG animations */
    @keyframes color_anim {
      0% {
        fill: white;
      }
    
      50% {
        fill: var(--color-background);
      }
    
      100% {
        fill: white;
      }
    }
    
    /* Button animations */
    @-webkit-keyframes btn-content {
      0% {
        outline: 0.2em solid var(--color-background);
        outline-offset: 0;
      }
    }
    
    @keyframes btn-content {
      0% {
        outline: 0.2em solid var(--color-background);
        outline-offset: 0;
      }
    }
    </style>
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
                    <img src="{{ asset("uploads/" . $user->image_path) }}" alt="Company Logo" class="sidebar-logo">
                </center>
                <h2>{{ $user->name }}</h2>
                <p>رقم الهوية : {{ $user->national_id }} </p>
                <p>{{ $user->grade }}</p>
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
            
            <div class="btn-conteiner">
                <a class="btn-content" href="{{ route('admin.home') }}">
                  <span class="btn-title">رجوع</span>
                  <span class="icon-arrow">
                    <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                      </g>
                    </svg>
                  </span>
                </a>
              </div>
            <div class="close-icon">
                <img onclick="closeSidebar()" src="{{ asset('user/images/close-line.png') }}" alt="">
            </div>
        </div>




        <h3 style=" color: #000;"> مدرسة مسلية الابتدائية </h3>
        <img src="{{ asset('user/images/OBJECTS.png') }}" alt="Company Logo">
    </header>
<body>

    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>متابعه الخطه</p>
            <div class="arrow-icon">

            <a href=""  class="event">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg" onclick="showSectionAndChangeIcon()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="evento">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng" onclick="hideSectionAndChangeIcon()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
               <p>السيرة الذاتية </p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvga" onclick="showSectionAndChangeIcona()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
               <!------------------------------------------------------------------------>
               <svg id="toggleIconPnga" onclick="hideSectionAndChangeIcona()" style="display: none;"
               xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
               <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round" />
           </svg>
           <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p>الشئون الماليه</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgb" onclick="showSectionAndChangeIconb()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>

                <svg id="toggleIconPngb" onclick="hideSectionAndChangeIconb()" style="display: none;"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
            </div>
        </div>
    </section>

    <div id="section">




        <section class="image-gallery">
            @foreach ($homeworks as $homework)
            @foreach (json_decode($homework->file_path) as $index => $file)


            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($homework->file_path)) }}">
                            <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                            </i>
                        </a>


                  
                </div>

                 @endif

            </div>
            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectiona">




        <section class="image-gallery">
            @foreach ($cvs as $cv)
            @foreach (json_decode($cv->file_path) as $index =>  $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                  
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                   
                </div>

                @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionb">




        <section class="image-gallery">
            @foreach ($tables as $table)
            @foreach (json_decode($table->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}" alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download" style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img src="{{ asset("uploads/$file") }}" alt="Image 1">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download" style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                   
                </div>

                @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>


    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>خطه التطوير والتحسين</p>
            <div class="arrow-icon">

            <a href=""  class="events">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg2" onclick="showSectionAndChangeIcon2()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="eventr">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng2" onclick="hideSectionAndChangeIcon2()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
                 <p>الأهداف العامة للتعليم</p>

            <div class="arrow-icon">

            <a href=""  class="eventp">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg3" onclick="showSectionAndChangeIcon3()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="eventh">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng3" onclick="hideSectionAndChangeIcon3()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
          <p>الرؤية والرسالة</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgd" onclick="showSectionAndChangeIcond()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                        <!------------------------------------------------------------------------>
                 <svg id="toggleIconPngd" onclick="hideSectionAndChangeIcond()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>

            </div>
        </div>
    </section>
    <div id="section2">




        <section class="image-gallery">
            @foreach ($avtivities as $activity)
            @foreach (json_decode($activity->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="section3">




        <section class="image-gallery">
            @foreach ($goals as $goal)
            @foreach (json_decode($goal->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectiond">



        <section class="image-gallery">
            @foreach ($visions as $vision)
            @foreach (json_decode($vision->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <section>

        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p>اللجان والجتماعات</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvge" onclick="showSectionAndChangeIcone()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                    <!------------------------------------------------------------------------>
                    <svg id="toggleIconPnge" onclick="hideSectionAndChangeIcone()" style="display: none;"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p> خطه تشغيليه</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgf" onclick="showSectionAndChangeIconf()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                    <!------------------------------------------------------------------------>
                    <svg id="toggleIconPngf" onclick="hideSectionAndChangeIconf()" style="display: none;"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <!------------------------------------------------------------------------>

            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
             <p>اخرى</p>
            <div class="arrow-icon">

            <a href=""  class="eve">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg8" onclick="showSectionAndChangeIcon8()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="evew">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng8" onclick="hideSectionAndChangeIcon8()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
    </section>

    <div id="sectione">




        <section class="image-gallery">
            @foreach ($meetings as $meeting)
            @foreach (json_decode($meeting->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;"  href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionf">



        <section class="image-gallery">
            @foreach ($plains as $plain)
            @foreach (json_decode($plain->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                  
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="section8">


      

        <section class="image-gallery">
            @foreach ($others as $other)
            @foreach (json_decode($other->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>


</body>
</html>





@endif

@if($user->user_type == 'التوجيه الطلابي')

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
   <link rel="icon" href="/public/user/images/OBJECTS.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="path/to/lightbox.css" rel="stylesheet">
    <script src="path/to/lightbox-plus-jquery.js"></script>
    <style>
        .btn-conteiner {
      display: flex;
      justify-content: center;
      transform: translateY(70%);
      --color-text: #ffffff;
      --color-background: #369224;
      --color-outline: #ff145b80;
      --color-shadow: #00000080;
    }
    
    .btn-content {
      display: flex;
      align-items: center;
      padding: 5px 20px;
      text-decoration: none;
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      font-size: 25px;
      color: var(--color-text);
      background:  #1ebc7a;
      transition: 1s;
      border-radius: 100px;
      box-shadow: 0 0 0.2em 0 var(--color-background);
    }
    
    .btn-content:hover, .btn-content:focus {
      transition: 0.5s;
      -webkit-animation: btn-content 1s;
      animation: btn-content 1s;
      outline: 0.1em solid transparent;
      outline-offset: 0.2em;
      box-shadow: 0 0 0.4em 0 var(--color-background);
    }
    
    .btn-content .icon-arrow {
      transition: 0.5s;
      margin-right: 0px;
      transform: scale(0.6);
    }
    
    .btn-content:hover .icon-arrow {
      transition: 0.5s;
      margin-right: 25px;
    }
    
    .icon-arrow {
      width: 15px;
      margin-left: 15px;
      position: relative;
      top: 6%;
    }
    
    /* SVG */
    #arrow-icon-one {
      transition: 0.4s;
      transform: translateX(-60%);
    }
    
    #arrow-icon-two {
      transition: 0.5s;
      transform: translateX(-30%);
    }
    
    .btn-content:hover #arrow-icon-three {
      animation: color_anim 1s infinite 0.2s;
    }
    
    .btn-content:hover #arrow-icon-one {
      transform: translateX(0%);
      animation: color_anim 1s infinite 0.6s;
    }
    
    .btn-content:hover #arrow-icon-two {
      transform: translateX(0%);
      animation: color_anim 1s infinite 0.4s;
    }
    
    /* SVG animations */
    @keyframes color_anim {
      0% {
        fill: white;
      }
    
      50% {
        fill: var(--color-background);
      }
    
      100% {
        fill: white;
      }
    }
    
    /* Button animations */
    @-webkit-keyframes btn-content {
      0% {
        outline: 0.2em solid var(--color-background);
        outline-offset: 0;
      }
    }
    
    @keyframes btn-content {
      0% {
        outline: 0.2em solid var(--color-background);
        outline-offset: 0;
      }
    }
    </style>
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
                    <img src="{{ asset("uploads/" . $user->image_path) }}" alt="Company Logo" class="sidebar-logo">
                </center>
                <h2>{{ $user->name }}</h2>
                <p>رقم الهوية : {{ $user->national_id }} </p>
                <p>{{ $user->grade }}</p>
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
            <div class="btn-conteiner">
                <a class="btn-content" href="{{ route('admin.home') }}">
                  <span class="btn-title">رجوع</span>
                  <span class="icon-arrow">
                    <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                      </g>
                    </svg>
                  </span>
                </a>
              </div>
            <div class="close-icon">
                <img onclick="closeSidebar()" src="{{ asset('user/images/close-line.png') }}" alt="">
            </div>
        </div>




        <h3 style=" color: #000;"> مدرسة مسلية الابتدائية </>
        <img src="{{ asset('user/images/OBJECTS.png') }}" alt="Company Logo">
    </header>
<body>

    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>التكاليف</p>
            <div class="arrow-icon">

            <a href=""  class="event">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg" onclick="showSectionAndChangeIcon()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="evento">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng" onclick="hideSectionAndChangeIcon()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
                <p>السيرة الذاتية </p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvga" onclick="showSectionAndChangeIcona()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
               <!------------------------------------------------------------------------>
               <svg id="toggleIconPnga" onclick="hideSectionAndChangeIcona()" style="display: none;"
               xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
               <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round" />
           </svg>
           <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p>توجيه طلابي</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgb" onclick="showSectionAndChangeIconb()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>

                <svg id="toggleIconPngb" onclick="hideSectionAndChangeIconb()" style="display: none;"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
            </div>
        </div>
    </section>

    <div id="section">


        

        <section class="image-gallery">
            @foreach ($homeworks as $homework)
            @foreach (json_decode($homework->file_path) as $index => $file)


            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($homework->file_path)) }}">
                            <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                            </i>
                        </a>


                  
                </div>

                 @endif

            </div>
            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectiona">


     

        <section class="image-gallery">
            @foreach ($cvs as $cv)
            @foreach (json_decode($cv->file_path) as $index =>  $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                    
                </div>

                @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionb">


    

        <section class="image-gallery">
            @foreach ($tables as $table)
            @foreach (json_decode($table->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}" alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download" style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img src="{{ asset("uploads/$file") }}" alt="Image 1">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download" style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                   
                </div>

                @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>


    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
             <p>الدورات التدريبية</p>
            <div class="arrow-icon">

            <a href=""  class="events">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg2" onclick="showSectionAndChangeIcon2()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="eventr">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng2" onclick="hideSectionAndChangeIcon2()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p> توجيه وارشاد </p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgc" onclick="showSectionAndChangeIconc()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPngc" onclick="hideSectionAndChangeIconc()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
           <p>الرؤية والرسالة</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgd" onclick="showSectionAndChangeIcond()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                        <!------------------------------------------------------------------------>
                 <svg id="toggleIconPngd" onclick="hideSectionAndChangeIcond()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>

            </div>
        </div>
    </section>
    <div id="section2">


    

        <section class="image-gallery">
            @foreach ($avtivities as $activity)
            @foreach (json_decode($activity->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionc">


     

        <section class="image-gallery">
            @foreach ($paperworks as $paperwork)
            @foreach (json_decode($paperwork->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectiond">


       
        <section class="image-gallery">
            @foreach ($visions as $vision)
            @foreach (json_decode($vision->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>الأهداف </p>
            <div class="arrow-icon">

            <a href=""  class="eventp">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg3" onclick="showSectionAndChangeIcon3()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="eventh">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng3" onclick="hideSectionAndChangeIcon3()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p>شهادات الشكر</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvge" onclick="showSectionAndChangeIcone()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                    <!------------------------------------------------------------------------>
                    <svg id="toggleIconPnge" onclick="hideSectionAndChangeIcone()" style="display: none;"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p>الخطه الزمنيه</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgf" onclick="showSectionAndChangeIconf()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                    <!------------------------------------------------------------------------>
                    <svg id="toggleIconPngf" onclick="hideSectionAndChangeIconf()" style="display: none;"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <!------------------------------------------------------------------------>

            </div>
        </div>
    </section>
    <div id="section3">


       

        <section class="image-gallery">
            @foreach ($goals as $goal)
            @foreach (json_decode($goal->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectione">


       

        <section class="image-gallery">
            @foreach ($sciences as $science)
            @foreach (json_decode($science->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;"  href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionf">


      

        <section class="image-gallery">
            @foreach ($plains as $plain)
            @foreach (json_decode($plain->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>مواقف طارئه</p>
            <div class="arrow-icon">

            <a href=""  class="eventk">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg4" onclick="showSectionAndChangeIcon4()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="eventf">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng4" onclick="hideSectionAndChangeIcon4()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p>البرامج الإرشادية</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgg" onclick="showSectionAndChangeIcong()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
                <svg id="toggleIconPngg" onclick="hideSectionAndChangeIcong()" style="display: none;"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p>إجتماع لجنة التوجيه</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgh" onclick="showSectionAndChangeIconh()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
              <!------------------------------------------------------------------------>
              <svg id="toggleIconPngh" onclick="hideSectionAndChangeIconh()" style="display: none;"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
          </svg>
          <!------------------------------------------------------------------------>

            </div>
        </div>
    </section>
    <div id="section4">


      

        <section class="image-gallery">
            @foreach ($englishes as $english)
            @foreach (json_decode($english->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectiong">


      

        <section class="image-gallery">
            @foreach ($programs as $program)
            @foreach (json_decode($program->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionh">


       

        <section class="image-gallery">
            @foreach ($meetings as $meeting)
            @foreach (json_decode($meeting->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;"  href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>

    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>احصائيات</p>
            <div class="arrow-icon">

            <a href=""  class="eventq">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg5" onclick="showSectionAndChangeIcon5()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="eventd">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng5" onclick="hideSectionAndChangeIcon5()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p>زيارة اولياء الأمور</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgi" onclick="showSectionAndChangeIconi()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                  <!------------------------------------------------------------------------>
                  <svg id="toggleIconPngi" onclick="hideSectionAndChangeIconi()" style="display: none;"
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
              </svg>
              <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p>جلسات الإرشاد</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgj" onclick="showSectionAndChangeIconj()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
             <!------------------------------------------------------------------------>
             <svg id="toggleIconPngj" onclick="hideSectionAndChangeIconj()" style="display: none;"
             xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
             <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round" />
         </svg>
         <!------------------------------------------------------------------------>

            </div>
        </div>
    </section>
    <div id="section5">


       

        <section class="image-gallery">
            @foreach ($statistics as $statistic)
            @foreach (json_decode($statistic->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectioni">


        

        <section class="image-gallery">
            @foreach ($situations as $situation)
            @foreach (json_decode($situation->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionj">


      

        <section class="image-gallery">
            @foreach ($guidances as $guidance)
            @foreach (json_decode($guidance->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>

    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>الحالات الصحية</p>
            <div class="arrow-icon">

            <a href=""  class="eventa">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg6" onclick="showSectionAndChangeIcon6()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="eventz">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng6" onclick="hideSectionAndChangeIcon6()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p>الحالات الإجتماعية</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgk" onclick="showSectionAndChangeIconk()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                   <!------------------------------------------------------------------------>
                 <svg id="toggleIconPngk" onclick="hideSectionAndChangeIconk()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p>الحالات الإقتصادية</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgl" onclick="showSectionAndChangeIconl()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                   <!------------------------------------------------------------------------>
                 <svg id="toggleIconPngl" onclick="hideSectionAndChangeIconl()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>

            </div>
        </div>
    </section>
    <div id="section6">


      

        <section class="image-gallery">
            @foreach ($maths as $math)
            @foreach (json_decode($math->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionk">


    

        <section class="image-gallery">
            @foreach ($socials as $social)
            @foreach (json_decode($social->file_path) as $index => $social)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                  
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                  
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionl">



        <section class="image-gallery">
            @foreach ($islamics as $islamic)
            @foreach (json_decode($islamic->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>

    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>الزيارات الصفية</p>
            <div class="arrow-icon">

            <a href=""  class="even">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg7" onclick="showSectionAndChangeIcon7()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="evenw">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng7" onclick="hideSectionAndChangeIcon7()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p>الطلاب المتأخرين دراسيا</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgm" onclick="showSectionAndChangeIconm()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
                <svg id="toggleIconPngm" onclick="hideSectionAndChangeIconm()" style="display: none;"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p>الطلاب المتأخرين صباحيا</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgn" onclick="showSectionAndChangeIconn()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>

                  <!------------------------------------------------------------------------>
                  <svg id="toggleIconPngn" onclick="hideSectionAndChangeIconn()" style="display: none;"
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
              </svg>
              <!------------------------------------------------------------------------>
            </div>
        </div>
    </section>

    <div id="section7">


     

        <section class="image-gallery">
            @foreach ($skills as $skill)
            @foreach (json_decode($skill->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionm">


     

        <section class="image-gallery">
            @foreach ($students as $student)
            @foreach (json_decode($student->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionn">


     

        <section class="image-gallery">
            @foreach ($informations as $information)
            @foreach (json_decode($information->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>


    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
               <p>اخرى</p>
            <div class="arrow-icon">

            <a href=""  class="eve">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg8" onclick="showSectionAndChangeIcon8()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="evew">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng8" onclick="hideSectionAndChangeIcon8()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
    </section>
    <div id="section8">


      

        <section class="image-gallery">
            @foreach ($others as $other)
            @foreach (json_decode($other->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>


</body>
</html>




@endif

@if($user->user_type == 'الصحه المدرسيه')

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
    <link rel="icon" href="/public/user/images/OBJECTS.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="path/to/lightbox.css" rel="stylesheet">
    <script src="path/to/lightbox-plus-jquery.js"></script>

    <style>
        .btn-conteiner {
      display: flex;
      justify-content: center;
      transform: translateY(70%);
      --color-text: #ffffff;
      --color-background: #369224;
      --color-outline: #ff145b80;
      --color-shadow: #00000080;
    }
    
    .btn-content {
      display: flex;
      align-items: center;
      padding: 5px 20px;
      text-decoration: none;
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      font-size: 25px;
      color: var(--color-text);
      background:  #1ebc7a;
      transition: 1s;
      border-radius: 100px;
      box-shadow: 0 0 0.2em 0 var(--color-background);
    }
    
    .btn-content:hover, .btn-content:focus {
      transition: 0.5s;
      -webkit-animation: btn-content 1s;
      animation: btn-content 1s;
      outline: 0.1em solid transparent;
      outline-offset: 0.2em;
      box-shadow: 0 0 0.4em 0 var(--color-background);
    }
    
    .btn-content .icon-arrow {
      transition: 0.5s;
      margin-right: 0px;
      transform: scale(0.6);
    }
    
    .btn-content:hover .icon-arrow {
      transition: 0.5s;
      margin-right: 25px;
    }
    
    .icon-arrow {
      width: 15px;
      margin-left: 15px;
      position: relative;
      top: 6%;
    }
    
    /* SVG */
    #arrow-icon-one {
      transition: 0.4s;
      transform: translateX(-60%);
    }
    
    #arrow-icon-two {
      transition: 0.5s;
      transform: translateX(-30%);
    }
    
    .btn-content:hover #arrow-icon-three {
      animation: color_anim 1s infinite 0.2s;
    }
    
    .btn-content:hover #arrow-icon-one {
      transform: translateX(0%);
      animation: color_anim 1s infinite 0.6s;
    }
    
    .btn-content:hover #arrow-icon-two {
      transform: translateX(0%);
      animation: color_anim 1s infinite 0.4s;
    }
    
    /* SVG animations */
    @keyframes color_anim {
      0% {
        fill: white;
      }
    
      50% {
        fill: var(--color-background);
      }
    
      100% {
        fill: white;
      }
    }
    
    /* Button animations */
    @-webkit-keyframes btn-content {
      0% {
        outline: 0.2em solid var(--color-background);
        outline-offset: 0;
      }
    }
    
    @keyframes btn-content {
      0% {
        outline: 0.2em solid var(--color-background);
        outline-offset: 0;
      }
    }
    </style>
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
                    <img src="{{ asset("uploads/" . $user->image_path) }}" alt="Company Logo" class="sidebar-logo">
                </center>
                <h2>{{ $user->name }}</h2>
                <p>رقم الهوية : {{ $user->national_id }} </p>
                <p>{{ $user->grade }}</p>
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
            <div class="btn-conteiner">
                <a class="btn-content" href="{{ route('admin.home') }}">
                  <span class="btn-title">رجوع</span>
                  <span class="icon-arrow">
                    <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                      </g>
                    </svg>
                  </span>
                </a>
              </div>
            <div class="close-icon">
                <img onclick="closeSidebar()" src="{{ asset('user/images/close-line.png') }}" alt="">
            </div>
        </div>




        <h3 style=" color: #000;"> مدرسة مسلية الابتدائية </
        <img src="{{ asset('user/images/OBJECTS.png') }}" alt="Company Logo">
    </header>
<body>

    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>مهام المرشد الصحي</p>
            <div class="arrow-icon">

            <a href=""  class="event">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg" onclick="showSectionAndChangeIcon()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="evento">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng" onclick="hideSectionAndChangeIcon()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p>السيرة الذاتية </p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvga" onclick="showSectionAndChangeIcona()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
               <!------------------------------------------------------------------------>
               <svg id="toggleIconPnga" onclick="hideSectionAndChangeIcona()" style="display: none;"
               xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
               <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round" />
           </svg>
           <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
           <p>الرؤية والرسالة</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgn" onclick="showSectionAndChangeIconn()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>

                  <!------------------------------------------------------------------------>
                  <svg id="toggleIconPngn" onclick="hideSectionAndChangeIconn()" style="display: none;"
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
              </svg>
              <!------------------------------------------------------------------------>
            </div>
        </div>
    </section>

    <div id="section">


    

        <section class="image-gallery">
            @foreach ($homeworks as $homework)
            @foreach (json_decode($homework->file_path) as $index => $file)


            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($homework->file_path)) }}">
                            <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                            </i>
                        </a>


                    
                </div>

                 @endif

            </div>
            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectiona">


      
        <section class="image-gallery">
            @foreach ($cvs as $cv)
            @foreach (json_decode($cv->file_path) as $index =>  $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                   
                </div>

                @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionn">


        

        <section class="image-gallery">
            @foreach ($visions as $vision)
            @foreach (json_decode($vision->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>

    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>تقارير البرامج</p>
            <div class="arrow-icon">

            <a href=""  class="events">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg2" onclick="showSectionAndChangeIcon2()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="eventr">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng2" onclick="hideSectionAndChangeIcon2()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p>سجل بيانات العياده المدرسيه </p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgc" onclick="showSectionAndChangeIconc()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPngc" onclick="hideSectionAndChangeIconc()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p>تفقد البيئه المدرسيه</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgd" onclick="showSectionAndChangeIcond()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                        <!------------------------------------------------------------------------>
                 <svg id="toggleIconPngd" onclick="hideSectionAndChangeIcond()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>

            </div>
        </div>
    </section>
    <div id="section2">


       

        <section class="image-gallery">
            @foreach ($avtivities as $activity)
            @foreach (json_decode($activity->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionc">


      

        <section class="image-gallery">
            @foreach ($paperworks as $paperwork)
            @foreach (json_decode($paperwork->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                 
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectiond">


     

        <section class="image-gallery">
            @foreach ($languages as $language)
            @foreach(json_decode($language->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                  
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>

    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>الحلات المرضيه المزمنه في المدرسه</p>
            <div class="arrow-icon">

            <a href=""  class="eventp">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg3" onclick="showSectionAndChangeIcon3()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="eventh">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng3" onclick="hideSectionAndChangeIcon3()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p>الحالات المعديه في المدرسه</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvge" onclick="showSectionAndChangeIcone()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                    <!------------------------------------------------------------------------>
                    <svg id="toggleIconPnge" onclick="hideSectionAndChangeIcone()" style="display: none;"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p>الخطه المشتركه لبرامج الصحه المدرسيه</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgf" onclick="showSectionAndChangeIconf()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                    <!------------------------------------------------------------------------>
                    <svg id="toggleIconPngf" onclick="hideSectionAndChangeIconf()" style="display: none;"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <!------------------------------------------------------------------------>

            </div>
        </div>
    </section>
    <div id="section3">


      

        <section class="image-gallery">
            @foreach ($maths as $math)
            @foreach (json_decode($math->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectione">


    

        <section class="image-gallery">
            @foreach ($sciences as $science)
            @foreach (json_decode($science->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;"  href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionf">


     

        <section class="image-gallery">
            @foreach ($islamics as $islamic)
            @foreach (json_decode($islamic->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>البيانات الاوليه</p>
            <div class="arrow-icon">

            <a href=""  class="eventk">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg4" onclick="showSectionAndChangeIcon4()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="eventf">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng4" onclick="hideSectionAndChangeIcon4()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p>الطلبه المحولين باعراض مرضيه</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgg" onclick="showSectionAndChangeIcong()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
                <svg id="toggleIconPngg" onclick="hideSectionAndChangeIcong()" style="display: none;"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p> خطه عمل الموجه الصحي </p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgh" onclick="showSectionAndChangeIconh()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
              <!------------------------------------------------------------------------>
              <svg id="toggleIconPngh" onclick="hideSectionAndChangeIconh()" style="display: none;"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
          </svg>
          <!------------------------------------------------------------------------>

            </div>
        </div>
    </section>
    <div id="section4">


        
        <section class="image-gallery">
            @foreach ($englishes as $english)
            @foreach (json_decode($english->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectiong">


     

        <section class="image-gallery">
            @foreach ($skills as $skill)
            @foreach (json_decode($skill->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionh">


     

        <section class="image-gallery">
            @foreach ($socials as $social)
            @foreach (json_decode($social->file_path) as $index => $social)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>



    <section>

        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p>لجان الصحه المدرسيه</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgb" onclick="showSectionAndChangeIconb()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>

                <svg id="toggleIconPngb" onclick="hideSectionAndChangeIconb()" style="display: none;"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
                  <p>اخرى</p>
            <div class="arrow-icon">

            <a href=""  class="eve">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg8" onclick="showSectionAndChangeIcon8()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="evew">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng8" onclick="hideSectionAndChangeIcon8()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>

    </section>
    <div id="sectionb">


      

        <section class="image-gallery">
            @foreach ($tables as $table)
            @foreach (json_decode($table->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}" alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download" style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img src="{{ asset("uploads/$file") }}" alt="Image 1">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download" style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                   
                </div>

                @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="section8">


     

        <section class="image-gallery">
            @foreach ($others as $other)
            @foreach (json_decode($other->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>


</body>
</html>



@endif

@if($user->user_type == 'مصادر التعلم')

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
   <link rel="icon" href="/public/user/images/OBJECTS.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="path/to/lightbox.css" rel="stylesheet">
    <script src="path/to/lightbox-plus-jquery.js"></script>
    <style>
        .btn-conteiner {
      display: flex;
      justify-content: center;
      transform: translateY(70%);
      --color-text: #ffffff;
      --color-background: #369224;
      --color-outline: #ff145b80;
      --color-shadow: #00000080;
    }
    
    .btn-content {
      display: flex;
      align-items: center;
      padding: 5px 20px;
      text-decoration: none;
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      font-size: 25px;
      color: var(--color-text);
      background:  #1ebc7a;
      transition: 1s;
      border-radius: 100px;
      box-shadow: 0 0 0.2em 0 var(--color-background);
    }
    
    .btn-content:hover, .btn-content:focus {
      transition: 0.5s;
      -webkit-animation: btn-content 1s;
      animation: btn-content 1s;
      outline: 0.1em solid transparent;
      outline-offset: 0.2em;
      box-shadow: 0 0 0.4em 0 var(--color-background);
    }
    
    .btn-content .icon-arrow {
      transition: 0.5s;
      margin-right: 0px;
      transform: scale(0.6);
    }
    
    .btn-content:hover .icon-arrow {
      transition: 0.5s;
      margin-right: 25px;
    }
    
    .icon-arrow {
      width: 15px;
      margin-left: 15px;
      position: relative;
      top: 6%;
    }
    
    /* SVG */
    #arrow-icon-one {
      transition: 0.4s;
      transform: translateX(-60%);
    }
    
    #arrow-icon-two {
      transition: 0.5s;
      transform: translateX(-30%);
    }
    
    .btn-content:hover #arrow-icon-three {
      animation: color_anim 1s infinite 0.2s;
    }
    
    .btn-content:hover #arrow-icon-one {
      transform: translateX(0%);
      animation: color_anim 1s infinite 0.6s;
    }
    
    .btn-content:hover #arrow-icon-two {
      transform: translateX(0%);
      animation: color_anim 1s infinite 0.4s;
    }
    
    /* SVG animations */
    @keyframes color_anim {
      0% {
        fill: white;
      }
    
      50% {
        fill: var(--color-background);
      }
    
      100% {
        fill: white;
      }
    }
    
    /* Button animations */
    @-webkit-keyframes btn-content {
      0% {
        outline: 0.2em solid var(--color-background);
        outline-offset: 0;
      }
    }
    
    @keyframes btn-content {
      0% {
        outline: 0.2em solid var(--color-background);
        outline-offset: 0;
      }
    }
    </style>
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
                    <img src="{{ asset("uploads/" . $user->image_path) }}" alt="Company Logo" class="sidebar-logo">
                </center>
                <h2>{{ $user->name }}</h2>
                <p>رقم الهوية : {{ $user->national_id }} </p>
                <p>{{ $user->grade }}</p>
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
            <div class="btn-conteiner">
                <a class="btn-content" href="{{ route('admin.home') }}">
                  <span class="btn-title">رجوع</span>
                  <span class="icon-arrow">
                    <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                      </g>
                    </svg>
                  </span>
                </a>
              </div>
            <div class="close-icon">
                <img onclick="closeSidebar()" src="{{ asset('user/images/close-line.png') }}" alt="">
            </div>
        </div>




        <h3 style=" color: #000;"> مدرسة مسلية الابتدائية </>
        <img src="{{ asset('user/images/OBJECTS.png') }}" alt="Company Logo">
    </header>
<body>

    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>أنشطة مركز مصادر التعلم</p>
            <div class="arrow-icon">

            <a href=""  class="event">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg" onclick="showSectionAndChangeIcon()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="evento">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng" onclick="hideSectionAndChangeIcon()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
              <p>السيرة الذاتية </p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvga" onclick="showSectionAndChangeIcona()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
               <!------------------------------------------------------------------------>
               <svg id="toggleIconPnga" onclick="hideSectionAndChangeIcona()" style="display: none;"
               xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
               <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round" />
           </svg>
           <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
           <p>الرؤية والرسالة</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgn" onclick="showSectionAndChangeIconn()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>

                  <!------------------------------------------------------------------------>
                  <svg id="toggleIconPngn" onclick="hideSectionAndChangeIconn()" style="display: none;"
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
              </svg>
              <!------------------------------------------------------------------------>
            </div>
        </div>
    </section>

    <div id="section">


   

        <section class="image-gallery">
            @foreach ($homeworks as $homework)
            @foreach (json_decode($homework->file_path) as $index => $file)


            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($homework->file_path)) }}">
                            <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                            </i>
                        </a>


                   
                </div>

                 @endif

            </div>
            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectiona">


   
        <section class="image-gallery">
            @foreach ($cvs as $cv)
            @foreach (json_decode($cv->file_path) as $index =>  $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                   
                </div>

                @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionn">


       

        <section class="image-gallery">
            @foreach ($visions as $vision)
            @foreach (json_decode($vision->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>

    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>بيانات مركز مصادر التعلم </p>
            <div class="arrow-icon">

            <a href=""  class="events">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg2" onclick="showSectionAndChangeIcon2()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="eventr">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng2" onclick="hideSectionAndChangeIcon2()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p>لجنة مركز مصادر التعلم </p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgc" onclick="showSectionAndChangeIconc()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPngc" onclick="hideSectionAndChangeIconc()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p> أصدقاء مركز مصادر التعلم </p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgd" onclick="showSectionAndChangeIcond()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                        <!------------------------------------------------------------------------>
                 <svg id="toggleIconPngd" onclick="hideSectionAndChangeIcond()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>

            </div>
        </div>
    </section>
    <div id="section2">


      
        <section class="image-gallery">
            @foreach ($avtivities as $activity)
            @foreach (json_decode($activity->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                  
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionc">



        <section class="image-gallery">
            @foreach ($paperworks as $paperwork)
            @foreach (json_decode($paperwork->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectiond">


      
      <section class="image-gallery">
            @foreach ($languages as $language)
            @foreach(json_decode($language->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>

    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
                <p>الخطة التشغيلية</p>
            <div class="arrow-icon">

            <a href=""  class="eventp">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg3" onclick="showSectionAndChangeIcon3()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="eventh">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng3" onclick="hideSectionAndChangeIcon3()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p> أهداف مركز مصادر التعلم</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvge" onclick="showSectionAndChangeIcone()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                    <!------------------------------------------------------------------------>
                    <svg id="toggleIconPnge" onclick="hideSectionAndChangeIcone()" style="display: none;"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p>البرامح والأنشطة المنفذة</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgf" onclick="showSectionAndChangeIconf()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                    <!------------------------------------------------------------------------>
                    <svg id="toggleIconPngf" onclick="hideSectionAndChangeIconf()" style="display: none;"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <!------------------------------------------------------------------------>

            </div>
        </div>
    </section>
    <div id="section3">


    

        <section class="image-gallery">
            @foreach ($maths as $math)
            @foreach (json_decode($math->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectione">


      

        <section class="image-gallery">
            @foreach ($sciences as $science)
            @foreach (json_decode($science->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;"  href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionf">


    
        <section class="image-gallery">
            @foreach ($islamics as $islamic)
            @foreach (json_decode($islamic->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p> سجل التردد اليومي</p>
            <div class="arrow-icon">

            <a href=""  class="eventk">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg4" onclick="showSectionAndChangeIcon4()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="eventf">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng4" onclick="hideSectionAndChangeIcon4()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p>جدول أشغال مركز مصادر التعلم</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgg" onclick="showSectionAndChangeIcong()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
                <svg id="toggleIconPngg" onclick="hideSectionAndChangeIcong()" style="display: none;"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
                 <p>اخرى</p>
            <div class="arrow-icon">

            <a href=""  class="eve">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg8" onclick="showSectionAndChangeIcon8()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="evew">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng8" onclick="hideSectionAndChangeIcon8()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
    </section>
    <div id="section4">


      

        <section class="image-gallery">
            @foreach ($englishes as $english)
            @foreach (json_decode($english->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectiong">


     

        <section class="image-gallery">
            @foreach ($skills as $skill)
            @foreach (json_decode($skill->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="section8">


       

        <section class="image-gallery">
            @foreach ($others as $other)
            @foreach (json_decode($other->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>


</body>
</html>




@endif

@if($user->user_type == 'الامن والسلامه')

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
    <link rel="icon" href="/public/user/images/OBJECTS.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="path/to/lightbox.css" rel="stylesheet">
    <script src="path/to/lightbox-plus-jquery.js"></script>

    <style>
        .btn-conteiner {
      display: flex;
      justify-content: center;
      transform: translateY(70%);
      --color-text: #ffffff;
      --color-background: #369224;
      --color-outline: #ff145b80;
      --color-shadow: #00000080;
    }
    
    .btn-content {
      display: flex;
      align-items: center;
      padding: 5px 20px;
      text-decoration: none;
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      font-size: 25px;
      color: var(--color-text);
      background:  #1ebc7a;
      transition: 1s;
      border-radius: 100px;
      box-shadow: 0 0 0.2em 0 var(--color-background);
    }
    
    .btn-content:hover, .btn-content:focus {
      transition: 0.5s;
      -webkit-animation: btn-content 1s;
      animation: btn-content 1s;
      outline: 0.1em solid transparent;
      outline-offset: 0.2em;
      box-shadow: 0 0 0.4em 0 var(--color-background);
    }
    
    .btn-content .icon-arrow {
      transition: 0.5s;
      margin-right: 0px;
      transform: scale(0.6);
    }
    
    .btn-content:hover .icon-arrow {
      transition: 0.5s;
      margin-right: 25px;
    }
    
    .icon-arrow {
      width: 15px;
      margin-left: 15px;
      position: relative;
      top: 6%;
    }
    
    /* SVG */
    #arrow-icon-one {
      transition: 0.4s;
      transform: translateX(-60%);
    }
    
    #arrow-icon-two {
      transition: 0.5s;
      transform: translateX(-30%);
    }
    
    .btn-content:hover #arrow-icon-three {
      animation: color_anim 1s infinite 0.2s;
    }
    
    .btn-content:hover #arrow-icon-one {
      transform: translateX(0%);
      animation: color_anim 1s infinite 0.6s;
    }
    
    .btn-content:hover #arrow-icon-two {
      transform: translateX(0%);
      animation: color_anim 1s infinite 0.4s;
    }
    
    /* SVG animations */
    @keyframes color_anim {
      0% {
        fill: white;
      }
    
      50% {
        fill: var(--color-background);
      }
    
      100% {
        fill: white;
      }
    }
    
    /* Button animations */
    @-webkit-keyframes btn-content {
      0% {
        outline: 0.2em solid var(--color-background);
        outline-offset: 0;
      }
    }
    
    @keyframes btn-content {
      0% {
        outline: 0.2em solid var(--color-background);
        outline-offset: 0;
      }
    }
    </style>
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
                    <img src="{{ asset("uploads/" . $user->image_path) }}" alt="Company Logo" class="sidebar-logo">
                </center>
                <h2>{{ $user->name }}</h2>
                <p>رقم الهوية : {{ $user->national_id }} </p>
                <p>{{ $user->grade }}</p>
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
            <div class="btn-conteiner">
                <a class="btn-content" href="{{ route('admin.home') }}">
                  <span class="btn-title">رجوع</span>
                  <span class="icon-arrow">
                    <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                      </g>
                    </svg>
                  </span>
                </a>
              </div>
            <div class="close-icon">
                <img onclick="closeSidebar()" src="{{ asset('user/images/close-line.png') }}" alt="">
            </div>
        </div>




      <h3 style=" color: #000;"> مدرسة مسلية الابتدائية </>
        <img src="{{ asset('user/images/OBJECTS.png') }}" alt="Company Logo">
    </header>
<body>

    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>التكاليف</p>
            <div class="arrow-icon">

            <a href=""  class="event">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg" onclick="showSectionAndChangeIcon()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="evento">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng" onclick="hideSectionAndChangeIcon()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
               <p>السيرة الذاتية </p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvga" onclick="showSectionAndChangeIcona()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
               <!------------------------------------------------------------------------>
               <svg id="toggleIconPnga" onclick="hideSectionAndChangeIcona()" style="display: none;"
               xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
               <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round" />
           </svg>
           <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p>مهام منسق الامن </p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgb" onclick="showSectionAndChangeIconb()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>

                <svg id="toggleIconPngb" onclick="hideSectionAndChangeIconb()" style="display: none;"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
            </div>
        </div>
    </section>

    <div id="section">


       

        <section class="image-gallery">
            @foreach ($homeworks as $homework)
            @foreach (json_decode($homework->file_path) as $index => $file)


            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($homework->file_path)) }}">
                            <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                            </i>
                        </a>


                    
                </div>

                 @endif

            </div>
            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectiona">


       

        <section class="image-gallery">
            @foreach ($cvs as $cv)
            @foreach (json_decode($cv->file_path) as $index =>  $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                    
                </div>

                @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionb">


       

        <section class="image-gallery">
            @foreach ($tables as $table)
            @foreach (json_decode($table->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}" alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download" style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img src="{{ asset("uploads/$file") }}" alt="Image 1">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                        <a style="text-decoration: none;" href="{{ route('download' , $filename =  basename($file)) }}">
                            <i class="fa fa-download" style="background: #000000; border-radius: 50%; padding: 10px;"></i>
                        </a>

                    
                </div>

                @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>


    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
                <p>الدورات التدريبية</p>
            <div class="arrow-icon">

            <a href=""  class="events">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg2" onclick="showSectionAndChangeIcon2()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="eventr">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng2" onclick="hideSectionAndChangeIcon2()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p>بيانات اوليه</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgc" onclick="showSectionAndChangeIconc()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPngc" onclick="hideSectionAndChangeIconc()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p>الرؤية والرسالة</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgd" onclick="showSectionAndChangeIcond()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                        <!------------------------------------------------------------------------>
                 <svg id="toggleIconPngd" onclick="hideSectionAndChangeIcond()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>

            </div>
        </div>
    </section>
    <div id="section2">


   

        <section class="image-gallery">
            @foreach ($avtivities as $activity)
            @foreach (json_decode($activity->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                  
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionc">


      

        <section class="image-gallery">
            @foreach ($paperworks as $paperwork)
            @foreach (json_decode($paperwork->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectiond">


       
        <section class="image-gallery">
            @foreach ($visions as $vision)
            @foreach (json_decode($vision->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>

    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>كروكي المدرسه</p>
            <div class="arrow-icon">

            <a href=""  class="eventp">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg3" onclick="showSectionAndChangeIcon3()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="eventh">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng3" onclick="hideSectionAndChangeIcon3()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p>الوارد-الصدر-الخطابات-البلاغات</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvge" onclick="showSectionAndChangeIcone()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                    <!------------------------------------------------------------------------>
                    <svg id="toggleIconPnge" onclick="hideSectionAndChangeIcone()" style="display: none;"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p> خطه منسق الامن </p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgf" onclick="showSectionAndChangeIconf()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                    <!------------------------------------------------------------------------>
                    <svg id="toggleIconPngf" onclick="hideSectionAndChangeIconf()" style="display: none;"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <!------------------------------------------------------------------------>

            </div>
        </div>
    </section>
    <div id="section3">


       

        <section class="image-gallery">
            @foreach ($goals as $goal)
            @foreach (json_decode($goal->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectione">


       

        <section class="image-gallery">
            @foreach ($sciences as $science)
            @foreach (json_decode($science->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;"  href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionf">


    

        <section class="image-gallery">
            @foreach ($plains as $plain)
            @foreach (json_decode($plain->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                  
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>نموزج الجدول الزمني لخطط الاخلاء</p>
            <div class="arrow-icon">

            <a href=""  class="eventk">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg4" onclick="showSectionAndChangeIcon4()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="eventf">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng4" onclick="hideSectionAndChangeIcon4()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
            <p>توزيع مهام خطط الاخلاء</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgg" onclick="showSectionAndChangeIcong()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
                <svg id="toggleIconPngg" onclick="hideSectionAndChangeIcong()" style="display: none;"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p>اجتماعات فريق الامن</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgh" onclick="showSectionAndChangeIconh()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
              <!------------------------------------------------------------------------>
              <svg id="toggleIconPngh" onclick="hideSectionAndChangeIconh()" style="display: none;"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
          </svg>
          <!------------------------------------------------------------------------>

            </div>
        </div>
    </section>

    <div id="section4">


  

        <section class="image-gallery">
            @foreach ($englishes as $english)
            @foreach (json_decode($english->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectiong">


        

        <section class="image-gallery">
            @foreach ($programs as $program)
            @foreach (json_decode($program->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionh">


      

        <section class="image-gallery">
            @foreach ($meetings as $meeting)
            @foreach (json_decode($meeting->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;"  href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>

    <section>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
            <p>تقارير خطط الاخلاء</p>
            <div class="arrow-icon">

            <a href=""  class="eventq">
                    <!------------------------------------------------------------------------>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvg5" onclick="showSectionAndChangeIcon5()" id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <!------------------------------------------------------------------------>
            </a>


           <a href="" class="eventd">
                 <!------------------------------------------------------------------------>
                 <svg id="toggleIconPng5" onclick="hideSectionAndChangeIcon5()" style="display: none;"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <!------------------------------------------------------------------------>
           </a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode (1).png') }}" alt="الشهادات">
       <p>الأنشطة والبرامج لمنسق الامن والسلامة</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgi" onclick="showSectionAndChangeIconi()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                  <!------------------------------------------------------------------------>
                  <svg id="toggleIconPngi" onclick="hideSectionAndChangeIconi()" style="display: none;"
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
              </svg>
              <!------------------------------------------------------------------------>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('user/images/Isolation_Mode.png') }}" alt="الدورات">
            <p>تشكيل فريق الطوارئ</p>
            <div class="arrow-icon">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    id="toggleIconSvgj" onclick="showSectionAndChangeIconj()" <g id="chevron-down">
                    <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
             <!------------------------------------------------------------------------>
             <svg id="toggleIconPngj" onclick="hideSectionAndChangeIconj()" style="display: none;"
             xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
             <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round" />
         </svg>
         <!------------------------------------------------------------------------>

            </div>
        </div>
    </section>
    <div id="section5">


      

        <section class="image-gallery">
            @foreach ($statistics as $statistic)
            @foreach (json_decode($statistic->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                  
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectioni">



        <section class="image-gallery">
            @foreach ($situations as $situation)
            @foreach (json_decode($situation->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                    
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>
    <div id="sectionj">


      

        <section class="image-gallery">
            @foreach ($guidances as $guidance)
            @foreach (json_decode($guidance->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                  
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>

    <section>
    <div class="card">
        <img src="{{ asset('user/images/Isolation_Mode (2).png') }}" alt="الواجب المنزلي">
              <p>اخرى</p>
        <div class="arrow-icon">

        <a href=""  class="eve">
                <!------------------------------------------------------------------------>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                id="toggleIconSvg8" onclick="showSectionAndChangeIcon8()" id="chevron-down">
                <path id="Vector" d="M7 10L12.0008 14.58L17 10" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>
            <!------------------------------------------------------------------------>
        </a>


       <a href="" class="evew">
             <!------------------------------------------------------------------------>
             <svg id="toggleIconPng8" onclick="hideSectionAndChangeIcon8()" style="display: none;"
             xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
             <path d="M7 14.5834L12.0008 10L17 14.5834" stroke="white" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round" />
         </svg>
         <!------------------------------------------------------------------------>
       </a>
        </div>
    </div>
    </section>

    <div id="section8">


        

        <section class="image-gallery">
            @foreach ($others as $other)
            @foreach (json_decode($other->file_path) as $index => $file)

            <div class="image-container">
                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'pdf')

                <img src="{{ asset('user/images/images.png') }}"  alt="">
                <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                @endif

                @if(pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'png' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'jpeg' || pathinfo(asset("uploads/$file") , PATHINFO_EXTENSION) == 'gif')

                <img  src="{{ asset("uploads/$file") }}"  alt="Image 1">
                 <div class="icons">
                    <a style="text-decoration: none;" href="{{ asset("uploads/$file") }}" target="_blank">
                        <i class="fas fa-eye icon-eye" style="background: #000000; border-radius: 50%; padding: 10px;"></i></a>

                    <a style="text-decoration: none;" href="{{ route('download' , $file_name = basename($file)) }}">
                        <i class="fa fa-download"style="background: #000000; border-radius: 50%; padding: 10px;">

                        </i>
                    </a>


                   
                </div>

                 @endif

            </div>

            @endforeach
            @endforeach

        </section>
    </div>

</body>
</html>





@endif


