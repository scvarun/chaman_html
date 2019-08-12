<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';

$config = array(
  'title' => 'Home | Chaman Bharatiya',
);

get_header($config);
?>

<div class="content-wrapper">
  <section id="home__hero" class="" style="background: url('assets/demo/home/hero.jpg'); background-size: cover; height: 100vh;">
  </section><!-- #home__hero -->

  <section id="home__about" style="padding: 80px 0;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <h6>Chaman Bhartiya is a private primary school in Bhartiya City in Bengaluru, India. We open in autumn 2020 - <u>admissions</u> open now!</h6>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

  <section  id="home__skull-parallax">
    <div class="container-fluid">
      <div class="row justify-content-end">
        <div class="col-lg-7" style="z-index: 10;">
          <h2>&quot;We teach children how to think not what to think&quot;</h2>
        </div><!-- /.col-lg-7 -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

  <section  id="home__skull" style="margin-top: -175px;">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-7">
          <figure>
            <img src="assets/demo/home/skeleton.jpg" alt="" />
          </figure>
        </div><!-- /.col-lg-7 -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

  <section id="home__philosophy" style="padding: 50px 0 130px">
    <div class="container-fluid">
      <div class="row justify-content-end">
        <div class="col-md-7">
          <p style="margin-bottom: 80px; font-size: 30px; line-height: 40px; font-weight: 500;">At Chaman Bhartiya School, Leadership is a broad and deep concept. It is  a quality, a principal value that a huuman being actively and deliberately cultivates to lead a meaningful and purpose-filled life.</p>

          <h6 class="text-uppercase" style="margin-bottom: 20px">It's all in the Philosophy</h6>
          <p style="font-size: 30px; line-height: 40px; font-weight: 500;">It is about enhancing one's own personal ability to give direction to one's own life on a meaningful path. We have zoned in on these 5 major elements that contribute towards realizing the leadership potential in each child.</p>
        </div><!-- /.col-md-7 -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

  <section id="home__leadership" style="padding-bottom: 180px">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6" style="background: #ed633c; padding: 70px 70px 80px; margin: 0 5%;">
          <figure class="d-block d-lg-none" style="margin: -70px -70px 80px;">
            <img src="assets/demo/home/bubble.jpg" alt="" />
          </figure>
          <h4 style="color: #e5e5e5; margin-bottom: 25px;">Leadership</h4>
          <p style="color: #e5e5e5;">For each student, we identify and nurture their potential to grow into someone who will make a difference in India and the world.</p>
          <p style="color: #e5e5e5; margin-bottom: 55px">Through engaging learning experiences their leadership - skills will be developed and they will emerge as confident individuals with high self-esteem. In our deadership academy, we will invite role models from different sections of society to inspire students to develop thier leadership skills.</p>
          <a href="#" class="btn btn-link" style="color: #e5e5e5; font-weight: bold; text-decoration: underline;">Read more about leadership</a>
        </div><!-- /.col-md-7 -->

        <div class="col" style="padding: 0; background-image: url(assets/demo/home/bubble.jpg); background-repeat: no-repeat; background-size: cover;">
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

  <section id="home__leadership" style="padding-bottom: 180px">
    <div class="container-fluid">
      <div class="row">
        <div class="col" style="padding: 0; background-image: url(assets/demo/home/woman.jpg); background-repeat: no-repeat; background-size: cover;">
        </div><!-- /.col -->

        <div class="col-lg-6" style="background: #20234c; padding: 70px 70px 80px; margin: 0 5%;">
          <figure class="d-block d-lg-none" style="margin: -70px -70px 80px;">
            <img src="assets/demo/home/woman.jpg" alt="" />
          </figure>
          <h4 style="color: #e5e5e5; margin-bottom: 25px;">Teachers as facilitators</h4>
          <p style="color: #e5e5e5">Duis ut tellus aliquam augue dapibus interdum eget iaculis eros. Nam sed tincidunt lectus, eget porta enim. Sed vehicula port lacinia. Nam quis purus dapibus quam venenatis pellentesque sit amet at mauris.</p>
          <p style="color: #e5e5e5; margin-bottom: 55px">In a rhoncus enim. Nulla purus nisi, posuere ac felis id, dapibus consectetur velit. Donec erat mauris, hendrerit vitae pulvinar sit amet, viverra id enim. Pelletesque habitant morbi tristique senectus et netus et malesuada.</p>
          <a href="#" class="btn btn-link text-white" style="color: #e5e5e5; font-weight: bold; text-decoration: underline;">Discover our Team</a>
        </div><!-- /.col-md-7 -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

  <section id="home__latest-news" style="background: #765c4f; padding-top: 120px; padding-bottom: 130px">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <h6 class="text-uppercase" style="color: #e5e5e5; margin-bottom: 20px">Latest News</h6>
          <h2 style="color: #e5e5e5; margin-bottom: 110px">What's happening</h2>
          <div class="blogpost-thumbs row text-white">
            <div class="col-lg-4">
              <article id="post-1" class="post has-post-thumbnail">
                <figure class="entry-thumbnail">
                  <img src="assets/demo/home/posts/post-1.jpg" alt="Skills for the 21st century" />
                  <a href="javascript:void(0);" class="">Skills for the 21st century</a>
                </figure>
                <div class="entry-content">
                  <h5 class="entry-title h4">
                    <a href="javascript:void(0);">Skills of the 21st Century</a>
                  </h5>
                  <p>Suspendisse potenti. Proin at lectus condimentum, aliquam justo ac, suscipit urna. Proin at ligula porta lacus tempus ullamcorper. Nunc lacus neque, temper vitae risus eget, porta fringilla nibh.</p>
                </div>
              </article>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">
              <article id="post-2" class="post has-post-thumbnail">
                <figure class="entry-thumbnail">
                  <img src="assets/demo/home/posts/post-2.jpg" alt="Skills for the 21st century" />
                  <a href="javascript:void(0);" class="">Leadership Pedagogy</a>
                </figure>
                <div class="entry-content">
                  <h5 class="entry-title h4">
                    <a href="javascript:void(0);">Leadership Pedagogy</a>
                  </h5>
                  <p>Suspendisse potenti. Proin at lectus condimentum, aliquam justo ac, suscipit urna. Proin at ligula porta lacus tempus ullamcorper. Nunc lacus neque, temper vitae risus eget, porta fringilla nibh.</p>
                </div>
              </article>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">
              <article id="post-1" class="post has-post-thumbnail">
                <figure class="entry-thumbnail">
                  <img src="assets/demo/home/posts/post-3.jpg" alt="New Teachers" />
                  <a href="javascript:void(0);" class="">New Teachers</a>
                </figure>
                <div class="entry-content">
                  <h5 class="entry-title h4">
                    <a href="javascript:void(0);">New Teachers</a>
                  </h5>
                  <p>Suspendisse potenti. Proin at lectus condimentum, aliquam justo ac, suscipit urna. Proin at ligula porta lacus tempus ullamcorper. Nunc lacus neque, temper vitae risus eget, porta fringilla nibh.</p>
                </div>
              </article>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.blogpost-thumbs -->
        </div><!-- /.col -->
      </div><!-- /.row -->

      <div class="row">
        <div class="col d-flex justify-content-center">
          <a href="javascript:void(0);" class="btn btn-outline-white" style="font-weight: 500; border-radius: 0; border-width: 3px; padding: 20px 100px; font-size: 30px">See more stories...</a>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

  <section id="home__testimonials" style="background: #eca297; padding: 110px 0 150px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <h6 class="text-uppercase" style="margin-bottom: 20px">What people say</h6>
          <blockquote class="row testimonial testimonial-right" style="margin-bottom: 150px">
            <div class="col-lg-5">
              <figure>
                <img src="assets/demo/home/testimonial-1.jpg" alt="Sofia - Year 5 Student" />
              </figure>
            </div><!-- /.col-lg-5 -->

            <div class="col-lg-7">
              <h3 class="testimonial-title">"I love starting my day with a history class, it's the best"</h3>
              <h6 class="testimonial-user-info">
                <span class="testimonial-user-name">Sofia</span> --
                <span class="testimonial-user-title">Year 5 Student</span>
              </h6>
              <p>Suspendisse potenti. Proin at lectus condimentum, aliquam justo ac, suscipit urna. Proin at ligula porta lacus tempus ullamcorper. Nunc lacus neque, tempor vitae risus eget, porta frigilla nibh.</p>
            </div><!-- /.col-lg-7 -->
          </blockquote><!-- /.testimonial -->

          <blockquote class="row testimonial">
            <div class="col-lg-5">
              <figure>
                <img src="assets/demo/home/testimonial-2.jpg" alt=">Albert White - Music Teacher" />
              </figure>
            </div><!-- /.col-lg-5 -->

            <div class="col-lg-7">
              <h3 class="testimonial-title">"What I love about my job is triggering curiosity"</h3>
              <h6 class="testimonial-user-info">
                <span class="testimonial-user-name">Albert White</span> --
                <span class="testimonial-user-title">Music Teacher</span>
              </h6>
              <p>Suspendisse potenti. Proin at lectus condimentum, aliquam justo ac, suscipit urna. Proin at ligula porta lacus tempus ullamcorper. Nunc lacus neque, tempor vitae risus eget, porta frigilla nibh.</p>
            </div><!-- /.col-lg-7 -->
          </blockquote><!-- /.testimonial -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

  <section id="home__admissions" style="background: #ed633c; padding-top: 120px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <h6 class="text-uppercase" style="margin-bottom: 20px; color: #e5e5e5">Become a leader</h6>
          <h2 style="z-index: 10; text-align: center; color: #e5e5e5; margin-top: 140px; margin-bottom: 180px; font-size: 125px; line-height: .85">Admissions for 2020<br /> are now open!</h2>
        </div><!-- /.col -->
      </div><!-- /.row -->

      <div class="row">
        <div class="col d-flex justify-content-center">
          <a href="javascript:void(0);" class="btn btn-outline-white text-center" style="z-index: 10; font-weight: 500; border-radius: 0; border-width: 3px; padding: 20px 100px; font-size: 30px">See more stories...</a>
        </div>
      </div><!-- /.row -->

      <div class="row justify-content-center">
        <div class="col d-flex flex-column align-items-center">
          <figure style="margin-top: -20%; margin-bottom: -10%; display: inline-block;">
            <img src="assets/demo/home/ellipse.png" alt="" />
          </figure>
        </div><!-- /.col-6 -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  
</div>

<?php get_footer();