<?php
    require 'header_top.php';
?>
<style>
.email img {
    width: 100%;
}

.asimg img {
    width: 150px;
}

@media (max-width:500px) {
    .asimg img {
        width: 120px;
    }
}
</style>
<section id="contact" class="contact mt-5 mb-5">
    <div class="container">

        <div class="section-title">
            <h2>Repair Service</h2>
        </div>

        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <!--<div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>
                Indira Shankar Nagari, Bhusari Colony,<br>
                Kothrud, Pune, Maharashtra 411038<br>
                </p>
              </div>-->

                    <div class="email">
                        <img src="assets/img/repair.jpg">
                        <h3 style="border-bottom: 2px #7eb3bd solid; padding-bottom: 10px;"><b><br>Book A Repair</b>
                        </h3><br>
                        <i class="icofont-download"></i>
                        <p>Download the app to get repair service <b>at your Doorstep</b>.</p>
                        <div class="asimg row mt-2 mb-2">
                            <div class='col-6 text-center'>
                                <a href="https://play.google.com/store/apps/details?id=com.hspmdeveloper.bsauto"
                                    target="__blank"><img src='assets/img/playstoreicon.jpg'></a>
                            </div>
                            <div class='col-6 text-center'>
                                <a href="#" target="__blank"><img src='assets/img/appstoreicon.jpg'></a>
                            </div>
                        </div>
                        <p></p>
                        <i class="icofont-pencil"></i>
                        <p>For any queries related to repair service, Kindly fill up the form.</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="./backend/contact_us.php" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <h4 style="border-bottom: 2px #7eb3bd solid; width: 20%; padding-bottom: 10px;">
                                <b>Enquiry</b>
                            </h4>
                        </div>
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
                        <div class="error-message"></div>
                        <div style="
                            display: none;
                            color: #fff;
                            background: #18d26e;
                            text-align: center;
                            padding: 15px;
                            font-weight: 600;
                            " class="sent-message">Your message has been sent. Thank you!</div>
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