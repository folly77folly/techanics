<?php
    require 'header_top.php';
?>
<section id="contact" class="contact mt-5 mb-5">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
        </div>

        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="icofont-google-map"></i>
                        <h4>Location:</h4>
                        <p>
                            Indira Shankar Nagari, Bhusari Colony,<br>
                            Kothrud, Pune, Maharashtra 411038<br>
                        </p>
                    </div>

                    <div class="email">
                        <i class="icofont-envelope"></i>
                        <h4>Email:support@hspmsolutions.com</h4>
                        <p></p>
                    </div>

                    <iframe
                        src="https://www.google.com/maps/place/Indira+Shankar+Nagari,+Bhusari+Colony,+Kothrud,+Pune,+Maharashtra+411038/@18.5096247,73.7955833,17z/data=!3m1!4b1!4m5!3m4!1s0x3bc2bfb30ec1b6c7:0x74fb1ac1f7626fdc!8m2!3d18.5092478!4d73.7981605"
                        frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="./backend/contact_us.php" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4"
                                data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email" data-rule="email"
                                data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4"
                            data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <label for="name">Message</label>
                        <textarea class="form-control" name="message" rows="10" data-rule="required"
                            data-msg="Please write something for us"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <!-- <div class="error-message"></div> -->
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button name="submit" type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section>

<?php
 require 'footer.php';
 ?>