<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package futures
 */

get_header(); ?>

<div id="content">

<div class="container">
<div id="main">


  <div class="row">



<div class="col-md-12 box">

<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'partials/content', 'single' ); ?>

<?php endwhile; // end of the loop. ?>

</div>

</div></div>

</div><!-- /#content -->
</div>
<?php // get_sidebar(); ?>
<?php get_footer(); ?>
