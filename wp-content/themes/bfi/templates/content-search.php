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
    <p><?= wp_trim_words( get_the_content(), 20, ' ...' ); ?></p>
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
