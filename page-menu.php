
<?php
/*
Template Name: メニューページ
*/
get_header();
?>

<main class="menu-area">
  <h2 class="section-title"><?php the_title(); ?></h2>

  <?php
  while ( have_posts() ) :
    the_post();
    the_content();
  endwhile;
  ?>
</main>

<?php get_template_part( 'access' ); ?>
<?php get_footer(); ?>


