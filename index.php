<?php
get_header();
if ( have_posts() ) {
    while ( have_posts() ) {
        the_title('<h2>', '</h2>');
        the_post();
        the_content();
    }
}


else {
    _e(' Sorry, no posts matched your criteria', 'textdomain');
}
get_footer();
?>
