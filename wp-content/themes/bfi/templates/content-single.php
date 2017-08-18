<div class="single-post-page container blog-container">
  <div class="row">
    <div class="col-lg-8">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php
        $post_ID                    = get_the_ID();
        $catArr                     = get_the_category( $post_ID );
        $author_ID                  = get_the_author_meta( 'ID' );
        $author_photo               = get_field( 'choose_author_photo', 'user_' . $author_ID );
        $linkedin_url               = get_field( 'linkedin_url', 'user_' . $author_ID );
        $facebook_url               = get_field( 'facebook_url', 'user_' . $author_ID );
        $twitter_url                = get_field( 'twitter_url', 'user_' . $author_ID );
        $first_name                 = get_the_author_meta( 'first_name' );
        $last_name                  = get_the_author_meta( 'last_name' );
        $description                = get_the_author_meta( 'description' );
        $choose_post_featured_image = get_field( 'choose_post_featured_image' );
        ?>
        <article <?php post_class(); ?>>
          <header>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="author">
              <div class="img-a">
                <img class="img-fluid" src="<?= $author_photo['url']; ?>" alt="<?= $author_photo['alt']; ?>">
              </div>
              <div class="author-info">
                <span><?= $first_name . ' ' . $last_name; ?> </span>
                <time datetime="<?= get_post_time( 'c', true ); ?>"><?= get_post_time( 'd F Y', true ); ?></time>
              </div>
            </div>
            <img class="img-fluid"
                 src="<?= $choose_post_featured_image['sizes']['single-post-img']; ?>"
                 alt="<?= $choose_post_featured_image['alt']; ?>">
            <ul>
              <li><a class="facebook-sh" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">share<i
                    class="fa fa-facebook-official"
                    aria-hidden="true"></i></a></li>
              <li><a class="linkedin-sh"
                     href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>">share
                  <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a class="twitter-sh"
                     href="https://twitter.com/home?status=<?php the_permalink(); ?> - <?php the_title(); ?>">share <i
                    class="fa fa-twitter"
                    aria-hidden="true"></i></a></li>
            </ul>
          </header>
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
          <footer>
            <div class="categories-cloud">
              <ul>
                <?php foreach ( $catArr as $cat ) { ?>
                  <li class="post-cat-item-<?= $cat->cat_ID; ?>"><a href="<?= get_category_link( $cat->cat_ID ); ?>"
                                                                    title="<?= $cat->cat_name; ?>"><?= $cat->cat_name; ?></a>
                  </li>
                <?php }; ?>
              </ul>
            </div>
            <div class="author-bio">
              <p class="side-title">About author</p>
              <div class="img-a">
                <img class="img-fluid" src="<?= $author_photo['url']; ?>" alt="<?= $author_photo['alt']; ?>">
              </div>
              <div class="bio">
                <h3><?= $first_name . ' ' . $last_name; ?></h3>
                <p><?= $description; ?></p>
                <?php if ( ! empty( $linkedin_url ) || ! empty( $facebook_url ) || ! empty( $twitter_url ) ) { ?>
                  <ul>
                    <?= ( ! empty( $linkedin_url ) ) ? '<li><a class="in" href="' . $linkedin_url . '" target="_blank"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a></li>' : ''; ?>
                    <?= ( ! empty( $facebook_url ) ) ? '<li><a class="fb" href="' . $facebook_url . '" target="_blank"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></li>' : ''; ?>
                    <?= ( ! empty( $twitter_url ) ) ? '<li><a class="tw" href="' . $twitter_url . '" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>' : ''; ?>
                  </ul>
                <?php }; ?>
              </div>
            </div>

            <?php wp_link_pages( [
              'before' => '<nav class="page-nav"><p>' . __( 'Pages:', 'sage' ),
              'after'  => '</p></nav>',
            ] ); ?>
          </footer>

        </article>
      <?php endwhile; ?>
    </div>
    <?php get_template_part( 'templates/components/sidebar-blog' ); ?>
  </div>
</div>
