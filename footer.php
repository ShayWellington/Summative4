<footer class="footer myTheme">

  <div class="row">

    <div class="col-3">
      <p>Wellington HELP</p>
      <p> Registered Charity: CC26255</p>
      <br>
      <a href="https://www.facebook.com/WellingtonHELP/" class="fab socialMediaLinks fa-facebook-square"></a>
      <a href="https://www.instagram.com/wgtnhelp/" class="fab socialMediaLinks fa-instagram"></a>
      <br>
    </div>

    <div class="col-6 footer-center">
      <p>24/7 Crisis Support Line</p>
      <p>04 801 6655 & push 0 at the menu</p>
    </div>

    <div class="col-3">
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
    <p class="col"> Copyright 2020 &#169; Developed by Chikaylah Wellington </p>
  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
