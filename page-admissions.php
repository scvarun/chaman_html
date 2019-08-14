<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';

$config = array(
  'title' => 'Admissions | Chaman Bharatiya',
  'body_class' => $GLOBALS['body_class'] . ' header-overlay',
);

get_header($config);
?>

<div class="content-wrapper" style="background: #ed633c">
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-7">
          <h6 style="text-transform: uppercase; color: #e5e5e5; margin-bottom: 40px">Become a leader</h6>
          <h2 style="color: #e5e5e5; margin-bottom: 110px">Unfold the leadership potential in every child</h2>
        </div><!-- /.col -->
      </div><!-- /.row -->

      <div class="row">
        <div class="col d-flex flex-column align-items-center">
          <a href="javascript:void(0);" class="btn btn-outline-white text-center" style="z-index: 10; border-radius: 0; border-width: 3px; padding: 20px 5%; font-size: 30px">Become a partner today</a>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
</div>

<?php get_footer();