<?php 
    if(have_posts()):
        while (have_posts()) : the_post();
        the_title('<h4>','</h4>');?>
        
        <?= wp_trim_words(get_the_excerpt(), 50, "[...]");?>
        <hr>
<?php    
        endwhile;
    endif;
?>