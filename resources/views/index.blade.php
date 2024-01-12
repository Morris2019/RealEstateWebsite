<x-app-layout>
  <div class="main-section">
    <!-- ======= Header ======= -->
    @include('navigation')


    <section id="hero">
            <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/home1.jpg); height: 100vh">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Maisons Tropicales</span></h2>
                <p class="animate__animated animate__fadeInUp"> We exist to provide top notch real estate services in the area of our core competences, offer solutions that leave our clients thoroughly content.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/home3.jpg); height: 100vh">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Maisons Tropicales</span></h2>
                <p class="animate__animated animate__fadeInUp">We commit to work together to achieve common goals and quick to act and respond to clients needs. Most importantly, we leverage on our collective strength to always provide exceptional services to our clients.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/maison28.jpg); height: 100vh">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Maisons Tropicales</span></h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 4 -->
          <div class="carousel-item" style="background-image: url(assets/maison36.jpg); height: 100vh">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Maisons Tropicales</span></h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

        </div>

       <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </section><!-- End Hero -->
  </div class="main-section">
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>Maisons Tropicales Ghana</h2>
            <h3>We are a major real estate company in Africa and beyond providing highly professional services to meet all our clients’ needs. </h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
               <h2>Our Mission</h2>
            <p>
               We exist to provide top notch real estate services in the area of our core competences, offer solutions that leave our clients thoroughly content.
            </p>
             <h2>Our CORE VALUES</h2>
            <p>
             The culture at Maison Tropicales is to:
              
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>Keep our clients satisfied, our staffs fulfilled, motivated and our brand professional, competitive and progressive. </li>
              <li><i class="ri-check-double-line"></i> These values underpin all interactions with us.</li>

            </ul>
            <p class="font-italic">
              
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Completed</li>
              <li data-filter=".filter-card">Uncompleted</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/maison2.jpg')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/maison44.jpg')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/maison10.jpg')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/maison16.jpg')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/maison25.jpg')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/maison40.jpg')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/maison35.jpg')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/maison36.jpg')}}" class="img-fluid" alt="">
            </div>
          </div>

          <!--Uncompleted-->
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/maison37.jpg')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/maison32.jpg')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/maison34.jpg')}}" class="img-fluid" alt="">
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
  @include('footer')
</x-app-layout>
