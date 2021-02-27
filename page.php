<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
 <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>

<?php get_template_part('incluse/header'); ?>
  <?php if(have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
  <!-- Page Header -->
  <?php
     $img = get_eyecatch_with_default();
  ?>
  <header class="masthead" style="background-image: url('<?php echo $img[0]; ?>">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1><?php the_title()?></h1>
            <span class="subheading">This is what I can ado.</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php the_content(); ?>
      </div>
    </div>
  </div>

  <hr>

  <?php endwhile; ?>
  <?php endif; ?>

  <?php get_template_part('incluse/footer'); ?>
  <?php get_footer();?>

</body>

</html>
