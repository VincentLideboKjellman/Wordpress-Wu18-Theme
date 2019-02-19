<?php get_header(); ?>

<div class="row">
    <div class="col">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()): the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <?php the_content(); ?>

            <?php endwhile; ?>

        <?php endif; ?>


        <?php
        $args = [
    			'numberposts' => 2,
    			'order' => 'desc',
        ];

        $latestPosts = get_posts($args);

        ?>

        <div class="row">
          <?php foreach ($latestPosts as $post): setup_postdata($post) ?>

          <div class="col-6">

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
            <?php the_post_thumbnail( 'medium' ); ?>
          </div>
          <?php endforeach; ?>

          <div class="row">
            <?php $blogPageUrl = get_permalink(get_option('page_for_posts')) ?>
            <a href="<?php echo $blogPageUrl ?>">View all posts</a>
          </div>


        </div>
    </div><!-- /col -->
</div><!-- /row -->

<?php get_footer(); ?>
