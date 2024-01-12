<x-app-layout>
       <!-- ======= Header ======= -->
       @include('navigation')
       <section id="hero2">
         <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

             <!-- Slide 1 -->
             <div class="carousel-item active" style="background-image: url(assets/maison45.jpg); ">
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


<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">

    <div class="row">
      <div class="col-md-6">
        <div class="icon-box">
          <i class="icofont-computer"></i>
          <h4><a href="#">Property Management</a></h4>
          <p>We see to the daily oversight of residential, commercial and industrial real estate by a third party contractor.
We take responsibility of repairs, maintenance, security and upkeep of clients properties.</p>
        </div>
      </div>
      <div class="col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="icofont-chart-bar-graph"></i>
          <h4><a href="#">Real Estate Appraisals</a></h4>
          <p>We provide a thorough and relevant market data to third parties involved in property transactions.</p>
        </div>
      </div>
      <div class="col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="icofont-image"></i>
          <h4><a href="#">Property Assesment</a></h4>
          <p>We conduct proper assessment on all properties before and after sales within reliable time.</p>
        </div>
      </div>
      <div class="col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="icofont-settings"></i>
          <h4><a href="#">Landscaping</a></h4>
          <p>We alter existing designs and add more ecstatic features to undeveloped plan to make it more accessible and useable.</p>
        </div>
      </div>
      <div class="col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="icofont-earth"></i>
          <h4><a href="#">Land Development</a></h4>
          <p>We transform land forms for purposes such as agriculture, sports and or housing development.</p>
        </div>
      </div>
      <div class="col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="icofont-tasks-alt"></i>
          <h4><a href="#">Property Investment Services</a></h4>
          <p>We provide professional and specialized services (property management, investment analysis and many more)  to individuals or organizations looking to venture into real estate.</p>
        </div>
      </div>

    <div class="col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="icofont-earth"></i>
          <h4><a href="#">Residential Real Estate</a></h4>
          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
        </div>
      </div>
      <div class="col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="icofont-tasks-alt"></i>
          <h4><a href="#">Commercial Real Estate</a></h4>
          <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
        </div>
      </div>
      
            <div class="col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="icofont-tasks-alt"></i>
          <h4><a href="">Search and Verification</a></h4>
          <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Services Section -->

</main><!-- End #main -->
  @include('footer')
</x-app-layout>
