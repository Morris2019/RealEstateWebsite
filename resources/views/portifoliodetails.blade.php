
<x-app-layout>
  <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{asset('assets/maison2.jpg')}}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{asset('assets/maison4.jpg')}}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{asset('assets/maison3.jpg')}}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Real Estate</li>
                <!--<li><strong>Client</strong>: ASU Company</li> -->
                <li><strong>Project date</strong>: 01 March, 2022</li>
                <li><strong>Project URL</strong>: <a href="https://www.maisonstropicalesghana.com">maisonstropicalesghana.com</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>This is an example of portfolio detail</h2>
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
</x-app-layout>
