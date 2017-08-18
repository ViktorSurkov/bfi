<!doctype html>
<html <?php (language_attributes()); ?>>
  <?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <body <?php (body_class()); ?>>

    
    

    
      
        
          
        
        
          
            
          
        
      
    
    <ul id="menu"></ul>
    <div id="content-wrapper">
      <div id="example-wrapper">
        <div class="scrollContent">
          <section id="titlechart">
            <div id="description">
              <h1 class="badge gsap">Section Wipes (manual)</h1>
              <h2>Wiping in content using custom movement</h2>
              <p>To achieve this effect, simply create a full page container, that is pinned using the <code>setPin</code> method. Then create your panels inside of it and position them absolutely.</p>
              <p>Now move in the panels using javascript and bind the movement to the scene progress.</p>
              <p>The most convenient way to implement this is using GSAP and ScrollMagic's <code>setTween</code> method, as used in this example.</p>
              <a href="#" class="viewsource">view source</a>
            </div>
          </section>
          <section class="demo" id="section-wipes">
            <div id="pinContainer">
              <section class="panel blue">
                <b>ONE</b>
              </section>
              <section class="panel turqoise">
                <b>TWO</b>
              </section>
              <section class="panel green">
                <b>THREE</b>
              </section>
              <section class="panel bordeaux">
                <b>FOUR</b>
              </section>
            </div>

          </section>
        </div>
      </div>
    </div>
    <?php (do_action('get_footer')); ?>

    

    <?php (wp_footer()); ?>
  </body>
</html>
