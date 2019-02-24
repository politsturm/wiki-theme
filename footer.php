<?php
	echo '</div>', // end of .container
    // FOOTER
         '<footer class="container-fluid">',
         '<div class="content clearfix">';
    // dynamic sidebar
    if ( is_active_sidebar( 'footer-left' ) ) :
        echo '<div class="col-md-4 dynamic-sidebar-footer-left">';
        dynamic_sidebar( 'footer-left' );
        echo '</div>';
    endif;

    if ( is_active_sidebar( 'footer-mid' ) ) :
        echo '<div class="col-md-4 dynamic-sidebar-footer-middle">';
        dynamic_sidebar( 'footer-mid' );
        echo '</div>';
    endif;

    if ( is_active_sidebar( 'footer-right' ) ) :
        echo '<div class="col-md-4 dynamic-sidebar-footer-right">';
        dynamic_sidebar( 'footer-right' );
        echo '</div>';
    endif;

    