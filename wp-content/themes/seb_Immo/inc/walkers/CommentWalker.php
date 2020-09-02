<?php


class Seb_ImmoCommentWalker extends \Walker_Comment
{
    /**
     * Copie de la fonction html5_comment() du Walker 'Walker_comment'
     * Affiche un commentaire au format HTML5.
     * Bien penser à vérifier que HTML5 est bien supporté dans 'inc/supports.php'
     * @since 3.6.0
     *
     * @see wp_list_comments()
     *
     * @param WP_Comment $comment Comment to display.
     * @param int        $depth   Depth of the current comment.
     * @param array      $args    An array of arguments.
     */
    protected function html5_comment( $comment, $depth, $args ) {
        //var_dump('Hello');
        $tag = ( 'div' === $args['style'] ) ? 'div' : 'li';

        $commenter          = wp_get_current_commenter();
        $show_pending_links = ! empty( $commenter['comment_author'] );

        if ( $commenter['comment_author_email'] ) {
            $moderation_note = __( 'Your comment is awaiting moderation.' );
        } else {
            $moderation_note = __( 'Your comment is awaiting moderation. This is a preview, your comment will be visible after it has been approved.' );
        }
        // inclusion du reste de la fonction dans un template
        $template = locate_template('template-parts/comment.php');
        include($template);
    }
}