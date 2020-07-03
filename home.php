<?php get_header(); ?>
<?php if(have_posts()) : ?>
<div class="row mt-4">
    <?php while(have_posts()) : the_post() ?>
    <div class="col-md-4 mb-4">
        <div class="card h-100 p-4">
            <?php the_post_thumbnail( 'full', ['class' => 'img-fluid'] ) ?>
            <a href="<?php the_permalink(); ?>">
                <h1 class="card-title"><?php the_title(); ?></h1>
            </a>
            <p><?php the_excerpt(); ?></p>
            <p class="text-right text-muted">Auteur <?php the_author(); ?></p>
        </div>
    </div>
    <?php endwhile ?>
</div>
<?php endif; ?>
<?php get_footer(); ?>