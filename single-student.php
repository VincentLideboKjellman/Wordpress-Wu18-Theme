<?php get_header(); ?>

<div class="row mt-5">
    <div class="col">

      <?php if (have_posts()): ?>

          <?php while (have_posts()): the_post(); ?>

              <span><?php the_date(); ?></span>
              <h1><?php the_title(); ?></h1>

              <?php if (get_field('email')): ?>
                <?php the_field('email') ?>
              <?php endif; ?><br>

              <?php if (get_field('github')): ?>
                <a href=<?php the_field('github')?>> <?php the_field('github')?> </a>
              <?php endif; ?>


              <?php the_content(); ?>

              <br><br>

               <div class="float-left">
               <?php previous_post_link(); ?>
             </div>

             <div class="float-right">
               <?php next_post_link(); ?>
             </div>

          <?php endwhile; ?>

      <?php endif; ?>


    </div><!-- /col -->
</div><!-- /row -->

<?php get_footer(); ?>
