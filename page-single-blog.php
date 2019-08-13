<?php
include_once 'lib/init.php';
include_once 'lib/functions.php';

$config = array(
  'title' => 'Stories | Chaman Bharatiya',
  'body_class' => $GLOBALS['body_class'] . ' header-overlay single single-post',
);

get_header($config);
?>

<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <main id="main" class="main-content">

        <article class="post type-post has-post-thumbnail category-leadership-philosphy" itemtype="https://schema.org/CreativeWork" itemscope>
          <div class="container-fluid">
            <div class="row">
              <div class="col entry-thumbnail-side" style="background-image: url(assets/demo/home/posts/post-3.jpg);">
                <a href="page-single-blog.php" class="pos-0 opacity-0"></a>
              </div><!-- /.col -->

              <main class="col-lg-6">
                <figure class="d-block d-lg-none entry-thumbnail">
                  <img src="assets/demo/home/posts/post-3.jpg" alt="" />
                  <a href="page-single-blog.php">This is a random story</a>
                </figure>

                <h1 lass="entry-title" itemprop="headline">
                  This is a random story
                </h1>

                <div class="entry-content" itemprop="text">
                  <p>At Chaman Bhartiya School, Leadership is a broad and deep concept. It is a quality, a principal value that a human being actively and deliberately cultivates to lead a meaningful and purpose-filled life.</p>

                  <h5>Sub Heading</h5>
                  <p>It is about enhancing one’s own personal ability to give direction to one’s own life on a meaningful path. We have zoned in on these 5 major elements that contribute towards realizing the leadership potential in each child.</p>

                  <h5>Sub Heading</h5>
                  <p>It is about enhancing one’s own personal ability to give direction to one’s own life on a meaningful path. We have zoned in on these 5 major elements that contribute towards realizing the leadership potential in each child.</p>

                  <h5>Sub Heading</h5>
                  <p>It is about enhancing one’s own personal ability to give direction to one’s own life on a meaningful path. We have zoned in on these 5 major elements that contribute towards realizing the leadership potential in each child.</p>

                  <ol>
                    <li>List, list. Connections between different subjects</li>
                    <li>Deep learning and subject mastery Match the learner’s profile readiness & interest</li>
                    <li>In-depth understanding of the relevance and application of the subject</li>
                    <li>We empower learners to be self-directed individuals and emerge as changemakers</li>
                  </ol>           
                </div><!-- /.entry-content -->

              </main><!-- /.col-md-6 -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </article><!-- /.post -->

        <div class="row">
          <div class="col d-flex justify-content-center">
            <a href="javascript:void(0);" class="btn btn-outline-white" style="font-weight: 500; border-radius: 0; border-width: 3px; padding: 20px 100px; font-size: 30px">Take me back</a>
          </div><!-- /.col -->
        </div>

      </main><!-- /.main-content -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<?php get_footer();