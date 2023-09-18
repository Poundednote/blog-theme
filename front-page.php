<?php
get_header();
?>

<main>
    <div class="container-fluid bg-light" >
        <div class="row justify-content-center align-items-center" id="frontHero">
            <div class="text-center hero-content col-5 lc-block">
                <div editable="rich">
                    <h1 class="text-primary display-1"><?php bloginfo('name')?></h1>
                </div>
                <div editable="rich">
                    <p class="lead"><?php bloginfo('description') ?></p>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid bg-tertiary py-5">
        <div class="container">
        <div class="row text-center justify-content-between text-center align-items-start gap-5 p-5">
            <p class="display-4 mb-5">Topics</p>
            <?php
            foreach (array_slice(get_categories(), 0, 3) as $category) :
            ?>
            <div class="col my-2 mx-5">
                <div>
                    <h2 class="display-6 mb-3"><?php echo $category->name ?></h2>
                    <p><?php echo $category->description ?></p>
                </div>
                <div class="lc-block pt-4">
                    <a class="btn btn-primary" href="business.html" role="button">More</a>
                </div>
            </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
    </div>

    <?php
        query_posts( 'posts_per_page=1');
        while(have_posts()) : the_post();
    ?>
    <div class="container bg-light p-5">
        <div class="row justify-content-between gap-5 flex-column-reverse flex-lg-row">
            <div class="d-flex flex-column col-lg-6 p-5">
                <p class="display-3 mb-5">Latest Post</p>
                <div class="stack">
                    <div class="bg-primary underneath color-block">
                    </div>
                    <a id="latest-post" class="p-5 shadow my-auto" href=<?php the_permalink() ?>">
                        <h2 class="display-6"><?php the_title(); ?></h2>
                        <p<?php the_excerpt(); ?></p>
                    </a>
                </div>
            </div>
            <div class="mx-auto col-md-4 pt-5">
                <?php has_post_thumbnail() ? the_post_thumbnail(array(500, 500)) : default_thumbnail(500, 500) ?>
            </div>
        </div>
    </div>
    <?php endwhile; ?>

    <div class="container bg-light py-5">
        <p class="text-center display-3 mb-5">Whats Popular</p>
            <div class="posts-grid">
            <?php
                query_posts( 'order=ASC&orderby=comment_count&posts_per_page=5');
                if ( have_posts()) : while(have_posts()) : the_post();
            ?>
                <a class="post-card p-5 shadow my-auto" href=<?php the_permalink() ?>">
                    <h2 class="display-6"><?php the_title(); ?></h2>
                    <p<?php the_excerpt(); ?></p>
                </a>
        <?php
            endwhile;
            endif;
        ?>
        </div>
    </div>

    <div class="container-fluid cta bg-primary px-5">
        <div class="row flex-column text-center py-5 justify-content-between align-items-center mb-3">
            <h2 class="text display-3 mb-5">Dont Miss Out</h2>
            <div class="col-6">
                <p class="fw-bold">Sign Up here to our weekly newsletter to get a free item</p>
            </div>
            <div class="col col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <div class="d-flex justify-content-center align-items-center">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="john@doe.com">
                    <button type="submit" class="w-25 btn btn-secondary">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container bg-light px-5">
        <div class="row text-center py-5 justify-content-between align-items-center">
            <h2 class="text display-3 mb-5">About</h2>
        </div>
    </div>

</main>

<?php get_footer() ?>
