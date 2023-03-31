
<article class="article__search">
    <div class="information"><?php the_title('<h5>','</h5>');?></div>
    <div class="description"><?= wp_trim_words(get_the_excerpt(), 50, "[...]");?></div>
</article>
 <hr>