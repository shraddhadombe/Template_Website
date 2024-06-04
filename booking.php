       

       <?php
          include 'header.php'
        ?>


        <!-- subheader -->
        <section id="subheader" class="jarallax text-light">
            <img src="03_images/background/bg-2.jpg" class="jarallax-img" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center wow fadeInUp">
                            <h5 class="uptitle">Make a</h5>
                            <h2>Reservation</h2>
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Booking</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">
            <section id="section-book-form">
                <div class="container">
					<div class="row gx-5">
					<div class="col-lg-4">
                        <h3>Booking now!</h3>
						<p>Simply select your desired date, time, and party size, and leave the rest to us. Get ready to indulge in exquisite flavors, impeccable service, and unforgettable moments as you embark on a culinary journey like no other. </p>
					</div>
                    <div class="col-lg-8">
                            <form class="row" name="contactForm" id='contact_form' method="post" action="#">
                                <div class="col-lg-4 mb10">
                                    <h4>Select Date</h4>
                                    <div id="date" class="input-group date" data-date-format="mm-dd-yyyy">
                                        <input class="form-control" type="text" readonly />
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    </div>
                                </div>

                                <div class="col-lg-4 mb10">
                                    <h4>Select Time</h4>
                                    <select name="time" id="time" value="" class="form-control">
                                        <option selected disabled>Select time</option>
                                        <option value="10:00">10:00</option>
                                        <option value="11:00">11:00</option>
                                        <option value="12:00">12:00</option>
                                        <option value="13:00">13:00</option>
                                        <option value="14:00">14:00</option>
                                        <option value="15:00">15:00</option>
                                        <option value="16:00">16:00</option>
                                        <option value="17:00">17:00</option>
                                        <option value="18:00">18:00</option>
                                        <option value="19:00">19:00</option>
                                        <option value="20:00">20:00</option>
                                        <option value="21:00">21:00</option>
                                        <option value="22:00">22:00</option>
                                    </select>
                                </div>

                                <div class="col-lg-4 mb10">
                                    <h4>How Many Guests?</h4>
                                    <select name="guests" id="guests" value="" class="form-control">
                                      <option value="1-4">1 - 4</option>
                                      <option value="5-8">5 - 10</option>
                                      <option value="5-8">11 - 20</option>
                                      <option value="20+">More than 20</option>
                                    </select>                                        
                                </div>

                                <div class="spacer-half"></div>

                                <h4>Enter your details</h4>
                                <div class="col-md-6">
                                    <div id='name_error' class='error'>Please enter your name.</div>
                                    <div>
                                        <input type='text' name='Name' id='name' class="form-control" placeholder="Your Name" required>
                                    </div>

                                    <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                    <div>
                                        <input type='email' name='Email' id='email' class="form-control" placeholder="Your Email" required>
                                    </div>

                                    <div id='phone_error' class='error'>Please enter your phone number.</div>
                                    <div>
                                        <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id='message_error' class='error'>Please enter your message.</div>
                                    <div>
                                        <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="g-recaptcha" data-sitekey="6LdW03QgAAAAAJko8aINFd1eJUdHlpvT4vNKakj6"></div>
                                    <div id='submit' class="mt20">
                                        <input type='submit' id='send_message' value='Submit Form' class="btn-line">
                                    </div>
                                </div>

                            </form>

                            <div id="success_message" class='success'>
                                Your message has been sent successfully. Refresh this page if you want to send more messages.
                            </div>
                            <div id="error_message" class='error'>
                                Sorry there was an error sending your form.
                            </div>
                    </div>

                    <div class="spacer-single"></div>
					</div>
                </div>
            </section>

        </div>

        <?php
          include 'footer.php'
        ?>
