<?php
get_header();
?>

<main>
    <div class="container bg-light" >
        <div class="row justify-content-center align-items-center" id="frontHero">
        <div class="text-center hero-content col-5 lc-block">
            <div class="lc-block">
            <div editable="rich">
                <h1 class="display-1"><?php bloginfo('name')?></h1>
            </div>
            </div>
            <div class="lc-block">
            <div editable="rich">
                <p class="lead"><?php bloginfo('description') ?></p>
            </div>
        </div>
        </div>
    </div>


    <div class="container bg-light mt-5">
        <div class="row text-center justify-content-center text-center align-items-start gap-5 p-5">
            <h2 class="display-4 mb-0">Topics</h2>
            <?php
            foreach (array_slice(get_categories(), 0, 3) as $category) :
            ?>
            <div class="col mx-5 col">
                <div>
                    <h2 class="mb-3"><?php echo $category->name ?></h2>
                    <p><?php echo $category->description ?></p>
                </div>
                <div class="lc-block pt-4">
                    <a class="btn btn-outline-primary" href="business.html" role="button">More</a>
                </div>
            </div>
            <?php
            endforeach;
            ?>

        </div>
    </div>

    <?php
        query_posts( 'posts_per_page=1');
        while(have_posts()) : the_post();
    ?>
    <div class="container bg-light p-5">
        <div class="container">
            <div class="row justify-content-between flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5">
                <p class="text-primary display-4">Latest Post</p>
                <h2 class="display-6"><?php the_title(); ?></h2>
                <p<?php the_excerpt(); ?></p>
            </div>
            <div class="col-md-4">
                <?php has_post_thumbnail() ? the_post_thumbnail(array(500, 500)) : default_thumbnail(500, 500) ?>
            </div>
        </div>
    </div>
    <?php endwhile; ?>

    <div class="container bg-light p-5">
        <div class="container">
            <div class="row gap-5 align-items-center justify-content-center flex-column-reverse flex-md-row align-items-center">
                <p class="text-primary display-4">Popular Posts</p>
                <?php
                    query_posts( 'order=ASC&orderby=comment_count');
                    while(have_posts()) : the_post();
                ?>
                <div class="col shadow">
                    <h2 class="text-center"><?php the_title(); ?></h2>
                    <?php has_post_thumbnail() ? the_post_thumbnail(array(200, 200)) : default_thumbnail(200, 200);?>
                </div>
                <?php endwhile; ?>
        </div>
    </div>
</main>
