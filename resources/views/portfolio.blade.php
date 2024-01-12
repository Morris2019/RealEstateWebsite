<x-app-layout>
       <!-- ======= Header ======= -->
       @include('navigation')

       <section id="hero2">
         <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

             <!-- Slide 1 -->
             <div class="carousel-item active" style="background-image: url(assets/maison28.jpg); ">
               <div class="carousel-container">
                 <div class="container">
                   <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Maisons Tropicales</span></h2>
                 </div>
               </div>
             </div>

         </div>
       </section><!-- End Hero -->
     </div class="main-section">
  <main id="main">


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
          <div class="portfolio-info">
            <h4>House 1</h4>
            <p>Accra</p>
            <div class="portfolio-links">

                  <a href="{{asset('assets/maison2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="{{route('portifoliodetails')}}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
        


            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="{{asset('assets/maison44.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>House 2</h4>
            <p>Accra</p>
            <div class="portfolio-links">
              <a href="{{asset('assets/maison38.jpg')}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="{{asset('assets/maison39.jpg')}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="{{asset('assets/maison40.jpg')}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="{{asset('assets/maison41.jpg')}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="{{asset('assets/maison42.jpg')}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="{{asset('assets/maison43.jpg')}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="{{asset('assets/maison46.jpg')}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="{{asset('assets/maison47.jpg')}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="{{asset('assets/maison49.jpg')}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="{{asset('assets/maison51.jpg')}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="{{asset('assets/maison32.jpg')}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="{{asset('assets/maison33.jpg')}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="{{asset('assets/maison34.jpg')}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="{{asset('assets/maison35.jpg')}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="{{asset('assets/maison36.jpg')}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>

             <!-- <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>
        </div>
      </div>

     <!-- uncompleted
      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Web 3</h4>
            <p>Web</p>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div> -->


      <!-- Third Items
      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Web 2</h4>
            <p>Web</p>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div> -->

      <!-- Completed
      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 3</h4>
            <p>App</p>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div> -->

      <!--Uncompleted-->
      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{asset('assets/maison37.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Hydraform Blocks</h4>
            <p>Blocks</p>
            <div class="portfolio-links">
              <a href="{{asset('assets/maison37.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
              <!--<a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>
        </div>
      </div>


  </div>
</section><!-- End Portfolio Section -->

</main><!-- End #main -->

  @include('footer')
</x-app-layout>
