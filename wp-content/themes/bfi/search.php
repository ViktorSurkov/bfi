<div class="search-results-blog container blog-container">
  <div class="row">
    <div class="col-lg-8">
      <div class="search-top-wrapper">
        <?= sprintf( __( '<h3>Search results for</h3><p>"%s"</p>', 'sage' ), get_search_query() ); ?>
        <?php if ( ! have_posts() ) : ?>
          <div class="alert alert-warning">
            <?php _e( 'Sorry, no results were found.', 'sage' ); ?>
          </div>
        <?php endif; ?>
      </div>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'templates/content', 'search' ); ?>
      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>
    </div>
    <?php get_template_part( 'templates/components/sidebar-blog' ); ?>
  </div>
</div>




