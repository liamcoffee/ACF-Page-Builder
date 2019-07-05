<?php if ( get_sub_field('quote') ) : ?>
     <section class="quoteHold">
          <div class="container">
               <div class="row justify-content-center">
                    <div class="col-10">
                         <blockquote>
                              <?php echo get_sub_field('quote'); ?>
                              <?php if ( get_sub_field('quotee') ) : ?>
                                   <cite>  
                                        - <?php echo get_sub_field('quotee'); ?>
                                   </cite>
                              <?php endif; ?>
                         </blockquote>
                        
                    </div>
               </div>
          </div>
     </section>
<?php endif; ?>
