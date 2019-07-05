<?php
if ( get_sub_field('full_image') ) {
     $attachment_id = get_sub_field('full_image');
     $size = "full"; // (thumbnail, medium, large, full )
     ?>
     <section class="fullImage">
          <div class="container">
               <div class="row">
                    <div class="col-12">
                    <?php  echo wp_get_attachment_image( $attachment_id, $size ); ?>
                    </div>
               </div>
          </div>
     </section>
<?php } ?>
