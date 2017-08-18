<?php
/**
 * Template Name: Home page
 */
?>
<div id="pinContainer" xmlns="http://www.w3.org/1999/html">
  <section class="section panel blue">
    <h1 class="block-title-global">Who we are</h1>
    <div class="home-block-one-top">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="home-block-one-bottom">
            <p><strong>BFI</strong> introduces Financial Institutions to
              banks for the
              opening of
              correspondent banking and payment clearing and settlement
              accounts.
              We are able to help low, medium and high risk Financial
              Institutions
              (Banks and Non-Banks).<br><br>

              Our clients are based in Asia, Europe and South America and
              the
              account opening banks we work with are also mostly based in
              Asia and
              Europe but for USD clearing also in the United States..<br><br>

              Our clients are facing difficulties in reaching the right
              banking
              partner and getting through their KYC on-boarding
              process.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section panel turqoise">
    <h1 class="block-title-global">What we do</h1>
    <div class="home-block-two-left">
      <div class="home-block-two-content">
        <div class="banks">
          <i class="fa fa-university" aria-hidden="true"></i>
          <h3>Communicating with banks</h3>
          <p>We communicate simultaneously with a large number of banks about
            their transaction banking services for our target client group.
            This is especially helpful for our clients with limited
            resources.</p>
        </div>
        <div class="clients ">
          <i class="fa fa-bar-chart" aria-hidden="true"></i>
          <h3>Introducing clients</h3>
          <p>We introduce our clients in a way that the bank understands the clients true setup and
            risk profile quickly. For each client we create a comprehensive client profile that
            answers all questions that an account opening bank will have both from a KYC and
            commercial perspective.</p>
        </div>
      </div>
    </div>
    <div class="home-block-two-right"></div>
  </section>
  <section class="section panel green">
    <h1 class="block-title-global">Contact us</h1>
    <div class="home-block-three-top">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="home-block-three-bottom">
            <h3>Feel free to get in touch for an initial discussion about how we can help you</h3>
            <div class="send-form col-lg-9">
              <?= do_shortcode( '[contact-form-7 id="60" title="Contact form 1"]' ); ?>
              <!--                            <form action=#>-->
              <!--                                <p class="form-email"><input type="email" name="email" value="" placeholder="Email"></p>-->
              <!--                                <p class="form-name"><input type="text" name="name" value="" placeholder="Name"></p>-->
              <!--                                <p class="form-description"><textarea name="" id="" cols="30" rows="4"></textarea></p>-->
              <!--                                <button type="submit">Send</button>-->
              <!--                            </form>-->

            </div>
            <div class="contacts col-lg-3">
              <p class="contact-adress"><a href="">18 Dzherelna St.<br> Lviv, Ukraine</a></p>
              <p class="contact-email"><a href="">contact@bfi.com</a></p>
              <div class="contact-phones-wrap">
                <p class="contact-phone-1"><a href="">+38 024 333 55 77</a></p>
                <p class="contact-phone-2"><a href="">+38 071 569 32 11</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part( 'templates/components/stay-in-touch' ); ?>
</div>
<?php get_template_part( 'templates/components/scroll-down' ); ?>
<?php get_template_part( 'templates/components/social-icons-network' ); ?>
