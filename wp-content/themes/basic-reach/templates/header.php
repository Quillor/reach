<header class="banner">
  <div class="container">
	<div class="row">
		<div class="col-md-4">
			<a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
		</div>
		<div class="col-md-8">
			<nav class="nav-primary text-right">
			  <?php
			  if (has_nav_menu('primary_navigation')) :
				wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav text-right']);
			  endif;
			  ?>
			</nav>
		</div>
	</div>
  </div>
</header>
