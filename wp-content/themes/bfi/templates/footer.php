<footer class="content-info <?= ( is_page_template( 'templates/blog-page-tpl.php' ) == true || is_singular( 'post' ) == true || is_search() == true || is_archive() == true ) ? 'blog-footer' : ''; ?>">
  <div class="container blog-container">
    <?php
    //dynamic_sidebar('sidebar-footer');
    ?>
    <div class="row">
      <div class="col-lg-5">
        <p class="copyright">© <?= date( 'Y' ); ?> Banks for Institutions (HK) Limited. All Rights Reserved</p>
      </div>
      <div class="col-lg-2">
        <div class="social-networks">
          <ul>
            <li><a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin fa-3x" aria-hidden="true"></i></a></li>
            <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a></li>
            <li><a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube-play fa-3x" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="offset-lg-1 col-lg-4">
        <div class="subscribe-wrapper-form">
          <?= do_shortcode( '[yikes-mailchimp form="1"]' ); ?>
        </div>
      </div>
    </div>
  </div>
</footer>
