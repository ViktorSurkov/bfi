<div class="offset-lg-1 col-lg-3 sidebar-blog-info">
  <div class="search">
    <?= get_search_form(); ?>
  </div>
  <div class="categories-cloud">
    <h5 class="side-title">Categories</h5>
    <?php
    $cat_args = array(
      'show_option_all'     => '',
      'show_option_none'    => __( 'No categories' ),
      'orderby'             => 'name',
      'order'               => 'ASC',
      'show_last_update'    => 0,
      'style'               => 'list',
      'show_count'          => 0,
      'hide_empty'          => 1,
      'use_desc_for_title'  => 1,
      'child_of'            => 0,
      'feed'                => '',
      'feed_type'           => '',
      'feed_image'          => '',
      'exclude'             => '',
      'exclude_tree'        => '',
      'include'             => '',
      'hierarchical'        => true,
      'title_li'            => false,
      'number'              => null,
      'echo'                => 1,
      'depth'               => 0,
      'current_category'    => 0,
      'pad_counts'          => 0,
      'taxonomy'            => 'category',
      'walker'              => 'Walker_Category',
      'hide_title_if_empty' => false,
      'separator'           => '',
    );
    ?>
    <ul>
      <?php wp_list_categories( $cat_args ); ?>
    </ul>
  </div>
  <div class="top-posts">
    <p class="side-title">Top posts</p>
    <?php dynamic_sidebar( 'sidebar-primary' ); ?>

  </div>

  <?php

  $recentpostLoop = new WP_Query( array(
      'post_type'      => 'post',
      'post_status'    => 'publish',
      'posts_per_page' => 3,
    )
  );

  if ( $recentpostLoop->have_posts() ): ?>
    <div class="recent-posts">
      <p class="side-title">Recent posts</p>
      <?php while ( $recentpostLoop->have_posts() ) : $recentpostLoop->the_post(); ?>
        <?php

        $post_ID = get_the_ID();
        $catArr  = get_the_category( $post_ID );

        ?>
        <article class="blog-recent-post-<?= $post_ID; ?>">
          <div class="article-body">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h4><?php the_title(); ?></h4></a>
            <div class="author">
              <time datetime="<?= get_post_time( 'c', true ); ?>"><?= get_post_time( 'd F Y', true ); ?></time>
            </div>
          </div>
        </article>

      <?php endwhile; ?>
    </div>
  <?php endif; ?>

  <?php wp_reset_query(); ?>

</div>
