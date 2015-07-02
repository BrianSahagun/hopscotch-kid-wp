<?php
function hopscotch_article_content() {
    
    // Calls content.php
    get_template_part( 'content', get_post_format() );
    
    // Conditionals for custom content
    if ( is_page_template( 'hopscotch-test.php' ) ) :
        get_template_part( 'templates/template', 'test' );
    endif;
}