<?php $__env->startSection('content'); ?>
    
        
            
        
        
            
        
        
            
        
        
            
        
    

    <ul id="menu"></ul>
    <div id="content-wrapper">
        <div id="example-wrapper">
            <div class="scrollContent">
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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>