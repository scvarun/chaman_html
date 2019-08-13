<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';

$config = array(
  'title' => 'Blog | Chaman Bharatiya',
  'body_class' => $GLOBALS['body_class'] . ' header-overlay',
);

get_header($config);
?>

<div class="content-wrapper">
  <section id="about__title">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <h6 class="text-uppercase" style="margin-bottom: 20px">About The School</h6>
        </div>
      </div><!-- /.row -->

      <div class="row justify-content-end">
        <div class="col-lg-7" style="z-index: 1">
          <h2>We believe challenges can be addressed right at the grass root level</h2>
        </div><!-- /.col-lg-7 -->
      </div><!-- /.row -->

      <div class="row no-gutters" style="margin-top: -300px">
        <div class="col-lg-7" style="z-index: 0;">
          <figure>
            <img src="assets/demo/about/title.jpg" alt="" />
          </figure>
        </div><!-- /.col-lg-7 -->
      </div><!-- /.row -->

      <div class="row" style="padding-top: 110px;">
        <div class="col-lg-7" style="z-index: 2">
          <h6 style="color: #e5e5e5; text-transform: uppercase;">Our Commitments</h6>
          <p style="color: #e5e5e5; font-size: 30px; font-weight: 400;line-height: 40px;">At Chaman Bhartiya School, Leadership is a broad and deep concept. It is a quality, a principal value that a human being actively and deliberately cultivates to lead a meaningful and purpos-filled life.</p>
        </div><!-- /.col-lg-7 -->
      </div><!-- /.row -->

      <div class="row justify-content-center">
        <div class="col-lg-10 d-flex flex-column align-items center">
          <figure style="margin-top: -130px;">
            <img src="assets/demo/about/logo-part-1.png" alt="" />
          </figure>
          <h1 style="text-transform: uppercase; text-align: center; color: #e5e5e5; margin-top: -280px; margin-bottom: 280px">We</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->

      <div class="row justify-content-end">
        <div class="col-lg-7">
          <p style="color: #e5e5e5;">Duis ut tellus aliquam augue dapibus interdum eget iaculis eros. Nam sed tincidunt lectus, eget porta enim. Sed vehicula porta lacinia. Nam quis dapibus quam venenatis pellentesque sit amet at mauris.</p>
          <p style="color: #e5e5e5;">In a rhoncus enim. Nulla purus nisi posuere ac felis id, dapibus consectetur velit. Donec erat mauris, hendrerit vitae pulvinar sit amet, viverra id enim. Pellentesque habitant morbi tristique senectus  et netus et malesuada.</p>
          <a href="javascript:void(0);" class="btn btn-link" style="color: #e5e5e5; text-decoration: underline; font-weight: bold;">Read more</a>
        </div><!-- /.col-lg-7 -->
      </div><!-- /.row -->

      <div class="row">
        <div class="col-lg-7" style="z-index: 0">
          <figure>
            <img src="assets/demo/about/logo-part-1.png" alt="" />
          </figure>
        </div><!-- /.col-lg-7 -->
      </div><!-- /.row -->

      <div class="row">
        <div class="col-lg-7">
          <h1 style="color: #e5e5e5; text-transform: uppercase;">We</h1>
        </div><!-- /.col-lg-7 -->
      </div><!-- /.row -->

      <div class="row">
        <div class="col-lg-7">
          <p style="color: #e5e5e5;">Duis ut tellus aliquam augue dapibus interdum eget iaculis eros. Nam sed tincidunt lectus, eget porta enim. Sed vehicula porta lacinia. Nam quis dapibus quam venenatis pellentesque sit amet at mauris.</p>
          <p style="color: #e5e5e5;">In a rhoncus enim. Nulla purus nisi posuere ac felis id, dapibus consectetur velit. Donec erat mauris, hendrerit vitae pulvinar sit amet, viverra id enim. Pellentesque habitant morbi tristique senectus  et netus et malesuada.</p>
          <a href="javascript:void(0);" class="btn btn-link" style="color: #e5e5e5; text-decoration: underline; font-weight: bold;">Read more</a>
        </div><!-- /.col-lg-7 -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
</div>

<?php get_footer();