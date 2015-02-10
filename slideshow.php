	<section id="slideshow" class="centrar-elemento">
		<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="slides">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail ( 'slider_thumbs' ); } ?>
				<article>
					<a href="<?php the_permalink(); ?>">Ver más información</a>
				</article>
			</div>
		<?php endwhile; else: ?>
			<p>No se han encontrado articulos</p>
		<?php endif;?>
	</section>