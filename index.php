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
    <div class="container">
      <div class="columns">
        <div class="column is-4">
          <h3 class="title is-3">Chaman Bhartiya is a private primary school in Bhartiya City in Bengaluru, India. We open in autumn 2020 - <u>admissions</u> open now!</h3>
        </div><!-- /.column -->
      </div><!-- /.columns -->
    </div><!-- /.container -->
  </section>
</div>

<?php get_footer();