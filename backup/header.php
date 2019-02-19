<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <?php wp_head(); ?>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

		<?php $args = [
			'sort_column' => 'menu_order',
			// 'numberposts' => 2,
			// 'order' => 'desc',
			] ?>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav mr-auto">
            <?php foreach (get_pages($args) as $page): ?>
                <li class="nav-item <?php if (is_page($page)) { echo 'active'; } ?>">
                    <a class="nav-link" href="<?php echo get_permalink($page); ?>">
                        <?php echo $page->post_title; ?>
                    </a><!-- /nav-link -->
                </li><!-- /nav-item -->
            <?php endforeach; ?>
        </ul><!-- /navbar -->
    </div><!-- /collapse -->
  </nav>

  <div class="container">
