<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Learning</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="TemplateMo">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="assets/css/fontawesome.css">
        <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
        <link rel="stylesheet" href="assets/css/owl.css">
        <link rel="stylesheet" href="assets/css/lightbox.css">
    </head>
    <body class="antialiased">
        {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> --}}

          <!-- ***** Header Area Start ***** -->
          <header class="header-area header-sticky">
              <div class="container">
                  <div class="row">
                      <div class="col-12">
                          <nav class="main-nav">
                              <!-- ***** Logo Start ***** -->
                              <a href="" class="logo">
                                  E-Learning
                              </a>
                              <!-- ***** Logo End ***** -->
                              <!-- ***** Menu Start ***** -->
                              <ul class="nav">
                                  <li class=""><a href="#top" class="active">Home</a></li>
                                  <li><a href="#formations">Formations</a></li>
                                  {{-- <li class=""><a href="#apply">Apply Now</a></li> --}}
                                  <li class="has-sub">
                                      <a href="javascript:void(0)">Categories</a>
                                      <ul class="sub-menu">
                                          <li><a href="meetings.html">F 1</a></li>
                                          <li><a href="meeting-details.html">F 2</a></li>
                                      </ul>
                                  </li>
                                  {{-- <li class=""><a href="#courses">Courses</a></li> --}}
                                  <li class=""><a href="#contact">Contact Us</a></li>
                                  @if (Route::has('login'))
                                            @auth
                                            <li class="">
                                                {{-- <a href="{{ route('logout') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Logout</a> --}}
                                                <a class="menu-link px-5 " href="{{ route('logout') }}"
                                                               onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                            @else
                                            <li class=""><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                                                @if (Route::has('register'))
                                                <li class=""><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                                                @endif
                                            @endauth
                                    @endif
                              </ul>
                              <a class='menu-trigger'>
                                  <span>Menu</span>
                              </a>
                              <!-- ***** Menu End ***** -->
                          </nav>
                      </div>
                  </div>
              </div>
          </header>
          <!-- ***** Header Area End ***** -->

          <!-- ***** Main Banner Area Start ***** -->
          <section class="section main-banner" id="top" data-section="section1">
              <video autoplay muted loop id="bg-video">
                  <source src="assets/images/course-video.mp4" type="video/mp4" />
              </video>

              <div class="video-overlay header-text">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="caption">
                      <h6>Hello Students</h6>
                      <h2>Welcome to Education</h2>
                      {{-- <p>This is an edu meeting HTML CSS template provided by <a rel="nofollow" href="https://templatemo.com/page/1" target="_blank">TemplateMo website</a>. This is a Bootstrap v5.1.3 layout. The video background is taken from Pexels website, a group of young people by <a rel="nofollow" href="https://www.pexels.com/@pressmaster" target="_blank">Pressmaster</a>.</p> --}}
                      <div class="main-button-red">
                          <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
                      </div>
                  </div>
                      </div>
                    </div>
                  </div>
              </div>
          </section>
          <!-- ***** Main Banner Area End ***** -->

          <section class="services">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="owl-service-item owl-carousel">

                    <div class="item">
                      <div class="icon">
                        <img src="assets/images/service-icon-01.png" alt="">
                      </div>
                      <div class="down-content">
                        <h4>Best Education</h4>
                        <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
                      </div>
                    </div>

                    <div class="item">
                      <div class="icon">
                        <img src="assets/images/service-icon-02.png" alt="">
                      </div>
                      <div class="down-content">
                        <h4>Best Teachers</h4>
                        <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
                      </div>
                    </div>

                    <div class="item">
                      <div class="icon">
                        <img src="assets/images/service-icon-03.png" alt="">
                      </div>
                      <div class="down-content">
                        <h4>Best Students</h4>
                        <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
                      </div>
                    </div>

                    <div class="item">
                      <div class="icon">
                        <img src="assets/images/service-icon-02.png" alt="">
                      </div>
                      <div class="down-content">
                        <h4>Online Meeting</h4>
                        <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
                      </div>
                    </div>

                    <div class="item">
                      <div class="icon">
                        <img src="assets/images/service-icon-03.png" alt="">
                      </div>
                      <div class="down-content">
                        <h4>Best Networking</h4>
                        <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="upcoming-meetings" id="meetings">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="section-heading">
                    <h2>Tous Les Formations</h2>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="categories">
                    <h4>Catgories</h4>
                    <ul>
                      <li><a href="#">Web</a></li><br>
                      <li><a href="#">Desktop</a></li><br>
                      <li><a href="#">Mobile</a></li><br>
                    </ul>
                    <div class="main-button-red">
                      <a href="meetings.html">All Upcoming Categories</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="meeting-item">
                        <div class="thumb">
                          <div class="price">
                            <span>$22.00</span>
                          </div>
                          <a href="meeting-details.html"><img src="assets/images/meeting-01.jpg" alt="New Lecturer Meeting"></a>
                        </div>
                        <div class="down-content">
                          <div class="date">
                            <h6>Nov <span>10</span></h6>
                          </div>
                          <a href="meeting-details.html"><h4>React Native</h4></a>
                          {{-- <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p> --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="meeting-item">
                        <div class="thumb">
                          <div class="price">
                            <span>$36.00</span>
                          </div>
                          <a href="meeting-details.html"><img src="assets/images/meeting-02.jpg" alt="Online Teaching"></a>
                        </div>
                        <div class="down-content">
                          <div class="date">
                            <h6>Nov <span>24</span></h6>
                          </div>
                          <a href="meeting-details.html"><h4>Android</h4></a>
                          {{-- <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p> --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="meeting-item">
                        <div class="thumb">
                          <div class="price">
                            <span>$14.00</span>
                          </div>
                          <a href="meeting-details.html"><img src="assets/images/meeting-03.jpg" alt="Higher Education"></a>
                        </div>
                        <div class="down-content">
                          <div class="date">
                            <h6>Nov <span>26</span></h6>
                          </div>
                          <a href="meeting-details.html"><h4>DOT.Net (C#)</h4></a>
                          {{-- <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p> --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="meeting-item">
                        <div class="thumb">
                          <div class="price">
                            <span>$48.00</span>
                          </div>
                          <a href="meeting-details.html"><img src="assets/images/meeting-04.jpg" alt="Student Training"></a>
                        </div>
                        <div class="down-content">
                          <div class="date">
                            <h6>Nov <span>30</span></h6>
                          </div>
                          <a href="meeting-details.html"><h4>Angular</h4></a>
                          {{-- <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="apply-now" id="apply">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 align-self-center">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="item">
                        <h3>APPLY FOR BACHELOR DEGREE</h3>
                        <p>You are allowed to use this edu meeting CSS template for your school or university or business. You can feel free to modify or edit this layout.</p>
                        <div class="main-button-red">
                          <div class="scroll-to-section"><a href="">Join Us Now!</a></div>
                      </div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="item">
                        <h3>APPLY FOR BACHELOR DEGREE</h3>
                        <p>You are not allowed to redistribute the template ZIP file on any other template website. Please contact us for more information.</p>
                        <div class="main-button-yellow">
                          <div class="scroll-to-section"><a href="">Join Us Now!</a></div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="accordions is-first-expanded">
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>About Edu Meeting HTML Template</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>If you want to get the latest collection of HTML CSS templates for your websites, you may visit <a rel="nofollow" href="https://www.toocss.com/" target="_blank">Too CSS website</a>. If you need a working contact form script, please visit <a href="https://templatemo.com/contact" target="_parent">our contact page</a> for more info.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>HTML CSS Bootstrap Layout</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Etiam posuere metus orci, vel consectetur elit imperdiet eu. Cras ipsum magna, maximus at semper sit amet, eleifend eget neque. Nunc facilisis quam purus, sed vulputate augue interdum vitae. Aliquam a elit massa.<br><br>
                                Nulla malesuada elit lacus, ac ultricies massa varius sed. Etiam eu metus eget nibh consequat aliquet. Proin fringilla, quam at euismod porttitor, odio odio tempus ligula, ut feugiat ex erat nec mauris. Donec viverra velit eget lectus sollicitudin tincidunt.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>Please tell your friends</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Ut vehicula mauris est, sed sodales justo rhoncus eu. Morbi porttitor quam velit, at ullamcorper justo suscipit sit amet. Quisque at suscipit mi, non efficitur velit.<br><br>
                                Cras et tortor semper, placerat eros sit amet, porta est. Mauris porttitor sapien et quam volutpat luctus. Nullam sodales ipsum ac neque ultricies varius.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion last-accordion">
                        <div class="accordion-head">
                            <span>Share this to your colleagues</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Maecenas suscipit enim libero, vel lobortis justo condimentum id. Interdum et malesuada fames ac ante ipsum primis in faucibus.<br><br>
                                Sed eleifend metus sit amet magna tristique, posuere laoreet arcu semper. Nulla pellentesque ut tortor sit amet maximus. In eu libero ullamcorper, semper nisi quis, convallis nisi.</p>
                            </div>
                        </div>
                    </article>
                </div>
                </div>
              </div>
            </div>
          </section>

          <section class="our-courses" id="formations">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="section-heading">
                    <h2>Our Formations</h2>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="owl-courses-item owl-carousel">
                    <div class="item">
                      <img src="assets/images/course-01.jpg" alt="Course One">
                      <div class="down-content">
                        <h4>Morbi tincidunt elit vitae justo rhoncus</h4>
                        <div class="info">
                          <div class="row">
                            <div class="col-8">
                              <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                              </ul>
                            </div>
                            <div class="col-4">
                               <span>$160</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <img src="assets/images/course-02.jpg" alt="Course Two">
                      <div class="down-content">
                        <h4>Curabitur molestie dignissim purus vel</h4>
                        <div class="info">
                          <div class="row">
                            <div class="col-8">
                              <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                              </ul>
                            </div>
                            <div class="col-4">
                               <span>$180</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <img src="assets/images/course-03.jpg" alt="">
                      <div class="down-content">
                        <h4>Nulla at ipsum a mauris egestas tempor</h4>
                        <div class="info">
                          <div class="row">
                            <div class="col-8">
                              <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                              </ul>
                            </div>
                            <div class="col-4">
                               <span>$140</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <img src="assets/images/course-03.jpg" alt="">
                      <div class="down-content">
                        <h4>Morbi in libero blandit lectus cursus</h4>
                        <div class="info">
                          <div class="row">
                            <div class="col-8">
                              <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                              </ul>
                            </div>
                            <div class="col-4">
                               <span>$480</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <img src="assets/images/course-04.jpg" alt="">
                      <div class="down-content">
                        <h4>Curabitur molestie dignissim purus</h4>
                        <div class="info">
                          <div class="row">
                            <div class="col-8">
                              <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                              </ul>
                            </div>
                            <div class="col-4">
                               <span>$560</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="our-facts">
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <div class="row">
                    <div class="col-lg-12">
                      <h2>A Few Facts About Our Platform</h2>
                    </div>
                    <div class="col-lg-6">
                      <div class="row">
                        <div class="col-12">
                          <div class="count-area-content percentage">
                            <div class="count-digit">94</div>
                            <div class="count-title">Succesed Students</div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="count-area-content">
                            <div class="count-digit">126</div>
                            <div class="count-title">Current Teachers</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="row">
                        <div class="col-12">
                          <div class="count-area-content new-students">
                            <div class="count-digit">2345</div>
                            <div class="count-title">New Clients</div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="count-area-content">
                            <div class="count-digit">32</div>
                            <div class="count-title">Awards</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 align-self-center">
                  <div class="video">
                    <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src="assets/images/play-icon.png" alt=""></a>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="contact-us" id="contact">
            <div class="container">
              <div class="row">
                <div class="col-lg-9 align-self-center">
                  <div class="row">
                    <div class="col-lg-12">
                      <form id="contact" action="" method="post">
                        <div class="row">
                          <div class="col-lg-12">
                            <h2>Let's get in touch</h2>
                          </div>
                          <div class="col-lg-4">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-4">
                            <fieldset>
                            <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                          </fieldset>
                          </div>
                          <div class="col-lg-4">
                            <fieldset>
                              <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="right-info">
                    <ul>
                      <li>
                        <h6>Phone Number</h6>
                        <span>06-12-54-00-00</span>
                      </li>
                      <li>
                        <h6>Email Address</h6>
                        <span>tahzima.i@gmail.com</span>
                      </li>
                      <li>
                        <h6>Street Address</h6>
                        <span>Maarif - Casablanca</span>
                      </li>
                      <li>
                        <h6>Website URL</h6>
                        <span>www.e-learning.net</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer">
              <p>Copyright © 2023 E-Learning. All Rights Reserved.</p>
            </div>
          </section>

          <!-- Scripts -->
          <!-- Bootstrap core JavaScript -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <script src="assets/js/isotope.min.js"></script>
            <script src="assets/js/owl-carousel.js"></script>
            <script src="assets/js/lightbox.js"></script>
            <script src="assets/js/tabs.js"></script>
            <script src="assets/js/video.js"></script>
            <script src="assets/js/slick-slider.js"></script>
            <script src="assets/js/custom.js"></script>
            <script>
                //according to loftblog tut
                $('.nav li:first').addClass('active');

                var showSection = function showSection(section, isAnimate) {
                  var
                  direction = section.replace(/#/, ''),
                  reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                  reqSectionPos = reqSection.offset().top - 0;

                  if (isAnimate) {
                    $('body, html').animate({
                      scrollTop: reqSectionPos },
                    800);
                  } else {
                    $('body, html').scrollTop(reqSectionPos);
                  }

                };

                var checkSection = function checkSection() {
                  $('.section').each(function () {
                    var
                    $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                    if (topEdge < wScroll && bottomEdge > wScroll) {
                      var
                      currentId = $this.data('section'),
                      reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                      reqLink.closest('li').addClass('active').
                      siblings().removeClass('active');
                    }
                  });
                };

                $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
                  e.preventDefault();
                  showSection($(this).attr('href'), true);
                });

                $(window).scroll(function () {
                  checkSection();
                });
            </script>

    </body>
</html>
