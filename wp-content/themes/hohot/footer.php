
<footer>
  <div class="container">
    <div class="col-xs-12 col-sm-6 col-md-6">
      <div class="contact-form">
        <p>Contact us</p>
        <form class="" action="index.html" method="post">
          <input type="text" name="" value="" placeholder="your name">
          <input type="email" name="" value="" placeholder="your email">
          <input type="tel" name="" value="" placeholder="your phone number">
          <textarea name="message" rows="8" cols="45" placeholder="How can we help you?"></textarea>
          <input class="btn" type="submit" name="" value="SEND">
        </form>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
      <div class="contact-info">
        <span class="hohot-logo-text"></span>
        <p>Hohot® Consulting Oy</p>
        <p>Coporate ID: FI28069923</p>
        <div class="container contact-icons">
          <div class="row">
            <div class="col-md-3">
              <span class="icon icon-message"></span>
              <a href="mailto:info@hohot.fi">info@hohot.fi</a>
            </div>
            <div class="col-md-3">
              <span class="icon icon-world"></span>
              <a href="#">www.hohot.fi</a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <span class="icon icon-telephone"></span>
              <a href="tel:+358 44 036 0308">+358 44 036 0308</a>
            </div>
            <div class="col-md-3">
              <span class="icon icon-linkedin"></span>
              <a target="_blank"  href="https://www.linkedin.com/company/3964580/">linkedin.com/company/hohot/</a>
            </div>
          </div>
          <hr>
          <div class="footer-links">
            <ul>
              <li><a href="index.php">HOME</a></li>
              <li><a href="<?php echo get_page_link(5) ?>">ABOUT US</a></li>
              <li><a href="<?php echo get_page_link(7) ?>">SERVICES</a></li>
              <li><a href="<?php echo get_page_link(11) ?>">REFERENCE</a></li>
              <li><a href="<?php echo get_page_link(9) ?>">CONTACT US</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>
