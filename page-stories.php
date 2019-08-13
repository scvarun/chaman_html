<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';

$config = array(
  'title' => 'Stories | Chaman Bharatiya',
  'body_class' => $GLOBALS['body_class'] . ' header-overlay blog',
);

get_header($config);
?>

<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <main id="main" class="main-content">

        <article class="post type-post has-post-thumbnail category-news" itemtype="https://schema.org/CreativeWork" itemscope>
          <div class="container-fluid">
            <div class="row">
              <div class="col entry-thumbnail-side" style="background-image: url(assets/demo/home/woman.jpg);">
                <a href="page-stories-single.php" class="pos-0 opacity-0"></a>
              </div><!-- /.col -->

              <main class="col-lg-6">
                <figure class="d-block d-lg-none entry-thumbnail">
                  <img src="assets/demo/home/woman.jpg" alt="" />
                  <a href="page-stories-single.php">Teachers as facilitators</a>
                </figure>

                <h4 class="entry-title" itemprop="headline">
                  <a href="page-stories-single.php" rel="bookmark" itemprop="url">Teachers as facilitators</a>
                </h4>

                <div class="entry-content" itemprop="text">
                  <p>Duis ut tellus aliquam augue dapibus interdum eget iaculis eros. Nam sed tincidunt lectus, eget porta enim. Sed vehicula port lacinia. Nam quis purus dapibus quam venenatis pellentesque sit amet at mauris.</p>
                  <p>In a rhoncus enim. Nulla purus nisi, posuere ac felis id, dapibus consectetur velit. Donec erat mauris, hendrerit vitae pulvinar sit amet, viverra id enim. Pelletesque habitant morbi tristique senectus et netus et malesuada.</p>
                </div><!-- /.entry-content -->

                <footer class="entry-footer">
                  <a href="#" class="btn btn-link read-more-link">Read more</a>
                </footer>
              </main><!-- /.col-md-6 -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </article><!-- /.post -->

      </main><!-- /.main-content -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<?php get_footer();