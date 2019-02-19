<?php /** Template Name: About */ ?>

<?php get_header(); ?>

<div class="row mt-5">
    <div class="col">

      <?php if (have_posts()): ?>

          <?php while (have_posts()): the_post(); ?>

              <h1><?php the_title(); ?></h1>

              <?php the_content(); ?>

          <?php endwhile; ?>

      <?php endif; ?>

        <?php $students = get_posts([
          'post_type' => 'student',
        ]);

//         $skills = get_taxonomy([
//           'post_type' => 'skill',
//         ]);
// die(var_dump($skills));
        ?>

          <ul>
          <?php foreach ($students as $student): ?>
            <li><?php echo $student->post_title ?></li>
          <?php endforeach; ?>
          </ul>
    </div><!-- /col -->
</div><!-- /row -->

<?php get_footer(); ?>
