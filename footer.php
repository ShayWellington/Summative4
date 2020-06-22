<footer class="footer myTheme">

  <div class="row">

    <div class="col-xs-12 col-sm-12 col-12 col-lg-3">
      <p class="footer-text">Wellington HELP</p>
      <p class="footer-text"> Registered Charity: CC26255</p>
      <br>
      <a href="https://www.facebook.com/WellingtonHELP/" class="fab socialMediaLinks fa-facebook-square"></a>
      <a href="https://www.instagram.com/wgtnhelp/" class="fab socialMediaLinks fa-instagram"></a>
    </br>
    </br>
      <p class="footer-text"><?php echo get_theme_mod('footerMessage'); ?></p>
    </div>

    <div class="col-xs-12 col-sm-12 col-12 col-lg-6 footer-center">
      <p class="footer-text">24/7 Crisis Support Line</p>
      <p class="footer-text">04 801 6655 & push 0 at the menu</p>
    </div>

    <div class="col-xs-12 col-sm-12 col-12 col-lg-3">
      <?php
      wp_nav_menu(
        array(
        'theme_location' => 'footer-menu',
        'menu_class' => 'footer-bar'
        )
      );
      ?>
    </div>
  </div>

  <div class="footer-byline row">
    <a href="http://chikaylah.nz" class="col"> Developed by Chikaylah Wellington </a>
  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
