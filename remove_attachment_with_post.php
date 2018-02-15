<?php

add_action( 'before_delete_post', 'remove_attachment_with_post', 10 );
function remove_attachment_with_post($post_id)
{
        if(has_post_thumbnail( $post_id ))
        {
          $attachment_id = get_post_thumbnail_id( $post_id );
          wp_delete_attachment($attachment_id, true);
        }
}
