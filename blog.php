<?php
    require 'header_top.php';
?>
        <!-- styles -->  
        <script src="jquery-3.5.1.min.js"></script>
        <style>
@import url("https://fonts.googleapis.com/css?family=Montserrat:400,700");

body {
  margin: 0;
  overflow-x: hidden;
  font-family: Montserrat;
}

.section {
  display: grid;
  /* Code for center-alignment */
  text-align: center;
}

#hero {
  height: 100vh;
  position: relative;
  /* Grid template */
  grid-template-columns: 1fr auto 1fr;
  grid-template-rows: 1fr auto 1fr;
  color: #ffffff;
  background-color: rgba(0, 0, 0, 0.5);
}

#hero .down-button {
  height: 72px;
  width: 72px;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 40px;
  margin: auto;
  opacity: 0;
  transition: opacity 1s ease-in;
}

#hero .down-button img {
  height: 72px;
  width: 72px;
}

#hero .img-appear {
  opacity: 1;
}

#hero .video-wrapper {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  z-index: -1;
  overflow: hidden;
 
}

#hero .video-wrapper video {
  width: 100%;
  height: 100%;
  background-position: center;
  background-size: contain;
  -o-object-fit: cover;
  object-fit: cover;
}

#hero .content {
  -ms-grid-column: 2;
  -ms-grid-row: 2;
  grid-column: 2;
  grid-row: 2;
  z-index: 2;
}

#hero .content h1 {
  font-size: 56px;
  font-weight: 800;
  line-height: 80px;
  letter-spacing: 1px;
  margin: 16px 0px;
  opacity: 0;
  transition: opacity 1s ease-in;
}

#hero .content .h1-appear {
  opacity: 1;
}

#hero .content p {
  text-transform: uppercase;
  font-size: 16px;
  line-height: 18px;
  font-weight: 500;
  letter-spacing: 8px;
  margin: 16px 0px;
  opacity: 0;
  transition: opacity 1s ease-in;
}

#hero .content .p-appear {
  opacity: 1;
}

.col1 {
  -ms-grid-column: 1;
}

.col2 {
  -ms-grid-column: 3;
}

.col3 {
  -ms-grid-column: 5;
}

.row1 {
  -ms-grid-row: 1;
}

.row2 {
  -ms-grid-row: 5;
}

.row3 {
  -ms-grid-row: 9;
}

.row3_5 {
  -ms-grid-row: 11;
}

#blog-links {
  /* Grid template */
  -ms-grid-columns: 1fr 24px 1fr 24px 1fr;
  grid-template-columns: repeat(3, 1fr);
  -ms-grid-rows: 1fr 24px 1fr 24px 1fr 24px 1fr 24px 1fr 24px 1fr;
  grid-template-rows: repeat(6, auto);
  grid-gap: 24px;
  padding: 24px;
}

#blog-links .blog-link {
  padding: 32px;
  background-color: #f5f5f5;
  color: #212121;
  display: block;
  text-decoration: none;
}

#blog-links .blog-link .article-image {
  height: 348px;
  margin-bottom: 32px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}

#blog-links .blog-link h3 {
  font-size: 32px;
  font-weight: 700;
  line-height: 1.24;
  text-align: center;
  margin: 0;
  max-width: 100%; /* for IE10 */
}

#blog-links .type-image-2-1 {
  -ms-grid-row-span: 3;
  -ms-grid-column-span: 1;
  grid-row: span 2;
}

#blog-links .type-paragraph-2-1 {
  -ms-grid-row-span: 3;
  -ms-grid-column-span: 1;
  grid-row: span 2;
  text-align: left;
}

#blog-links .type-paragraph-2-1 .article-image {
  display: inline-block;
  margin: 0;
  height: 102px;
  width: 112px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  vertical-align: middle;
}

#blog-links .type-paragraph-2-1 h3 {
  max-width: calc(100% - 142px);
  display: inline-block;
  font-size: 24px;
  font-weight: 700;
  line-height: 1.21;
  color: #212121;
  text-align: left;
  margin: 0;
  margin-left: 24px;
  vertical-align: middle;
}

#blog-links .type-paragraph-2-1 p {
  font-size: 16px;
  line-height: 1.62;
  color: #757575;
  margin: 24px 0;
}

#blog-links .type-paragraph-2-1 .continue {
  color: #1537f4;
  margin-bottom: 0;
}

#blog-links .type-color-2-1 {
  -ms-grid-row-span: 3;
  -ms-grid-column-span: 1;
  grid-row: span 2;
  background-color: #212121;
  color: #fff;
  display: flex;
  align-items: center;
}

#blog-links .type-image-2-2 {
  -ms-grid-row-span: 3;
  -ms-grid-column-span: 3;
  grid-column: span 2;
  grid-row: span 2;
  text-align: left;
}

#blog-links .type-heading-1-1 {
  -ms-grid-row-span: 1;
  -ms-grid-column-span: 1;
  display: flex;
  align-items: center;
}

#blog-links .type-image-2-2 span {
  font-size: 24px;
  font-weight: bold;
  letter-spacing: 3px;
  background-color: #212121;
  color: #ffffff;
  padding: 4px 24px;
  display: inline-block;
  margin: 0 0 24px;
  text-transform: uppercase;
}


@media screen and (max-width: 1024px) {
  #blog-links {
    /* Grid template */
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 24px;
    margin: 24px;
  }

  #blog-links .blog-link {
    grid-row: span 1;
    grid-column: span 1;
  }

  #blog-links .blog-link:last-of-type {
    grid-column: span 2;
  }

 
}

@media screen and (max-width: 640px) {
  #hero .content h1 {
    font-size: 32px;
    line-height: 40px;
  }

  #hero .content p {
    font-size: 14px;
    line-height: 1.57;
    letter-spacing: 5px;
  }

  #blog-links {
    /* Grid template */
    grid-template-columns: 1fr;
    grid-template-rows: unset;
    grid-gap: 24px;
    margin: 24px;
  }

  #blog-links .blog-link {
    grid-row: span 1;
    grid-column: span 1;
  }

  #blog-links .type-paragraph-2-1 .article-image {
    display: block;
    height: 102px;
    width: 100%;
  }

  #blog-links .type-paragraph-2-1 h3 {
    max-width: unset;
    display: block;
    margin: 24px 0;
  }

  #blog-links .blog-link:last-of-type {
    grid-column: span 1;
  }

}
@media screen and (max-height: 400px) {
  #hero {
    height: 90vh;
  }

  #hero .down-button {
    display: none;
  }

  
}


        </style>

            <div class="container">
                <div class="section minh" id="hero">
                  <div class="content">
                    <h1 id="brand">UrbanClap</h1>
                    <p id="sub-brand-text">HSPM Blog</p>
                  </div>
                  <a id="hero-down-button" class="down-button" data-speed="1000" href="#blog-links">
                    <img src="" alt="Show links" />
                  </a>
                  <div class="video-wrapper">
                    <video id="hero-video" src="assets/img/hspm-solutions-india-is-the-fourth-producer-of-e-waste-3vrz8qtj-anhf_PSoFUI74_RvQL.mp4" autoplay muted loop></video>
                  </div>
                </div>
                <div class="section" id="blog-links">
                  <a class="blog-link type-paragraph-2-1 row1 col3" href="https://www.lyricalhost.com/blog/blogging-101-5-pages-every-blog-needs/">
                    <div class="article-image" style="background-image: url(assets/img/portfolio-7.jpg)"></div>
                    <h3>Blog Name</h3>
                    <p>The emergence and growth of blogs in the late 1990s coincided with the advent of web publishing tools that facilitated the posting of content by non-technical users who did not have much experience with HTML or computer programming. Previously, a knowledge of such technologies as HTML and File Transfer Protocol had been required to publish content on the Web, and early Web users therefore tended to be hackers and computer enthusiasts. In the 2010s, the majority are interactive Web 2.0 websites, allowing visitors to leave online comments.
                       and it is this interactivity that distinguishes them from other static websites.</p>
                    <p>There are various ways in which you can do up your bed wall, depending on your aesthetics and utility. Here are a few ...</p>
                    <p class="continue">Continue reading</p>
                    </p>
                  </a>
                  <a class="blog-link type-paragraph-2-1 row1 col3" href="https://www.lyricalhost.com/blog/blogging-101-5-pages-every-blog-needs/">
                    <div class="article-image" style="background-image: url(assets/img/portfolio-8.jpg)"></div>
                    <h3>Blog Name</h3>
                    <p>The emergence and growth of blogs in the late 1990s coincided with the advent of web publishing tools that facilitated the posting of content by non-technical users who did not have much experience with HTML or computer programming. Previously, a knowledge of such technologies as HTML and File Transfer Protocol had been required to publish content on the Web, and early Web users therefore tended to be hackers and computer enthusiasts. In the 2010s, the majority are interactive Web 2.0 websites, allowing visitors to leave online comments.
                       and it is this interactivity that distinguishes them from other static websites.</p>
                    <p>There are various ways in which you can do up your bed wall, depending on your aesthetics and utility. Here are a few ...</p>
                    <p class="continue">Continue reading</p>
                    </p>
                  </a>
                  <a class="blog-link type-paragraph-2-1 row1 col3" href="https://www.lyricalhost.com/blog/blogging-101-5-pages-every-blog-needs/">
                    <div class="article-image" style="background-image: url(assets/img/adv2.jpg)"></div>
                    <h3>Blog Name</h3>
                    <p>The emergence and growth of blogs in the late 1990s coincided with the advent of web publishing tools that facilitated the posting of content by non-technical users who did not have much experience with HTML or computer programming. Previously, a knowledge of such technologies as HTML and File Transfer Protocol had been required to publish content on the Web, and early Web users therefore tended to be hackers and computer enthusiasts. In the 2010s, the majority are interactive Web 2.0 websites, allowing visitors to leave online comments.
                       and it is this interactivity that distinguishes them from other static websites.</p>
                    <p>There are various ways in which you can do up your bed wall, depending on your aesthetics and utility. Here are a few ...</p>
                    <p class="continue">Continue reading</p>
                    </p>
                  </a>
                  <a class="blog-link type-image-2-1 row2 col2" href="https://www.lyricalhost.com/blog/blogging-101-5-pages-every-blog-needs/">
                    <div class="article-image" style="background-image: url(assets/img/portfolio-6.jpg)"></div>
                    <h3>Blog Name</h3>
                  </a>
                  <a class="blog-link type-image-2-1 row2 col2" href="https://www.lyricalhost.com/blog/blogging-101-5-pages-every-blog-needs/">
                    <div class="article-image" style="background-image: url(assets/img/adv2.jpg)"></div>
                    <h3>Blog Name</h3>
                  </a>
                  <a class="blog-link type-image-2-1 row2 col2" href="https://www.lyricalhost.com/blog/blogging-101-5-pages-every-blog-needs/">
                    <div class="article-image" style="background-image: url(assets/img/slide-1.jpg)"></div>
                    <h3>Blog Name</h3>
                  </a>
                  <a class="blog-link type-image-2-1 row2 col2" href="https://www.lyricalhost.com/blog/blogging-101-5-pages-every-blog-needs/">
                    <div class="article-image" style="background-image: url(assets/img/slide-2.jpg)"></div>
                    <h3>Blog Name</h3>
                  </a>
                  <a class="blog-link type-image-2-1 row2 col2" href="https://www.lyricalhost.com/blog/blogging-101-5-pages-every-blog-needs/">
                    <div class="article-image" style="background-image: url(assets/img/slide-3.jpg)"></div>
                    <h3>Blog Name</h3>
                  </a>
                  <a class="blog-link type-image-2-1 row2 col2" href="https://www.lyricalhost.com/blog/blogging-101-5-pages-every-blog-needs/">
                    <div class="article-image" style="background-image: url(assets/img/slide-1.jpg)"></div>
                    <h3>Blog Name</h3>
                  </a>
                </div>
               
              </div>
<?php
    require 'footer.php';
?> 