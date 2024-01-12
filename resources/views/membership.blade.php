<x-app-layout>
    <div class="main-section">
        <!-- ======= Header ======= -->

        @include('navigation')
        <section id="hero2">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/maison28.jpg); ">
                    <div class="carousel-container">
                        <!-- <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Maisons Tropicales</span></h2>
                        </div> -->
                    </div>
                </div>

            </div>
        </section><!-- End Hero -->
    </div class="main-section">
    <main id="main">

        <section id="portfolio" class="portfolio">
            <div class="formcontainer col-lg-8 justify-content-center">

                <form action="">
                    <div class="row">
                        <h3>Personal Information</h4>

                            <div class="row">
                                <div class="col-half">
                                    <div class="col-third">
                                        <div class="input-group input-group-icon">
                                            <input type="text" placeholder="Title" required />
                                            <div class="input-icon"><i class="fa fa-user"></i></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group input-group-icon">
                                            <input type="text" placeholder="First Name" required />
                                            <div class="input-icon"><i class="fa fa-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-half">
                                    <div class="input-group input-group-icon">
                                        <input type="text" placeholder="Last Name" required />
                                        <div class="input-icon"><i class="fa fa-user"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-third">
                                    <div class="input-group input-group-icon">
                                        <input type="text" placeholder="Address" required />
                                        <div class="input-icon"><i class="fa fa-map-marker"></i></div>
                                    </div>
                                </div>
                                <div class="col-third">
                                    <div class="input-group input-group-icon">
                                        <input type="text" placeholder="GPS Address" required />
                                        <div class="input-icon"><i class="fa fa-map-marker"></i></div>
                                    </div>
                                </div>

                                <div class="col-third">
                                    <div class="input-group input-group-icon">
                                        <input type="text" placeholder="City" required />
                                        <div class="input-icon"><i class="fa fa-map-marker"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-third">
                                    <div class="input-group input-group-icon">
                                        <input type="text" placeholder="Postal Code" required />
                                        <div class="input-icon"><i class="fa fa-map-marker"></i></div>
                                    </div>
                                </div>
                                <div class="col-third">
                                    <div class="input-group input-group-icon">
                                        <input type="text" placeholder="Country" required />
                                        <div class="input-icon"><i class="ffa fa-map-marker"></i></div>
                                    </div>
                                </div>
                                <div class="col-third">
                                    <div class="input-group input-group-icon">
                                        <input type="text" placeholder="Nationality" required />
                                        <div class="input-icon"><i class="fa fa-map-marker"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-half">
                                    <div class="input-group input-group-icon">
                                        <input type="tel" placeholder="Tell Number" minlength="9" maxlength="14" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
                                        <div class="input-icon"><i class="fa fa-phone"></i></div>
                                    </div>
                                </div>
                                <div class="col-half">
                                    <div class="input-group input-group-icon">
                                        <input type="tel" placeholder="Mobile Number" minlength="9" maxlength="14" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
                                        <div class="input-icon"><i class="fa fa-phone"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-half">
                                    <div class="input-group input-group-icon">
                                        <input type="tel" placeholder="E-mail" minlength="9" maxlength="14" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
                                        <div class="input-icon"><i class="fa fa-phone"></i></div>
                                    </div>
                                </div>
                                <div class="col-half">
                                    <div class="input-group input-group-icon">
                                        <input type="tel" placeholder="Fax" minlength="9" maxlength="14" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
                                        <div class="input-icon"><i class="fa fa-phone"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-half">
                                    <h4>Date of Birth</h4>
                                    <div class="input-group">
                                        <div class="col-third">
                                            <input type="text" placeholder="DD" />
                                        </div>
                                        <div class="col-third">
                                            <input type="text" placeholder="MM" />
                                        </div>
                                        <div class="col-third">
                                            <input type="text" placeholder="YYYY" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-half">
                                    <h4>Gender</h4>
                                    <div class="input-group">
                                        <input id="gender-male" type="radio" name="gender" value="male" />
                                        <label for="gender-male">Male</label>
                                        <input id="gender-female" type="radio" name="gender" value="female" />
                                        <label for="gender-female">Female</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-group input-group-icon">
                                    <input type="text" placeholder="Identity Card (National ID, Passport, Voters ID)" required />
                                    <div class="input-icon"><i class="fa fa-user"></i></div>
                                </div>
                            </div>

                            <div class="row">
                                <h3>Employment Information</h3>
                                <div class="col-half">
                                    <div class="input-group">
                                        <input id="work-status-government" type="radio" name="employment" value="government" />
                                        <label for="work-status-government">Government</label>
                                        <input id="work-status-private" type="radio" name="employment" value="private" />
                                        <label for="work-status-private">Private</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group input-group-icon">
                                    <input type="text" placeholder="Name of Organization/Institution/Company" required />
                                    <div class="input-icon"><i class="fa fa-user"></i></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-half">
                                    <div class="input-group input-group-icon">
                                        <input type="tel" placeholder="Position" required />
                                        <div class="input-icon"><i class=" "></i></div>
                                    </div>
                                </div>
                                <div class="col-half">
                                    <div class="input-group input-group-icon">
                                        <input type="tel" placeholder="Student" required />
                                        <div class="input-icon"><i class=" "></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-group input-group-icon">
                                    <input type="text" placeholder="Qualification" required />
                                    <div class="input-icon"><i class="fa fa-user"></i></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-half">
                                    <div class="input-group input-group-icon">
                                        <input type="tel" placeholder="Professional category " required />
                                        <div class="input-icon"><i class=" "></i></div>
                                    </div>
                                </div>
                                <div class="col-half">
                                    <div class="input-group input-group-icon">
                                        <input type="tel" placeholder="Subcategory " required />
                                        <div class="input-icon"><i class=" "></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h5>If other please specify:</h5>
                                <div class="row">
                                    <div class="input-group input-group-icon">
                                        <textarea placeholder="If other please specify :" rows="5" cols="80">
                                    </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <h4>Terms and Conditions</h4>
                                <div class="input-group">
                                    <input id="terms" type="checkbox" />
                                    <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
                                </div>
                            </div>
                            <div class="row">
                                <input id="payment-method-card" type="submit" value="Create Account" />
                            </div>
                </form>

            </div>

            </div>
        </section>
    </main>
    </div>
    @include('footer')
</x-app-layout>