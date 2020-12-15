<?php
    require 'header_top.php';
?>
<style>
    #overlay {
  position: fixed;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: 2;
  cursor: pointer;
  /* background-image: url('/img/career-path.png'); */
}

#text{
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 50px;
  color: white;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
}
#myCarousel{
    height: 400px;
    width: 100%;
}
.carousel-item img{
    width: 100%;
    height:450px;
}
.carousel-caption {
  position: absolute; /* Position the background text */
  top: 0; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  /* Full width */
  padding: 20px; /* Some padding */
  bottom: 0;
  left: 0;
  right: 0;
}
.feature-divider{
  margin: 5rem 1rem;
}
.benefits{
    text-align: center;
    align-self: center;
    display: block;
    text-decoration: underline;
    color: steelblue;
}
.shadow-sm{
  text-align: center;
  padding: 15px;
}
.icofont{
  font-size: 55px;
  color: steelblue;
}
.btn-group{
    text-align: center;
}
iframe{
    width: 100%;
}
</style>   
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="assets/icofont/icofont/icofont.min.css">
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&callback=myMap"></script>

      
<div class="container">
  <div class="feature-divider"></div>
  <div class="row featurette benefits">
    <h1></h1>
</div>
<div class="feature-divider"></div>
    <div class="row" style="margin-top: 40px;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg> -->
                <img class="img-fluid" src="assets/img/img-1.jpg">
                <div class="container">
                  <div class="carousel-caption text-left ">
                    <h1>The Spirit</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget elit purus. Cras eu tristique tellus. In eget ultrices dolor. Fusce blandit, libero id malesuada pretium, ligula tellus vestibulum quam, a malesuada eros neque ac justo. Morbi erat velit, rhoncus eu mattis vitae, pulvinar ac dolor. </p>
                    <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="img-fluid" src="assets/img/img-2.jpg">
                <div class="container">
                  <div class="carousel-caption text-right">
                    <h1>Work Enviroment</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget elit purus. Cras eu tristique tellus. In eget ultrices dolor. Fusce blandit, libero id malesuada pretium, ligula tellus vestibulum quam, a malesuada eros neque ac justo. Morbi erat velit, rhoncus eu mattis vitae, pulvinar ac dolor. </p>
                    <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg> -->
                <img class="img-fluid" src="assets/img/img-3.jpg">
                <div class="container">
                  <div class="carousel-caption text-right">
                    <h1>Meet Our People</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget elit purus. Cras eu tristique tellus. In eget ultrices dolor. Fusce blandit, libero id malesuada pretium, ligula tellus vestibulum quam, a malesuada eros neque ac justo. Morbi erat velit, rhoncus eu mattis vitae, pulvinar ac dolor. </p>
                    <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
    <hr class="feature-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Why our company?  <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <img class="img-fluid" src="assets/img/why.jpg" height="500" width="500">
      </div>
    </div>

    <hr class="feature-divider">

    <div class="row featurette">
      <div class="col-md-5">
        <img class="img-fluid" src="assets/img/why.jpg" height="500" width="500">
      </div>
      <div class="col-md-7">
        <h2 class="featurette-heading">Opportunities</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
    </div>

    <hr class="feature-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Life</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <img class="img-fluid" src="assets/img/why.jpg" height="500" width="500">
      </div>
    </div>

    <hr class="feature-divider">

    <div class="row featurette">
      <div class="col-md-5">
        <img class="img-fluid" src="assets/img/why.jpg" height="500" width="500">
      </div>
      <div class="col-md-7">
        <h2 class="featurette-heading">Campus</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
    </div>

    <hr class="feature-divider">
    <div class="row featurette benefits">
        <h2>Our Benefits</h2>
    </div>
    <div class="feature-divider"></div>
    <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <i class="icofont icofont-rocket"></i>
            <div class="card-body">
            <h4 class="card-title">Shape your career</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=" justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View More</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <i class="icofont icofont-compass"></i>
            <div class="card-body">
                <h4 class="card-title">Learn & grow</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=" justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View More</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <i class="icofont icofont-gift-box"></i>
            <div class="card-body">
                <h4 class="card-title">Invest in yourself</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=" justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View More</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <hr class="feature-divider">
    <div class="row featurette benefits">
        <h2>Our Global Presence</h2>
    </div>
    <div class="feature-divider"></div>
    <div class="row">
        <div id="googleMap" style="width:100%;height:400px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121059.04360435338!2d73.79292679010764!3d18.5246035534068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1606163358341!5m2!1sen!2sin" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
    <hr class="feature-divider">
</div>
<script>
    $(document).ready(function(){
        $("#myCarousel").corousel({
            interval:5000,
            pause:'hover',

        })
    })
</script>
<?php
    require 'footer.php';
?> 
