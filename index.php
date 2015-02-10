<?php get_header(); ?>
	<header>
		<hgroup>
			<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
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
	<div id="no-slide">
		<?php include (TEMPLATEPATH. '/slideshow.php'); ?>
	</div>
	<section id="lista-articulos" class="centrar-elemento">
		<?php wp_reset_query(); ?>
		<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article>
				<figure>
					<a href="<?php the_permalink();?>" target="_blank"><?php if ( has_post_thumbnail() ) { the_post_thumbnail ( 'list_articles_thumbs' ); } ?></a>
					
					<?php $category = get_the_category(); ?>
					<?php if ($category[0]->slug === 'en-renta'):?>
						<figcaption class="en-renta"><?php echo $category[0]->cat_name; ?></figcaption>
					<?php else: ?>
						<figcaption class="en-venta"><?php echo $category[0]->cat_name; ?></figcaption>
					<?php endif; ?>
				</figure>
				<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
				<p><?php the_excerpt(); ?></p>
			</article>
		<?php endwhile; else: ?>
			<p>No se han encontrado articulos</p>
		<?php endif;?>
	</section>
	<section id="paginacion">
		<div id="pag-siguiente"><?php next_posts_link(' '); ?>
		</div>
		<div id="pag-anterior"><?php previous_posts_link(' '); ?></div>
	</section>
<?php get_footer(); ?>