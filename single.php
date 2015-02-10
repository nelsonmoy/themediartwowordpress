<?php get_header(); ?>
	<header>
		<hgroup>
			<h1><a href="<?php echo get_option('home'); ?>">DIAR</a></h1>
			<h2>Renta y venta de inmuebles</h2>
		</hgroup>
		<nav>
			<?php 
			wp_nav_menu(
				array(
					'container' => false,
					'items_wrap' => '<ul id="menu-top">%3$s</ul>',
					'theme_location' => 'menu'
				)
			);
			?>
		</nav>
	</header>
	<section id="single" class="centrar-elemento">
		<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article>
			<figure>
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail ( 'list_articles_thumbs' ); } ?>
			</figure>
			<h3><?php the_title(); ?></h3>
			<p><span class="fecha"><?php the_date(); ?> esta <?php the_category( ' ' );?> </span></p>
			<div class="post">
				<?php the_content(); ?>
			</div>
		</article>
		<?php endwhile; else: ?>
			<p>No se han encontrado articulos</p>
		<?php endif;?>
	</section>

<?php get_footer(); ?>