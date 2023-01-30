</main>

<footer class="footer">
  <div class="footer_nav">

    <nav class="footer_nav_list">
      <?php wp_nav_menu ( array (
        'theme_location' => 'footer-menu',
        'container'      => false,
        'menu_class'     => 'footer_list',
        'depth'          => 1
        ) ); ?>
    </nav>
  </div>

</footer>


<?php wp_footer(); ?>
</body>
</html>