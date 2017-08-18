<section class="section panel bordeaux stay-in-touch">
  <h1 class="block-title-global">Stay in touch</h1>
  <div id="stayInTouchWrapper" class="stay-in-touch-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="stay-in-touch-content">
            <h3>Subscribe to our newsletter to get the latest from our <a
                href="<?= get_the_permalink( 6 ); ?>" title="<?= get_the_title( 6 ); ?>">blog</a>
              directly to your inbox</h3>
            <div class="subscribe-form-sit form-email">
              <?= do_shortcode( '[yikes-mailchimp form="1"]' ); ?>
            </div>
            <ul>
              <li><a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin fa-3x" aria-hidden="true"></i></a></li>
              <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a></li>
              <li><a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube-play fa-3x" aria-hidden="true"></i></a></li>
            </ul>
          </div>

          <div class="stay-in-touch-wrap">
            <p><a href="#">Disclaimer</a></p>
            <p><a href="#">Legal</a></p>
            <p><a href="#">Licenses</a></p>
            <p>© 2017 Banks for Institutions (HK) Limited. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
