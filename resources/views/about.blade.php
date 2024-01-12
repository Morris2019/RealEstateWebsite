<x-app-layout>
  <!-- ======= Header ======= -->
  @include('navigation')

  <section id="hero2">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url(assets/maison27.jpg); ">
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

    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>Maisons Tropicales Ghana</h2>
            <h3>We are trustworthy and ethical in all our actions</h3>
            <br>
            <div class="portfolio-wrap">
              <img src="{{asset('assets/maison34.jpg')}}" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h2>Our Vision</h2>
            <p>
              To be a major real estate company in Africa and beyond providing highly professional services to meet all our clients’ constantly.
              <br>
            <h2>Our Mission</h2>
            We exist to provide top notch real estate services in the area of our core competences, offer solutions that leave our clients thoroughly content.
            <br>
            <h2>OUR CORE VALUES</h2>
            The culture at Maison Tropicales is to:
            <br>
            <ul>
              <li><i class="ri-check-double-line"></i> Keep our clients satisfied, our staffs fulfilled and motivated and our brand professional, competitive and progressive. </li>
              <li><i class="ri-check-double-line"></i> These values underpin all interactions with us.</li>
            </ul>
            </p>

            <p class="font-italic">
              We commit to work together to achieve common goals and quick to act and respond to clients needs. Most
              importantly, we leverage on our collective strength to provide exceptional services to our cherished
              clients at all times.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-7 pt-4 pt-lg-0">
            <h2>Our Experience</h2>
            <p>
              Maisons Tropicales Ghana (MTGH) has been in the Real Estate space with the sole purpose of catering to sector-specific demands of our clients and to provide impeccable customer experience in all our engagements.
              Set up with the goal of being the most sort after Realty firm in Ghana and Internationally, we have global presence with partners spread across Accra, Nigeria, South Africa, USA, UK, Germany Etc.
              Our principles for the past decade in Real estate are deep rooted in creating value, investment stability for clients whilst positioning you financially as the pivot of our company’s existence. With an extensive understanding of both commercial and Residential real estate demands, our elite group of property brokers and agents are properly situated to satisfy the demands of our clients.
              We remain on the cutting edge of the future of Real Estate in Ghana and beyond.
              <br>

          </div>
          <div class="col-lg-5 pt-4 pt-lg-0 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/maison10.jpg')}}" class="img-fluid" alt="">
            </div>
          </div>


        </div>
      </div>
    </section>


    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p>Our Hardowrking Team</p>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
          <div class="carousel-inner" role="listbox">

            <div class="row carousel-container">

              <div class="col-lg-4 mt-4">
                <div class="member d-flex align-items-start">
                  <div class="pic"><img src="assets/maison26.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Vincent A.M. Zanoo</h4>
                    <span>Chief Executive Officer</span>
                    <p> </p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mt-4">
                <div class="member d-flex align-items-start">
                  <div class="pic"><img src="assets/maisonPA.png" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Celestina Kyereboah</h4>
                    <span>Personal Assistant</span>
                    <p> </p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mt-4">
                <div class="member d-flex align-items-start">
                  <div class="pic"><img src="assets/maisons89.png" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Yvonne Ankomah</h4>
                    <span>Sales and Marketing</span>
                    <p> </p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
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
    </section><!-- End Team Section -->


    <section id="skills" class="skills">
      <div class="container">

        <div class="section-title">
          <h2>Our Skills</h2>
          <p>Check our Skills</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Property Management <i class="val"></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Real Estate Appraisals<i class="val"></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Property Assessment <i class="val"></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Landscaping <i class="val"></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Land Development <i class="val"></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Investment Property Services <i class="val"></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Residential Real Estate<i class="val"></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Commercial Real Estate<i class="val"></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Our Skills Section -->

  </main><!-- End #main -->
  @include('footer')
</x-app-layout>