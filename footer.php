<footer class="site__footer">
    <section>
        <div class="sidebar"><?php dynamic_sidebar( 'footer_1' ); ?></div>
        <a href="#"><div class="sidebar"><?php dynamic_sidebar( 'footer_2' ); ?></div></a>
        <div class="sidebar"><?php dynamic_sidebar( 'footer_3' ); ?></div>
    </section>
    <section class="autres">
        <div class="sidebar"><?php dynamic_sidebar( 'travaux_ecole' ); ?></div>
        <div class="sidebar"><?php dynamic_sidebar( 'travaux_maison' ); ?></div>
    </section>
</footer>
<?php wp_footer();?>
</body>
</html>