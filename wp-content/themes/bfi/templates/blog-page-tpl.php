<?php
/**
 * Template Name: Blog page
 */

global $detect;

?>
<div class="hot-news">
  <div class="container blog-container">
    <div class="row">
      <?php

      $postLoopLatest = new WP_Query( array(
          'post_type'      => 'post',
          'post_status'    => 'publish',
          'posts_per_page' => 3,
        )
      );

      if ( $postLoopLatest->have_posts() ): ?>
        <?php
        $counter = 0;
//        if ( $detect->isMobile() == true || $detect->isTablet()  == true) echo '<div class="hots-slider-wrapper">';
        ?>

        <?php while ( $postLoopLatest->have_posts() ) : $postLoopLatest->the_post(); ?>

          <?php
          $counter ++;
          $post_ID      = get_the_ID();
          $author_ID    = get_the_author_meta( 'ID' );
          $author_photo = get_field( 'choose_author_photo', 'user_' . $author_ID );
          $first_name   = get_the_author_meta( 'first_name' );
          $last_name    = get_the_author_meta( 'last_name' );

          $choose_post_featured_image = get_field( 'choose_post_featured_image' );

          $catArr = get_the_category( $post_ID );

          ?>

          <?= ( $counter == 1 && $detect->isMobile() != true && $detect->isTablet() != true ) ? '<div class="hot-big">' : ''; ?>
          <?= ( $counter == 2 && $detect->isMobile() != true && $detect->isTablet() != true ) ? '<div class="hot-small">' : ''; ?>

          <a style="background-image: url('<?= ( $counter == 1 ) ? $choose_post_featured_image['sizes']['big-post-img'] : $choose_post_featured_image['sizes']['middle-post-img']; ?>');"
             href="<?php the_permalink(); ?>"
             class="latest blog-post-<?= $post_ID; ?>">
            <article>
              <div class="article-body">
                <h4><?= strip_tags( get_the_title() ); ?></h4>
                <?= ( $counter == 1 ) ? '<p>' . wp_trim_words( strip_tags( get_the_content() ), 20, ' ...' ) . '</p>' : ''; ?>
                <div class="author">
                  <div class="img-a">
                    <img class="img-fluid" src="<?= $author_photo['url']; ?>" alt="<?= $author_photo['alt']; ?>">
                  </div>
                  <div class="author-info">
                    <span><?= $first_name . ' ' . $last_name; ?> </span>
                    <time datetime="<?= get_post_time( 'c', true ); ?>"><?= get_post_time( 'd F Y', true ); ?></time>
                  </div>
                </div>
              </div>
            </article>
          </a>
          <?= ( $counter == 1 && $detect->isMobile() != true && $detect->isTablet() != true ) ? '</div>' : ''; ?>
          <?= ( $counter == 3 && $detect->isMobile() != true && $detect->isTablet() != true ) ? '</div>' : ''; ?>
        <?php endwhile; ?>
        <?php
//        if ($detect->isMobile() == true || $detect->isTablet()  == true) echo '</div>';
        ?>
      <?php endif; ?>

      <?php wp_reset_query(); ?>
    </div>
  </div>
</div>
<div class="container blog-container">
  <div class="row">

    <?php
    $paged    = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
    $postLoop = new WP_Query( array(
        'post_type'      => 'post',
        'post_status'    => 'publish',
//        'offset'         => 3,
        'paged'          => $paged,
        'posts_per_page' => 5,
      )
    );

    if ( $postLoop->have_posts() ): ?>
      <div class="col-lg-8 news-wrapper">
        <?php while ( $postLoop->have_posts() ) : $postLoop->the_post(); ?>
          <?php

          $post_ID      = get_the_ID();
          $author_ID    = get_the_author_meta( 'ID' );
          $author_photo = get_field( 'choose_author_photo', 'user_' . $author_ID );
          $first_name   = get_the_author_meta( 'first_name' );
          $last_name    = get_the_author_meta( 'last_name' );

          $choose_post_featured_image = get_field( 'choose_post_featured_image' );

          $catArr = get_the_category( $post_ID );

          ?>
          <article class="blog-item blog-post-<?= $post_ID; ?>">
            <div class="img-w">
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <img class="img-fluid"
                     src="<?= $choose_post_featured_image['sizes']['small-post-img']; ?>"
                     alt="<?= $choose_post_featured_image['alt']; ?>">
              </a>
            </div>
            <div class="article-body">
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h4><?php the_title(); ?></h4></a>
              <div class="author">
                <div class="img-a">
                  <img class="img-fluid" src="<?= $author_photo['url']; ?>" alt="<?= $author_photo['alt']; ?>">
                </div>
                <div class="author-info">
                  <span><?= $first_name . ' ' . $last_name; ?> </span>
                  <time datetime="<?= get_post_time( 'c', true ); ?>"><?= get_post_time( 'd F Y', true ); ?></time>
                </div>
              </div>
              <p><?= mb_strimwidth( get_the_content(), 0, 150, ' ...' ); ?></p>
              <div class="categories-cloud">
                <ul>
                  <?php foreach ( $catArr as $cat ) { ?>
                    <li class="post-cat-item-<?= $cat->cat_ID; ?>"><a href="<?= get_category_link( $cat->cat_ID ); ?>"
                                                                      title="<?= $cat->cat_name; ?>"><?= $cat->cat_name; ?></a>
                    </li>
                  <?php }; ?>
                </ul>
              </div>
            </div>
          </article>

        <?php endwhile; ?>
        <?php custom_pagination( $postLoop->max_num_pages, "", $paged ); ?>
        <?php wp_reset_query(); ?>
      </div>
    <?php endif; ?>

    <?php get_template_part( 'templates/components/sidebar-blog' ); ?>
  </div>
</div>
