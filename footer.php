<?php
?>

<div class="footer py-5 container-fluid">
  <footer class="container">
    <div class="row justify-content-between">
      <div class="col-6 col-md-2">
        <h5>Places</h5>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'blog-theme-menu',
                'menu_id'        => 'primary-menu',
                'menu_class'        => 'nav flex-column',
                'container' => null,
            )
        );
        ?>
      </div>

      <div class="col-md-5 offset-md-1">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-secondary" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between pt-4 border-top">
      <p>&copy; 2023 blog.rayyannaz.com, All rights reserved.</p>
      <ul class="d-flex">
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
      </ul>
    </div>
  </footer>
</div>

    </body>
</html>
