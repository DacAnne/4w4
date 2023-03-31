
<article class="cours">
    <div class="information"><?php the_title('<h4>','</h4>');?></div>
    <div class="description"><?= wp_trim_words(get_the_excerpt(), 20, "[...]");?></div>
</article>
 <hr>