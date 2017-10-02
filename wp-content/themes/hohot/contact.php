<?php /*Template Name: Contact */ ?>
<?php get_header();?>
<div class="polygon polygon-contact">
<h1 class="polygon-title">Get in touch with the Hohot team!</h1>
<a class="btn btn-white  btn-main" href="<?php echo get_page_link(2) ?>">LEARN MORE ABOUT THE CONSULTANTS</a>
</div>

<section class="info-section">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-3">
        <span class="icon-b icon-message-b"></span>
        <a href="mailto:info@hohot.fi">info@hohot.fi</a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3">
        <span class="icon-b icon-telephone-b"></span>
        <a href="tel:+358 44 036 0308">+358 44 036 0308</a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3">
        <span class="icon-b icon-world-b"></span>
        <a href="#">www.hohot.fi</p></a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3">
        <span class="icon-b icon-linkedin-b"></span>
        <a target="_blank" href="https://www.linkedin.com/company/3964580/">linkedin.com/company/hohot/</a>
      </div>
    </div>
    <hr>

  </div>
</section>
<section class="contact-section-form">
<h3 class="text-blue">Please feel free to leave us a message</h3>
<!--
<form  action="<?php the_permalink(); ?>" method="post">
  <input type="text" name="" value="<?php echo esc_attr($_POST['name']); ?>" placeholder="your name">
  <input type="email" name="" value="<?php echo esc_attr($_POST['email']); ?>" placeholder="your email">
  <input type="tel" name="" value="<?php echo esc_attr($_POST['tel']); ?>" placeholder="your phone number">
  <textarea name="message" rows="8" cols="80" value="<?php echo esc_attr($_POST['message']); ?>" placeholder="How can we help you?"></textarea>
  <input class="btn btn-transparent-blue" type="submit" name="" value="SEND">
</form>
-->
<?php echo do_shortcode( '[contact-form-7 id="5" title="contact us"]' ); ?>


</section>


<?php get_footer();?>
