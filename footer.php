<!-- <footer class="footer text-center py-2 theme-bg-dark"> -->
  
  <!-- <?php dynamic_sidebar('footer-1'); ?> -->

  <!-- <p class="copyright"><a href="https://github.com/XhuljanoKocia">Design By Xhuljano Koçia - All Rights Reserved</a></p>

</footer> -->

<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Logo</h5>
        <?php
          if(function_exists('the_custom_logo')){
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);
          }
        ?>
				<img class="mb-3 mx-auto logo" src="<?php echo $logo[0]; ?>" alt="logo" >

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="http://localhost/wordpress/">Home</a>
          </li>
          <li>
            <a href="http://localhost/wordpress/about-us/">About</a>
          </li>
          <li>
            <a href="http://localhost/wordpress/blog/">Blog</a>
          </li>
          <li>
            <a href="http://localhost/wordpress/contact-us/">Contact</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact</h5>

        <ul class="list-unstyled">
          <li>
            <a href="tel:+355695555555">Phone: 069 555-5555</a>
          </li>
          <li>
            <a href="tel:+3554444444">Fax: 069 444-4444</a>
          </li>
          <li>
            <a href="https://g.page/3i-Solutions?share">Address: Street 1, Apartment 10</a>
          </li>
          <li>
            <a href="mailto:example@mail.com">E-Mail: example@mail.com</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <hr>

  <!-- Call to action -->
  <!-- <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1">Register for free</h5>
    </li>
    <li class="list-inline-item">
      <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
    </li>
  </ul> -->
  <!-- Call to action -->

  <!-- <hr> -->

  <!-- Social buttons -->
  <!-- <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <i class="fab fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fab fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fab fa-google-plus-g"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fab fa-linkedin-in"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-dribbble mx-1">
        <i class="fab fa-dribbble"> </i>
      </a>
    </li>
  </ul> -->
  <!-- Social buttons -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
  <a href="https://github.com/XhuljanoKocia">Design By Xhuljano Koçia - All Rights Reserved</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


</div>    

<?php wp_footer(); ?>

  </body>
</html>