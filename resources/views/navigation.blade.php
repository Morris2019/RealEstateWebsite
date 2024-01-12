<header id="header" class="fixed-top ">
     <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
           <div class="container px-4 px-lg-5">
               <a class="navbar-brand logo" href="{{route('index')}}"> <img src="{{asset('assets/logo.jpg')}}" class="img-fluid" alt=""> </a>
               <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarResponsive">
                   <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <!-- <li class="nav-item"><a class="nav-link" href="{{route('index')}}">Home</a></li> -->
                     <li class="nav-item"><a class="nav-link" href="{{route('about')}}"><H4>About</H4></a> </li>
                     <li class="nav-item"><a class="nav-link" href="{{route('services')}}"><H4>Services</H4></a></li>
                     <li class="nav-item"><a class="nav-link" href="{{route('portfolio')}}"><H4>Portfolio</H4></a></li>
                     <li class="nav-item"><a class="nav-link" href="{{route('contact')}}"><H4>Contact</H4></a></li>
                     <li class="nav-item"><a class="nav-link" href="{{route('membership')}}"><H4>Membership</H4></a></li>

                   </ul>
               </div>
           </div>
       </nav>
  </header>
