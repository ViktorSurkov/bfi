<?php
/**
 * Template Name: For non banks page
 */

use Roots\Sage\Assets;

?>
<div id="pinContainer" xmlns="http://www.w3.org/1999/html">
  <section class="section panel blue for-non-banks">
    <h1 class="block-title-global">What we offer</h1>
    <div class="for-non-banks-one-top">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="for-non-banks-one-bottom">
            <h3>We assist banks in two ways:</h3>
            <div class="banking-introduction">
              <p>What are You interested in?</p>
            </div>
            <div class="for-non-banks-one-content">
              <div class="col-lg-6">
                <i class="fa fa-university" aria-hidden="true"></i>
                <p>Introduction to clearing banks</p>
              </div>
              <div class="col-lg-6">
                <i class="fa fa-briefcase" aria-hidden="true"></i>
                <p>Introduction to clearing non-banks</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section panel turqoise for-non-banks">
    <h1 class="block-title-global">Introduction to clearing banks</h1>
    <div class="for-non-banks-two-left">
      <div class="for-non-banks-two-inner context-scroll-block">
        <div class="for-non-banks-two-content col-lg-9">
          <p>In the sector of non-banks we work with Payment Institutions, Money Service Businesses, Money
            Service
            Operator and E-Money Institutions (collectively PSP Payment Service Providers).<br><br>

            Finding a bank account for a PSP has become very difficult in recent years. As more and more
            banks
            are
            refraining from working with the sector, more resources are required on the PSPs side to find a
            suitable
            bank partner. However knowing the market and contacting more banks doesn’t necessarily lead to a
            higher
            success rate. We observe unclear business models and sub-optimal self presentation and those
            make it
            difficult for a bank to understand the true setup and the risk profile of a PSP.
          </p>
          <h3>BFI can help in two ways:</h3>
          <ul>
            <li>BFI has started to research the clearing banking market from October 2015 on. With over
              2,700
              banks
              in our database we have a good understanding of the major clearing routes but also the niche
              players
              for clearing PSP payments. The niche players are often the ones who are willing to on-board
              PSPs
            </li>
            <li>BFI also produces a comprehensive company profile that takes 6-8 weeks to complete and
              covers
              all
              aspects an account opening bank will look at from a KYC and commercial perspective. This
              allows
              the
              bank to get the full picture of a new PSP application on day one of an application but also
              serves
              as an ongoing communication and reporting tool.
            </li>

          </ul>
        </div>
        <div class="for-non-banks-two-wrap">
          <p>Has your correspondent bank given you notice or are you concerned that they will? Do you have
            more
            than
            one backup correspondent banking relationship to allow business continuity if the case comes
            through? Do
            you have a feeling about how long it would take you to find a new correspondent banking
            relationship?
            Give us a call or drop us a line. We’re happy to give you some insights.</p>
          <a href="#">Apply for a new clearing bank relationship here</a>
          <a id="triigerId" href="#">Contact us to discuss your situation</a>
        </div>
      </div>
    </div>
    <div class="for-non-banks-two-right">

      <div class="video-modal-window" data-toggle="modal" data-target="#introVideo">
        <div class="img-wrapper">
          <img src="<?= Assets\asset_path( 'images/thumbnail-v-1.jpg' ); ?>" alt="thumbnail-v-1">
          <i class="fa fa-play play-btn" aria-hidden="true"></i>
        </div>
        <div class="txt-wrapper">
          <p>Watch a video about the creation of the company profile</p>
        </div>
      </div>

    </div>
  </section>
  <section class="section panel green for-non-banks">
    <h1 class="block-title-global">Introduction to clearing non-banks</h1>
    <div class="for-non-banks-three-left">
    </div>
    <div class="for-non-banks-three-right">
      <div class="for-non-banks-three-content col-lg-8">
        <p>Not every PSP is ready or suitable for a direct banking relationship. To be ready for a bank we
          expect the PSP to have a compliance department of at least 3 people, a clear business model and an
          experienced team.<br><br>

          Also not every PSP is commercially attractive for a bank. Every PSP on-boarding process bears has a
          minimum KYC cost for the bank and often the transaction volumes will not earn the bank these costs
          back.<br><br>

          There are good non-bank clearing houses open for downstream clearing smaller PSPs. Their cost
          structures are more efficient and they often have a focus on clearing services without any
          interfering business areas. They are specialists in their field. If you have less than EUR 10m
          monthly transaction volume this can be an alternative to a direct banking relationship.<br><br>

          Non-bank clearing houses are specialists in their field, and therefore often have deeper knowledge
          about the industry critical due diligence areas, for example the compliance management, the general
          setup and the client structure of the PSP.<br><br>

          We therefore still create the same introduction pack as for a banking relationship.</p>
        <a href="#">Apply for a non-bank clearing relationship here</a>
        <a href="#">Contact us to discuss your situation</a>
      </div>
    </div>
  </section>
  <?php get_template_part( 'templates/components/stay-in-touch' ); ?>
</div>
<?php get_template_part( 'templates/components/scroll-down' ); ?>
<?php get_template_part( 'templates/components/social-icons-network' ); ?>

<!-- Modal -->
<div class="modal fade bs-example-modal-lg"
     id="introVideo"
     tabindex="-1"
     role="dialog"
     aria-labelledby="myModalLabel"
     aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

      </div>
      <div class="modal-body">
        <iframe id="videoIf"
                width="1000"
                height="600"
                src="https://www.youtube-nocookie.com/embed/fk4BbF7B29w?rel=0&enablejsapi=1"
                frameborder="0"
                allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
