<?php get_header(); ?>

<main>
    <?php while(have_posts()) : the_post(); ?>
    <div class="header container-fluid py-5 bg-light" >
        <div class="row py-5 justify-content-center align-items-center">
            <div class="text-center hero-content col-5 lc-block">
                <div editable="rich">
                    <h1 class="text-primary display-1"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5 ">
    <div class="row justify-content-center">
        <div class="col">
            <?php the_content(); ?>
        </div>
    </div>
    </div>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
