<?php get_header(); ?>

<main id="content" class="container">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 		<article>
            <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

            <p>Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?> - <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?></p>

            <p><?php the_content(); ?></p>
        </article>

        <div class="comments">
        	<?php comments_template(); ?>
        </div>

	<?php endwhile; else: ?>

	     <div>
		    <h2>Nada Encontrado</h2>
		    <p>Erro 404</p>
		    <p>Lamentamos mas não foram encontrados artigos.</p>
		</div>

	<?php endif; ?>

</main> <!-- content -->

<?php get_footer(); ?>