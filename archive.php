<?php get_header(); ?>
    <div class="container my-5 ">
        <div class="row row-cols-3 justify-content-start align-items-center">
<?php
    if(have_posts()) :
        while(have_posts()) : the_post();
?>
                <div class="d-flex my-3 flex-column col">
                    <a class="post-card p-5 shadow my-auto" href=<?php the_permalink() ?>">
                        <h2 class="display-6"><?php the_title(); ?></h2>
                        <p<?php the_excerpt(); ?></p>
                    </a>
                </div>

<?php
    endwhile;
    endif;
?>
        </div>
    </div>

<?php get_footer(); ?>
