
  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col s6 copyright-area">
          <?php 
              $site_copyright = get_theme_mod( 'bondhon_copyright_text', '' );
              if ($site_copyright != '') :
                echo $site_copyright;
                else:?>

              copyright 2019 &copy; <a href="#home"  ><?php bloginfo('name'); ?></a>

              <?php endif; ?>
         
        </div>
        <div class="col s6 bottom-right-side" style="text-align: right;">
          Template Made by <a class="" href="#" >Anik Ghosh</a>
        </div>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="//code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>-->
  <script src="//kit.fontawesome.com/5fc47d9e2e.js" crossorigin="anonymous"></script>
  <?php wp_footer(); ?>
  </body>
</html>
