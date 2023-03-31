<?php 
    if(have_posts()):
        while (have_posts()) : the_post();?>

        <div>
            <?php the_title('<h4>','</h4>');?>
        </div>
        
        <?= wp_trim_words(get_the_excerpt(), 20, "[...]");?>
        <hr>
<?php    
        endwhile;
    endif;
?>