<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
get_header();
?>
<div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

            <header class="page-header">
                <h1 class="page-title"><?php _e( '404 Not found', 'twentythirteen' ); ?></h1>
                <img src="https://media.giphy.com/media/hEc4k5pN17GZq/giphy.gif" alt="not found">
            </header>

            <div class="page-wrapper">
                <div class="page-content">
                    <?php get_search_form(); ?>
                </div><!-- .page-content -->
            </div><!-- .page-wrapper -->

        </div><!-- #content -->
    </div><!-- #primary -->

<?php
get_footer();
 ?>
