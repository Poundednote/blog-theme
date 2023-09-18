<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *

/*
 *
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="container mt-5">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            printf(
                _nx(
                    'One comment on "%2$s"',
                    '%1$s commments on "%2$s"',
                    get_comments_number(),
                    'comments title',
                    'blog-theme'
                ),
                number_format_i18n( get_comments_number() ),
                '<span>' . get_the_title() . '</span>'
            );
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 74,
            ) );
            ?>
        </ol><!-- .comment-list -->

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <nav class="navigation comment-navigation" role="navigation">

                <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
                <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
            </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>

        <?php if ( ! comments_open() && get_comments_number() ) : ?>
            <p class="no-comments"><?php _e( 'Comments are closed.', 'twentythirteen' ); ?></p>
        <?php endif; ?>

    <?php endif; // have_comments() ?>

    <?php
        $args = array(
            'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
            'fields' => apply_filters( 'comment_form_default_fields', array(

                'author' =>
                '<p class="comment-form-author">' .
                '<label for="author" class="form-label">' . __( 'Name', 'domainreference' ) . '</label> ' .
                ( $req ? '<span class="required">*</span>' : '' ) .
                '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                '" size="30"' . $aria_req . ' /></p>',

                'email' =>
                '<p class="comment-form-email"><label for="email" class="form-label">' . __( 'Email', 'domainreference' ) . '</label> ' .
                ( $req ? '<span class="required">*</span>' : '' ) .
                '<input id="email" class="form-control" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                '" size="30"' . $aria_req . ' /></p>',

                'url' =>
                '<p class="comment-form-url"><label for="url" class="form-label">' .
                __( 'Website', 'domainreference' ) . '</label>' .
                '<input id="url" class="form-control" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
                '" size="30" /></p>')
            )
            );
                    comment_form();
    ?>

</div><!-- #comments -->
