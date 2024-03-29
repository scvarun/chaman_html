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
          <div class="container-fluid p-0">
            <div class="row no-gutters">
              <div class="col entry-thumbnail-side" style="background-image: url(assets/demo/home/posts/post-1.jpg);">
                <a href="page-single-news.php" class="pos-0 opacity-0"></a>
              </div><!-- /.col -->

              <main class="col-lg-6">
                <figure class="d-block d-lg-none entry-thumbnail">
                  <img src="assets/demo/home/posts/post-1.jpg" alt="" />
                  <a href="page-single-news.php">This is a new story</a>
                </figure>

                <div class="post-content">
                  <h4 class="entry-title" itemprop="headline">
                    <a href="page-single-news.php" rel="bookmark" itemprop="url">This is a new story</a>
                  </h4>

                  <div class="entry-content" itemprop="text">
                    <p>For each student, we identify and nurture their potential to grow into someone who will make a difference in India and the world.</p>
                    <p>Through engaging learning experiences their leadership — skills will be developed and they will emerge as confident individuals with high self-esteem. In our leadership academy, we will invite role models from different sections of society to inspire students to develop their leadership skills.</p>
                  </div><!-- /.entry-content -->

                  <footer class="entry-footer">
                    <a href="page-single-news.php" class="btn btn-link read-more-link">Read more</a>
                  </footer>
                </div><!-- /.post-content -->
              </main><!-- /.col-md-6 -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </article><!-- /.post -->

        <article class="post type-post has-post-thumbnail category-job-listing" itemtype="https://schema.org/CreativeWork" itemscope>
          <div class="container-fluid p-0">
            <div class="row no-gutters">
              <div class="col entry-thumbnail-side" style="background-image: url(assets/demo/home/posts/post-2.jpg);">
                <a href="page-single-job-listing.php" class="pos-0 opacity-0"></a>
              </div><!-- /.col -->

              <main class="col-lg-6">
                <figure class="d-block d-lg-none entry-thumbnail">
                  <img src="assets/demo/home/posts/post-2.jpg" alt="" />
                  <a href="page-single-job-listing.php">This is a job posting</a>
                </figure>

                <div class="post-content">
                  <h4 class="entry-title" itemprop="headline">
                    <a href="page-single-job-listing.php" rel="bookmark" itemprop="url">This is a job posting</a>
                  </h4>

                  <div class="entry-content" itemprop="text">
                    <p>Duis ut tellus aliquam augue dapibus interdum eget iaculis eros. Nam sed tincidunt lectus, eget porta enim. Sed vehicula porta lacinia. Nam quis purus dapibus quam venenatis pellentesque sit amet at mauris.</p>
                    <p>In a rhoncus enim. Nulla purus nisi, posuere ac felis id, dapibus consectetur velit. Donec erat mauris, hendrerit vitae pulvinar sit amet, viverra id enim. Pellentesque habitant morbi tristique senectus et netus et malesuada.</p>
                  </div><!-- /.entry-content -->

                  <footer class="entry-footer">
                    <a href="page-single-job-listing.php" class="btn btn-link read-more-link">Read more</a>
                  </footer>
                </div><!-- /.post-content -->
              </main><!-- /.col-md-6 -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </article><!-- /.post -->

        <article class="post type-post has-post-thumbnail category-leadership-philosphy" itemtype="https://schema.org/CreativeWork" itemscope>
          <div class="container-fluid p-0">
            <div class="row no-gutters">
              <div class="col entry-thumbnail-side" style="background-image: url(assets/demo/home/posts/post-3.jpg);">
                <a href="page-single-blog.php" class="pos-0 opacity-0"></a>
              </div><!-- /.col -->

              <main class="col-lg-6">
                <figure class="d-block d-lg-none entry-thumbnail">
                  <img src="assets/demo/home/posts/post-3.jpg" alt="" />
                  <a href="page-single-blog.php">This is a random story</a>
                </figure>

                <div class="post-content">
                  <h4 class="entry-title" itemprop="headline">
                    <a href="page-single-blog.php" rel="bookmark" itemprop="url">This is a random story</a>
                  </h4>

                  <div class="entry-content" itemprop="text">
                    <p>Duis ut tellus aliquam augue dapibus interdum eget iaculis eros. Nam sed tincidunt lectus, eget porta enim. Sed vehicula porta lacinia. Nam quis purus dapibus quam venenatis pellentesque sit amet at mauris.</p>
                    <p>In a rhoncus enim. Nulla purus nisi, posuere ac felis id, dapibus consectetur velit. Donec erat mauris, hendrerit vitae pulvinar sit amet, viverra id enim. Pellentesque habitant morbi tristique senectus et netus et malesuada.</p>
                  </div><!-- /.entry-content -->

                  <footer class="entry-footer">
                    <a href="page-single-blog.php" class="btn btn-link read-more-link">Read more</a>
                  </footer>
                </div><!-- /.post-content -->
              </main><!-- /.col-md-6 -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </article><!-- /.post -->

      </main><!-- /.main-content -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<?php get_footer();