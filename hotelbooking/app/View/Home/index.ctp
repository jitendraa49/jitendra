   <section class="site-hero overlay" style="background-image: url(img/hero_1.jpg)">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <h1 class="heading" data-aos="fade-up">Welcome to <em>Villa</em> resort</h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Discover our world-class hotel &amp; restaurant resort.</p>
            <p data-aos="fade-up" data-aos-delay="100"><a href="#" class="btn uppercase btn-primary mr-md-2 mr-0 mb-3 d-sm-inline d-block">Explore The Beauty</a> <a href="#" class="btn uppercase btn-outline-light d-sm-inline d-block">Download</a></p>
          </div>
        </div>
        <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
      </div>
    </section>
    <!-- END section -->

    <section class="section visit-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading" data-aos="fade-right">You Can Visit</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right">
            <a href="restaurant.html"><img src="img/img_1.jpg" alt="Image placeholder" class="img-fluid"> </a>
            <h3><a href="restaurant.html">Food &amp; Wines</a></h3>
            <div class="reviews-star float-left">
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star-half"></span>
              <span class="ion-android-star-outline"></span>
            </div>
            <span class="reviews-count float-right">
              3,239 reviews
            </span>
          </div>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right" data-aos-delay="100">
            <a href="restaurant.html"><img src="img/img_2.jpg" alt="Image placeholder" class="img-fluid"> </a>
            <h3><a href="restaurant.html">Resort &amp; Spa</a></h3>
            <div class="reviews-star float-left">
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star-half"></span>
              <span class="ion-android-star-outline"></span>
            </div>
            <span class="reviews-count float-right">
              4,921 reviews
            </span>
          </div>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right" data-aos-delay="200">
            <a href="hotel.html"><img src="img/img_4.jpg" alt="Image placeholder" class="img-fluid"> </a>
            <h3><a href="hotel.html">Hotel Rooms</a></h3>
            <div class="reviews-star float-left">
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star-outline"></span>
            </div>
            <span class="reviews-count float-right">
              2,112 reviews
            </span>
          </div>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right" data-aos-delay="300">
            <a href="yacht.html"><img src="img/img_5.jpg" alt="Image placeholder" class="img-fluid"> </a>
            <h3><a href="yacht.html">Yacht Club</a></h3>
            <div class="reviews-star float-left">
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star-outline"></span>
            </div>
            <span class="reviews-count float-right">
              6,421 reviews
            </span>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="section slider-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">A gorgeous place to enjoy your life.</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
              <?php foreach($slider as $value) { //pr($value);?>
			  <div class="slider-item">
                <img src="<?php echo SITE_URL; ?>/images/banner/<?php echo $value['Slider']['image']; ?>" alt="Image placeholder" class="img-fluid">
              </div>
			  <?php  } ?>
              
            </div>
            <!-- END slider -->
          </div>

          <div class="col-md-12 text-center"><a href="#" class="">View More Photos</a></div>
        
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="section blog-post-entry bg-pattern">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
		  
            <h2 class="heading" data-aos="fade-up">Recent Blog Post</h2>
            <p class="lead" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">
<?php foreach($blog as $value) { //pr($value);?>
           
             <div class="blog-item">
                <img src="<?php echo SITE_URL; ?>/images/banner/<?php echo $value['Blog']['image']; ?>" alt="Image placeholder" class="img-fluid">
              </div>
			  <?php  } ?>
    </section>
    <!-- END section -->
    <!-- END section -->
    <section class="section testimonial-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Testimonial</h2>
          </div>
        </div>
        <div class="row">
		<?php foreach ($testimonial as $value){ //pr ($value);?>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial text-center">
              <div class="author-image mb-3">
                <img src="<?php echo SITE_URL; ?>/images/banner/<?php echo $value['Testimonial']['image'];?>" alt="Image placeholder" class="rounded-circle">
              </div>
              <blockquote>

                <p>
				<?php echo $value['Testimonial']['description']; ?>
				</p>
              </blockquote>
              <p><em><?php echo $value['Testimonial']['title']; ?></em></p>
              
            </div>
          </div>
		<?php }?>

         
        </div>
      </div>
    </section>