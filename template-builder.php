<?php
     /* Template Name: Page Builder Template */

     get_header();

     if ( have_rows( 'content' ) )    {

          while ( have_rows( 'content' ) )
          {
               the_row();

               if ( get_row_layout() == 'smartcols' )
               {
                    // used include here to get var access
                    include(locate_template('views/smart_columns.php'));
               }
               elseif ( get_row_layout() == 'full_width_image')
               {
                    include(locate_template('views/full_image.php'));

               }
               elseif ( get_row_layout() == 'horizontalbreak')
               {
                    include(locate_template('views/horizontalbreak.php'));

               }
               elseif ( get_row_layout() == 'quote')
               {
                    include(locate_template('views/quote.php'));

               }

          }
     }
     get_footer();
?>