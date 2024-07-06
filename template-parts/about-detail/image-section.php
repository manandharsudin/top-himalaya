<?php 
/**
 * Image Only section
*/

$image = get_sub_field( 'image' );

if( $image ){ ?>
    <picture>
        <?php echo wp_get_attachment_image( $image['ID'], 'full', false, array( 'class' => 'w-full' ) ); ?>
    </picture>
    <?php
}