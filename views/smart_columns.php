<?php 

$center = '';
if ( get_sub_field('center_content') ) :
    $center = "text-center";
endif; 

if ( have_rows('column') ) : ?>
     <section class="smartColumns <?php echo $center; ?>">
          <div class="container">
               <div class="row justify-content-center ">
                    <?php while( have_rows('column') ) : the_row(); ?>
                         <div class="col">
                              <?php if ( get_sub_field('image') ) :
                                   $image = get_sub_field('image');
                                   $size = "full"; // (thumbnail, medium, large, full or custom size)

						     echo wp_get_attachment_image( $image, $size, '', array('class' => 'img-fluid smartColImg') );


                              endif; ?>

                              <?php if ( get_sub_field('title') ) : ?>
                                   <h3>
                                        <?php the_sub_field('title'); ?>
                                   </h3>
                              <?php endif; ?>

                              <?php the_sub_field('text'); ?>

                              <?php
                                   $link = get_sub_field('cta');

                                   if( $link ):
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                        <a class="btn btn-smartCol" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                              <?php endif; ?>
                         </div>
                    <?php endwhile; ?>
               </div>
          </div>
     </section>
<?php endif; ?>