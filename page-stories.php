<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';

$config = array(
  'title' => 'Stories | Chaman Bharatiya',
  'body_class' => $GLOBALS['body_class'] . ' header-overlay',
);

get_header($config);
?>

<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <main id="main" class="main-content">

        <article class="post type-post has-post-thumbnail category-news" itemtype="https://schema.org/CreativeWork" itemscope>
          <a class="entry-thumbnail" href="stories-blog.php">
            <img src="assets/demo/home/posts/post-1.jpg" class="size-unifato-archive wp-post-image" alt="" />
          </a><!-- /.entry-thumbnail -->
          
          <main>
            <h2 class="entry-title" itemprop="headline"><a href="stories-blog.php" rel="bookmark" itemprop="url">This is news story</a></h2>

            <div class="entry-content" itemprop="text">
              <p>For each student, we identify and nurture their potential to grow into someone who will make a difference in India and the world.</p>

              <p>Through engaging learning experiences their leadership — skills will be developed and they will emerge as confident individuals with high self-esteem. In our leadership academy, we will invite role models from different sections of society to inspire students to develop their leadership skills.</p>
            </div><!-- .entry-content -->

            <footer class="entry-footer">
              <a href="stories-blog.php" class="read-more-link">
                Read more
              </a>
            </footer><!-- .entry-footer -->
          </main>
        </article><!-- /.post -->

      </main><!-- /.main-content -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<?php get_footer();