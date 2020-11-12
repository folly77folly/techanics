<?php
    require 'header_top.php';
?>
<style>
    .customcard{
        width:75%; 
        margin:auto; 
        background-color: #f5f5f5; 
        border-radius: 20px;
    }
    .customcard a{
        color: #3d2f95;
        font-weight: 800;
    }
    .customcard a:hover{
        color: #555;
    }
    .customcard:hover{
        border-bottom: 6px #aaa solid;
        border-right: 6px #aaa solid;
    }
    .customcard img{
        width: 296px;
        height: 314px;
        border-radius: 15px;
    }
    .customlink{
        width: 100%;
        padding: 20px;
        border-radius: 20px;
    }
</style>
 <section id="contact" class="contact mt-5 mb-5">
      <div class="container">

        <div class="section-title">
          <h2>Get A Customized PC</h2>
        </div>

        <div class="row">

          <div class="col-md-6 col-12 text-center">
              <div class='p-4 customcard'>
                  <img src='assets/img/preass.jpeg'>
              <div class='text-center customlink mt-2'>
                  <h4><a href='products_buy.php'>Pre-Assembled PC's</a></h4>
              </div>
              </div>
          </div>

          <div class="col-md-6 col-12 text-center mt-3 mt-md-0">
              <div class='p-4 customcard'>
              <img src='assets/img/uv.jpg'>
              <div class='text-center customlink mt-2'>
                  <h4><a href='custom_build.php'>Build Your Custom PC</a></h4>
              </div>
              </div>
          </div>

        </div>

      </div>
    </section>

<?php
    require 'footer.php';
?>