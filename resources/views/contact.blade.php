<x-app-layout>
       <!-- ======= Header ======= -->
       @include('navigation')

  <main id="main">

    <section id="hero2">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/maison36.jpg); ">
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

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div>
      <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.8047520636073!2d-0.0875098844902649!3d5.595842795943113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf85b5c1134f3f%3A0xcb8fb4056b5166fc!2sNungua%20Coldstore!5e0!3m2!1sen!2sgh!4v1669507191722!5m2!1sen!2sgh" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="row mt-5">

      <div class="col-lg-4">
        <div class="info">
          <div class="address">
            <i class="icofont-google-map"></i>
            <h4>Location:</h4>
            <p>Box NG 650, Nungua Accra, Ghana</p>
          </div>

          <div class="email">
            <i class="icofont-envelope"></i>
            <h4>Email:</h4>
            <p>info@maisonstropicalesghana.com</p>
          </div>

          <div class="phone">
            <i class="icofont-phone"></i>
            <h4>Call:</h4>
            <p>+233 547 674 156/ 277 833 232</p>
          </div>

        </div>

      </div>

      <div class="col-lg-8 mt-5 mt-lg-0">

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->
  @include('footer')
</x-app-layout>
