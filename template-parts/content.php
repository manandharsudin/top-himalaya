<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Top_Himalaya
 */

?>

<a href="<?php the_permalink(); ?>" class="bloglist block relative">
    <?php the_post_thumbnail( 'full', array( 'class' => 'grayscale w-full h-80 object-cover' ) ); ?>
    <div class="p-6 absolute left-0 right-0 bottom-0">
        <?php the_title( '<h2 class="text-2xl font-semibold leading[120%] text-white">', '</h2>' ); ?>
    </div>
</a>