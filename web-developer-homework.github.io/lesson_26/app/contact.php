<?php include('navbar.php') ?>
<!-- Contact us (block 2) -->
<div class="block-2-container section-container contact-container">
  <div class="container">
      <div class="row">
          <div class="col-sm-12 block-2 section-description wow fadeIn">
          	<h2>Contact us</h2>
          	<div class="divider-1 wow fadeInUp"><span></span></div>
              <p>
              	For every question, information or just to say "Hi", here is how you can get in touch with us. Send us an email or come visit us!
              </p>
          </div>
      </div>
      <div class="row">
      	<div class="col-sm-4 block-2-box block-2-left contact-form wow fadeInLeft">
      		<h3>Email us</h3>
              <form role="form" action="assets/contact.php" method="post">
              	<div class="form-group">
              		<label class="sr-only" for="contact-email">Email</label>
                  	<input type="text" name="email" placeholder="Email..." class="contact-email form-control" id="contact-email">
                  </div>
                  <div class="form-group">
                  	<label class="sr-only" for="contact-subject">Subject</label>
                  	<input type="text" name="subject" placeholder="Subject..." class="contact-subject form-control" id="contact-subject">
                  </div>
                  <div class="form-group">
                  	<label class="sr-only" for="contact-message">Message</label>
                  	<textarea name="message" placeholder="Message..." class="contact-message form-control" id="contact-message"></textarea>
                  </div>
                  <button type="submit" class="btn">Send it</button>
              </form>
      	</div>
      	<div class="col-sm-4 block-2-box block-2-right contact-address wow fadeInUp">
      		<h3>Visit us</h3>
              <p><span aria-hidden="true" class="icon_pin"></span>Via Principe Amedeo 9, Torino, Italy</p>
              <p><span aria-hidden="true" class="icon_phone"></span>Phone: 0039 333 12 68 347</p>
              <p><span aria-hidden="true" class="icon_mail"></span>Email: <a href="">hi@yourdomain.com</a></p>
      	</div>
      </div>
      <div class="contact-icon-container">
    		<span aria-hidden="true" class="icon_mail"></span>
    	</div>
  </div>
</div>

<!-- Footer -->
<footer>
  <div class="container">
  	<div class="row">
    	<div class="col-sm-12">
    		<div class="scroll-to-top">
    			<a href="#"><i class="fa fa-chevron-up"></i></a>
    		</div>
    	</div>
    </div>
      <div class="row">
            <div class="col-sm-7 footer-copyright">
            	&copy; Lancar Bootstrap Template by <a href="http://azmind.com">Azmind</a>.
            </div>
            <div class="col-sm-5 footer-social">
            	<a href="#"><i class="fa fa-facebook"></i></a>
          	<a href="#"><i class="fa fa-dribbble"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-google-plus"></i></a>
              <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>
      </div>
  </div>
</footer>