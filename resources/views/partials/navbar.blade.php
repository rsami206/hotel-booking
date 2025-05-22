<<<<<<< HEAD
<header class="header_area  navbar_fixed">
=======
 <header class="header_area">
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
     <!-- <div class="container"> -->
     <nav class="navbar navbar-expand-lg navbar-light">
         <!-- Brand and toggle get grouped for better mobile display -->
         <a href="/" class="navbar-brand text-white">
             🌇<strong>UrbanNest</strong>
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
         </button>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
             <ul class="nav navbar-nav menu_nav ml-auto">
<<<<<<< HEAD
                 <li class="nav-item active"><a class="nav-link" href="/"><i class="lnr lnr-home"></i>Home
                     </a></li>
                 <li class="nav-item"><a class="nav-link" href="{{ route('about') }}"><i class="lnr lnr-user"></i>About Us
=======
                 <li class="nav-item active"><a class="nav-link" href="index.html"><i class="lnr lnr-home"></i>Home
                     </a></li>
                 <li class="nav-item"><a class="nav-link" href="about.html"><i class="lnr lnr-user"></i>About Us
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
                     </a></li>
                 <li class="nav-item"><a class="nav-link" href="accomodation.html"><i class="lnr lnr-apartment"></i>Rooms
                     </a></li>
                 <li class="nav-item"><a class="nav-link" href="gallery.html"><i class="lnr lnr-picture"></i>Gallery
                     </a></li>
                 <li class="nav-item submenu dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="lnr lnr-book"></i>Blog
                     </a>
                     <ul class="dropdown-menu">
                         <li class="nav-item"><a class="nav-link" href="blog.html"><i class="lnr lnr-book"></i>Blog</a></li>
                         <li class="nav-item"><a class="nav-link" href="blog-single.html"> <i class="lnr lnr-license"></i>Blog Details
                             </a></li>
                     </ul>
                 </li>
                 <li class="nav-item"><a class="nav-link" href="contact.html"><i class="lnr lnr-envelope"></i>Contact
                     </a></li>
                 @guest
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('loginForm') }}"><i class="lnr lnr-enter"></i>Login</a>
                 </li>
                 @else
                 @Auth
                 <li class="nav-item">
<<<<<<< HEAD
                     <a class="nav-link" href=""><i class="lnr lnr-calendar-full"></i>Booking</a>
                 </li>
                 @endAuth
                 @if (Auth::user()->role == 'admin')
                      <li class="nav-item">
=======
                     <a class="nav-link" href=""><i class="lnr lnr-calendar-full"></i>Booking

                     </a>
                 </li>
                 @endAuth

                 <li class="nav-item">
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
                     <a class="nav-link" href="{{route('dashboard.index')}}"><i class="lnr lnr-user"></i>Profile

                     </a>
                 </li>
<<<<<<< HEAD
                 @endif
                 
=======

>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                         <i class="lnr lnr-exit"></i>Logout
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                 </li>
                 @endguest

             </ul>
         </div>
     </nav>
     <!-- </div> -->
 </header>