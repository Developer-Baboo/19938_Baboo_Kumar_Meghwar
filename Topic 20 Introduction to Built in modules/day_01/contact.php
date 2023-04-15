<?php include_once("include/header.php"); ?>
<div class="slider2">
  <div class="slice12">
    <h2>Contact Us </h2>
  </div>
</div>
<div class="clr"></div>
<div class="body">
  <div class="body_resize">
    <div class="News">
      <h2>Contact Info</h2>
      <p><strong>Customer Support</strong></p>
      <div class="bg"></div>
      <p>Lorem ipsum dolor sit amet, consectetuer <br />
        adipiscing elit. Sed ut felis orci, ac semper justo.</p>
      <p><strong>111-222-4444<br />
          support@example.com<br />
          Monday-Friday 8am-8pm</strong></p>
      <p>&nbsp;</p>
      <p><strong>Sales Enquiry</strong></p>
      <div class="bg"></div>
      <p>Lorem ipsum dolor sit amet, consectetuer <br />
        adipiscing elit.</p>

      <p><strong>111-222-3333<br />
          sales@example.com<br />
          Monday-Friday 8am-5pm</strong></p>
      <p>&nbsp;</p>
    </div>
    <div class="Welcome">
      <h2>Contact Form</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
      <div class="bg"></div>
      <form action="contact.php" method="post" id="contactform">
        <ol>
          <li>
            <label for="name">Your Name <span class="red">*</span></label>
            <input id="name" name="name" class="text" />
          </li>
          <li>
            <label for="email">Your Email <span class="red">*</span></label>
            <input id="email" name="email" class="text" />
          </li>
          <li>
            <label for="company">Company Name</label>
            <input id="company" name="company" class="text" />
          </li>
          <li>
            <label for="subject">Subject</label>
            <input id="subject" name="subject" class="text" />
          </li>
          <li>
            <label for="message">Message <span class="red">*</span></label>
            <textarea id="message" name="message" rows="6" cols="50"></textarea>
          </li>
          <li class="buttons">
            <input type="image" name="imageField" id="imageField" src="images/Send.gif" />
          </li>
        </ol>
      </form>
    </div>
    <div class="clr"></div>
  </div>
  <div class="clr"></div>
</div>
<?php include_once("include/footer.php"); ?>
</div>
<div align=center>This template downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div>
</body>

</html>